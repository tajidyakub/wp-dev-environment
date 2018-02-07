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

## Clone and Initialize

- Clone the repository

``` bash
$ git clone https://github.com/tajidyakub/wp-dev-environment.git
```

- Create and modify configuration file

``` bash
$ cd wp-dev-environment
$ mv .configuration.example.json .configuration.json
$ vim .configuration.json
```

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

## Directories

``` shell
-- Project's dir
  |-- build    						# Build folder
	|-- plugins						# Plugin's build folder
	|-- themes						# Theme's build folder
  |-- src
	|-- assets						# for Images, Icons, Fonts, etc
  |-- build
  |-- webfolder
```
