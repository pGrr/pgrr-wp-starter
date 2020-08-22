'use strict';

const { src, dest } = require('gulp');
const wpPot = require('gulp-wp-pot');
const constants = require('./constants');

// Wp pot task - internationalization make pot file ('gulp makepot')
function makepot() {
    return src(constants.wppot.input)
        .pipe(wpPot({
            domain: constants.wppot.domain,
            package: constants.wppot.package,
        }))
        .pipe(dest(
            `${constants.wppot.output.dir + constants.wppot.output.name}`
        ));
}

module.exports = makepot;

