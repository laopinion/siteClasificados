const path = require('path');
const webpack = require('webpack');

const ExtractTextPlugin = require("extract-text-webpack-plugin");

// Además, necesitaré el compilador SaSS de node 
// npm install node-sass --save-dev

const config = {
  entry: './src/index.js',
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'bundle.js'
  },
  devtool: 'source-map', // Eliminar cuando sea para prod 
  module: {
    rules: [
      {
        test: /\.(sass|scss)$/,
        exclude: /node_modules/,
        use: ExtractTextPlugin.extract({
          fallback: 'style-loader',
          use: ['css-loader', 'sass-loader'],
          publicPath: '/dist'
        }) // [ 'style-loader', 'css-loader', 'sass-loader']
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
        test: /\.(jp?g|png|gif|svg)$/i,
        exclude: /node_modules/,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: '[path][name].[ext]',
              publicPath: '', // Recordar que se puede agregar la ruta donde van a estar las images
              outputPath: 'images/'
            }  
          },
          {
            loader: 'image-webpack-loader',
            options: {
              gifsicle: {
                interlaced: false,
              },
              optipng: {
                optimizationLevel: 7,
              },
              pngquant: {
                quality: '65-90',
                speed: 4
              },
              mozjpeg: {
                progressive: true,
                quality: 65
              },
              svgo: {
                progressive: true,
                quality: 65
              },
              // Specifying webp here will create a WEBP version of your JPG/PNG images
              // se comento por errores 
              // webp: {
              //   quality: 75
              // }
            }
          }
        ]
      }
    ]
  },
  plugins: [
    new ExtractTextPlugin({
      filename: 'app.css',
      disable: false,
      allChunks: true
    }),
    new webpack.optimize.UglifyJsPlugin()
  ]
}

/*  El caso más habitual en desarrollo web es cuando quieres subir tu web a producción y quieres minificar y ofuscar tu código para que ocupe menos y sea más difícil de entender frente a ojos curiosos.
  new webpack.optimize.UglifyJsPlugin()
*/

module.exports = config;
