---
    currentMenu: usage
---

# Usage

## Introduction

You can use the _HTTP Status Aware Library_ in two ways:

* call the `StatusBuilders` directly to create new `HttpStatus` objects, and/or
* use the traits in the `Informational`, `Successful`, `Redirection`, `RequestError`, or `RuntimeError` namespaces to add a `getHttpStatus()` method to your own value objects, entities and exceptions

## Using The Status Builders

There's a `StatusBuilder` for each supported HTTP status code.

HTTP Status Code | StatusBuilder Class
-----------------|--------------------
100 | `GanbaroDigital\HttpStatusAware\StatusBuilders\BuildContinueStatus`

You can use each `StatusBuilder` as an object, or you can call it statically:

    // as an object
    $builder = new BuildContinueStatus;
    $httpStatus = $builder();

    // directly
    $httpStatus = BuildContinueStatus::value();

Both ways of using it return the same: a `HttpStatus` object that contains the right HTTP status code and reason phrase for that HTTP status.

## Using The Traits

There's a trait for each supported HTTP status code.

HTTP Status Code | Trait
-----------------|------
100 | `GanbaroDigital\HttpStatusAware\Informational\ContinueStatus`

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
