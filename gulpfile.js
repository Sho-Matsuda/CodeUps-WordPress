/*
src 参照元を指定
dest 出力先を指定
watch ファイルを監視する
series(順番に処理)とparallel(同時に処理)
*/
const { src, dest, watch, series, parallel } = require("gulp"); //gulpのメソッドを記述
const rename = require("gulp-rename"); //ファイル名を変える
const plumber = require("gulp-plumber"); //エラーが発生しても処理を続ける
const notify = require("gulp-notify"); //タスクが完了したらメッセージを表示orエラーメッセージを表示

// ソースフォルダ
const srcPath = {
  scss: "./src/css/sass/**/*.scss",
  block_scss: "./src/css/block/*.scss",
  js: "./src/js/**/*.js",
  img: "./src/images/**/*",
  php: "./src/php/**/*.php",
};

// WordPress　Localフォルダのディレクトリ
const userDir = require("os").homedir(); //ユーザーディレクトリを指定
const themeDir = `${userDir}/Local Sites/CodeUps/app/public/wp-content/themes/CodeUps`; //テーマディレクトリを指定

// WordPressフォルダ　　出力先
const destWpPath = {
  css: `${themeDir}/assets/css/`,
  block_css: `${themeDir}/assets/css/block/`,
  js: `${themeDir}/assets/js/`,
  img: `${themeDir}/assets/images/`,
  php: `${themeDir}/`,
};

// ブラウザーシンク（リアルタイムでブラウザに反映させる処理）
const browserSync = require("browser-sync");
const browserSyncFunc = () => {
  browserSync.init({
    proxy: "http://codeups.local/", //Localのドメインを指定
  });
};
const browserSyncReload = (done) => {
  browserSync.reload();
  done();
};

// php出力
const phpDest = () => {
  return src(srcPath.php)
    .pipe(
      //エラーが発生しても処理を続ける、タスクが完了したらメッセージを表示orエラーメッセージを表示
      plumber({
        errorHandler: notify.onError("Error: <%= error.message %>"),
      })
    )
    .pipe(dest(destWpPath.php));
};

// Sassファイルのコンパイル処理（DartSass対応）
const sass = require('gulp-sass')(require('sass'));
const sassGlob = require('gulp-sass-glob-use-forward');
const postcss = require("gulp-postcss");
const cssnext = require("postcss-cssnext")
const cleanCSS = require("gulp-clean-css");
const sourcemaps = require("gulp-sourcemaps");
const browsers = [
  'last 2 versions',
  '> 5%',
  'ie = 11',
  'not ie <= 10',
  'ios >= 8',
  'and_chr >= 5',
  'Android >= 5',
]

const cssSass = (done) => {
  return src(srcPath.scss)
    .pipe(sourcemaps.init())
    .pipe(
      plumber({
        errorHandler: notify.onError('Error:<%= error.message %>')
      }))
    .pipe(sassGlob())  // Sassの@import/@useにおけるglobを有効にする
    .pipe(sass.sync({
      includePaths: ['src/css/sass'],
      outputStyle: 'expanded'
    }))
    .pipe(postcss([cssnext(browsers)]))
    .pipe(sourcemaps.write('./'))
    .pipe(dest(destWpPath.css))

    .pipe(notify({
      message: 'Sassコンパイル 完了！',//文字は好きなものに変更してね！
      onLast: true
    }))
    .on("end", done);
}

// minify
const minifyCss = (done) => {
  src([destWpPath.css + "/**.css", "!" + destWpPath.css + "/**.min.css"])
    .pipe(sourcemaps.init())
    .pipe(
      plumber({
        errorHandler: notify.onError('Error:<%= error.message %>')
      }))
    .pipe(cleanCSS())
    .pipe(
      rename({
        suffix: ".min",
      })
    )
    .pipe(sourcemaps.write('./'))
    .pipe(dest(destWpPath.css))

    .pipe(notify({
      message: 'min.css生成 完了！',//文字は好きなものに変更してね！
      onLast: true
    }));
  done();
};

// block scss
const blockSass = () => {
  return src(srcPath.block_scss)
    .pipe(sass({ outputStyle: 'expanded' }))
    .pipe(dest(destWpPath.block_css));
}

// JS
const uglify = require("gulp-uglify");
const jsMin = () => {
  return src(srcPath.js)
    .pipe(
      plumber({
        errorHandler: notify.onError("Error: <%= error.message %>"),
      })
    )
    .pipe(dest(destWpPath.js))
    .pipe(uglify()) //JSファイルを圧縮
    .pipe(rename({ extname: ".min.js" }))
    .pipe(dest(destWpPath.js));
};

// 画像圧縮
const imagemin = require("gulp-imagemin");
const mozjpeg = require("imagemin-mozjpeg");
const pngquant = require("imagemin-pngquant");

const imageCompression = () => {
  return src(srcPath.img)
    .pipe(
      imagemin(
        [
          mozjpeg({ quality: 80 }), //画質
          pngquant({
            quality: [0.6, 0.7], // 画質
            speed: 1, // スピード
          }),
          imagemin.svgo(),
        ],
        {
          verbose: true, //ログを吐き出す
        }
      )
    )
    .pipe(dest(destWpPath.img));
};

// ファイルの変更を検知
const watchFiles = () => {
  watch(srcPath.php, series(phpDest, browserSyncReload));
  watch(srcPath.scss, series(cssSass, minifyCss, browserSyncReload));
  watch(srcPath.js, series(jsMin, browserSyncReload));
  watch(srcPath.img, series(imageCompression, browserSyncReload));
  watch(srcPath.block_scss, series(blockSass, browserSyncReload));
};

// npx gulpで出力する内容
exports.default = series(
  series(phpDest, cssSass, minifyCss, jsMin, imageCompression,blockSass), //順番に処理
  parallel(watchFiles, browserSyncFunc) //同時に処理
);
