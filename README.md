This is just empty theme for starting your Wordpress projects, with
built in support for **Sass**, **Susy** and **Gulp.js**.

[Check out the video on](https://www.youtube.com/watch?v=UtZ9LXoJ_YQ) installing and using this theme on YouTube.

## Requirements:

1. [Node.js](https://nodejs.org/)
2. [Gulp.js](http://gulpjs.com/)

## Installation

Put `olympos` folder into your themes directory. 

Copy `package.json`and `gulpfile.js`into WordPress root. 

Run

```shell
npm install
```

to install all gulp plugins.

If you don't want to have `package.json` and `gulpfile.js` in root directory you can leave them in the theme, and run `npm install` in theme directory. But in that case be sure to change the paths in `gulpfile.js`. You will mostly have to delete `/wp-content/themes/olympos/` from the paths.

When you are done just run `gulp watch`

## Features

Most of the features are in gulp. This theme has almost no styling. You only have `clearfix` defined and `_reset.scss` from Eric Mayer as a partial and some empty scss partials.

### Gulp features

* Image optimization
* Sass compilation
* Auto prefixing
* Source maps for css file
* Uglifying and concatinating all js files
* LiveReload

All of these features are run when starting `gulp watch` except for image optimization, you have to run that task separatley.

### Modernizr

[Modernizr](https://modernizr.com/) is included in already compiled `olympos.min.js` file. If you want to change build of the Modernizr just replace `lib/modernizer.min.js` with your own and run **uglify** task. 

## Notes

I've removed Compass from this version because I didn't see any real necessity for it. Also it slowed down css compilation process significantly. 

I've added [Susy](http://susy.oddbird.net/) for making custom grids and to help with css layout. If you don't want to use it just remove `susy` folder from `sass` folder and remove `@import "susy";` and `@import "su";` from the `style.scss` file in `sass` folder;

### CSS and JavaScript

All the of css can be found and should be written in partials. So that you end up with just one css file (style.css). 

JavaScript has two folders `lib` and `js` you should never touch `js` folder, this is where the uglifyed and concatinated files go. Put your jQuery plugins and other JS files in lib folder and gulp will do the rest for you. There is no need to call those added scripts from header.php or footer.php, all your scripts will be concatinated in one file.

### Some mixins and functions

You have several mixins and functions in the `_mixins.scss` file along with comments on how to use them. These mixins and functions include:

* Automatic calculation of percentages from pixels
* Automatic calculations of rems from pixels 
* Easy to use Media Queries in your normal css flow

Open an issue for any problems that you encounter. 
