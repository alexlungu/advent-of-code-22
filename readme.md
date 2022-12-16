## [Advent of Code 2022](https://adventofcode.com/2022)

This repository contains my solutions for Advent of Code.
Each folder contains:

- daily challenge ```readme.md```
- challenge input file ```input.txt```
- php files for each part of the challenge.

### Requirements

- git
- php 8.0
- composer
- a terminal window :)
- advent of code account

### Installation

As simple as running

```
git clone git@github.com:alexlungu/advent-of-code-22.git
cd advent-of-code-22
composer install
```

### Input files

All input files are unique for each participant, overwrite the `input.txt` file in each folder before running the scripts.

### Running the challenges

After modifying the input files, inside your preferred terminal window run any of the commands below for the answer:

###### Day 1
```bash
php DayOne/calories.php
```
###### Day 2
```bash
php DayTwo/rock.php
```
###### Day 3
```bash
php DayThree/rucksack.php
```

# Benchmarks

|                       Day                        |                  PHP                   |
|:------------------------------------------------:|:--------------------------------------:|
|   [DayOne - calories.php](DayOne/calories.php)   | Lowest: `0.380ms`  Highest: `0.6680ms` |
|       [DayTwo - rock.php](DayTwo/rock.php)       | Lowest: `0.474ms`  Highest: `0.795ms`  |
| [DayThree - rucksack.php](DayThree/rucksack.php) | Lowest: `2.469ms`  Highest: `2.625ms`  |
