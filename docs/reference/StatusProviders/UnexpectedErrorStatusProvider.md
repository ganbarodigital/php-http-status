---
currentSection: reference
currentItem: StatusProviders
pageflow_prev_url: InternalServerErrorStatusProvider.html
pageflow_prev_text: InternalServerErrorStatusProvider trait
pageflow_next_url: NotImplementedStatusProvider.html
pageflow_next_text: NotImplementedStatusProvider trait
---

# UnexpectedErrorStatusProvider

<div class="callout info">
Since v1.0.0
</div>

## Description

`UnexpectedErrorStatusProvider` is a trait. It adds a `getHttpStatus()` method to your entity, value object or exception. This method returns a [`HttpStatus`](../Interfaces/HttpStatus.html) value object that represents the status [HTTP 500 Unexpected Error](../StatusValues/UnexpectedErrorStatus.html).

HTTP 500 Unexpected Error is a non-standard HTTP status - the standard one is [HTTP 500 Internal Server Error](../StatusValues/InternalServerErrorStatus.html). `UnexpectedErrorStatusProvider` has been added for use by CLI applications, where it just feels strange to report "Internal Server Error".

`UnexpectedErrorStatusProvider` satisfies the [`HttpStatusProvider`](../Interfaces/HttpStatusProvider.html) and [`HttpException`](../Interfaces/HttpException) interfaces.

## Public Interface

`UnexpectedErrorStatusProvider` has the following public interface:

```php
// UnexpectedErrorStatusProvider lives in this namespace
namespace GanbaroDigital\HttpStatus\StatusProviders\RuntimeError;

// our return types
use GanbaroDigital\HttpStatus\StatusValues\RuntimeError\UnexpectedErrorStatus;

trait UnexpectedErrorStatusProvider
{
    /**
     * returns the HTTP status code that best represents this object
     *
     * @return UnexpectedErrorStatus
     */
    public function getHttpStatus();
}
```

## How To Use

### In Value Objects and Entities

Use this trait in any value object or entity that maps onto the HTTP 500 status.

```php
use GanbaroDigital\HttpStatus\Interfaces\HttpStatusProvider;
use GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\UnexpectedErrorStatusProvider;

class MyValueObject implements HttpStatusProvider
{
    // adds getHttpStatus()
    use UnexpectedErrorStatusProvider;
}
```

PHP does not let traits implement interfaces. Your value object or entity will need to implement the `HttpStatusProvider` interface explicitly.

### In Exceptions

Use this trait in any exception that maps onto the HTTP 500 status.

```php
use GanbaroDigital\HttpStatus\Interfaces\HttpRuntimeErrorException;
use GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\UnexpectedErrorStatusProvider;

class MyException implements HttpRuntimeErrorException
{
    // adds getHttpStatus()
    use UnexpectedErrorStatusProvider;
}
```

PHP does not let traits implement interfaces. Your value object or entity will need to implement the `HttpRuntimeErrorException` interface explicitly.

## Class Contract

Here is the contract for this class:

    GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\UnexpectedErrorStatusProvider
     [x] Can instantiate class that uses this trait
     [x] Returns unexpected error status

Class contracts are built from this class's unit tests.

<div class="callout success">
Future releases of this class will not break this contract.
</div>

<div class="callout info" markdown="1">
Future releases of this class may add to this contract. New additions may include:

* clarifying existing behaviour (e.g. stricter contract around input or return types)
* add new behaviours (e.g. extra class methods)
</div>

<div class="callout warning" markdown="1">
When you use this class, you can only rely on the behaviours documented by this contract.

If you:

* find other ways to use this class,
* or depend on behaviours that are not covered by a unit test,
* or depend on undocumented internal states of this class,

... your code may not work in the future.
</div>

## Notes

* `UnexpectedErrorStatusProvider` returns a new instance of `UnexpectedErrorStatus` each time you call `getHttpStatus()`.

## See Also

* [`UnexpectedErrorStatus`](../StatusValues/UnexpectedErrorStatus.html) - the HTTP status value object returned by this trait
* [`HttpStatusProvider`](../Interfaces/HttpStatusProvider.html) - interface that your value object or entity should implement
* [`HttpRuntimeErrorException`](../Interfaces/HttpRuntimeErrorException.html) - interface that your exception should implement
