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
                "primary-bg": {
                    DEFAULT: '#2b2b2b',
                },
                "secondary-bg": {
                    DEFAULT: '#313335',
                },
                "menu-font": {
                    DEFAULT: '#adb5b8',
                },
                "menu-bg": {
                    DEFAULT: '#3c3f41',
                },
                "muted-gray": {
                    DEFAULT: '#5f6364',
                },
                "default-blue": {
                    DEFAULT: '#4b6eaf',
                },
                "code-fire": {
                    DEFAULT: '#c96f1b',
                },
                "code-white": {
                    DEFAULT: '#a9b1b3',
                },
                "code-green": {
                    DEFAULT: '#576950',
                },
                "code-class": {
                    DEFAULT: '#a7bb7c',
                },
                "code-purple": {
                    DEFAULT: '#8D7D97',
                },
                "code-gold": {
                    DEFAULT: '#dfc087',
                },
            }
        },
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};

