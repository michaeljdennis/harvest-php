# Harvest PHP

A PHP package for the [Harvest](https://www.getharvest.com/) API.

[![Maintainability](https://api.codeclimate.com/v1/badges/a7e2b93a6db64440a928/maintainability)](https://codeclimate.com/github/michaeljdennis/harvest-php/maintainability)

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
