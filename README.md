# Amadeus It Group PHP Developer Technical Task

## Overview

Hello %username%. Here would be your start point in big amadeus company. This task is like a game and I hope it would
be interesting. In any case, imagine a zoo. It contains animals. Animals like birds, fish, etc. These animals have 
their abilities, for instance, birds can fly, fish can swim, monkeys can walk. Every animal has to eat, that's why 
every animal has such ability. There are several issues and we hope you'd solve them for us.
   
## Instructions

* Create a branch named by your name.surname
* Look at our code, believe me, it's kinda shitty
* Make this code as good as you can
  * Make as many commits as you want
  * Show us you power
* Push into a repository
* Create a Pull Request
* Wait until our CI commit into your branch a new file with new instructions (in progress, hasn't been done yet)

## Nice to have in result code

* php 7
* Unit tests
* docker environment

# Solution by Vladimir Voznyi
### To run docker environment:

```
docker-compose build
docker-compose up -d
```

### To work with correct environment enter the container:

```
docker exec -i -t php-with-composer /bin/bash
```
To see how project works:
```
php app/public/index.php
```

To run tests:
```
cd app
vendor/bin/phpunit
```