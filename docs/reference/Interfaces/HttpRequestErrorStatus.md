---
currentSection: reference
currentItem: Interfaces
pageflow_prev_url: HttpRedirectionStatus.html
pageflow_prev_text: HttpRedirectionStatus interface
pageflow_next_url: HttpRuntimeErrorStatus.html
pageflow_next_text: HttpRuntimeErrorStatus interface
---

# HttpRequestErrorStatus

<div class="callout info">
Since v2.0.0
</div>

## Description

`HttpRequestErrorStatus` is an interface. It is implemented by all of the [HTTP status value objects](../StatusValues/index.html) that represent a HTTP 4xx status code.

## Public Interface

```php
// HttpRequestErrorStatus lives in this namespace
namespace GanbaroDigital\HttpStatus\Interfaces;

// our base interfaces
use GanbaroDigital\HttpStatus\Interfaces\HttpStatus;

interface HttpRequestErrorStatus extends HttpStatus
{
    /**
     * constructs a new HttpStatus value object
     *
     * @param int $code
     *        the HTTP status code to use
     * @param string $reasonPhrase
     *        the HTTP reason-phrase to use
     * @inheritedFrom HttpStatus
     */
    public function __construct($statusCode, $reasonPhrase);

    /**
     * returns the HTTP status code
     *
     * @return int
     * @inheritedFrom HttpStatus
     */
    public function getStatusCode();

    /**
     * returns the HTTP status reason-phrase
     *
     * @return string
     * @inheritedFrom HttpStatus
     */
    public function getReasonPhrase();

    /**
     * returns the HTTP status line
     *
     * this is code + ' ' + reason-phrase
     *
     * @return string
     * @inheritedFrom HttpStatus
     */
    public function getStatusLine();
}
```

## How To Use

### HTTP Status Value Objects

Implement `HttpRequestErrorStatus` on any value objects that represent HTTP 4xx status codes.

### Type-Hinting

Use `HttpRequestErrorStatus` as a type-hint for any functions and methods that accept or return HTTP 4xx status value objects.

## Notes

None at this time.

## See Also

* [`HttpStatus`](HttpStatus.html) - our base interface
* [HTTP status value objects](../StatusValues/index.html) - ready-built value objects
