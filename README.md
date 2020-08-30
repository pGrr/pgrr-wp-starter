# pgrr-wp-starter

## A starter wordpress theme built with [underscores](https://underscores.me/), [bootstrap4](https://getbootstrap.com/) and [gulp.js](https://gulpjs.com/), providing basic w3c-validated, accessible and bootstrap-styled templates as a starting point for theme development.

This theme can be used either as a starter theme to be modified directly or a parent theme to be customized by a child theme, and provides:

* Underscores boilerplate code and file structure
* Bootstrap integration
* Basic template styling, using mostly bootstrap classes and very little additional css and js (mainly to provide a fallback styling in case the child theme hasn't defined some templates)
* A build workflow that simplyfies development and allows to easily customize the look and feel of the website by overriding the default bootstrap's variables
* Valid and accessible code, validated with [https://validator.w3.org/](https://validator.w3.org/) and [https://achecker.ca/](https://achecker.ca/) (WCAG 2.0 (Level AA))

###### TODO

* Widgets (sidebar, footer?, styling)

## Gulp build tasks

`gulp.js` directory provides several useful tasks (css, js, browsersync, languages pot-compiling). In the directory, each js file is a single task and `index.js` is the equivalent to the `gulpfile.js` (see source code for more details).

The build process is easily customized by modifying just two files:

* `constants.js` - contains all paths and constants used by the tasks
* `index.js` - requires tasks and exports them (only tasks exported here will be usable by gulp).

## Styles

`sass` directory contains sass source files. The most important files are:

* `bootstrap-overrides.scss` - overrides bootstrap's variable with custom values
* `style.scss` - provides additional theme-specific style

The gulp `css` task will include, concatenate, autoprefix and minify respectively bootstrap4 css and custom styles (see `gulp.js/css.js` for details).

The result is placed into `style.css`, included by wordpress as the main style of the theme.

## Scripts

`scripts` directory contains javascript source files. The most important files are:

* `theme-scripts.js` - contains the theme-specific javascript

The gulp `js` task will concat, transpile using babel and uglify (minify, with variable renaming) respectively bootstrap4 js and the theme-specific js.

The result is placed into `script.js`, included by wordpress as the main script of the theme.

## Wordpress theme files

The theme uses the default underscores structure, with some modifications:

* Underscores styles have been removed, and everything has been styled using mostly bootstrap classes (and very little additional css and js - see `sass/style.scss` and `js/theme-scripts.js`)
* `template-parts` - contains template files used throughout the theme
* `functions.php` - is mostly left untouched. It just adds wp-bootstrap-navwalker support and the sidebar registration is commented out (sidebar not implemented yet: `sidebar.php` has been removed until the implementation will be added).
* `index.php` - has been modified to use the post-type-specific template-part. As last option, if the post type is not singular, the `template-parts/content-posts.php` will be used to display latest posts (with a masonry cards layout as default).
* `singular.php` - substitutes (`single.php` and `page.php`, providing only a base layout). More complex layouts for single posts or pages can be defined in child-themes, with `singular.php` used as fallback
* `archive.php` and `search.php` - use the same basic masonry cards layout that is used to display latest posts
* `404.php` - provides a basic message and search form, using `searchform.php`
* `searchform.php` - provides a bootstrap style for search form
* `comments.php` - has been styled using bootstrap, but using jquery to add bootstrap classes to the html that wordpress outputs by default (see `js/theme-scripts.js`)
* `header.php` - uses wp-bootstrap-navwalker to integrate bootstrap with wordpress navigation
* `footer.php` - provides a basic footer

## Languages

As in the original underscores theme, the language files are in `languages` directory. Pot making is taken care by the `gulpfile.js/wp-pot.js` gulp task. 

------

_s original readme
=========

[![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)

Hi. I'm a starter theme called `_s`, or `underscores`, if you like. I'm a theme meant for hacking so don't use me as a Parent Theme. Instead try turning me into the next, most awesome, WordPress theme out there. That's what I'm here for.

My ultra-minimal CSS might make me look like theme tartare but that means less stuff to get in your way when you're designing your awesome theme. Here are some of the other more interesting things you'll find here:

* A modern workflow with a pre-made command-line interface to turn your project into a more pleasant experience.
* A just right amount of lean, well-commented, modern, HTML5 templates.
* A custom header implementation in `inc/custom-header.php`. Just add the code snippet found in the comments of `inc/custom-header.php` to your `header.php` template.
* Custom template tags in `inc/template-tags.php` that keep your templates clean and neat and prevent code duplication.
* Some small tweaks in `inc/template-functions.php` that can improve your theming experience.
* A script at `js/navigation.js` that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. It's enqueued in `functions.php`.
* 2 sample layouts in `sass/layouts/` made using CSS Grid for a sidebar on either side of your content. Just uncomment the layout of your choice in `sass/style.scss`.
Note: `.no-sidebar` styles are automatically loaded.
* Smartly organized starter CSS in `style.css` that will help you to quickly get your design off the ground.
* Full support for `WooCommerce plugin` integration with hooks in `inc/woocommerce.php`, styling override woocommerce.css with product gallery features (zoom, swipe, lightbox) enabled.
* Licensed under GPLv2 or later. :) Use it to make something cool.

Installation
---------------

### Requirements

`_s` requires the following dependencies:

- [Node.js](https://nodejs.org/)
- [Composer](https://getcomposer.org/)

### Quick Start

Clone or download this repository, change its name to something else (like, say, `megatherium-is-awesome`), and then you'll need to do a six-step find and replace on the name in all the templates.

1. Search for `'_s'` (inside single quotations) to capture the text domain and replace with: `'megatherium-is-awesome'`.
2. Search for `_s_` to capture all the functions names and replace with: `megatherium_is_awesome_`.
3. Search for `Text Domain: _s` in `style.css` and replace with: `Text Domain: megatherium-is-awesome`.
4. Search for <code>&nbsp;_s</code> (with a space before it) to capture DocBlocks and replace with: <code>&nbsp;Megatherium_is_Awesome</code>.
5. Search for `_s-` to capture prefixed handles and replace with: `megatherium-is-awesome-`.
6. Search for `_S_` (in uppercase) to capture constants and replace with: `MEGATHERIUM_IS_AWESOME_`.

Then, update the stylesheet header in `style.css`, the links in `footer.php` with your own information and rename `_s.pot` from `languages` folder to use the theme's slug. Next, update or delete this readme.

### Setup

To start using all the tools that come with `_s`  you need to install the necessary Node.js and Composer dependencies :

```sh
$ composer install
$ npm install
```

### Available CLI commands

`_s` comes packed with CLI commands tailored for WordPress theme development :

- `composer lint:wpcs` : checks all PHP files against [PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).
- `composer lint:php` : checks all PHP files for syntax errors.
- `composer make-pot` : generates a .pot file in the `languages/` directory.
- `npm run compile:css` : compiles SASS files to css.
- `npm run compile:rtl` : generates an RTL stylesheet.
- `npm run watch` : watches all SASS files and recompiles them to css when they change.
- `npm run lint:scss` : checks all SASS files against [CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/).
- `npm run lint:js` : checks all JavaScript files against [JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/).
- `npm run bundle` : generates a .zip archive for distribution, excluding development and system files.

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!
