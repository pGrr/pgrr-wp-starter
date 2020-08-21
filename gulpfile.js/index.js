'use strict';

const clean = require('./clean');
const { browserSync, browserSyncReload } = require('./browsersync');
const css = require('./css');
const js = require('./js');
const makepot = require('./wpPot');

// Watch files
function watchFiles() {
    watch(allSrcStyles, series(css, browserSyncReload));
    watch(allSrcJs, series(js, browserSyncReload));
}

// export tasks
exports.clean = clean;
exports.css = css;
exports.js = js;
exports.makepot = makepot;
exports.watch = series(browserSync, watchFiles);;
exports.build = series(clean, parallel(css, js));;
exports.default = build;

