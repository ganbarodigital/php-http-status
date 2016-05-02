---
currentSection: reference
currentItem: Interfaces
pageflow_prev_url: HttpRuntimeErrorStatus.html
pageflow_prev_text: HttpRuntimeErrorStatus interface
---

# HttpStatusProvider

<div class="callout info">
Since v1.0.0
</div>

## Description

`HttpStatusProvider` is an interface. Implement this on any object that can provide a [`HttpStatus`](HttpStatus.html) value object.

## Public Interface

`HttpStatusProvider` provides the following public interface:

```php
// HttpStatusProvider lives in this namespace
namespace GanbaroDigital\HttpStatus\Interfaces;

// our return types
use GanbaroDigital\HttpStatus\Interfaces\HttpStatus;

/**
 * HttpStatusProvider is implemented by any entity, value class or exception that
 * is mapped onto a HTTP status code.
 *
 * All of the traits in the `GanbaroDigital\HttpStatus\StatusProviders` namespace
 * implement this interface. However, PHP does not allow traits to state that
 * they implement an interface (grrr).
 *
 * You need to manually add 'implements HttpStatusProvider' to every one
 * of your exception classes that uses any of our `StatusProvider` traits.
 */
interface HttpStatusProvider
{
    /**
     * returns the HTTP status code that best represents this object
     *
     * @return HttpStatus
     */
    public function getHttpStatus();
}
```

## How To Use

### With Entities And Value Objects

Your entities and value objects can implement `HttpStatusProvider` directly:

```php
use GanbaroDigital\HttpStatus\Interfaces\HttpStatusProvider;
use GanbaroDigital\HttpStatus\StatusValues\HttpStatusObject;

class MyClass implements HttpStatusProvider
{
    public function getHttpStatus()
    {
        return new HttpStatusObject(498, "Invalid token");
    }
}
```

### With HttpStatusProvider Traits

A better way is to use the pre-build [status provider traits](../StatusProviders/index.html) that come with the _HTTP Status Library_.

```php
use GanbaroDigital\HttpStatus\Interfaces\HttpStatusProvider;
use GanbaroDigital\HttpStatus\StatusProviders\RequestError\UnprocessableEntityStatusProvider;

class MyClass implements HttpStatusProvider
{
    // adds getHttpStatus() for you
    // returns an UnprocessableEntityStatus
    use UnprocessableEntityStatusProvider;
}
```

There's a trait for each HTTP status value.

### With HttpExceptions

If you're creating an exception class, you'll want to use one of the `HttpException` interfaces instead. There's an interface for each type of HTTP status, which makes it much easier to catch exceptions in your code.

```php
use GanbaroDigital\HttpStatus\Interfaces\HttpRequestErrorException;
use GanbaroDigital\HttpStatus\StatusProviders\RequestError\UnprocessableEntityStatusProvider;
use RuntimeException;

class MyException extends RuntimeException implements HttpRequestErrorException
{
    // adds getHttpStatus() for you
    // returns an UnprocessableEntityStatus
    use UnprocessableEntityStatusProvider;
}

try {
    throw new MyException("bad input");
}
catch (HttpRequestErrorException $e) {
    $httpStatus = $e->getHttpStatus();
    // ...
}
```

All of the `HttpExceptions` interfaces extend `HttpStatusProvider`.

## Notes

None at this time.

## See Also

* [`HttpExceptions`](../usage/http-exceptions.html)
