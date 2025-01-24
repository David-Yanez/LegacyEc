import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                fontTitle: ['Aclonica', 'sans-serif'],
            },
            colors:{
                "primary": "#D7FEFB",
                "secondary": "#FFC003"
            },
            animation:{
                "loop-scroll": "loop-scroll 30s linear infinite",
            },
            keyframes: {
                "loop-scroll":{
                    from: {transform: "translateX(0)"},
                    to: {transform: "translateX(-100%)"},
                }
            }
        },
    },
    plugins: [],
};
