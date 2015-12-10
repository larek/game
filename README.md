# Babicard project

## About
Built with yii2 - [official guide](http://www.yiiframework.com/doc-2.0/guide-index.html)

## Setup

Run following commands

Clone the repo

`git clone https://github.com/larek/game.git`

cd into the game directory

`cd game`

Load node modules by running

`npm install`

Install composer dependencies by running

`gulp composer`

Now run gulp to compile sass and do all the fancy things.

`gulp`

If you are developing leave gulp running, this way it will update the CSS file when you edit SASS file.

Create a database called game and import data from `game/dump/game.sql`

Start your local server and you will be able to view the site in your local environment.

Config file can be viewd in `/basic/config/db.php`