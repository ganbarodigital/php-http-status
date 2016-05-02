---
currentSection: reference
currentItem: Interfaces
pageflow_prev_url: HttpException.html
pageflow_prev_text: HttpException interface
pageflow_next_url: HttpSuccessfulException.html
pageflow_next_text: HttpSuccessfulException interface
---

# HttpInformationalException

<div class="callout warning">
Not yet in a tagged release
</div>

## Description

`HttpInformationalException` is an interface. It is implemented by any exception that maps onto any of the HTTP 1xx status values.

## Public Interface

`HttpInformationalException` has the following public interface:

```php
// HttpInformationalException lives in this namespace
namespace GanbaroDigital\HttpStatus\Interfaces;

// our base interfaces
use GanbaroDigital\HttpStatus\Interfaces\HttpException;

// our return types
use GanbaroDigital\HttpStatus\Interfaces\HttpStatus;

interface HttpInformationalException extends HttpException
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

Implement `HttpInformationalException` in any exceptions that map onto a HTTP 1xx status value. Combine it with one of the [status provider traits](../StatusProviders/index.html) to quickly and easily add the `getHttpStatus()` method that `HttpInformationalException` requires:

```php
use GanbaroDigital\HttpStatus\Interfaces\HttpInformationalException;
use GanbaroDigital\HttpStatus\StatusProviders\Informational\ContinueStatusProvider;
use RuntimeException;

class MyException extends HttpInformationalException
{
    // adds getHttpStatus()
    // returns a HttpStatus value object of 100 Continue
    use ContinueStatusProvider;
}

try {
    // ...
}
catch (HttpInformationalException $e) {
    $httpStatus = $e->getHttpStatus();
    // ...
}
```

## Notes

None at this time.

## See Also

* [Status provider traits](../StatusProviders/index.html) - helpers to provide the `getHttpStatus()` method
* [`HttpException`](HttpException.html) - base interface
