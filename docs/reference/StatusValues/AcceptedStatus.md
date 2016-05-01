---
currentSection: reference
currentItem: StatusValues
pageflow_prev_url: CreatedStatus.html
pageflow_prev_text: CreatedStatus class
pageflow_next_url: NonAuthoritativeInformationStatus.html
pageflow_next_text: NonAuthoritativeInformationStatus class
---

# AcceptedStatus

<div class="callout info">
Since v1.0.0
</div>

## Description

`AcceptedStatus` is a [`HttpStatus`](../Interfaces/HttpStatus.html) value object. It represents the HTTP 202 Accepted status.

## Public Interface

`AcceptedStatus` has the following public interface:

```php
// AcceptedStatus lives in this namespace
namespace GanbaroDigital\HttpStatus\StatusValues\Successful;

// our base classes and interfaces
use GanbaroDigital\HttpStatus\Interfaces\HttpSuccessfulStatus;
use GanbaroDigital\HttpStatus\Interfaces\HttpStatus;
use GanbaroDigital\HttpStatus\StatusValues\HttpStatusObject;

class AcceptedStatus
  extends HttpStatus
  implements HttpStatus, HttpSuccessfulStatus
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

The constructor for `AcceptedStatus` takes no parameters.

```php
use GanbaroDigital\HttpStatus\StatusValues\Successful\AcceptedStatus;

$httpStatus = new AcceptedStatus;
```

### getStatusCode()

`AcceptedStatus::getStatusCode()` returns the HTTP status code as an integer:

```php
use GanbaroDigital\HttpStatus\StatusValues\Successful\AcceptedStatus;

$httpStatus = new AcceptedStatus;
$statusCode = $httpStatus->getStatusCode();

// $statusCode contains the value '202' as an integer
```

HTTP status codes are part of the HTTP standards. Servers, proxies and clients use these codes to understand what happened with a HTTP request.

### getReasonPhrase()

`AcceptedStatus::getReasonPhrase()` returns the HTTP reason phrase as a string:

```php
use GanbaroDigital\HttpStatus\StatusValues\Successful\AcceptedStatus;

$httpStatus = new AcceptedStatus;
$reasonPhrase = $httpStatus->getReasonPhrase();

// $reasonPhrase contains the value 'Accepted' as a string
```

HTTP reason phrases are part of the HTTP standards. They're Successful, and are there for humans to read. Servers, proxies and clients may store, forward and log these reason phrases, but they should never actually parse them or use them to understand what happened with a HTTP request.

### getStatusLine()

`AcceptedStatus::getStatusLine()` returns the HTTP status line. This is the string that is printed after the HTTP protocol version at the start of any HTTP response.

```php
use GanbaroDigital\HttpStatus\StatusValues\Successful\AcceptedStatus;

$httpStatus = new AcceptedStatus;
$statusLine = $httpStatus->getStatusLine();

// $statusLine contains the value "202 Accepted" as a string

// use $statusLine to set the response from your PHP app
header($_SERVER["SERVER_PROTOCOL"] ." " . $statusLine);
```

## Class Contract

Here is the contract for this class:

    GanbaroDigital\HttpStatus\StatusValues\Successful\AcceptedStatus
     [x] Can instantiate
     [x] Is http status
     [x] Is http successful status
     [x] Has status code 202
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
* [`SuccessfulStatus`](SuccessfulStatus.html) - interface implemented by this class
* [`AcceptedStatusProvider`](../StatusProviders/AcceptedStatusProvider.html) - trait to map your value object, entity or exception onto this HTTP status
