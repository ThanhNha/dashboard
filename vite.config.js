import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // init code
                'resources/assets/sass/app.scss',
                'resources/assets/css/app.css',
                'resources/assets/js/app.js',
                //Auth login
                'resources/assets/css/auth/login.css',
                'resources/assets/js/auth/login.js',

                //Test page
                'resources/assets/js/test/script.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});
