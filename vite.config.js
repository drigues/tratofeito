import {defineConfig} from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
  build: {
    outDir: 'public/build',
    manifest: true,        // keep default manifest.json
    emptyOutDir: true,
  },
  plugins: [
    laravel({
      input: ['resources/js/app.js', 'resources/scss/app.scss'],
      refresh: true,
    }),
  ],
})
