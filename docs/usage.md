---
currentSection: usage
currentItem: usage
pageflow_prev_url: installation.html
pageflow_prev_text: Installation
pageflow_next_url: HttpStatus.html
pageflow_next_text: HttpStatus
---

# Usage

## Introduction

You can use the _HTTP Status Library_ in two ways:

* simply instantiate new value objects for known HTTP status codes, and/or
* use the traits in the `StatusProviders` namespace to add a `getHttpStatus()` method to your own value objects, entities and exceptions
* implement one of the `HttpException` interfaces to allow code to catch whole classes of exception quickly and easily

## Using The Predefined Value Objects

There's a predefined value object for each supported HTTP status code. The full list of objects is here: [HTTP Status Value Classes](httpStatusValues.html).

You can create new instances of each HTTP status value object, and then use these however you want:

```php
// import the class(es) you need
use GanbaroDigital\HttpStatus\StatusValues\Informational\ContinueStatus;
use GanbaroDigital\HttpStatus\Interfaces\InformationalStatus;

// create the value object
$httpStatus = new ContinueStatus;

// making comparisons
//
// echos '1'
echo $httpStatus instanceof ContinueStatus . PHP_EOL;
echo $httpStatus instanceof InformationalStatus . PHP_EOL;
```

Each predefined value object implements one of the following interfaces, so that you can easily tell what type of HTTP status it is:

HTTP Status Code | Interface To Test For
-----------------|----------------------
1xx | `GanbaroDigital\HttpStatus\Interfaces\InformationalStatus`
2xx | `GanbaroDigital\HttpStatus\Interfaces\SuccessfulStatus`
3xx | `GanbaroDigital\HttpStatus\Interfaces\RedirectStatus`
4xx | `GanbaroDigital\HttpStatus\Interfaces\RequestErrorStatus`
5xx | `GanbaroDigital\HttpStatus\Interfaces\RuntimeErrorStatus`

## Using The Traits

There's a trait for each supported HTTP status code. The full list of traits is here: [HTTP Status Provider Traits](httpStatusProviders.md).

Each trait is used exactly the same way:

```php
// import the trait and associated interface
use GanbaroDigital\HttpStatus\StatusProviders\Informational\ContinueStatusProvider;
use GanbaroDigital\HttpStatus\Interfaces\HttpStatusProvider;

class MyValueObject implements HttpStatusProvider
{
    use ContinueStatusProvider;
}
```

Each trait adds a public method `getHttpStatus()` to your class:

```php
/**
 * returns the HttpStatus that we have mapped onto
 *
 * @return HttpStatus
 */
public function getHttpStatus();
```

The trait that you pick decides which HTTP status that `getHttpStatus()` will return.

## Implementing The HttpException Interfaces

There's a `HttpException` interface for each class of HTTP Status code.

HTTP Status Code | Exception Interface
-----------------|--------------------
1xx | `GanbaroDigital\HttpStatus\Interfaces\HttpInformationalException`
2xx | `GanbaroDigital\HttpStatus\Interfaces\HttpSuccessfulStatusException`
3xx | `GanbaroDigital\HttpStatus\Interfaces\HttpRedirectionException`
4xx | `GanbaroDigital\HttpStatus\Interfaces\HttpRequestErrorException`
5xx | `GanbaroDigital\HttpStatus\Interfaces\HttpRuntimeErrorException`

Each of these `HttpException` interfaces:

* extends `GanbaroDigital\HttpStatus\Interfaces\HttpException`
* extends `GanbaroDigital\HttpStatus\Interface\HttpStatusProvider`

Use this in combination with one of the [HTTP Status Provider Traits](httpStatusProviders.md) to map your exception onto a HTTP status code:

```php
use GanbaroDigital\HttpStatus\Interfaces\HttpRequestErrorException;
use GanbaroDigital\HttpStatus\StatusProviders\RequestError\MethodNotAllowedStatusProvider;

class UpdateNotAllowed extends Exception implements HttpRequestErrorException
{
    // adds `getHttpStatus()` to the exception
    use MethodNotAllowedStatusProvider;
}
```

This gives you several different ways to catch any exception that uses the `HttpException` interfaces.

```php
// example 1: catch a specific exception
try {
    throw UpdateNotAllowed("notifications are read-only");
}
catch (UpdateNotAllowed $e) {
    $httpStatus = $e->getHttpStatus();
    // ...
}
```

```php
// example 2: catch all exceptions that are request errors
use GanbaroDigital\HttpStatus\Interfaces\HttpRequestErrorException;

try {
    throw new UpdateNotAllowed("notifications are read-only");
}
catch (HttpRequestErrorException $e) {
    $httpStatus = $e->getHttpStatus();
    // ...
}
```

```php
// example 3: catch all exceptions that map onto a HTTP status code
use GanbaroDigital\HttpStatus\Interfaces\HttpException;

try {
    throw new UpdateNotAllowed("notifications are read-only");
}
catch (HttpException $e) {
    $httpStatus = $e->getHttpStatus();
    // ...
}
```
