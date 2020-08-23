'use strict';

const browsersync = require('./browsersync');
const { watch, series } = require('gulp');


module.exports = () => {
    series(
        browsersync.init(),
        parallel(
            watch(constants.styles.watched, series(css, browsersync.reload)),
            watch(constants.scripts.watched, series(js, browsersync.reload)),
            //watch(constants.wppot.watched, series(makepot, browsersync.reload)),
            watch(constants.php.watched, browsersync.reload)
        )
    );
};

