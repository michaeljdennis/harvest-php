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
