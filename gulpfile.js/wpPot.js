'use strict';

const { src, dest } = require('gulp');
const wpPot = require('gulp-wp-pot');
const { wppot: constants } = require('./constants');

// Wp pot task - internationalization make pot file ('gulp makepot')
function makepot() {
    return src(constants.input)
        .pipe(wpPot({
            domain: constants.domain,
            package: constants.package
        }))
        .pipe(dest(constants.output));
}

module.exports = makepot;

