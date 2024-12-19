import defaultTheme from 'tailwindcss/defaultTheme';
import cssnanoPlugin from "cssnano";

/** @type {import('tailwindcss').Config} */
export default {
    mode:'jit',
    darkMode:'class',
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
