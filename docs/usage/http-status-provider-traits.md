---
currentSection: usage
currentItem: httpStatusProviders
pageflow_prev_url: http-status-value-objects.html
pageflow_prev_text: HTTP Status Value Objects
pageflow_next_url: http-exceptions.html
pageflow_next_text: HTTP Exceptions
---

# HTTP Status Provider Traits

## Using The Traits

There's a trait for each supported HTTP status code. The full list of traits is here: [HTTP Status Provider Traits](../reference/StatusProviders/index.md).

Each trait is used exactly the same way:

```php
// import the trait and associated interface
use GanbaroDigital\HttpStatus\StatusProviders\Informational\ContinueStatusProvider;
use GanbaroDigital\HttpStatus\Interfaces\HttpStatusProvider;

class MyValueObject implements HttpStatusProvider
{
    use ContinueStatusProvider;
}
```

Each trait adds a public method `getHttpStatus()` to your class:

```php
/**
 * returns the HttpStatus that we have mapped onto
 *
 * @return HttpStatus
 */
public function getHttpStatus();
```

The trait that you pick decides which HTTP status that `getHttpStatus()` will return.
