const { src, dest } = require('gulp');
const concat = require('gulp-concat');

const cssBundle = () =>
    src(['style1.css',  //individual stylesheets
    'style2.css',
    'style3.css'
    ])
    .pipe(concat('styles.css')) //creates gulp file
    .pipe(dest('new')) //create new folder and drop the new stylesheet in there

exports.cssBundle = cssBundle;