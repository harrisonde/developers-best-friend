# Laravel Basics
A little bit of practice with Laravel to build awesome things.

##I should expect what?
Expect to experience the basic functions needed to build a site in the Laravel framework.

* Creating a new app
* Installing and using Composer packages
* Routing basics
* Views
* Deploying a Laravel app on a live server

##What is in this repository might I ask?
Well, yes - you absolutely should ask. This repository holds one Laravel app, Developer’s Best Friend, which includes:
* Lorem Ipsum Generator
* Random User Generator

Loading the application will present a landing page with links to the aforementioned tools. Once on the desired tool, a form is presented to collect input with a number of options.

I hope you enjoy!

###Routs
It is always nice to under the URL structure of an application - expressive clean URLs! This application will use the following routs:

Method     | Route        | Description
------------- | -------------
GET  | /       | index
GET  | /text | lore ipsum generator form
GET  | /user | user generator form

POST  | /text | handel lore ipsum generation
POST  | /user | handle user generation

## Packages
Several packages were used in the making of this application. All are awesome because each is open source - go community!

###badcow/lorem-ipsum
Please, go enjoy some bad [badcow/lorem-ipsum](https://packagist.org/packages/badcow/lorem-ipsum)

###fzaninotto/faker
Go ahead, go look at [fzaninotto/faker](https://packagist.org/packages/fzaninotto/faker) 