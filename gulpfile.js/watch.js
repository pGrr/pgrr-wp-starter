'use strict';

const browsersync = require('./browsersync');
const { watch } = require('gulp');


module.exports = () => {
    watch(constants.styles.watched, css);
    watch(constants.scripts.watched, js);
    //watch(constants.wppot.watched, makepot);
};
