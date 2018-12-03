# Harvest PHP

A PHP package for the [Harvest](https://www.getharvest.com/) API.

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

## To Do

- [ ] Add all endpoints
- [ ] Add tests
