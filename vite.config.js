import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
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
    // NOTE: Hot Realod Config for Docker / For Testing only | The access Vite on my local pc can access using this
    server: {
        host: '0.0.0.0',
        port: 5173,
        hmr: {
          host: 'rapidv', // 👈 Host machine IP/domain
          protocol: 'ws',
          port: 5173
        }
    },
});
