'use strict';

const constants = require('./constants');
const css = require('./css');
const js = require('./js');
const { watch } = require('gulp');


module.exports = () => {
    watch(constants.styles.watched, css);
    watch(constants.scripts.watched, js);
    //watch(constants.wppot.watched, makepot);
};
