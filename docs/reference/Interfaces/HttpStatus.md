---
currentSection: reference
currentItem: Interfaces
pageflow_prev_url: HttpRuntimeErrorException.html
pageflow_prev_text: HttpRuntimeErrorException interface
pageflow_next_url: HttpInformationalStatus.html
pageflow_next_text: HttpInformationalStatus interface
---

# HttpStatus

<div class="callout info">
Since v2.0.0
</div>

## Description

`HttpStatus` is an interface. It is implemented by all of the [HTTP status value objects](../StatusValues/index.html).

## Public Interface

```php
// HttpStatus lives in this namespace
namespace GanbaroDigital\HttpStatus\Interfaces;

interface HttpStatus
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

### Type-Hinting

Use `HttpStatus` as a type-hint for any functions and methods that accept or return HTTP status value objects.

## Notes

* `HttpStatus` was the value object class in version 1 of this library.

## See Also

* [`HttpStatusObject`](../StatusValues/HttpStatusObject.html) - default implementation of this interface
