'use strict';

const { watch, series, parallel } = require('gulp');
const constants = require('./constants');
const clean = require('./clean');
const css = require('./css');
const js = require('./js');
const makepot = require('./wpPot');
const browsersync = require('./browsersync');

function watchFiles() {
    watch(constants.styles.watched, series(css, browsersync.reload));
    watch(constants.scripts.watched, series(js, browsersync.reload));
    watch(constants.wppot.watched, series(makepot, browsersync.reload));
};

const build = series(clean, parallel(css, js));

exports.clean = clean;
exports.css = css;
exports.js = js;
exports.makepot = makepot;
exports.build = build;
exports.serve = series(browsersync.init, watchFiles);
exports.watch = watchFiles;
exports.default = build;

