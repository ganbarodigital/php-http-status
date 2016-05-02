---
currentSection: reference
currentItem: Interfaces
---

# Interfaces

## Available Interfaces

### HTTP Exceptions

Interface | Description
----------|----------------
[`HttpException`](HttpException.html) | Base interface extended by the other interfaces
[`HttpInformationalException`](HttpInformationalException.html) |  Interface for exceptions that map onto HTTP 1xx status
[`HttpSuccessfulException`](HttpSuccessfulException.html) | Interface for exceptions that map onto HTTP 2xx status
[`HttpRedirectionException`](HttpRedirectionException.html) | Interface for exceptions that map onto HTTP 3xx status
[`HttpRequestErrorException`](HttpRequestErrorException.html) | Interface for exceptions that map onto HTTP 4xx status
[`HttpRuntimeErrorException`](HttpRuntimeErrorException.html) | Interface for exceptions that map onto HTTP 5xx status

## HTTP Statuses

Interface | Description
----------|-------------
[`HttpStatus`](HttpStatus.html) | Interface for HTTP status value objects
[`HttpInformationStatus`](HttpInformationStatus.html) | Interface for HTTP 1xx status
[`HttpSuccessfulStatus`](HttpSuccessfulStatus.html) | Interface for HTTP 2xx status
[`HttpRedirectionStatus`](HttpRedirectionStatus.html) | Interface for HTTP 3xx status
[`HttpRequestErrorStatus`](HttpRequestErrorStatus.html) | Interface for HTTP 4xx status
[`HttpRuntimeErrorStatus`](HttpRuntimeErrorStatus.html) | Interface for HTTP 5xx status

## HTTP Status Providers

Interface | Description
----------|------------
[`HttpStatusProvider`](HttpStatusProvider.html) | Interface for all objects that can provide a `HttpStatus`
