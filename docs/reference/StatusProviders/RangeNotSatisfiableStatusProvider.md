---
currentSection: reference
currentItem: StatusProviders
pageflow_prev_url: UnsupportedMediaTypeStatusProvider.html
pageflow_prev_text: UnsupportedMediaTypeStatusProvider trait
pageflow_next_url: ExpectationFailedStatusProvider.html
pageflow_next_text: ExpectationFailedStatusProvider trait
---

# RangeNotSatisfiableStatusProvider

<div class="callout info">
Since v1.0.0
</div>

## Description

`RangeNotSatisfiableStatusProvider` is a trait. It adds a `getHttpStatus()` method to your entity, value object or exception. This method returns a [`HttpStatus`](../Interfaces/HttpStatus.html) value object that represents the status [HTTP 416 Range Not Satisfiable](../StatusValues/RangeNotSatisfiableStatus.html).

`RangeNotSatisfiableStatusProvider` satisfies the [`HttpStatusProvider`](../Interfaces/HttpStatusProvider.html) and [`HttpException`](../Interfaces/HttpException) interfaces.

## Public Interface

`RangeNotSatisfiableStatusProvider` has the following public interface:

```php
// RangeNotSatisfiableStatusProvider lives in this namespace
namespace GanbaroDigital\HttpStatus\StatusProviders\RequestError;

// our return types
use GanbaroDigital\HttpStatus\StatusValues\RequestError\RangeNotSatisfiableStatus;

trait RangeNotSatisfiableStatusProvider
{
    /**
     * returns the HTTP status code that best represents this object
     *
     * @return RangeNotSatisfiableStatus
     */
    public function getHttpStatus();
}
```

## How To Use

### In Value Objects and Entities

Use this trait in any value object or entity that maps onto the HTTP 416 status.

```php
use GanbaroDigital\HttpStatus\Interfaces\HttpStatusProvider;
use GanbaroDigital\HttpStatus\StatusProviders\RequestError\RangeNotSatisfiableStatusProvider;

class MyValueObject implements HttpStatusProvider
{
    // adds getHttpStatus()
    use RangeNotSatisfiableStatusProvider;
}
```

PHP does not let traits implement interfaces. Your value object or entity will need to implement the `HttpStatusProvider` interface explicitly.

### In Exceptions

Use this trait in any exception that maps onto the HTTP 416 status.

```php
use GanbaroDigital\HttpStatus\Interfaces\HttpRequestErrorException;
use GanbaroDigital\HttpStatus\StatusProviders\RequestError\RangeNotSatisfiableStatusProvider;

class MyException implements HttpRequestErrorException
{
    // adds getHttpStatus()
    use RangeNotSatisfiableStatusProvider;
}
```

PHP does not let traits implement interfaces. Your value object or entity will need to implement the `HttpRequestErrorException` interface explicitly.

## Class Contract

Here is the contract for this class:

    GanbaroDigital\HttpStatus\StatusProviders\RequestError\RangeNotSatisfiableStatusProvider
     [x] Can instantiate class that uses this trait
     [x] Returns range not satisfiable status

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

* `RangeNotSatisfiableStatusProvider` returns a new instance of `RangeNotSatisfiableStatus` each time you call `getHttpStatus()`.

## See Also

* [`RangeNotSatisfiableStatus`](../StatusValues/RangeNotSatisfiableStatus.html) - the HTTP status value object returned by this trait
* [`HttpStatusProvider`](../Interfaces/HttpStatusProvider.html) - interface that your value object or entity should implement
* [`HttpRequestErrorException`](../Interfaces/HttpRequestErrorException.html) - interface that your exception should implement
