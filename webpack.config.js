const path = require('path');


module.exports = {
    resolve: {
        alias: {
            '@admin': path.resolve(__dirname, 'resources', 'assets', 'admin', 'js'),
        },
    },
    output: {
        publicPath: '/assets/',
        filename: '[name].js',
        chunkFilename: 'js/[name][chunkhash].js',
    },
};
