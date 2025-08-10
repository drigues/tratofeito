import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/scss/app.scss', 'resources/js/app.js'],
      refresh: true,
    }),
  ],
  css: {
    devSourcemap: true,         // nice in dev
  },
  build: {
    sourcemap: false,           // cleaner in prod
    manifest: true,
    outDir: 'public/build',
    assetsDir: 'assets',
  },
})
