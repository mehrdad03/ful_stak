import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'public_html/backend/js/jquery.min.js',
                'public_html/frontend/js/bootstrap.min.js',
                'public_html/frontend/js/main.js',
                'public_html/frontend/js/swiper-bundle.min.js',
                'public_html/backend/js/sweetalert2@11.js',

            ],
            refresh: true,
        }),
    ],
    build: {
        build: {
            outDir: 'public_html/build', // تغییر مسیر خروجی
            minify: 'esbuild', // یا 'terser' برای مینیفای کردن با Terser
        },
    },
});
