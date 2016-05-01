---
currentSection: reference
currentItem: StatusValues
pageflow_prev_url: index.html
pageflow_prev_text: HTTP Status Values
pageflow_next_url: ContinueStatus.html
pageflow_next_text: ContinueStatus class
---

# The HttpStatusObject Value Object

<div class="callout info">
Since v2.0.0
</div>

## Description

`HttpStatusObject` is a value object. It represents a single HTTP status.

All of the [HTTP Status Value objects](index.html) are instances of `HttpStatusObject`.

## Public Interface

`HttpStatusObject` has the following public interface:

```php
// HttpStatusObject lives in this namespace
namespace GanbaroDigital\HttpStatus\StatusValues;

// our base classes and interfaces
use GanbaroDigital\HttpStatus\Interfaces\HttpStatus;

class HttpStatusObject implements HttpStatus
{
    /**
     * constructs a new HttpStatus value object
     *
     * @param int $code
     *        the HTTP status code to use
     * @param string $reasonPhrase
     *        the HTTP reason-phrase to use
     */
    public function __construct($statusCode, $reasonPhrase);

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

The constructor for `HttpStatusObject` takes two parameters:

* `$statusCode` (int) - the HTTP status code (e.g. 404)
* `$reasonPhrase` (string) - a description of the HTTP status (e.g. "Not Found")

You can find a full list of HTTP status codes, and their normal descriptions, in [section 6.1 of RFC 7231](https://tools.ietf.org/html/rfc7231#section-6.1).

### getStatusCode()

`HttpStatusObject::getStatusCode()` returns the HTTP status code as an integer:

```php
use GanbaroDigital\HttpStatus\StatusValues\HttpStatusObject;

$status = new HttpStatusObject(404, "Not Found");
$statusCode = $status->getStatusCode();

// $statusCode contains the value '400' as an integer
```

HTTP status codes are part of the HTTP standards. Servers, proxies and clients use these codes to understand what happened with a HTTP request.

### getReasonPhrase()

`HttpStatusObject::getReasonPhrase()` returns the HTTP reason phrase as a string:

```php
use GanbaroDigital\HttpStatus\StatusValues\HttpStatusObject;

$status = new HttpStatusObject(404, "Not Found");
$reasonPhrase = $status->getReasonPhrase();

// $reasonPhrase contains the value 'Not Found' as a string
```

HTTP reason phrases are part of the HTTP standards. They're informational, and are there for humans to read. Servers, proxies and clients may store, forward and log these reason phrases, but they should never actually parse them or use them to understand what happened with a HTTP request.

### getStatusLine()

`HttpStatusObject::getStatusLine()` returns the HTTP status line. This is the string that is printed after the HTTP protocol version at the start of any HTTP response.

```php
use GanbaroDigital\HttpStatus\StatusValues\HttpStatusObject;

$status = new HttpStatusObject(404, "Not Found");
$statusLine = $status->getStatusLine();

// $statusLine contains the value "404 Not Found" as a string

// use $statusLine to set the response from your PHP app
header($_SERVER["SERVER_PROTOCOL"] ." " . $statusLine);
```

## Class Contract

Here is the contract for this class:

    GanbaroDigital\HttpStatus\StatusValues\HttpStatusObject
     [x] Can instantiate
     [x] Is http status
     [x] Can get http status code
     [x] Can get http reason phrase
     [x] Can get http status line

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

* [Full list of HTTP status value objects](index.html)
