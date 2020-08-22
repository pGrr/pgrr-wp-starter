'use strict';

const constants = require('./constants');
const { src, dest } = require('gulp');
const concat = require('gulp-concat');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');

// JS task
function js() {
    return src(constants.scripts.input)
        .pipe(concat('script.js'))
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(uglify())
        .pipe(rename(constants.scripts.output.name))
        .pipe(dest(constants.scripts.output.dir))
}

module.exports = js;

