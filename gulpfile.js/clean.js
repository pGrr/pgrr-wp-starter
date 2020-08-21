'use strict';

const del = require('del');
const { outputs } = require('./constants')

// Clean assets
module.exports = function clean() {
    return del(outputs);
}

