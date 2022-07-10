const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {

    plugins: [
        require('@tailwindcss/forms'),
    ],

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './storage/framework/views/livewire/*.php',
        './resources/views/layouts/*.blade.php',
        './resources/views/livewire/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },

        },
    },

    plugins:{
        tailwindcss: {},
        autoprefixer: {},
    } [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
