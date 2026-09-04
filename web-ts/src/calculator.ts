export type CustomerType = "residential" | "commercial" | "industrial";

export interface SolarEstimateInput {
  monthlyBill: number;
  roofArea: number;
  customerType: CustomerType;
}

export interface SolarEstimate {
  recommendedKw: number;
  monthlyUnits: number;
  annualUnits: number;
  requiredArea: number;
  grossCost: number;
  subsidy: number;
  netCost: number;
  annualSavings: number;
  paybackYears: number;
  lifetimeSavings: number;
  co2Tons: number;
  treesPlanted: number;
}

const UNIT_RATE = 8.2;
const UNITS_PER_KW_MONTH = 120;
const UNITS_PER_KW_YEAR = 1420;
const COST_PER_KW = 52_000;
const AREA_PER_KW = 80;
const SAVINGS_RATE = 8.5;

export function residentialSubsidy(kw: number): number {
  if (kw >= 3) return 78_000;
  if (kw >= 2) return 60_000;
  return 30_000;
}

export function estimateSolar(input: SolarEstimateInput): SolarEstimate {
  const bill = Math.max(0, input.monthlyBill);
  const area = Math.max(0, input.roofArea);
  const isResidential = input.customerType === "residential";

  let kw = 3;
  if (bill > 0 && area > 0) {
    kw = Math.max(bill / UNIT_RATE / UNITS_PER_KW_MONTH, area / AREA_PER_KW);
  } else if (bill > 0) {
    kw = bill / UNIT_RATE / UNITS_PER_KW_MONTH;
  } else if (area > 0) {
    kw = area / AREA_PER_KW;
  }
  kw = Math.max(1, Math.round(kw * 10) / 10);

  const monthlyUnits = Math.round(kw * UNITS_PER_KW_MONTH);
  const annualUnits = Math.round(kw * UNITS_PER_KW_YEAR);
  const requiredArea = Math.round(kw * AREA_PER_KW);
  const grossCost = Math.round(kw * COST_PER_KW);
  const subsidy = isResidential ? residentialSubsidy(kw) : 0;
  const netCost = Math.max(0, grossCost - subsidy);
  const annualSavings = Math.round(monthlyUnits * 12 * SAVINGS_RATE);
  const paybackYears = annualSavings > 0 ? Number((netCost / annualSavings).toFixed(1)) : 0;
  const lifetimeSavings = Math.round(annualSavings * 25 - netCost);

  return {
    recommendedKw: kw,
    monthlyUnits,
    annualUnits,
    requiredArea,
    grossCost,
    subsidy,
    netCost,
    annualSavings,
    paybackYears,
    lifetimeSavings,
    co2Tons: Number((kw * 1.25).toFixed(1)),
    treesPlanted: Math.round(kw * 32),
  };
}

export function getStateFromPincode(pincode: string): string | null {
  if (!pincode || pincode.length < 2) return null;
  const prefix = Number.parseInt(pincode.slice(0, 2), 10);
  if (Number.isNaN(prefix)) return null;
  if (prefix === 11) return "DELHI";
  if (prefix >= 12 && prefix <= 13) return "HARYANA";
  if (prefix >= 14 && prefix <= 16) return "PUNJAB";
  if (prefix === 17) return "HIMACHAL PRADESH";
  if (prefix >= 18 && prefix <= 19) return "JAMMU & KASHMIR";
  if (prefix >= 20 && prefix <= 28) return "UTTAR PRADESH";
  if (prefix >= 30 && prefix <= 34) return "RAJASTHAN";
  if (prefix >= 36 && prefix <= 39) return "GUJARAT";
  if (prefix >= 40 && prefix <= 44) return "MAHARASHTRA";
  if (prefix >= 45 && prefix <= 48) return "MADHYA PRADESH";
  if (prefix >= 50 && prefix <= 53) return "TELANGANA / ANDHRA PRADESH";
  if (prefix >= 56 && prefix <= 59) return "KARNATAKA";
  if (prefix >= 60 && prefix <= 64) return "TAMIL NADU";
  if (prefix >= 67 && prefix <= 69) return "KERALA";
  if (prefix >= 70 && prefix <= 74) return "WEST BENGAL";
  if (prefix >= 75 && prefix <= 77) return "ODISHA";
  if (prefix === 78) return "ASSAM";
  if (prefix >= 80 && prefix <= 85) return "BIHAR";
  return null;
}

function inr(n: number): string {
  return n.toLocaleString("en-IN");
}

export function bindZunCalculator(): void {
  const form = document.getElementById("zunSolarForm");
  if (!form) return;

  const bill = document.getElementById("zunBill") as HTMLInputElement | null;
  const area = document.getElementById("zunArea") as HTMLInputElement | null;
  const pincode = document.getElementById("zunPincode") as HTMLInputElement | null;
  const state = document.getElementById("zunState") as HTMLSelectElement | null;
  const mobile = document.getElementById("zunMobile") as HTMLInputElement | null;

  const render = (): SolarEstimate => {
    const category =
      (document.querySelector('input[name="zunCategory"]:checked') as HTMLInputElement | null)
        ?.value ?? "residential";
    const estimate = estimateSolar({
      monthlyBill: Number.parseFloat(bill?.value ?? "") || 0,
      roofArea: Number.parseFloat(area?.value ?? "") || 0,
      customerType: category === "commercial" ? "commercial" : "residential",
    });
    const kw = document.getElementById("zunResKw");
    const units = document.getElementById("zunResUnits");
    const savings = document.getElementById("zunResSavings");
    const subsidy = document.getElementById("zunResSubsidy");
    const net = document.getElementById("zunResNetCost");
    if (kw) kw.textContent = `${estimate.recommendedKw.toFixed(1)} kW`;
    if (units) units.textContent = `${inr(estimate.monthlyUnits)} kWh`;
    if (savings) savings.textContent = `₹ ${inr(estimate.annualSavings)}`;
    if (subsidy) {
      subsidy.textContent = estimate.subsidy > 0 ? `₹ ${inr(estimate.subsidy)}` : "₹ 0";
    }
    if (net) net.textContent = `₹ ${inr(estimate.netCost)}`;
    return estimate;
  };

  pincode?.addEventListener("input", () => {
    const match = getStateFromPincode(pincode.value.trim());
    if (match && state) {
      const option = Array.from(state.options).find((o) => o.value === match);
      if (option) state.value = match;
    }
  });

  bill?.addEventListener("input", render);
  area?.addEventListener("input", render);
  document.querySelectorAll('input[name="zunCategory"]').forEach((el) => {
    el.addEventListener("change", render);
  });
  document.getElementById("btnZunCalculate")?.addEventListener("click", render);
  document.getElementById("btnBookAssessment")?.addEventListener("click", () => {
    const phone = mobile?.value.trim() ?? "";
    if (phone.length < 10) {
      alert("Please enter a valid 10-digit Mobile Number to book a site assessment.");
      mobile?.focus();
      return;
    }
    render();
    const st = state?.value ?? "your";
    alert(`Site Assessment Booked!\n\nOur solar engineer will contact you at ${phone} for your ${st} property.`);
  });

  render();
}

export function bindWizardCalculator(): void {
  const wizard = document.getElementById("calculatorWizard");
  if (!wizard) return;

  const billRange = document.getElementById("billRange") as HTMLInputElement | null;
  const billInput = document.getElementById("billInput") as HTMLInputElement | null;
  let customerType: CustomerType = "residential";
  let monthlyBill = Number.parseInt(billInput?.value || billRange?.value || "3500", 10);

  const render = (): void => {
    const estimate = estimateSolar({
      monthlyBill,
      roofArea: 0,
      customerType,
    });
    const set = (id: string, value: string) => {
      const el = document.getElementById(id);
      if (el) el.textContent = value;
    };
    set("resCapacity", `${estimate.recommendedKw} kW`);
    set("resArea", `${estimate.requiredArea} sq ft`);
    set("resAnnualUnits", `${inr(estimate.annualUnits)} kWh`);
    set("resGrossCost", `₹${inr(estimate.grossCost)}`);
    set(
      "resSubsidy",
      estimate.subsidy > 0 ? `-₹${inr(estimate.subsidy)}` : "₹0 (Depreciation Benefit)",
    );
    set("resNetCost", `₹${inr(estimate.netCost)}`);
    set("resAnnualSavings", `₹${inr(estimate.annualSavings)}`);
    set("resPayback", `${estimate.paybackYears} Years`);
    set("res25YearSavings", `₹${inr(estimate.lifetimeSavings)}`);
    set("resCO2", `${estimate.co2Tons} Tons/Yr`);
    set("resTrees", `${estimate.treesPlanted} Trees`);
  };

  billRange?.addEventListener("input", () => {
    monthlyBill = Number.parseInt(billRange.value, 10);
    if (billInput) billInput.value = String(monthlyBill);
    render();
  });
  billInput?.addEventListener("input", () => {
    monthlyBill = Math.min(100000, Math.max(500, Number.parseInt(billInput.value, 10) || 1000));
    if (billRange) billRange.value = String(monthlyBill);
    render();
  });

  document.querySelectorAll<HTMLElement>(".selector-card-group .selector-card").forEach((card) => {
    card.addEventListener("click", () => {
      card.parentElement?.querySelectorAll(".selector-card").forEach((c) => c.classList.remove("selected"));
      card.classList.add("selected");
      const group = card.dataset.group;
      const value = card.dataset.value;
      if (group === "customer" && (value === "residential" || value === "commercial" || value === "industrial")) {
        customerType = value;
      }
      render();
    });
  });

  let step = 1;
  const goToStep = (next: number) => {
    step = next;
    document.querySelectorAll(".calc-wizard-step").forEach((el) => el.classList.add("d-none"));
    document.getElementById(`calcWizardStep${step}`)?.classList.remove("d-none");
    document.querySelectorAll(".calc-step-item").forEach((el) => el.classList.remove("active", "completed"));
    for (let i = 1; i <= 4; i += 1) {
      const nav = document.getElementById(`stepNav${i}`);
      if (!nav) continue;
      if (i < step) nav.classList.add("completed");
      if (i === step) nav.classList.add("active");
    }
    const bar = document.getElementById("stepProgressBar") as HTMLElement | null;
    if (bar) bar.style.width = `${((step - 1) / 3) * 80 + 10}%`;
    if (step >= 3) render();
  };

  document.getElementById("btnNextStep1")?.addEventListener("click", () => goToStep(2));
  document.getElementById("btnNextStep2")?.addEventListener("click", () => goToStep(3));
  document.getElementById("btnNextStep3")?.addEventListener("click", () => goToStep(4));
  document.getElementById("btnPrevStep2")?.addEventListener("click", () => goToStep(1));
  document.getElementById("btnPrevStep3")?.addEventListener("click", () => goToStep(2));
  document.getElementById("btnPrevStep4")?.addEventListener("click", () => goToStep(3));

  document.getElementById("calcLeadForm")?.addEventListener("submit", (event) => {
    event.preventDefault();
    const name = (document.getElementById("leadName") as HTMLInputElement | null)?.value.trim() ?? "";
    const phone = (document.getElementById("leadPhone") as HTMLInputElement | null)?.value.trim() ?? "";
    if (!name || phone.length < 10) {
      alert("Please enter a valid Name and 10-digit Phone Number.");
      return;
    }
    const form = document.getElementById("calcLeadForm");
    if (!form) return;
    const ref = Math.floor(100000 + Math.random() * 900000);
    form.innerHTML = `<div class="text-center py-4">
      <h4 class="text-dark fw-bold mb-2">Solar Proposal Request Submitted!</h4>
      <p class="text-muted mb-3">Thank you, <strong>${name}</strong>. Our consultant will contact you at <strong>${phone}</strong>.</p>
      <div class="p-3 bg-soft-amber rounded-3 d-inline-block text-dark fw-semibold">Reference ID: SN-${ref}</div>
    </div>`;
  });

  if (document.getElementById("resCapacity")) render();
}
