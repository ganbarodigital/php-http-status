---
currentSection: reference
currentItem: StatusValues
pageflow_prev_url: index.html
pageflow_prev_text: HTTP Status Values
pageflow_next_url: ContinueStatus.html
pageflow_next_text: ContinueStatus class
---

# The HttpStatus Value Object

<div class="callout info">
Since v1.0.0
</div>

## Description

`HttpStatus` is a value object. It represents a single HTTP status.

## Public Interface

`HttpStatus` has the following public interface:

```php
namespace GanbaroDigital\HttpStatus\StatusValues;

class HttpStatus
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

All of the [HTTP Status Value objects](index.html) are instances of `HttpStatus`.

## How To Use

### Construction

The constructor for `HttpStatus` takes two parameters:

* `$statusCode` (int) - the HTTP status code (e.g. 404)
* `$reasonPhrase` (string) - a description of the HTTP status (e.g. "Not Found")

You can find a full list of HTTP status codes, and their normal descriptions, in [section 6.1 of RFC 7231](https://tools.ietf.org/html/rfc7231#section-6.1).

### getStatusCode()

`HttpStatus::getStatusCode()` returns the HTTP status code as an integer:

```php
use GanbaroDigital\HttpStatus\StatusValues\HttpStatus;

$status = new HttpStatus(404, "Not Found");
$statusCode = $status->getStatusCode();

// $statusCode contains the value '400' as an integer
```

HTTP status codes are part of the HTTP standards. Servers, proxies and clients use these codes to understand what happened with a HTTP request.

### getReasonPhrase()

`HttpStatus::getReasonPhrase()` returns the HTTP reason phrase as a string:

```php
use GanbaroDigital\HttpStatus\StatusValues\HttpStatus;

$status = new HttpStatus(404, "Not Found");
$reasonPhrase = $status->getReasonPhrase();

// $reasonPhrase contains the value 'Not Found' as a string
```

HTTP reason phrases are part of the HTTP standards. They're informational, and are there for humans to read. Servers, proxies and clients may store, forward and log these reason phrases, but they should never actually parse them or use them to understand what happened with a HTTP request.

### getStatusLine()

`HttpStatus::getStatusLine()` returns the HTTP status line. This is the string that is printed after the HTTP protocol version at the start of any HTTP response.

```php
use GanbaroDigital\HttpStatus\StatusValues\HttpStatus;

$status = new HttpStatus(404, "Not Found");
$statusLine = $status->getStatusLine();

// $statusLine contains the value "404 Not Found" as a string

// use $statusLine to set the response from your PHP app
header($_SERVER["SERVER_PROTOCOL"] ." " . $statusLine);
```

## Class Contract

Here is the contract for this class:

    GanbaroDigital\HttpStatus\StatusValues\HttpStatus
     [x] Can instantiate
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
