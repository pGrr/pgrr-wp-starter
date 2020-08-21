'use strict';

// PATHS
module.exports = {

    // inputs
    styleInputs: `sass/style.scss`,
    jsInputs: [
        // jquery
        `node_modules/jquery/dist/jquery.min.js`,
        // bootstrap
        `node_modules/bootstrap/dist/js/bootstrap.min.js`,
        // theme scripts
        `js/theme-scripts.js`,
    ],

    // outputs
    styleOutputDir: `./`,
    styleOutputName: `style.css`,
    jsOutputDir: `./`,
    jsOutputName: `script.js`,
    outputs: [`style.css`, `script.js`],

    // watched
    watchedStyles: '/sass/**/*.scss',
    watchedJs: './js/**/*.js',
    watchedPhp: './**/*.php',

    // wppot
    wppot: {
        input: './**/*.php',
        output: './languages/pgrr.pot',
        domain: 'pgrr',
        package: 'pgrr',
    }
}

