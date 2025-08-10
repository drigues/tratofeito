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
    devSourcemap: true,         
  },
  build: {
    sourcemap: false,           
    manifest: true,
    outDir: 'public/build',
    assetsDir: 'assets',
  },
})
