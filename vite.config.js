import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'; // Import the 'path' module

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        outDir: path.resolve(__dirname, 'frontend'), // Output to a directory outside "public"
        emptyOutDir: true, // Clean the directory before building
        rollupOptions: {
            input: {
                app: 'resources/js/app.js',
                style: 'resources/css/app.css',
            },
        },
    },
});
