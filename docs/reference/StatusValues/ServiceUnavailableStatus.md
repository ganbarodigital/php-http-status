---
currentSection: reference
currentItem: StatusValues
pageflow_prev_url: BadGatewayStatus.html
pageflow_prev_text: BadGatewayStatus class
pageflow_next_url: GatewayTimeoutStatus.html
pageflow_next_text: GatewayTimeoutStatus class
---

# ServiceUnavailableStatus

<div class="callout info">
Since v1.0.0
</div>

## Description

`ServiceUnavailableStatus` is a [`HttpStatus`](HttpStatus.html) value object. It represents the HTTP 503 Service Unavailable status.

## Public Interface

`ServiceUnavailableStatus` has the following public interface:

```php
// ServiceUnavailableStatus lives in this namespace
namespace GanbaroDigital\HttpStatus\StatusValues\RuntimeError;

// our base classes and interfaces
use GanbaroDigital\HttpStatus\Interfaces\RuntimeErrorStatus;
use GanbaroDigital\HttpStatus\StatusValues\HttpStatus;

class ServiceUnavailableStatus
  extends HttpStatus
  implements RuntimeErrorStatus
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

The constructor for `ServiceUnavailableStatus` takes no parameters.

```php
use GanbaroDigital\HttpStatus\StatusValues\RuntimeError\ServiceUnavailableStatus;

$httpStatus = new ServiceUnavailableStatus;
```

### getStatusCode()

`ServiceUnavailableStatus::getStatusCode()` returns the HTTP status code as an integer:

```php
use GanbaroDigital\HttpStatus\StatusValues\RuntimeError\ServiceUnavailableStatus;

$httpStatus = new ServiceUnavailableStatus;
$statusCode = $httpStatus->getStatusCode();

// $statusCode contains the value '503' as an integer
```

HTTP status codes are part of the HTTP standards. Servers, proxies and clients use these codes to understand what happened with a HTTP request.

### getReasonPhrase()

`ServiceUnavailableStatus::getReasonPhrase()` returns the HTTP reason phrase as a string:

```php
use GanbaroDigital\HttpStatus\StatusValues\RuntimeError\ServiceUnavailableStatus;

$httpStatus = new ServiceUnavailableStatus;
$reasonPhrase = $httpStatus->getReasonPhrase();

// $reasonPhrase contains the value 'Service Unavailable' as a string
```

HTTP reason phrases are part of the HTTP standards. They're RuntimeError, and are there for humans to read. Servers, proxies and clients may store, forward and log these reason phrases, but they should never actually parse them or use them to understand what happened with a HTTP request.

### getStatusLine()

`ServiceUnavailableStatus::getStatusLine()` returns the HTTP status line. This is the string that is printed after the HTTP protocol version at the start of any HTTP response.

```php
use GanbaroDigital\HttpStatus\StatusValues\RuntimeError\ServiceUnavailableStatus;

$httpStatus = new ServiceUnavailableStatus;
$statusLine = $httpStatus->getStatusLine();

// $statusLine contains the value "503 Service Unavailable" as a string

// use $statusLine to set the response from your PHP app
header($_SERVER["SERVER_PROTOCOL"] ." " . $statusLine);
```

## Class Contract

Here is the contract for this class:

    GanbaroDigital\HttpStatus\StatusValues\RuntimeError\ServiceUnavailableStatus
     [x] Can instantiate
     [x] Is RuntimeError status
     [x] Has status code 503
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

* [`HttpStatus`](HttpStatus.html) - base class
* [`RuntimeErrorStatus`](RuntimeErrorStatus.html) - interface implemented by this class
* [`ServiceUnavailableStatusProvider`](../StatusProviders/ServiceUnavailableStatusProvider.html) - trait to map your value object, entity or exception onto this HTTP status
