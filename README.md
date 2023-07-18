
# Farm Connect

## Table of Contents

- [Introduction](#introduction)
- [Built With](#built-with)
- [How it works](#how-it-works)
- [Logging in](#login)
- [Login procedure](#procedure)

## Introduction

Farm Connect is a web application system that utilizes blockchain technology to enable real-time tracking and location monitoring of agricultural products from farms to their respective destinations.

## Built With

The following system has been built using the following:
- [Laravel 10](https://laravel.com/docs/10.x/installation)
- [spatie/laravel-permission](https://github.com/spatie/laravel-permission)
- [Laravel Breeze](https://laravel.com/docs/10.x/starter-kits#breeze-and-blade)
- [Laravel Pusher](https://laravel.com/docs/10.x/broadcasting#client-side-installation)

## How it works
Once the user is registered within the system, they can input their product details and make an order for their transportation. Once loaded, the user will be prompted to make a payment before the product has been transported. Afterwards, the vehicle assigned to transport the goods is tracked using the system. After arriving at the destination, a confirmation message is sent to the user and the farmer receives a notification once it arrives.
## Installation Process

In order to have the system within your device, follow the steps given:

- To get started, you need to install [PHP Composer](https://getcomposer.org/).
- `composer create-project balajidharma/basic-laravel-admin-panel admin-app`
- `cd admin-app`
- Create a new MYSQL database and update database details in `.env` file

## Login


### Login Procedure

