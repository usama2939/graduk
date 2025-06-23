import defaultTheme from 'tailwindcss/defaultTheme';
import { createRequire } from 'module';
import { createRequire } from 'module';

var require = createRequire(import.meta.url);
var module = { exports: {} };

const require = createRequire(import.meta.url);

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

            },

        },

    },

    plugins: [],

};
