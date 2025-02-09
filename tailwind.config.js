import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                background: "#030712", // Hitam khas Filament
                primary: {
                    DEFAULT: "#3b82f6", // Biru utama (500)
                    dark: "#1e40af", // Biru gelap (800)
                    light: "#93c5fd", // Biru terang (300)
                }
            }
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
};
