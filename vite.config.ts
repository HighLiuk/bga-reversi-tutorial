import { defineConfig } from "vite";
import vue from "@vitejs/plugin-vue";

export default defineConfig({
  build: {
    emptyOutDir: false,
    outDir: "server",
    rollupOptions: {
      input: "/client/main.ts",
      output: {
        assetFileNames: ({ name }) => {
          if (/\.css$/.test(name)) {
            return "highliukreversitutorial.css";
          }

          return "[name].[ext]";
        },
        entryFileNames: "modules/[name].js",
      },
    },
  },
  plugins: [vue()],
  publicDir: "client/public",
});
