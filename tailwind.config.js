const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        './resources/js/*.js',
    ],
    theme: {
        extend: {
            colors: {
                hot: {
                    DEFAULT: '#F9004D',
                    50: '#FFE5EE',
                    100: '#FFCCDC',
                    200: '#FF99B9',
                    300: '#FF6193',
                    400: '#FF2E70',
                    500: '#F9004D',
                    600: '#C7003F',
                    700: '#94002F',
                    800: '#660020',
                    900: '#330010'
                }
            },

        },
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};

