import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import { fileURLToPath, URL } from 'node:url'
import { viteStaticCopy } from 'vite-plugin-static-copy'

export default defineConfig({
  plugins: [
    vue(),
    viteStaticCopy({
      targets: [
        {
          src: 'src/assets/**/*', // Указываем все файлы внутри assets
          dest: 'assets' // Указываем, чтобы копировалось в dist/assets
        },
        { src: '_redirects', dest: '.' } // Для файла _redirects
      ]
    })
  ],
  resolve: {
    alias: {
      '@': fileURLToPath(new URL('./src', import.meta.url)),
    },
  },
  base: './', // Используем относительную базу
})
