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
        animatedSettings: {
            animatedSpeed: 1000,
            heartBeatSpeed: 1000,
            hingeSpeed: 2000,
            bounceInSpeed: 750,
            bounceOutSpeed: 750,
            animationDelaySpeed: 1000
        },
        variants: ['responsive'],

        extend: {
            spacing: {
                '72': '18rem',
                '84': '21rem',
                '96': '24rem',
            },
        },
        screens: {
            'sm': {'max': '639px'},

            'md': {'max': '767px'},

            'lg': {'max': '1023px'},

            'xl': {'max': '1279px'},
        },
    },
    variants: {},
    plugins: [
        require('tailwindcss-animatecss'),
    ],
}
