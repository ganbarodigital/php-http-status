---
currentSection: reference
currentItem: StatusValues
pageflow_prev_url: ForbiddenStatus.html
pageflow_prev_text: ForbiddenStatus class
pageflow_next_url: MethodNotAllowedStatus.html
pageflow_next_text: MethodNotAllowedStatus class
---

# NotFoundStatus

<div class="callout info">
Since v1.0.0
</div>

## Description

`NotFoundStatus` is a [`HttpStatus`](../Interfaces/HttpStatus.html) value object. It represents the HTTP 404 Not Found status.

## Public Interface

`NotFoundStatus` has the following public interface:

```php
// NotFoundStatus lives in this namespace
namespace GanbaroDigital\HttpStatus\StatusValues\RequestError;

// our base classes and interfaces
use GanbaroDigital\HttpStatus\Interfaces\HttpRequestErrorStatus;
use GanbaroDigital\HttpStatus\Interfaces\HttpStatus;
use GanbaroDigital\HttpStatus\StatusValues\HttpStatusObject;

class NotFoundStatus
  extends HttpStatus
  implements HttpStatus, HttpRequestErrorStatus
{
    /**
     * our constructor
     */
    public function __construct();

    /**
     * returns the HTTP status code
     *
     * @return int
     */
    public function getStatusCode();

    /**
     * returns the HTTP status reason-phrase
     *
     * @return string
     */
    public function getReasonPhrase();

    /**
     * returns the HTTP status line
     *
     * this is code + ' ' + reason-phrase
     *
     * @return string
     */
    public function getStatusLine();
}
```

## How To Use

### Construction

The constructor for `NotFoundStatus` takes no parameters.

```php
use GanbaroDigital\HttpStatus\StatusValues\RequestError\NotFoundStatus;

$httpStatus = new NotFoundStatus;
```

### getStatusCode()

`NotFoundStatus::getStatusCode()` returns the HTTP status code as an integer:

```php
use GanbaroDigital\HttpStatus\StatusValues\RequestError\NotFoundStatus;

$httpStatus = new NotFoundStatus;
$statusCode = $httpStatus->getStatusCode();

// $statusCode contains the value '404' as an integer
```

HTTP status codes are part of the HTTP standards. Servers, proxies and clients use these codes to understand what happened with a HTTP request.

### getReasonPhrase()

`NotFoundStatus::getReasonPhrase()` returns the HTTP reason phrase as a string:

```php
use GanbaroDigital\HttpStatus\StatusValues\RequestError\NotFoundStatus;

$httpStatus = new NotFoundStatus;
$reasonPhrase = $httpStatus->getReasonPhrase();

// $reasonPhrase contains the value 'Not Found' as a string
```

HTTP reason phrases are part of the HTTP standards. They're RequestError, and are there for humans to read. Servers, proxies and clients may store, forward and log these reason phrases, but they should never actually parse them or use them to understand what happened with a HTTP request.

### getStatusLine()

`NotFoundStatus::getStatusLine()` returns the HTTP status line. This is the string that is printed after the HTTP protocol version at the start of any HTTP response.

```php
use GanbaroDigital\HttpStatus\StatusValues\RequestError\NotFoundStatus;

$httpStatus = new NotFoundStatus;
$statusLine = $httpStatus->getStatusLine();

// $statusLine contains the value "404 Not Found" as a string

// use $statusLine to set the response from your PHP app
header($_SERVER["SERVER_PROTOCOL"] ." " . $statusLine);
```

## Class Contract

Here is the contract for this class:

    GanbaroDigital\HttpStatus\StatusValues\RequestError\NotFoundStatus
     [x] Can instantiate
     [x] Is http status
     [x] Is http request error status
     [x] Has status code 404
     [x] Has correct reason phrase
     [x] Has correct status line

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

# Notes

None at this time.

# See Also

* [`HttpStatus`](../Interfaces/HttpStatus.html) - interface for all status value objects
* [`HttpRequestErrorStatus`](../Interfaces/HttpRequestErrorStatus.html) - interface implemented by this class
* [`NotFoundStatusProvider`](../StatusProviders/NotFoundStatusProvider.html) - trait to map your value object, entity or exception onto this HTTP status
