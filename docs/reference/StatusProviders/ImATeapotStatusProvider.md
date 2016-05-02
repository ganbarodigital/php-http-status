---
currentSection: reference
currentItem: StatusProviders
pageflow_prev_url: ExpectationFailedStatusProvider.html
pageflow_prev_text: ExpectationFailedStatusProvider trait
pageflow_next_url: MisdirectedRequestStatusProvider.html
pageflow_next_text: MisdirectedRequestStatusProvider trait
---

# ImATeapotStatusProvider

<div class="callout info">
Since v1.0.0
</div>

## Description

`ImATeapotStatusProvider` is a trait. It adds a `getHttpStatus()` method to your entity, value object or exception. This method returns a [`HttpStatus`](../Interfaces/HttpStatus.html) value object that represents the status [HTTP 418 I'm a teapot](../StatusValues/ImATeapotStatus.html).

`ImATeapotStatusProvider` satisfies the [`HttpStatusProvider`](../Interfaces/HttpStatusProvider.html) and [`HttpException`](../Interfaces/HttpException) interfaces.

## Public Interface

`ImATeapotStatusProvider` has the following public interface:

```php
// ImATeapotStatusProvider lives in this namespace
namespace GanbaroDigital\HttpStatus\StatusProviders\RequestError;

// our return types
use GanbaroDigital\HttpStatus\StatusValues\RequestError\ImATeapotStatus;

trait ImATeapotStatusProvider
{
    /**
     * returns the HTTP status code that best represents this object
     *
     * @return ImATeapotStatus
     */
    public function getHttpStatus();
}
```

## How To Use

### In Value Objects and Entities

Use this trait in any value object or entity that maps onto the HTTP 418 status.

```php
use GanbaroDigital\HttpStatus\Interfaces\HttpStatusProvider;
use GanbaroDigital\HttpStatus\StatusProviders\RequestError\ImATeapotStatusProvider;

class MyValueObject implements HttpStatusProvider
{
    // adds getHttpStatus()
    use ImATeapotStatusProvider;
}
```

PHP does not let traits implement interfaces. Your value object or entity will need to implement the `HttpStatusProvider` interface explicitly.

### In Exceptions

Use this trait in any exception that maps onto the HTTP 418 status.

```php
use GanbaroDigital\HttpStatus\Interfaces\HttpRequestErrorException;
use GanbaroDigital\HttpStatus\StatusProviders\RequestError\ImATeapotStatusProvider;

class MyException implements HttpRequestErrorException
{
    // adds getHttpStatus()
    use ImATeapotStatusProvider;
}
```

PHP does not let traits implement interfaces. Your value object or entity will need to implement the `HttpRequestErrorException` interface explicitly.

## Class Contract

Here is the contract for this class:

    GanbaroDigital\HttpStatus\StatusProviders\RequestError\ImATeapotStatusProvider
     [x] Can instantiate class that uses this trait
     [x] Returns im a teapot status

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

* `ImATeapotStatusProvider` returns a new instance of `ImATeapotStatus` each time you call `getHttpStatus()`.

## See Also

* [`ImATeapotStatus`](../StatusValues/ImATeapotStatus.html) - the HTTP status value object returned by this trait
* [`HttpStatusProvider`](../Interfaces/HttpStatusProvider.html) - interface that your value object or entity should implement
* [`HttpRequestErrorException`](../Interfaces/HttpRequestErrorException.html) - interface that your exception should implement
