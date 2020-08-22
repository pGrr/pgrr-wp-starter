'use strict';

const del = require('del');
const constants = require('./constants')

// Clean assets
module.exports = function clean() {
    return del([ 
        constants.styles.output.name, 
        constants.scripts.output.name,
    ]);
}

