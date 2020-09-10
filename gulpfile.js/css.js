'use strict';

const constants = require('./constants');
const { src, dest } = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');

// CSS task
function css() {
    return src(constants.styles.input)
        .pipe(sass({
            includePaths: [
                'node_modules/bootstrap/scss/', 
                'sass'
            ],
        }))
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(cleanCSS({ compatibility: 'ie8' }))
        .pipe(rename(constants.styles.output.name))
        .pipe(dest(constants.styles.output.dir))
}

module.exports = css;

