'use strict';

// PATHS
module.exports = {

    styles: {
        input: `sass/style.scss`,
        output: {
            name: 'style.css',
            dir: './',
        },
        watched: './sass/**/*.scss',
    },

    scripts: {
        input: [
            // jquery
            `node_modules/jquery/dist/jquery.min.js`,
            // bootstrap
            `node_modules/bootstrap/dist/js/bootstrap.min.js`,
            // sal (scroll animate lightweight)
            `node_modules/sal.js/dist/sal.js`,
            // theme scripts
            `js/theme-scripts.js`,
        ],
        output: {
            name: 'script.js',
            dir: './',
        },
        watched: './js/**/*.js',
    },

    php: {
        watched: './**/*.php'
    },
    
    wppot: {
        input: './**/*.php',
        output: {
            name: 'pgrr.pot',
            dir: './languages/',
        },
        domain: 'pgrr',
        package: 'pgrr',
        watched: './**/*.php',
    }

}

