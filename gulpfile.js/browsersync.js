'use strict';

const browsersync = require('browser-sync').create();

// BrowserSync
function browserSyncInit(done) {
    browsersync.init({
        server: {
            baseDir: distDir
        },
        port: 9000
    });
    done();
}

// BrowserSync Reload
function browserSyncReload(done) {
    browsersync.reload();
    done();
}

module.exports = {
    browsersync,
    browserSyncInit,
    browserSyncReload,
}

