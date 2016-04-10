# PHP HTTP Status Exceptions

[![GitHub license](https://img.shields.io/badge/license-New%20BSD-blue.svg)](https://raw.githubusercontent.com/ganbarodigital/php-http-status-aware/develop/LICENSE.md)
[![@ganbarodigital on Twitter](http://img.shields.io/badge/twitter-%40ganbarodigital-blue.svg?style=flat)](https://twitter.com/ganbarodigital)
[![Total Downloads](https://img.shields.io/packagist/dt/ganbarodigital/php-http-status-aware.svg?style=flat)](https://packagist.org/packages/ganbarodigital/php-http-status-aware)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/ganbarodigital/php-http-status-aware/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/ganbarodigital/php-http-status-aware/?branch=master)
[![Coverage Status](https://coveralls.io/repos/ganbarodigital/php-http-status-aware/badge.svg)](https://coveralls.io/r/ganbarodigital/php-http-status-aware)
[![Dependency Status](https://www.versioneye.com/php/ganbarodigital:php-http-status-aware/dev-master/badge.svg)](https://www.versioneye.com/php/ganbarodigital:php-http-status-aware/dev-master)
[![Reference Status](https://www.versioneye.com/php/ganbarodigital:php-http-status-aware/reference_badge.svg?style=flat)](https://www.versioneye.com/php/ganbarodigital:php-http-status-aware/references)
## Introduction

The PHP HTTP Status Aware library provides:

* the `HttpStatusAware` interface, and
* a set of easy-to-use traits that implement the `HttpStatusAware` interface

You can use these in your own exceptions to map your exceptions onto HTTP status codes. This leaves the `code` field in PHP exceptions free for your own use.

You can also use these traits in any entity or value objects that map onto HTTP status codes.

## Installation

Run this command to add this library to your `composer.json` file:

    composer require ganbarodigital/php-http-status-aware

## Usage

See [our docs page](http://ganbarodigital.github.io/php-http-status-aware) for a tutorial and reference documentation.
