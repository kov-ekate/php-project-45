### Hexlet tests and linter status:
[![Maintainability](https://api.codeclimate.com/v1/badges/e7482f1e42818c23e2cb/maintainability)](https://codeclimate.com/github/kov-ekate/php-project-45/maintainability)
[![Actions Status](https://github.com/kov-ekate/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/kov-ekate/php-project-45/actions)
# Brain Games

## Описание проекта
Brain Games - набор из пяти консольных игр на проверку внимательности и арифметических навыков.

## Демонстрация работы
# Проверка на чётность
Игра, в которой нужно определить, является ли заданное число чётным.
https://asciinema.org/a/jtx0KVZRMgSOI6xpD8TpP4jQF
## Калькулятор
Игра, в которой предстоит решить несложные математические выражения.
https://asciinema.org/a/wEbbJzNv1gyDeCHk1FUwaOrVt
## НОД
Игра, в которой необходимо определить наибольший общий делитель для двух чисел.
https://asciinema.org/a/01ClsF04CZe7oMVdC8rpUWE9y
## Арифметическая прогрессия
Игра, в которой следует заполнить пропуск в арифметической прогрессии.
https://asciinema.org/a/Ogxn0Oa03SgXfvcZgZw4lE2pC
## Простое ли число?
Игра, в которой нужно определить, является ли число простым.
https://asciinema.org/a/RSAXWGAzktmwLBeaPwr6vzEUx

## Минимальные требования
* PHP 7.4 или выше
* Composer
* GMP

## Установка
1. Клонируйте репозиторий:

```bash
git clone git@github.com:kov-ekate/php-project-45.git
```
    
2. Перейдите в директорию проекта:

 ```bash
cd brain-games
```
    
3. Установите зависимости:

```bash
make install
```

## Запуск

 ```bash
make brain-even  # Для игры "Проверка на чётность"
make brain-calc  # Для игры "Калькулятор"
make brain-gcd  # Для игры "НОД"
make brain-progression  # Для игры "Арифметическая прогрессия"
make brain-prime  #  Для игры "Простое ли число?"
```
