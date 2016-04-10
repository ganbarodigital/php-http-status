---
currentMenu: httpStatusValues
---

# HTTP Status Value Classes

Here's the full list of which class represents which HTTP status code.

## Informational Status Codes

These classes represent the HTTP 1xx status codes:

HTTP Status Code | Value Object's Class
-----------------|--------------------
100 | `GanbaroDigital\HttpStatus\StatusValues\Informational\ContinueStatus`
101 | `GanbaroDigital\HttpStatus\StatusValues\Informational\SwitchingProtocolsStatus`

Each of these classes implements the `GanbaroDigital\HttpStatus\Specifications\InformationalStatus` interface.

## Successful Status Codes

These classes represent the HTTP 2xx status codes:

HTTP Status Code | Value Object's Class
-----------------|--------------------
200 | `GanbaroDigital\HttpStatus\StatusValues\Successful\OkStatus`
201 | `GanbaroDigital\HttpStatus\StatusValues\Successful\CreatedStatus`
202 | `GanbaroDigital\HttpStatus\StatusValues\Successful\AcceptedStatus`
203 | `GanbaroDigital\HttpStatus\StatusValues\Successful\NonAuthoritativeInformationStatus`
204 | `GanbaroDigital\HttpStatus\StatusValues\Successful\NoContentStatus`
205 | `GanbaroDigital\HttpStatus\StatusValues\Successful\ResetContentStatus`
206 | `GanbaroDigital\HttpStatus\StatusValues\Successful\PartialContentStatus`

Each of these classes implements the `GanbaroDigital\HttpStatus\Specifications\SuccessfulStatus` interface.

## Redirection Status Codes

These classes represent the HTTP 3xx status codes:

HTTP Status Code | Value Object's Class
-----------------|--------------------
300 | `GanbaroDigital\HttpStatus\StatusValues\Redirection\MultipleChoicesStatus`
301 | `GanbaroDigital\HttpStatus\StatusValues\Redirection\MovedPermanentlyStatus`
302 | `GanbaroDigital\HttpStatus\StatusValues\Redirection\FoundStatus`
303 | `GanbaroDigital\HttpStatus\StatusValues\Redirection\SeeOtherStatus`
304 | `GanbaroDigital\HttpStatus\StatusValues\Redirection\NotModifiedStatus`
305 | `GanbaroDigital\HttpStatus\StatusValues\Redirection\UseProxyStatus`
307 | `GanbaroDigital\HttpStatus\StatusValues\Redirection\TemporaryRedirectStatus`

Each of these classes implements the `GanbaroDigital\HttpStatus\Specifications\RedirectionStatus` interface.

## RequestError Status Codes

These classes represent the HTTP 4xx status codes:

HTTP Status Code | Value Object's Class
-----------------|--------------------
400 | `GanbaroDigital\HttpStatus\StatusValues\RequestError\BadRequestStatus`
401 | `GanbaroDigital\HttpStatus\StatusValues\RequestError\UnauthorizedStatus`
402 | `GanbaroDigital\HttpStatus\StatusValues\RequestError\PaymentRequiredStatus`
403 | `GanbaroDigital\HttpStatus\StatusValues\RequestError\ForbiddenStatus`
404 | `GanbaroDigital\HttpStatus\StatusValues\RequestError\NotFoundStatus`
405 | `GanbaroDigital\HttpStatus\StatusValues\RequestError\MethodNotAllowedStatus`
406 | `GanbaroDigital\HttpStatus\StatusValues\RequestError\NotAcceptableStatus`
407 | `GanbaroDigital\HttpStatus\StatusValues\RequestError\ProxyAuthenticationRequiredStatus`
408 | `GanbaroDigital\HttpStatus\StatusValues\RequestError\RequestTimeoutStatus`
409 | `GanbaroDigital\HttpStatus\StatusValues\RequestError\ConflictStatus`
410 | `GanbaroDigital\HttpStatus\StatusValues\RequestError\GoneStatus`
411 | `GanbaroDigital\HttpStatus\StatusValues\RequestError\LengthRequiredStatus`
412 | `GanbaroDigital\HttpStatus\StatusValues\RequestError\PreconditionFailedStatus`
413 | `GanbaroDigital\HttpStatus\StatusValues\RequestError\PayloadTooLargeStatus`
414 | `GanbaroDigital\HttpStatus\StatusValues\RequestError\UriTooLongStatus`
415 | `GanbaroDigital\HttpStatus\StatusValues\RequestError\UnsupportedMediaTypeStatus`
416 | `GanbaroDigital\HttpStatus\StatusValues\RequestError\RangeNotSatisfiableStatus`
417 | `GanbaroDigital\HttpStatus\StatusValues\RequestError\ExpectationFailedStatus`

Each of these classes implements the `GanbaroDigital\HttpStatus\Specifications\RequestErrorStatus` interface.

## RuntimeError Status Codes

These classes represent the HTTP 5xx status codes:

HTTP Status Code | Value Object's Class
-----------------|--------------------
500 | `GanbaroDigital\HttpStatus\StatusValues\RuntimeError\InternalServerError`
500 | `GanbaroDigital\HttpStatus\StatusValues\RuntimeError\UnexpectedError`

Each of these classes implements the `GanbaroDigital\HttpStatus\Specifications\RuntimeErrorStatus` interface.
