import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/reset.css",
                "resources/css/header/header-style.css",
                "resources/css/footer/footer-style.css",
                "resources/css/layout/layout-style.css",
                "resources/css/utils/utils-style.css",
                "resources/css/pages/home/home-style.css",
                "resources/css/layout/auth/auth-style.css",
                "resources/js/app.js",
            ],
            refresh: true,
        }),
    ],
});
