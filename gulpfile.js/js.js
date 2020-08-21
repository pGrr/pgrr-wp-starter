'use strict';

const { jsInput, jsOutput } = require('./paths');
const { src, dest } = require('gulp');
const concat = require('gulp-concat');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');
const browsersync = require('./browsersync');

// JS task
function js() {
    return src(jsInput)
        .pipe(concat('script.js'))
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(uglify())
        .pipe(dest(jsOutput))
        .pipe(browsersync.stream())
}

module.exports = js;

