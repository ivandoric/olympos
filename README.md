This is just empty theme for starting your Wordpress projects, with
built in support for SASS/Compass.

It includes normalize partial, flexslider partial.
Also modernizr.js, flexslider.js, empty main.js for writing custom jQuery for
your project and autoclear.js for clearing forms.

This theme has practicaly no stylings except for normalize.css. 
It's completely blank and perfect for people that want to start their projects
from ground up.

## Mediaqueries

No more _mediaqueries partial, instead media queries are defined in _golobals.scss, and you can use them like this:

    @include tablets{
        //Write your queries here
    }

You can use this just below the selector you want to use mediaqueries on. This gives you better view of your code, and what is happening to what element on the page when media query is triggered.


## NEW:

Now also includes Guardfile, so you can use LiveReload with this 
configuration. 

YOU DON'T NEED TO BUY LIVE RELOAD APP FOR THIS!

Instructions how to setup LiveReload can be found here: http://blog.amazeelabs.com/en/comment/654303  
