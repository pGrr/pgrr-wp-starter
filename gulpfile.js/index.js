'use strict';

const clean = require('./clean');
const css = require('./css');
const js = require('./js');
const makepot = require('./wpPot');
const watchFiles = require('./watch');
const serve = require('./serve');
const build = require('./build');

exports.clean = clean;
exports.css = css;
exports.js = js;
exports.makepot = makepot;
exports.serve = serve;
exports.watch = watchFiles;
exports.build = build;
exports.default = build;

