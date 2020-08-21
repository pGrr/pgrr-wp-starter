'use strict';

const { watch, series, parallel } = require('gulp');
const { watchedStyles, watchedJs, watchedPhp } = require('./constants');
const clean = require('./clean');
const css = require('./css');
const js = require('./js');
const makepot = require('./wpPot');

// Watch files
const watchFiles = function () {
    watch(watchedStyles, css);
    watch(watchedJs, js);
    watch(watchedPhp, makepot);
};

// Build
const build = series(clean, parallel(css, js));

// Export tasks
exports.clean = clean;
exports.css = css;
exports.js = js;
exports.makepot = makepot;
exports.watch = watchFiles;
exports.build = build;
exports.default = build;

