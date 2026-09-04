import { defineConfig } from "vite";
import { resolve } from "node:path";
import { readdirSync } from "node:fs";
import { fileURLToPath } from "node:url";

const root = fileURLToPath(new URL(".", import.meta.url));

const htmlInputs = Object.fromEntries(
  readdirSync(root)
    .filter((name) => name.endsWith(".html"))
    .map((name) => [name.replace(/\.html$/, ""), resolve(root, name)]),
);

export default defineConfig({
  base: process.env.VITE_BASE ?? "./",
  build: {
    rollupOptions: {
      input: htmlInputs,
    },
  },
});
