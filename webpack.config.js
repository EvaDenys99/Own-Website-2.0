const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const postcssPresetEnv = require('postcss-preset-env');
const OptimizeCSSAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const webpack = require('webpack');

module.exports = (env, {mode}) => {
  console.log(mode);
  return {
    output: {
      filename: 'script.[hash].js'
    },
    devServer: {
      overlay: true,
      hot: true
    },
    module: {
      rules: [
        {
          test: /\.js$/,
          exclude: /node_modules/,
          use: {
            loader: 'babel-loader'
          }
        },
        {
          test: /\.(jpe?g|png|svg|webp|woff|woff2)$/,
          use: {
            loader: 'url-loader',
            options: {
              limit: 1000,
              context: './src',
              name: '[path][name].[ext]'
            }
          }
        },
        {
          test: /\.css$/,
          use: [
            mode === 'production'
              ? MiniCssExtractPlugin.loader
              : 'style-loader',
            'css-loader',
            'resolve-url-loader',
            {
              loader: 'postcss-loader',
              options: {
                sourceMap: true,
                plugins: [
                  require('postcss-import'),
                  postcssPresetEnv({stage: 0})
                ]
              }
            }
          ]
        }
      ]
    },
    plugins: [
      new MiniCssExtractPlugin({
        filename: 'style.[hash].css'
      }),
      new OptimizeCSSAssetsPlugin(),
      new webpack.HotModuleReplacementPlugin()
    ]
  };
};
