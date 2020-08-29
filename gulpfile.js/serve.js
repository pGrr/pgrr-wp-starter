'use strict';

const constants = require('./constants');
const browsersync = require('./browsersync');
const css = require('./css');
const js = require('./js');
const { watch, series } = require('gulp');


module.exports = () => {
    browsersync.init(() => {
        watch(constants.styles.watched, series(css, browsersync.reload));
        watch(constants.scripts.watched, series(js, browsersync.reload));
        //watch(constants.wppot.watched, series(makepot, browsersync.reload));
        watch(constants.php.watched, browsersync.reload);    
    });
};

