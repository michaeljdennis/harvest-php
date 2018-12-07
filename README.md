# Harvest PHP

A PHP package for the [Harvest](https://www.getharvest.com/) API.

[![Maintainability](https://api.codeclimate.com/v1/badges/a7e2b93a6db64440a928/maintainability)](https://codeclimate.com/github/michaeljdennis/harvest-php/maintainability)
![PHP from Packagist](https://img.shields.io/packagist/php-v/michaeljdennis/harvest-php.svg)
[![Packagist](https://img.shields.io/packagist/dt/michaeljdennis/harvest-php.svg)](https://packagist.org/packages/michaeljdennis/harvest-php)
![GitHub](https://img.shields.io/github/license/michaeljdennis/harvest-php.svg)

## Installation

```
composer require michaeljdennis/harvest-php
```

## Usage

### Plain PHP

```
use Harvest\Harvest;
use Harvest\Client;
use GuzzleHttp\Client as HttpClient;

$harvest = new Harvest(
    new Client(
        new HttpClient()
    )
);

$harvest->projects->get();
```

### Laravel

```
use Harvest;

Harvest::projects()->get();
```
