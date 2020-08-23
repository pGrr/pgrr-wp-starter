'use strict';

const { series, parallel } = require('gulp');
const clean = require('./clean');
const css = require('./css');
const js = require('./js');

module.exports = series(clean, parallel(css, js));
