---
currentSection: usage
currentItem: httpExceptions
pageflow_prev_url: http-status-provider-traits.html
pageflow_prev_text: HTTP Status Provider Traits
pageflow_next_url: ../reference/index.html
pageflow_next_text: Reference
---

# HTTP Exceptions

## Implementing The HttpException Interfaces

There's a `HttpException` interface for each class of HTTP Status code.

HTTP Status Code | Exception Interface
-----------------|--------------------
1xx | [`GanbaroDigital\HttpStatus\Interfaces\HttpInformationalException`](../reference/Interfaces/HHttpInformationalException.html)
2xx | [`GanbaroDigital\HttpStatus\Interfaces\HttpSuccessfulStatusException`](../reference/HttpSuccessfulStatusException.html)
3xx | [`GanbaroDigital\HttpStatus\Interfaces\HttpRedirectionException`](../reference/HttpRedirectionException.html)
4xx | [`GanbaroDigital\HttpStatus\Interfaces\HttpRequestErrorException`](../reference/HttpRequestErrorException.html)
5xx | [`GanbaroDigital\HttpStatus\Interfaces\HttpRuntimeErrorException`](../reference/HttpRuntimeErrorException.html)

Each of these `HttpException` interfaces:

* extends `GanbaroDigital\HttpStatus\Interfaces\HttpException`
* extends `GanbaroDigital\HttpStatus\Interfaces\HttpStatusProvider`

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

## Catching HTTP Exceptions

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
