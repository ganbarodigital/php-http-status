# PHP HTTP Status Exceptions

[![GitHub license](https://img.shields.io/badge/license-New%20BSD-blue.svg)](https://raw.githubusercontent.com/ganbarodigital/php-http-status-exceptions/develop/LICENSE.md)
[![@ganbarodigital on Twitter](http://img.shields.io/badge/twitter-%40ganbarodigital-blue.svg?style=flat)](https://twitter.com/ganbarodigital)
[![Total Downloads](https://img.shields.io/packagist/dt/ganbarodigital/php-http-status-exceptions.svg?style=flat)](https://packagist.org/packages/ganbarodigital/php-http-status-exceptions)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/ganbarodigital/php-http-status-exceptions/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/ganbarodigital/php-http-status-exceptions/?branch=master)
[![Coverage Status](https://coveralls.io/repos/ganbarodigital/php-http-status-exceptions/badge.svg)](https://coveralls.io/r/ganbarodigital/php-http-status-exceptions)
[![Dependency Status](https://www.versioneye.com/php/ganbarodigital:php-http-status-exceptions/dev-master/badge.svg)](https://www.versioneye.com/php/ganbarodigital:php-http-status-exceptions/dev-master)
[![Reference Status](https://www.versioneye.com/php/ganbarodigital:php-http-status-exceptions/reference_badge.svg?style=flat)](https://www.versioneye.com/php/ganbarodigital:php-http-status-exceptions/references)
## Introduction

The PHP HTTP Status Exceptions library provides:

* the `HttpStatusException` interface, and
* a set of easy-to-use traits that implement the `HttpStatusException`

You can use these in your own exceptions to map your exceptions onto HTTP status codes. This leaves the `code` field in PHP exceptions free for your own use.

## Installation

Run this command to add this library to your `composer.json` file:

    composer require ganbarodigital/php-http-status-exceptions

## Usage

See [our docs page](http://ganbarodigital.github.io/php-http-status-exceptions) for a tutorial and reference documentation.
