import defaultTheme from 'tailwindcss/defaultTheme';
import cssnanoPlugin from "cssnano";

/** @type {import('tailwindcss').Config} */
export default {
    mode:'jit',
    darkMode:'false',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors:{
                'primary': '#4f3cc9',
                'primary-dark': '#4232aa',
                'secondary': '#ffffff',
                'fb-bg': '#18191a',
                'fb-header': '#242526',
                'fb-input': '#3a3b3c',
                'fb-popover': '#3e4042',
                'fb-active': '#323436',
                'fb-card': '#242526',
                'fb': '#2e89ff',
            },
            // fontFamily: {
            //     sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            // },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('tailwindcss'),
        require('autoprefixer'),
        require('cssnano')({
            preset:'default',
        }),
    ],
};
