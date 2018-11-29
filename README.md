# Harvest PHP

A PHP package for the Harvest time tracking API.

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
- [x] Add license
- [x] Add Laravel service provider
- [x] Add Laravel package discovery
- [ ] Add tests
