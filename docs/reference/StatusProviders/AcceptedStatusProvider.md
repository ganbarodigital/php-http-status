---
currentSection: reference
currentItem: StatusProviders
pageflow_prev_url: CreatedStatusProvider.html
pageflow_prev_text: CreatedStatusProvider trait
pageflow_next_url: NonAuthoritativeInformationStatusProvider.html
pageflow_next_text: NonAuthoritativeInformationStatusProvider trait
---

# AcceptedStatusProvider

<div class="callout info">
Since v1.0.0
</div>

## Description

`AcceptedStatusProvider` is a trait. It adds a `getHttpStatus()` method to your entity, value object or exception. This method returns a [`HttpStatus`](../Interfaces/HttpStatus.html) value object that represents the status [HTTP 202 Accepted](../StatusValues/AcceptedStatus.html).

`AcceptedStatusProvider` satisfies the [`HttpStatusProvider`](../Interfaces/HttpStatusProvider.html) and [`HttpException`](../Interfaces/HttpException) interfaces.

## Public Interface

`AcceptedStatusProvider` has the following public interface:

```php
// AcceptedStatusProvider lives in this namespace
namespace GanbaroDigital\HttpStatus\StatusProviders\Successful;

// our return types
use GanbaroDigital\HttpStatus\StatusValues\Successful\AcceptedStatus;

trait AcceptedStatusProvider
{
    /**
     * returns the HTTP status code that best represents this object
     *
     * @return AcceptedStatus
     */
    public function getHttpStatus();
}
```

## How To Use

### In Value Objects and Entities

Use this trait in any value object or entity that maps onto the HTTP 202 status.

```php
use GanbaroDigital\HttpStatus\Interfaces\HttpStatusProvider;
use GanbaroDigital\HttpStatus\StatusProviders\Successful\AcceptedStatusProvider;

class MyValueObject implements HttpStatusProvider
{
    // adds getHttpStatus()
    use AcceptedStatusProvider;
}
```

PHP does not let traits implement interfaces. Your value object or entity will need to implement the `HttpStatusProvider` interface explicitly.

### In Exceptions

Use this trait in any exception that maps onto the HTTP 202 status.

```php
use GanbaroDigital\HttpStatus\Interfaces\HttpSuccessfulException;
use GanbaroDigital\HttpStatus\StatusProviders\Successful\AcceptedStatusProvider;

class MyException implements HttpSuccessfulException
{
    // adds getHttpStatus()
    use AcceptedStatusProvider;
}
```

PHP does not let traits implement interfaces. Your value object or entity will need to implement the `HttpSuccessfulException` interface explicitly.

In practice, it would be very unusual to use an exception to represent a HTTP 2xx status code.

## Class Contract

Here is the contract for this class:

    GanbaroDigital\HttpStatus\StatusProviders\Successful\AcceptedStatusProvider
     [x] Can instantiate class that uses this trait
     [x] Returns accepted status

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

* `AcceptedStatusProvider` returns a new instance of `AcceptedStatus` each time you call `getHttpStatus()`.

## See Also

* [`AcceptedStatus`](../StatusValues/AcceptedStatus.html) - the HTTP status value object returned by this trait
* [`HttpStatusProvider`](../Interfaces/HttpStatusProvider.html) - interface that your value object or entity should implement
* [`HttpSuccessfulException`](../Interfaces/HttpSuccessfulException.html) - interface that your exception should implement
