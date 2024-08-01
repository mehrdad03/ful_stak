import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/css/app.css',
            ],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public_html/build',
        minify: 'esbuild',
        rollupOptions: {
            output: {
                entryFileNames: 'app.js',
                assetFileNames: '[name][extname]', // یا می‌توانید این را تغییر دهید به 'assets/[name][extname]'
            },
        },
    },
});
