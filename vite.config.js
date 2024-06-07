import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
const path = require("path");
//mi sono fermata qui

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/scss/app.scss", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "~resources": "/resources/",
        },
    },
});
