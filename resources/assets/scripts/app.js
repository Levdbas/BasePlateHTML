console.log(__webpack_public_path__);


/**
 * Accept module updates
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
import.meta.webpackHot?.accept(console.error);