---
currentSection: reference
currentItem: Interfaces
pageflow_prev_url: HttpInformationalException.html
pageflow_prev_text: HttpInformationalException interface
pageflow_next_url: HttpRedirectionException.html
pageflow_next_text: HttpRedirectionException interface
---

# HttpSuccessfulException

<div class="callout info">
Since v2.0.0
</div>

## Description

`HttpSuccessfulException` is an interface. It is implemented by any exception that maps onto any of the HTTP 2xx status values.

This interface has been included for completeness. In practice, it would be very unusual to use an exception to indicate that an HTTP request has been successful.

## Public Interface

`HttpSuccessfulException` has the following public interface:

```php
// HttpSuccessfulException lives in this namespace
namespace GanbaroDigital\HttpStatus\Interfaces;

// our base interfaces
use GanbaroDigital\HttpStatus\Interfaces\HttpException;

// our return types
use GanbaroDigital\HttpStatus\Interfaces\HttpStatus;

interface HttpSuccessfulException extends HttpException
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

Implement `HttpSuccessfulException` in any exceptions that map onto a HTTP 2xx status value. Combine it with one of the [status provider traits](../StatusProviders/index.html) to quickly and easily add the `getHttpStatus()` method that `HttpSuccessfulException` requires:

```php
use GanbaroDigital\HttpStatus\Interfaces\HttpSuccessfulException;
use GanbaroDigital\HttpStatus\StatusProviders\Successful\OkStatusProvider;
use RuntimeException;

class MyException extends HttpSuccessfulException
{
    // adds getHttpStatus()
    // returns a HttpStatus value object of 200 OK
    use OkStatusProvider;
}

try {
    // ...
}
catch (HttpSuccessfulException $e) {
    $httpStatus = $e->getHttpStatus();
    // ...
}
```

## Notes

None at this time.

## See Also

* [Status provider traits](../StatusProviders/index.html) - helpers to provide the `getHttpStatus()` method
* [`HttpException`](HttpException.html) - base interface
