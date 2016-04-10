---
    currentMenu: usage
---

# Usage

## Introduction

You can use the _HTTP Status Aware Library_ in two ways:

* simply instantiate new value objects for known HTTP status codes, and/or
* use the traits in the `StatusProviders` namespace to add a `getHttpStatus()` method to your own value objects, entities and exceptions

## Using The Predefined Value Objects

There's a predefined value object for each supported HTTP status code. The full list of objects is here: [HTTP Status Value Classes](httpStatusValues.html).

You can create new instances of each HTTP status value object, and then use these however you want:

    // import the class(es) you need
    use GanbaroDigital\HttpStatus\StatusValues\Informational\ContinueStatus;
    use GanbaroDigital\HttpStatus\Specifications\InformationalStatus;

    // create the value object
    $httpStatus = new ContinueStatus;

    // making comparisons
    //
    // echos 'true'
    echo $httpStatus instanceof ContinueStatus . PHP_EOL;
    echo $httpStatus instanceof InformationalStatus . PHP_EOL;

Each predefined value object implements one of the following interfaces, so that you can easily tell what type of HTTP status it is:

HTTP Status Code | Interface To Test For
-----------------|----------------------
1xx | `GanbaroDigital\HttpStatus\Specifications\InformationalStatus`
2xx | `GanbaroDigital\HttpStatus\Specifications\SuccessfulStatus`
3xx | `GanbaroDigital\HttpStatus\Specifications\RedirectStatus`
4xx | `GanbaroDigital\HttpStatus\Specifications\RequestErrorStatus`
5xx | `GanbaroDigital\HttpStatus\Specifications\RuntimeErrorStatus`

## Using The Traits

There's a trait for each supported HTTP status code. The full list of traits is here: [HTTP Status Provider Traits](httpStatusProviders.md).

Each trait is used exactly the same way:

    // import the trait and associated interface
    use GanbaroDigital\HttpStatus\StatusProviders\Informational\ContinueStatusProvider;
    use GanbaroDigital\HttpStatus\Specifications\HttpStatusProvider;

    class MyValueObject implements HttpStatusProvider
    {
        use ContinueStatusProvider;
    }

Each trait adds a public method `getHttpStatus()` to your class:

    /**
     * returns the HttpStatus that we have mapped onto
     *
     * @return HttpStatus
     */
    public function getHttpStatus();

The trait that you pick decides which HTTP status that `getHttpStatus()` will return.
