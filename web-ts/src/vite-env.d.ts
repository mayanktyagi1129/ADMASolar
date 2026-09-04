/// <reference types="vite/client" />

interface BootstrapCollapse {
  show(): void;
  hide(): void;
}

interface BootstrapCarousel {
  next(): void;
  prev(): void;
}

interface Window {
  bootstrap?: {
    Collapse: {
      new (el: Element, opts?: { toggle?: boolean }): BootstrapCollapse;
    };
    Carousel: {
      getOrCreateInstance(el: Element): BootstrapCarousel;
    };
  };
}

declare const L: {
  map(id: string, opts: Record<string, unknown>): LeafletMap;
  tileLayer(url: string, opts: Record<string, unknown>): { addTo(map: LeafletMap): void };
  layerGroup(): LeafletLayerGroup;
  marker(latlng: [number, number], opts: Record<string, unknown>): LeafletMarker;
  divIcon(opts: Record<string, unknown>): unknown;
};

interface LeafletMap {
  flyTo(center: [number, number], zoom: number, opts: Record<string, unknown>): void;
}

interface LeafletLayerGroup {
  addTo(map: LeafletMap): LeafletLayerGroup;
  clearLayers(): void;
  addLayer(layer: LeafletMarker): void;
}

interface LeafletMarker {
  bindPopup(html: string): void;
  openPopup(): void;
}
