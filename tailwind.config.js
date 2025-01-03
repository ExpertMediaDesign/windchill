const theme = require('./theme.json');
// const tailpress = require("@jeffreyvr/tailwindcss-tailpress");
const tailpress = require('./resources/tailwindtweaks.js')

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: require('fast-glob').sync([
        './*.php',
        './**/*.php',
        './templates/*.html',
        './parts/*.html',
        './css/*.css',
        './js/*.js',
        './css/safelist.txt'
    ]),
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                // lg: '0rem'
            },
        },
        extend: {
            colors: tailpress.colorMapper(tailpress.theme('settings.color.palette', theme)),
            fontSize: tailpress.fontSizeMapper(tailpress.theme('settings.typography.fontSizes', theme))
        },
        screens: {
            'xs': '480px',
            'sm': '600px',
            'md': '782px',
            'lg': tailpress.theme('settings.layout.contentSize', theme),
            'xl': tailpress.theme('settings.layout.wideSize', theme),
            '2xl': '1440px'
        }
    },
    plugins: [
        tailpress.tailwind
        // require('@_tw/themejson')(require('./theme.json'))
    ]
};
