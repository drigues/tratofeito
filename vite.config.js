import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
      // Laravel 12 defaults to outDir "public/build"
      // keep defaults; the plugin will write manifest to public/build/.vite/manifest.json
    }),
  ],
  build: {
    manifest: true,     // ensures .vite/manifest.json is created
    outDir: 'public/build',
    assetsDir: '',      // optional: keeps assets flat under /build
  },
})
