# Paige sage
[![devDependency Status](https://img.shields.io/david/dev/roots/sage.svg?style=flat-square)](https://david-dm.org/baillieogrady/paige-sage#info=devDependencies)

Paige Sage is a custom WordPress theme built on the [Sage](https://github.com/roots/sage) starter theme. This theme was inspired by [kathrynmcclintock](http://www.kathrynmcclintock.com/). It's inital purpose was to display a vertical split landing page that's populated with the pages/posts' featured image on the left and the Gutenberg blocks content on the right. 

[Demo](https://paigenicole.uk/)

## Usage

### Installation

[Download](https://baillieogrady.com/downloads/paige-sage.zip) the production built theme and upload via the WordPress theme uploader at the following url on your website:

```
https://yourwebsite.com/wp-admin/theme-install.php
```

## Theme development

### Installation

Clone this repo into your WordPress themes directory

```
$ git clone https://github.com/baillieogrady/paige-sage
```

### Requirements

Make sure all dependencies have been installed before moving on:

* [WordPress](https://wordpress.org/) >= 4.7
* [PHP](https://secure.php.net/manual/en/install.php) >= 7.1.3 (with [`php-mbstring`](https://secure.php.net/manual/en/book.mbstring.php) enabled)
* [Composer](https://getcomposer.org/download/)
* [Node.js](http://nodejs.org/) >= 8.0.0
* [Yarn](https://yarnpkg.com/en/docs/install)

*See full roots sage source & setup [here](https://github.com/roots/sage)*

* Run `composer install` from the theme directory to install composer dependencies 
* Run `yarn` from the theme directory to install dependencies
* Update `resources/assets/config.json` settings:
  * `devUrl` should reflect your local development hostname
  * `publicPath` should reflect your WordPress folder structure (`/wp-content/themes/sage` for non-[Bedrock](https://roots.io/bedrock/) installs)

### Build commands

* `yarn start` — Compile assets when file changes are made, start Browsersync session
* `yarn build` — Compile and optimize the files in your assets directory
* `yarn build:production` — Compile assets for production

