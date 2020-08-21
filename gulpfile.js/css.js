'use strict';

const { styleInput, styleOutput } = require('./paths');
const { src, dest } = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const browsersync = require('./browsersync');

// CSS task
function css() {
    return src(styleInput)
        .pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 5 versions'],
            cascade: false
        }))
        .pipe(cleanCSS({ compatibility: 'ie8' }))
        .pipe(dest(styleOutput))
        .pipe(browsersync.stream());
}

module.exports = css;

