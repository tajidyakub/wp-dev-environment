# WordPress Dev Environment

## Intro

Local environment boilerplate for developing WordPress Themes using Bootstrap4, Fontawesome5, SASS or other Front End Javascript framework  minus web and database server.

## Modules
- Laravel Mix
- Bootstrap4
- Fontawesome5
- jQuery and Popper.js as Bootstrap's deps
- SASS for extending Bootstrap or create own styles
- PHP_CodeSniffer for PHP Codes using composer
- Neutron PHP Standard https://github.com/Automattic/phpcs-neutron-standard

## Usage
- Clone the repository
- Install deps and requirements
``` bash
$ npm install
$ composer install
```
- Laravel Mix (wrapper for Webpack) setup through webpack.mix.js
- Compiles and copy files to build and webfolder directory

``` bash
$ npm run dev         # Compile sources and assets
$ npm run watch-poll  # Monitor file changes
```
