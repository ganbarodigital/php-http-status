---
currentSection: reference
currentItem: Interfaces
pageflow_prev_url: index.html
pageflow_prev_text: Interfaces
pageflow_next_url: HttpInformationalException.html
pageflow_next_text: HttpInformationalException interface
---

# HttpException

<div class="callout warning">
Not yet in a tagged release
</div>

## Description

`HttpException` is an interface. It is the base interface that all of the `HttpExceptions` interfaces extend.

## Public Interface

`HttpException` has the following public interface:

```php
// HttpException lives in this namespace
namespace GanbaroDigital\HttpStatus\Interfaces;

// our base interfaces
use GanbaroDigital\HttpStatus\Interfaces\HttpStatusProvider;

// our return types
use GanbaroDigital\HttpStatus\Interfaces\HttpStatus;

interface HttpException extends HttpStatusProvider
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

### Catching Exceptions

The whole point of `HttpException` is to make it easier to catch exceptions.

```php
try {
    // ...
}
catch (HttpException $e) {
    $httpStatus = $e->getHttpStatus();
    // ...
}
```

You could catch `HttpStatusProvider` exceptions instead. We just think that catching `HttpException` makes your code that little bit more readable.

## Notes

None at this time.

## See Also

* [`HttpStatusProvider`](HttpStatusProvider.html) - base interface
