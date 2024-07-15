import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/chart.js",
                "resources/js/dropdown_pl.js",
                "resources/js/dropdown_apt.js",
                "resources/js/add_patient_banner.js",
            ],
            refresh: true,
        }),
    ],
});
