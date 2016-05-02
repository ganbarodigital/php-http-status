---
currentSection: reference
currentItem: Interfaces
pageflow_prev_url: HttpInformationalStatus.html
pageflow_prev_text: HttpInformationalStatus interface
pageflow_next_url: HttpRedirectionStatus.html
pageflow_next_text: HttpRedirectionStatus interface
---

# HttpSuccessfulStatus

<div class="callout info">
Since v2.0.0
</div>

## Description

`HttpSuccessfulStatus` is an interface. It is implemented by all of the [HTTP status value objects](../StatusValues/index.html) that represent a HTTP 2xx status code.

## Public Interface

```php
// HttpSuccessfulStatus lives in this namespace
namespace GanbaroDigital\HttpStatus\Interfaces;

// our base interfaces
use GanbaroDigital\HttpStatus\Interfaces\HttpStatus;

interface HttpSuccessfulStatus extends HttpStatus
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

Implement `HttpSuccessfulStatus` on any value objects that represent HTTP 2xx status codes.

### Type-Hinting

Use `HttpSuccessfulStatus` as a type-hint for any functions and methods that accept or return HTTP 2xx status value objects.

## Notes

None at this time.

## See Also

* [`HttpStatus`](HttpStatus.html) - our base interface
* [HTTP status value objects](../StatusValues/index.html) - ready-built value objects
