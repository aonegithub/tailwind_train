import defaultTheme from "tailwindcss/defaultTheme";
import cssnanoPlugin from "cssnano";

/** @type {import('tailwindcss').Config} */
export default {
    mode: "jit",
    darkMode: "false",
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            spacing: {
                "main-span": "72px",
            },
            colors: {
                card: "#1e1e26",
                dark: "#14151a",
            },
            // fontFamily: {
            //     sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            // },
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        require("tailwind-scrollbar"),
        require("tailwindcss"),
        require("autoprefixer"),
        require("cssnano")({
            preset: "default",
        }),
    ],
};
