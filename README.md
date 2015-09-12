[![License](https://img.shields.io/badge/license-GPL--3.0%2B-red.svg?style=flat-square)](http://www.gnu.org/licenses/gpl-2.0.html)
# Grunt Transifex WordPress #

A set of grunt tasks to integrate i18n tools and Transifex to your WordPress plugin/theme Grunt workflow.

* Create a `.pot` file

* Create a `.pot` file and push it to Transifex

* Pulls translations from Transifex and create the needed .mo files

* Compile: Builds a zip folder of all your files - ready to deploy

*Also light support for WebTranslateIt if preferred.*

## Requirements

* Node.js - [Install Node.js](https://github.com/joyent/node/wiki/Installing-Node.js-via-package-manager)
* Grunt-cli and Grunt (`npm install grunt-cli -g`)
* Transifex Client - [Install tx client](http://docs.transifex.com/developer/client/setup)
* Gettext - [Install Gettext](https://www.gnu.org/software/gettext/) or `brew install gettext` -> [Homebrew formula for OS X](http://brewformulas.org/Gettext)

## Getting started
If you haven't used [Grunt](http://gruntjs.com/) before, check out Chris Coyier's post on [getting started with Grunt](http://24ways.org/2013/grunt-is-not-weird-and-hard/).

And for more WP-Grunt optimization [Supercharging your Gruntfile](http://www.html5rocks.com/en/tutorials/tooling/supercharging-your-gruntfile/).

All Grunt configuration are separated into different files already setup for you and almost all Grunt config setups are done in the package.json file

Clone this repo, cd to the directory, run `npm install` to install the necessary packages.

```
git clone https://github.com/reduxframework/grunt-transifex-wordpress
cd grunt-transifex-wordpress
npm install
grunt
```

## Setup & Configuration

### Transifex

#### TX configuration

Make sure you have a ~/.transifexrc.
It is unique per user and stores the hostname, username and password for every Transifex server that you are using. It is stored in the user's home directory.

```
[https://www.transifex.com]
username = user
token =
password = p@ssw0rd
hostname = https://www.transifex.com
```

More info about [setting up your Transifex client](http://docs.transifex.com/developer/client/config#transifexrc)

#### TX client config file

In .tx->config replace the `project_slug` and the `pot_slug` by your own Transifex project and organization.

### packages.json

All variables are setup in this file. Change all settings to reflect your own project details. Should be pretty strait forward.

#### package.json customizations

In your package.json, replace in the section named `pot` the data below:

```js
  "directories": {
    "js": "",
    "sass": "",
    "css": "",
    "build": "./build",
    "languages": "./languages"
  },
  "pull_percentage": "75",
  "pot": {
    "type": "wp-plugin", // wp-plugin or wp-theme
    "textdomain": "example-textdomain", // Your custom textdomain
    "default_lang": "en_US", // Default language of your project
    "include": [], // Files you want to include outside of this directory
    "exclude": [], // Files you want to exclude from within this directory
    "header": {
      "bugs": "http://dovy.io/", // Header for your pot file
      "team": "Dovy.io <me@dovy.io>", // Team name
      "last_translator": "Dovy.io <me@dovy.io>" // Last person to update the pot
    }
  },
```

That's it you're ready to take over the world with these commands!

## How it works

### Generate `.pot` file

`grunt makepot`

### Check/replace textdomains and run makepot

`grunt build:i18n`

### Generate `.pot` file and push it to Transifex

`grunt tx-push`

### Pulls translations from Transifex and create the .mo files

`grunt tx-pull`

### Automatically change all textdomains in the project with the declared pot.textdomain value
*BE SURE to include all possible textdomains in your project OR you'll get duplicated domains added to functions that will mess things up.*

`grunt updatedomains`

### Extras: Builds a zip folder of all your files - ready to use

`grunt build`

### Thanks to:


[grunt-transifex-wordpress](https://github.com/WP-Translations/grunt-transifex-wordpress) by FX Bénard of WP-Translations.org for the base of this repo.

[grunt-potomo](https://github.com/axisthemes/grunt-potomo) by AxisThemes to generate automatically the .mo files.

[transifex client](https://github.com/transifex/transifex-client) the client command tool and much more ...

All the [Grunt Crew](https://github.com/gruntjs/) & [@grappler](https://github.com/grappler), the i18n Petit-Suisse expert ;)
