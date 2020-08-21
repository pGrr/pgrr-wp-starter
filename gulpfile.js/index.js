'use strict';

const {watch, series, parallel} = require('gulp');
const clean = require('./clean');
const { browserSyncInit, browserSyncReload } = require('./browsersync');
const css = require('./css');
const js = require('./js');
const makepot = require('./wpPot');

// Watch files
const watchFiles = series(browserSyncInit, () => {
    watch(allSrcStyles, series(css, browserSyncReload));
    watch(allSrcJs, series(js, browserSyncReload));
});

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

