import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            colors: {
                primary: '#003366',
                accent: '#43A047',
                'background-light': '#F4F4F4',
                surface: '#FFFFFF',
                'text-dark': '#212121',
                'text-muted': '#6c7f6d',
            },
            fontFamily: {
                display: ['Poppins', ...defaultTheme.fontFamily.sans],
                body: ['Open Sans', ...defaultTheme.fontFamily.sans],
            },
            borderRadius: {
                DEFAULT: '0.5rem',
                lg: '0.75rem',
                xl: '1rem',
                full: '9999px',
            },
        },
    },

    plugins: [forms],
};
