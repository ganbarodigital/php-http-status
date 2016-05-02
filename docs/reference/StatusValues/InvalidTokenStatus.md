---
currentSection: reference
currentItem: StatusValues
pageflow_prev_url: UnavailableForLegalReasonsStatus.html
pageflow_prev_text: UnavailableForLegalReasonsStatus class
pageflow_next_url: InternalServerErrorStatus.html
pageflow_next_text: InternalServerErrorStatus class
---

# InvalidTokenStatus

<div class="callout info">
Since v2.0.0
</div>

## Description

`InvalidTokenStatus` is a [`HttpStatus`](../Interfaces/HttpStatus.html) value object. It represents the HTTP 498 Invalid Token status.

## Public Interface

`InvalidTokenStatus` has the following public interface:

```php
// InvalidTokenStatus lives in this namespace
namespace GanbaroDigital\HttpStatus\StatusValues\RequestError;

// our base classes and interfaces
use GanbaroDigital\HttpStatus\Interfaces\HttpRequestErrorStatus;
use GanbaroDigital\HttpStatus\Interfaces\HttpStatus;
use GanbaroDigital\HttpStatus\StatusValues\HttpStatusObject;

class InvalidTokenStatus
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

The constructor for `InvalidTokenStatus` takes no parameters.

```php
use GanbaroDigital\HttpStatus\StatusValues\RequestError\InvalidTokenStatus;

$httpStatus = new InvalidTokenStatus;
```

### getStatusCode()

`InvalidTokenStatus::getStatusCode()` returns the HTTP status code as an integer:

```php
use GanbaroDigital\HttpStatus\StatusValues\RequestError\InvalidTokenStatus;

$httpStatus = new InvalidTokenStatus;
$statusCode = $httpStatus->getStatusCode();

// $statusCode contains the value '498' as an integer
```

HTTP status codes are part of the HTTP standards. Servers, proxies and clients use these codes to understand what happened with a HTTP request.

### getReasonPhrase()

`InvalidTokenStatus::getReasonPhrase()` returns the HTTP reason phrase as a string:

```php
use GanbaroDigital\HttpStatus\StatusValues\RequestError\InvalidTokenStatus;

$httpStatus = new InvalidTokenStatus;
$reasonPhrase = $httpStatus->getReasonPhrase();

// $reasonPhrase contains the value 'Invalid Token' as a string
```

HTTP reason phrases are part of the HTTP standards. They're RequestError, and are there for humans to read. Servers, proxies and clients may store, forward and log these reason phrases, but they should never actually parse them or use them to understand what happened with a HTTP request.

### getStatusLine()

`InvalidTokenStatus::getStatusLine()` returns the HTTP status line. This is the string that is printed after the HTTP protocol version at the start of any HTTP response.

```php
use GanbaroDigital\HttpStatus\StatusValues\RequestError\InvalidTokenStatus;

$httpStatus = new InvalidTokenStatus;
$statusLine = $httpStatus->getStatusLine();

// $statusLine contains the value "498 Invalid Token" as a string

// use $statusLine to set the response from your PHP app
header($_SERVER["SERVER_PROTOCOL"] ." " . $statusLine);
```

## Class Contract

Here is the contract for this class:

    GanbaroDigital\HttpStatus\StatusValues\RequestError\InvalidTokenStatus
     [x] Can instantiate
     [x] Is http status
     [x] Is http request error status
     [x] Has status code 498
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
* [`InvalidTokenStatusProvider`](../StatusProviders/InvalidTokenStatusProvider.html) - trait to map your value object, entity or exception onto this HTTP status
