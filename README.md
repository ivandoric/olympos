This is just empty theme for starting your Wordpress projects, with
built in support for **SASS/Compass** and **Gulp.js**.

It includes reset partial, flexslider partial.
Also modernizr.js, flexslider.js and empty main.js for writing custom jQuery.

This theme has practicaly no stylings. 
It's completely blank and perfect for people that want to start their projects
from ground up.

## Mediaqueries

No more _mediaqueries partial, instead media queries are defined in _mixins.scss, and you can use them like this:

    @include tablets{
        //Write your queries here
    }

You can use this just below the selector you want to use mediaqueries on or even in the selector itself. This gives you better view of your code, and what is happening to what element on the page when media query is triggered.


## NEW:

~~Now also includes Guardfile, so you can use LiveReload with this 
configuration.
Instructions how to setup LiveReload can be found here: http://blog.amazeelabs.com/en/comment/654303~~

### Gulp.js

####Livereload

Olympos now comes with Gulp.js. Gulp.js now only has instructions for LiveReload. Start it up with:

```shell
gulp watch
```
After starting gulp watch in your browse turn on LiveReload. [You can install it from here if you don't have it (Chrome)](https://chrome.google.com/webstore/detail/livereload/jnihajbhpnppcggbcgedagnkighmdlei?utm_source=chrome-ntp-icon).

**Note:** Of course you have to have installed [node.js](https://nodejs.org/) and [gulp.js](http://gulpjs.com/) for this to work - modules for LiveReload are included.

###Compass

Since gulp-compass is very slow I didn't include it in gulp.js. So you should use:
```shell
compass watch
``` 
for compiling SASS/Compass files. It's much faster.

**Note:** You need to have [Compass](http://compass-style.org/) installed to use this feature.

Contact me here if you have any questions.

