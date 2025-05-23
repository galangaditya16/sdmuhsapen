import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            publicDirectory: 'public',
        }),
    ],
    build: {
        outDir: 'public/build',
        assetsDir: 'assets',
        rollupOptions: {
            output: {
                manualChunks: undefined,
            },
        },
    },
    server: {
        watch: {
            usePolling: true,
        },
        base: process.env.APP_ENV === 'production'
        ? '/sdmuhsapen/' // Prefix base URL di production
        : '/',          // Di local tetap root
    },
});
