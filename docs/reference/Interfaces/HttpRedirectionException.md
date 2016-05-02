---
currentSection: reference
currentItem: Interfaces
pageflow_prev_url: HttpSuccessfulException.html
pageflow_prev_text: HttpSuccessfulException interface
pageflow_next_url: HttpRequestErrorException.html
pageflow_next_text: HttpRequestErrorException interface
---

# HttpRedirectionException

<div class="callout info">
Since v2.0.0
</div>

## Description

`HttpRedirectionException` is an interface. It is implemented by any exception that maps onto any of the HTTP 3xx status values.

## Public Interface

`HttpRedirectionException` has the following public interface:

```php
// HttpRedirectionException lives in this namespace
namespace GanbaroDigital\HttpStatus\Interfaces;

// our base interfaces
use GanbaroDigital\HttpStatus\Interfaces\HttpException;

// our return types
use GanbaroDigital\HttpStatus\Interfaces\HttpStatus;

interface HttpRedirectionException extends HttpException
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

Implement `HttpRedirectionException` in any exceptions that map onto a HTTP 3xx status value. Combine it with one of the [status provider traits](../StatusProviders/index.html) to quickly and easily add the `getHttpStatus()` method that `HttpRedirectionException` requires:

```php
use GanbaroDigital\HttpStatus\Interfaces\HttpRedirectionException;
use GanbaroDigital\HttpStatus\StatusProviders\Redirection\TemporaryRedirectStatusProvider;
use RuntimeException;

class MyException extends HttpRedirectionException
{
    // adds getHttpStatus()
    // returns a HttpStatus value object of 307 Temporary Redirect
    use TemporaryRedirectStatusProvider;
}

try {
    // ...
}
catch (HttpRedirectionException $e) {
    $httpStatus = $e->getHttpStatus();
    // ...
}
```

## Notes

None at this time.

## See Also

* [Status provider traits](../StatusProviders/index.html) - helpers to provide the `getHttpStatus()` method
* [`HttpException`](HttpException.html) - base interface
