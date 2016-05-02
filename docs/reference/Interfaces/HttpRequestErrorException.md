---
currentSection: reference
currentItem: Interfaces
pageflow_prev_url: HttpRedirectionException.html
pageflow_prev_text: HttpRedirectionException interface
pageflow_next_url: HttpRuntimeErrorException.html
pageflow_next_text: HttpRuntimeErrorException interface
---

# HttpRequestErrorException

<div class="callout info">
Since v2.0.0
</div>

## Description

`HttpRequestErrorException` is an interface. It is implemented by any exception that maps onto any of the HTTP 4xx status values.

## Public Interface

`HttpRequestErrorException` has the following public interface:

```php
// HttpRequestErrorException lives in this namespace
namespace GanbaroDigital\HttpStatus\Interfaces;

// our base interfaces
use GanbaroDigital\HttpStatus\Interfaces\HttpException;

// our return types
use GanbaroDigital\HttpStatus\Interfaces\HttpStatus;

interface HttpRequestErrorException extends HttpException
{
    /**
     * returns the HTTP status code that best represents this object
     *
     * @return HttpStatus
     * @inheritedFrom HttpStatusProvider
     */
    public function getHttpStatus();
}
```

## How To Use

### In Your Own Exceptions

Implement `HttpRequestErrorException` in any exceptions that map onto a HTTP 4xx status value. Combine it with one of the [status provider traits](../StatusProviders/index.html) to quickly and easily add the `getHttpStatus()` method that `HttpRequestErrorException` requires:

```php
use GanbaroDigital\HttpStatus\Interfaces\HttpRequestErrorException;
use GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\BadRequestStatusProvider;
use RuntimeException;

class MyException extends HttpRequestErrorException
{
    // adds getHttpStatus()
    // returns a HttpStatus value object of 400 Bad Request
    use BadRequestStatusProvider;
}

try {
    // ...
}
catch (HttpRequestErrorException $e) {
    $httpStatus = $e->getHttpStatus();
    // ...
}
```

## Notes

If you're writing a library, think long and hard before using this interface in your library's exceptions.

Good practice dictates that any variables passed into libraries should have already been filtered and validated by the application (or its chosen framework). If a library is throwing exceptions about bad inputs, those exceptions are runtime errors, and they're entirely the fault of the calling application or library.

Think about whether your exception's HTTP status is the right one to return back to the application's user. If it is not, use the [`HttpRuntimeErrorException`](HttpRuntimeErrorException.html) interface instead.

## See Also

* [Status provider traits](../StatusProviders/index.html) - helpers to provide the `getHttpStatus()` method
* [`HttpException`](HttpException.html) - base interface
