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
        manifest: true,
        outDir: 'public/build',
        assetsDir: 'assets',
        rollupOptions: {
            output: {
                manualChunks: undefined,
            },
        },
    },
});
