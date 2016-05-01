---
currentSection: usage
currentItem: httpStatusValueObjects
pageflow_prev_url: index.html
pageflow_prev_text: Usage
pageflow_next_url: http-status-provider-traits.html
pageflow_next_text: HTTP Status Provider Traits
---

# HTTP Status Value Objects

## Using The Predefined Value Objects

There's a predefined value object for each supported HTTP status code. The full list of objects is here: [HTTP Status Value Classes](../reference/StatusValues/index.html).

You can create new instances of each HTTP status value object, and then use these however you want:

```php
// import the class(es) you need
use GanbaroDigital\HttpStatus\StatusValues\Informational\ContinueStatus;
use GanbaroDigital\HttpStatus\Interfaces\HttpInformationalStatus;

// create the value object
$httpStatus = new ContinueStatus;

// making comparisons
//
// echos '1'
echo $httpStatus instanceof ContinueStatus . PHP_EOL;
echo $httpStatus instanceof HttpInformationalStatus . PHP_EOL;
```

## HTTP Status Interfaces

Each predefined value object implements the [`HttpStatus`](../reference/Interfaces/HttpStatus.html) interface.

They also implement one of the following interfaces, so that you can easily tell what type of HTTP status it is:

HTTP Status Code | Interface To Test For
-----------------|----------------------
1xx | `GanbaroDigital\HttpStatus\Interfaces\HttpInformationalStatus`
2xx | `GanbaroDigital\HttpStatus\Interfaces\HttpSuccessfulStatus`
3xx | `GanbaroDigital\HttpStatus\Interfaces\HttpRedirectStatus`
4xx | `GanbaroDigital\HttpStatus\Interfaces\HttpRequestErrorStatus`
5xx | `GanbaroDigital\HttpStatus\Interfaces\HttpRuntimeErrorStatus`
