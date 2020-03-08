const withCSS = require("@zeit/next-css");

module.exports = {
  withCSS: {
    url: false
  },
  webpackDevMiddleware: config => {
    config.watchOptions = {
      aggregateTimeout: 300,
      poll: 1000,
      ignored: [".next", "node_modules"]
    };

    return config;
  }
};
