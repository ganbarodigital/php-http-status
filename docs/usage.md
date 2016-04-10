---
    currentMenu: usage
---

# Usage

## Introduction

You can use the _HTTP Status Aware Library_ in two ways:

* simply instantiate new value objects for known HTTP status codes, and/or
* use the traits in the `Informational`, `Successful`, `Redirection`, `RequestError`, or `RuntimeError` namespaces to add a `getHttpStatus()` method to your own value objects, entities and exceptions

## Using The Predefined Value Objects

There's a predefined value object for each supported HTTP status code.

HTTP Status Code | Value Object's Class
-----------------|--------------------
100 | `GanbaroDigital\HttpStatusAware\StatusValues\Informational\ContinueStatus`
101 | `GanbaroDigital\HttpStatusAware\StatusValues\Informational\SwitchingProtocolsStatus`

You can create new instances of each HTTP status value object, and then use these however you want:

    // import the class(es) you need
    use GanbaroDigital\HttpStatusAware\StatusValues\Informational\ContinueStatus;
    use GanbaroDigital\HttpStatusAware\Specifications\InformationalStatus;

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
1xx | `GanbaroDigital\HttpStatusAware\Specifications\InformationalStatus`
2xx | `GanbaroDigital\HttpStatusAware\Specifications\SuccessfulStatus`
3xx | `GanbaroDigital\HttpStatusAware\Specifications\RedirectStatus`
4xx | `GanbaroDigital\HttpStatusAware\Specifications\RequestErrorStatus`
5xx | `GanbaroDigital\HttpStatusAware\Specifications\RuntimeErrorStatus`

## Using The Traits

There's a trait for each supported HTTP status code.

HTTP Status Code | Trait
-----------------|------
100 | `GanbaroDigital\HttpStatusAware\Informational\ContinueStatus`
101 | `GanbaroDigital\HttpStatusAware\Informational\SwitchingProtocolsStatus`

Each trait is used exactly the same way:

    // import the trait and associated interface
    use GanbaroDigital\\HttpStatusAware\\Informational\\ContinueStatus;
    use GanbaroDigital\\HttpStatusAware\\Specifications\\HttpStatusAware;

    class MyValueObject implements HttpStatusAware
    {
        use ContinueStatus;
    }

Each trait adds a public method `getHttpStatus()` to your class:

    /**
     * returns the HttpStatus that we have mapped onto
     *
     * @return HttpStatus
     */
    public function getHttpStatus();

The trait that you pick decides which HTTP status that `getHttpStatus()` will return.

Internally, each trait uses the associated `StatusBuilder` to build the `HttpStatus` object that it returns.
