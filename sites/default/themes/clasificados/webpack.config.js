const path = require('path');
const webpack = require('webpack');
const ExtractTextPlugin = require('extract-text-webpack-plugin');

const extractSass = new ExtractTextPlugin({
    filename: 'dist/[name].bundle.css',
    allChunks: true,
});

// Además, necesitaré el compilador SaSS de node 
// npm install node-sass --save-dev

const config = {
  entry: './src/index.js',
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'bundle.js'
  },
  devtool: 'source-map',
  module: {
    rules: [
      {
        test: /\.(sass|scss)$/,
        exclude: /node_modules/,
        use: [
          {
            loader: "style-loader" // creates style nodes from JS strings
          }, 
          {
              loader: "css-loader" // translates CSS into CommonJS
          }, 
          {
              loader: "sass-loader" // compiles Sass to CSS
          }
        ]
      },
      {
        test: /\.jsx?$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['es2015'],
            plugins: []
          }
        }
      },
      {
        test: /\.(jpg|png|gif|svg)$/i,
        exclude: /node_modules/,
        use: {
          loader: 'file-loader',
          options: {
            name: '[path][name].[ext]',
            outputPath: 'sites/default/themes/clasificados/'
          }  
        }
      }
    ]
  },
  plugins: [
      extractSass,
      new webpack.optimize.UglifyJsPlugin()
  ]
}

/*  El caso más habitual en desarrollo web es cuando quieres subir tu web a producción y quieres minificar y ofuscar tu código para que ocupe menos y sea más difícil de entender frente a ojos curiosos.
  new webpack.optimize.UglifyJsPlugin()
*/

module.exports = config;
