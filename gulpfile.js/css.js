'use strict';

const { styleInputs, styleOutputName, styleOutputDir } = require('./constants');
const { src, dest } = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');

// CSS task
function css() {
    return src(styleInputs)
        .pipe(sass({
            includePaths: ['node_modules/bootstrap/scss/', 'sass']
        }))
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(cleanCSS({ compatibility: 'ie8' }))
        .pipe(rename(styleOutputName))
        .pipe(dest(styleOutputDir))
}

module.exports = css;

