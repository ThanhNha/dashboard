/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: 'jit',
    content: [
        './resources/views/**/*.blade.php',
        './resources/views/**/**/*.blade.php',
         './resources/assets/js/components/**/*.vue',
         './resources/assets/js/**/*.vue',
    ],
    theme: {
        // extend: {},
        screens: {
            'sm': {'max': '639px'},

            'md': {'max': '767px'},

            'lg': {'max': '1023px'},

            'xl': {'max': '1279px'},
        },
    },
    plugins: [],
}
