---
currentSection: reference
currentItem: StatusValues
pageflow_prev_url: ../StatusProviders/index.html
pageflow_prev_text: HTTP Status Providers
pageflow_next_url: HttpStatusObject.html
pageflow_next_text: HttpStatusObject class
---

# HTTP Status Value Classes

## Introduction

Classes in the `GanbaroDigital\HttpStatus\StatusValues` namespace represent the various HTTP status codes. There's one class per supported HTTP status code.

## How To Use

Decide which HTTP status code(s) you want to use, and import the corresponding class:

```php
use GanbaroDigital\HttpStatus\StatusValues\Informational\ContinueStatus;

// creates a new HttpStatus that represents the HTTP 100 code
$continueStatus = new ContinueStatus;
echo $continueStatus->getStatusCode() . PHP_EOL;
```

## Informational Status Codes

These classes represent the HTTP 1xx status codes:

HTTP Status Code | Value Object's Class
-----------------|--------------------
100 | [`GanbaroDigital\HttpStatus\StatusValues\Informational\ContinueStatus`](ContinueStatus.html)
101 | [`GanbaroDigital\HttpStatus\StatusValues\Informational\SwitchingProtocolsStatus`](SwitchingProtocolsStatus.html)
102 | [`GanbaroDigital\HttpStatus\StatusValues\Informational\ProcessingStatus`](ProcessingStatus.html)

Each of these classes implements the [`GanbaroDigital\HttpStatus\Interfaces\HttpInformationalStatus`](../Interfaces/HttpInformationalStatus.html) interface.

## Successful Status Codes

These classes represent the HTTP 2xx status codes:

HTTP Status Code | Value Object's Class
-----------------|--------------------
200 | [`GanbaroDigital\HttpStatus\StatusValues\Successful\OkStatus`](OkStatus.html)
201 | [`GanbaroDigital\HttpStatus\StatusValues\Successful\CreatedStatus`](CreatedStatus.html)
202 | [`GanbaroDigital\HttpStatus\StatusValues\Successful\AcceptedStatus`](AcceptedStatus.html)
203 | [`GanbaroDigital\HttpStatus\StatusValues\Successful\NonAuthoritativeInformationStatus`](NonAuthoritativeInformationStatus.html)
204 | [`GanbaroDigital\HttpStatus\StatusValues\Successful\NoContentStatus`](NoContentStatus.html)
205 | [`GanbaroDigital\HttpStatus\StatusValues\Successful\ResetContentStatus`](ResetContentStatus.html)
206 | [`GanbaroDigital\HttpStatus\StatusValues\Successful\PartialContentStatus`](PartialContentStatus.html)
207 | [`GanbaroDigital\HttpStatus\StatusValues\Successful\MultiStatusStatus`](MultiStatusStatus.html)
208 | [`GanbaroDigital\HttpStatus\StatusValues\Successful\AlreadyReportedStatus`](AlreadyReportedStatus.html)
226 | [`GanbaroDigital\HttpStatus\StatusValues\Successful\IMUsedStatus`](IMUsedStatus.html)

Each of these classes implements the [`GanbaroDigital\HttpStatus\Interfaces\HttpSuccessfulStatus`](../Interfaces/HttpSuccessfulStatus.html) interface.

## Redirection Status Codes

These classes represent the HTTP 3xx status codes:

HTTP Status Code | Value Object's Class
-----------------|--------------------
300 | [`GanbaroDigital\HttpStatus\StatusValues\Redirection\MultipleChoicesStatus`](MultipleChoicesStatus.html)
301 | [`GanbaroDigital\HttpStatus\StatusValues\Redirection\MovedPermanentlyStatus`](MovedPermanentlyStatus.html)
302 | [`GanbaroDigital\HttpStatus\StatusValues\Redirection\FoundStatus`](FoundStatus.html)
303 | [`GanbaroDigital\HttpStatus\StatusValues\Redirection\SeeOtherStatus`](SeeOtherStatus.html)
304 | [`GanbaroDigital\HttpStatus\StatusValues\Redirection\NotModifiedStatus`](NotModifiedStatus.html)
305 | [`GanbaroDigital\HttpStatus\StatusValues\Redirection\UseProxyStatus`](UseProxyStatus.html)
307 | [`GanbaroDigital\HttpStatus\StatusValues\Redirection\TemporaryRedirectStatus`](TemporaryRedirectStatus.html)
308 | [`GanbaroDigital\HttpStatus\StatusValues\Redirection\PermanentRedirectStatus`](PermanentRedirectStatus.html)

Each of these classes implements the [`GanbaroDigital\HttpStatus\Interfaces\HttpRedirectionStatus`](../Interfaces/HttpRedirectionStatus.html) interface.

## RequestError Status Codes

These classes represent the HTTP 4xx status codes:

HTTP Status Code | Value Object's Class
-----------------|--------------------
400 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\BadRequestStatus`](BadRequestStatus.html)
401 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\UnauthorizedStatus`](UnauthorizedStatus.html)
402 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\PaymentRequiredStatus`](PaymentRequiredStatus.html)
403 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\ForbiddenStatus`](ForbiddenStatus.html)
404 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\NotFoundStatus`](NotFoundStatus.html)
405 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\MethodNotAllowedStatus`](MethodNotAllowedStatus.html)
406 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\NotAcceptableStatus`](NotAcceptableStatus.html)
407 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\ProxyAuthenticationRequiredStatus`](ProxyAuthenticationRequiredStatus.html)
408 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\RequestTimeoutStatus`](RequestTimeoutStatus.html)
409 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\ConflictStatus`](ConflictStatus.html)
410 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\GoneStatus`](GoneStatus.html)
411 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\LengthRequiredStatus`](LengthRequiredStatus.html)
412 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\PreconditionFailedStatus`](PreconditionFailedStatus.html)
413 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\PayloadTooLargeStatus`](PayloadTooLargeStatus.html)
414 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\UriTooLongStatus`](UriTooLongStatus.html)
415 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\UnsupportedMediaTypeStatus`](UnsupportedMediaTypeStatus.html)
416 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\RangeNotSatisfiableStatus`](RangeNotSatisfiableStatus.html)
417 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\ExpectationFailedStatus`](ExpectationFailedStatus.html)
418 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\ImATeapotStatus`](ImATeapotStatus.html)
421 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\MisdirectedRequestStatus`](MisdirectedRequestStatus.html)
422 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\UnprocessableEntityStatus`](UnprocessableEntityStatus.html)
423 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\LockedStatus`](LockedStatus.html)
424 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\FailedDependencyStatus`](FailedDependencyStatus.html)
426 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\UpgradeRequiredStatus`](UpgradeRequiredStatus.html)
428 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\PreconditionRequiredStatus`](PreconditionRequiredStatus.html)
429 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\TooManyRequestsStatus`](TooManyRequestsStatus.html)
431 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\RequestHeaderFieldsTooLargeStatus`](RequestHeaderFieldsTooLargeStatus.html)
451 | [`GanbaroDigital\HttpStatus\StatusValues\RequestError\UnavailableForLegalReasonsStatus`](UnavailableForLegalReasonsStatus.html)

Each of these classes implements the [`GanbaroDigital\HttpStatus\Interfaces\HttpRequestErrorStatus`](../Interfaces/HttpRequestErrorStatus.html) interface.

## RuntimeError Status Codes

These classes represent the HTTP 5xx status codes:

HTTP Status Code | Value Object's Class
-----------------|--------------------
500 | [`GanbaroDigital\HttpStatus\StatusValues\RuntimeError\InternalServerErrorStatus`](InternalServerErrorStatus.html)
500 | [`GanbaroDigital\HttpStatus\StatusValues\RuntimeError\UnexpectedErrorStatus`](UnexpectedErrorStatus.html)
501 | [`GanbaroDigital\HttpStatus\StatusValues\RuntimeError\NotImplementedStatus`](NotImplementedStatus.html)
502 | [`GanbaroDigital\HttpStatus\StatusValues\RuntimeError\BadGatewayStatus`](BadGatewayStatus.html)
503 | [`GanbaroDigital\HttpStatus\StatusValues\RuntimeError\ServiceUnavailableStatus`](ServiceUnavailableStatus.html)
504 | [`GanbaroDigital\HttpStatus\StatusValues\RuntimeError\GatewayTimeoutStatus`](GatewayTimeoutStatus.html)
505 | [`GanbaroDigital\HttpStatus\StatusValues\RuntimeError\HttpVersionNotSupportedStatus`](HttpVersionNotSupportedStatus.html)
506 | [`GanbaroDigital\HttpStatus\StatusValues\RuntimeError\VariantAlsoNegotiatesStatus`](VariantAlsoNegotiatesStatus.html)
507 | [`GanbaroDigital\HttpStatus\StatusValues\RuntimeError\InsufficientStorageStatus`](InsufficientStorageStatus.html)
508 | [`GanbaroDigital\HttpStatus\StatusValues\RuntimeError\LoopDetectedStatus`](LoopDetectedStatus.html)
510 | [`GanbaroDigital\HttpStatus\StatusValues\RuntimeError\NotExtendedStatus`](NotExtendedStatus.html)
511 | [`GanbaroDigital\HttpStatus\StatusValues\RuntimeError\NetworkAuthenticationRequiredStatus`](NetworkAuthenticationRequiredStatus.html)

Each of these classes implements the [`GanbaroDigital\HttpStatus\Interfaces\HttpRuntimeErrorStatus`](../Interfaces/HttpRuntimeErrorStatus.html) interface.
