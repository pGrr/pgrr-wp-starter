'use strict';

const del = require('del');
const { outputs } = require('./paths')

// Clean assets
module.exports = function clean() {
    return del(outputs);
}

