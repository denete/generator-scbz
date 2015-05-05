# SCBZ Site Generator

> [Yeoman](http://yeoman.io) generator that scaffolds out a SCBZ microsite


## Features

Please see our [gulpfile.js](app/templates/gulpfile.js) for up to date information on what is supported

* CSS pre-processing
* CSS concatenation and minification
* JS concatenation and minification
* Image optimization

## Getting Started

- Install dependencies: `npm install --global yo bower`
- Clone this repository
- Link and install the generator: `cd generator-scbz`, `npm link`, `cd ..`, `npm install ./generator-scbz/`
- Create a directory for the new site and `cd` into that directory
- Run `yo scbz` to scaffold the site
- Run `gulp` to build the site

## Options

- `--skip-install-message`
  Skips the the message displayed after scaffolding has finished and before the dependencies are being installed.
- `--skip-install`
  Skips the automatic execution of `bower` and `npm` after scaffolding has finished.
