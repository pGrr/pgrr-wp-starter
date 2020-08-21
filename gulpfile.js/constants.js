'use strict';

// PATHS
module.exports = {

    // inputs
    styleInput: `sass/style.scss`,
    jsInput: [
        // jquery
        `node_modules/jquery/dist/jquery.min.js`,
        // bootstrap
        `node_modules/bootstrap/dist/js/bootstrap.min.js`,
        // theme scripts
        `js/theme-scripts.js`,
    ],

    // outputs
    styleOutput: `style.css`,
    jsOutput: `script.js`,
    outputs: [styleOutput, jsOutput],

    // watched
    watchedFiles: ['sass/**/*', 'js/**/*'],

    // wppot
    wppot: {
        input: './**/*.php',
        output: './languages/pgrr.pot',
        domain: 'pgrr',
        package: 'pgrr',
    }
}

