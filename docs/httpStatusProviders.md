---
currentSection: usage
currentItem: httpStatusProviders
pageflow_prev_url: httpStatusValues.html
pageflow_prev_text: HTTP Status Value Classes
pageflow_next_url: changelog.html
pageflow_next_text: Changelog
---

# HTTP Status Provider Traits

## Introduction

Traits in the `GanbaroDigital\HttpStatus\StatusProviders` namespace will add various HTTP status codes to your classes. There's one trait per supported HTTP status code.

## How To Use

Decide which HTTP status code you want to use, and import the corresponding trait:

```php
// import the HttpStatusProvider interface
// and the trait for the HTTP status code of your choice
use GanbaroDigital\HttpStatus\Interfaces\HttpStatusProvider;
use GanbaroDigital\HttpStatus\StatusProviders\Informational\ContinueStatusProvider;

// implement the HttpStatusProvider interface, so that other code
// can detect that your class has the getHttpStatus() method
class MyClass implements HttpStatusProvider
{
    // add the trait to your class
    use ContinueStatusProvider;
}

$obj = new MyClass;
$httpStatus = $obj->getHttpStatus();

```

## Informational Status Codes

These traits add the following HTTP 1xx status codes to your code:

HTTP Status Code | Value Object's Class
-----------------|--------------------
100 | `GanbaroDigital\HttpStatus\StatusProviders\Informational\ContinueStatusProvider`
101 | `GanbaroDigital\HttpStatus\StatusProviders\Informational\SwitchingProtocolsStatusProvider`
102 | `GanbaroDigital\HttpStatus\StatusProviders\Informational\ProcessingStatusProvider`

## Successful Status Codes

These traits add the following HTTP 2xx status codes to your code:

HTTP Status Code | Value Object's Class
-----------------|--------------------
200 | `GanbaroDigital\HttpStatus\StatusProviders\Successful\OkStatusProvider`
201 | `GanbaroDigital\HttpStatus\StatusProviders\Successful\CreatedStatusProvider`
202 | `GanbaroDigital\HttpStatus\StatusProviders\Successful\AcceptedStatusProvider`
203 | `GanbaroDigital\HttpStatus\StatusProviders\Successful\NonAuthoritativeInformationStatusProvider`
204 | `GanbaroDigital\HttpStatus\StatusProviders\Successful\NoContentStatusProvider`
205 | `GanbaroDigital\HttpStatus\StatusProviders\Successful\ResetContentStatusProvider`
206 | `GanbaroDigital\HttpStatus\StatusProviders\Successful\PartialContentStatusProvider`
207 | `GanbaroDigital\HttpStatus\StatusProviders\Successful\MultiStatusStatusProvider`
208 | `GanbaroDigital\HttpStatus\StatusProviders\Successful\AlreadyReportedStatusProvider`
226 | `GanbaroDigital\HttpStatus\StatusProviders\Successful\IMUsedStatusProvider`

## Redirection Status Codes

These traits add the following HTTP 3xx status codes to your code:

HTTP Status Code | Value Object's Class
-----------------|--------------------
300 | `GanbaroDigital\HttpStatus\StatusProviders\Redirection\MultipleChoicesStatusProvider`
301 | `GanbaroDigital\HttpStatus\StatusProviders\Redirection\MovedPermanentlyStatusProvider`
302 | `GanbaroDigital\HttpStatus\StatusProviders\Redirection\FoundStatusProvider`
303 | `GanbaroDigital\HttpStatus\StatusProviders\Redirection\SeeOtherStatusProvider`
304 | `GanbaroDigital\HttpStatus\StatusProviders\Redirection\NotModifiedStatusProvider`
305 | `GanbaroDigital\HttpStatus\StatusProviders\Redirection\UseProxyStatusProvider`
307 | `GanbaroDigital\HttpStatus\StatusProviders\Redirection\TemporaryRedirectStatusProvider`
308 | `GanbaroDigital\HttpStatus\StatusProviders\Redirection\PermanentRedirectStatusProvider`

## RequestError Status Codes

These traits add the following HTTP 4xx status codes to your code:

HTTP Status Code | Value Object's Class
-----------------|--------------------
400 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\BadRequestStatusProvider`
401 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\UnauthorizedStatusProvider`
402 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\PaymentRequiredStatusProvider`
403 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\ForbiddenStatusProvider`
404 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\NotFoundStatusProvider`
405 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\MethodNotAllowedStatusProvider`
406 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\NotAcceptableStatusProvider`
407 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\ProxyAuthenticationRequiredStatusProvider`
408 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\RequestTimeoutStatusProvider`
409 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\ConflictStatusProvider`
410 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\GoneStatusProvider`
411 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\LengthRequiredStatusProvider`
412 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\PreconditionFailedStatusProvider`
413 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\PayloadTooLargeStatusProvider`
414 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\UriTooLongStatusProvider`
415 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\UnsupportedMediaTypeStatusProvider`
416 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\RangeNotSatisfiableStatusProvider`
417 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\ExpectationFailedStatusProvider`
418 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\ImATeapotStatusProvider`
421 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\MisdirectedRequestStatusProvider`
422 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\UnprocessableEntityStatusProvider`
423 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\LockedStatusProvider`
424 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\FailedDependencyStatusProvider`
426 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\UpgradeRequiredStatusProvider`
428 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\PreconditionRequiredStatusProvider`
429 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\TooManyRequestsStatusProvider`
431 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\RequestHeaderFieldsTooLargeStatusProvider`
451 | `GanbaroDigital\HttpStatus\StatusProviders\RequestError\UnavailableForLegalReasonsStatusProvider`

## RuntimeError Status Codes

These traits add the following HTTP 5xx status codes to your code:

HTTP Status Code | Value Object's Class
-----------------|--------------------
500 | `GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\InternalServerErrorStatusProvider`
500 | `GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\UnexpectedErrorStatusProvider`
501 | `GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\NotImplementedStatusProvider`
502 | `GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\BadGatewayStatusProvider`
503 | `GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\ServiceUnavailableStatusProvider`
504 | `GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\GatewayTimeoutStatusProvider`
505 | `GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\HttpVersionNotSupportedStatusProvider`
506 | `GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\VariantAlsoNegotiatesStatusProvider`
507 | `GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\InsufficientStorageStatusProvider`
508 | `GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\LoopDetectedStatusProvider`
510 | `GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\NotExtendedStatusProvider`
511 | `GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\NetworkAuthenticationRequiredStatusProvider`
