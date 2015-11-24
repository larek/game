# Babicard project

## About
Built with yii2 - [official guide](http://www.yiiframework.com/doc-2.0/guide-index.html)

## Setup

Run following commands

Clone the repo

`git clone https://github.com/larek/game.git`

Load node modules by running

`npm install`

Now run gulp to generate the CSS

`gulp`

If you are developing leave gulp running, this way it will update the CSS file when you edit SASS file.

Load dependancies using [composer](https://getcomposer.org/)

```
cd game/basic
php composer.phar install
```

Create a database called game and import data from `game/dump/game.sql`

Start your local server and you will be able to view the site in your local environment.

Config file can be viewd in `/basic/config/db.php`