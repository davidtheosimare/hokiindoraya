import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        'node_modules/preline/dist/*.js',
        './src/**/*.{html,js}',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Graphik', 'sans-serif'],
                serif: ['Merriweather', 'serif'],
            },
        },
    },
    plugins: [
        require('preline/plugin'),
        require('@tailwindcss/forms'),
    ],
};
