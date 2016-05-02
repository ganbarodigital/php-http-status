---
currentSection: reference
currentItem: Interfaces
pageflow_prev_url: HttpRequestErrorException.html
pageflow_prev_text: HttpRequestErrorException interface
pageflow_next_url: HttpStatus.html
pageflow_next_text: HttpStatus interface
---

# HttpRuntimeErrorException

<div class="callout warning">
Not yet in a tagged release
</div>

## Description

`HttpRuntimeErrorException` is an interface. It is implemented by any exception that maps onto any of the HTTP 5xx status values.

## Public Interface

`HttpRuntimeErrorException` has the following public interface:

```php
// HttpRuntimeErrorException lives in this namespace
namespace GanbaroDigital\HttpStatus\Interfaces;

// our base interfaces
use GanbaroDigital\HttpStatus\Interfaces\HttpException;

// our return types
use GanbaroDigital\HttpStatus\Interfaces\HttpStatus;

interface HttpRuntimeErrorException extends HttpException
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

Implement `HttpRuntimeErrorException` in any exceptions that map onto a HTTP 5xx status value. Combine it with one of the [status provider traits](../StatusProviders/index.html) to quickly and easily add the `getHttpStatus()` method that `HttpRuntimeErrorException` requires:

```php
use GanbaroDigital\HttpStatus\Interfaces\HttpRuntimeErrorException;
use GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\InsufficientStorageStatusProvider;
use RuntimeException;

class MyException extends HttpRuntimeErrorException
{
    // adds getHttpStatus()
    // returns a HttpStatus value object of 507 Insufficient Storage
    use InsufficientStorageStatusProvider;
}

try {
    // ...
}
catch (HttpRuntimeErrorException $e) {
    $httpStatus = $e->getHttpStatus();
    // ...
}
```

## Notes

None at this time.

## See Also

* [Status provider traits](../StatusProviders/index.html) - helpers to provide the `getHttpStatus()` method
* [`HttpException`](HttpException.html) - base interface
