---
currentSection: reference
currentItem: StatusProviders
pageflow_next_url: ContinueStatusProvider.html
pageflow_next_text: ContinueStatusProvider trait
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
100 | [`GanbaroDigital\HttpStatus\StatusProviders\Informational\ContinueStatusProvider`](ContinueStatusProvider.html)
101 | [`GanbaroDigital\HttpStatus\StatusProviders\Informational\SwitchingProtocolsStatusProvider`](SwitchingProtocolsStatusProvider.html)
102 | [`GanbaroDigital\HttpStatus\StatusProviders\Informational\ProcessingStatusProvider`](ProcessingStatusProvider.html)

## Successful Status Codes

These traits add the following HTTP 2xx status codes to your code:

HTTP Status Code | Value Object's Class
-----------------|--------------------
200 | [`GanbaroDigital\HttpStatus\StatusProviders\Successful\OkStatusProvider`](OkStatusProvider.html)
201 | [`GanbaroDigital\HttpStatus\StatusProviders\Successful\CreatedStatusProvider`](CreatedStatusProvider.html)
202 | [`GanbaroDigital\HttpStatus\StatusProviders\Successful\AcceptedStatusProvider`](AcceptedStatusProvider.html)
203 | [`GanbaroDigital\HttpStatus\StatusProviders\Successful\NonAuthoritativeInformationStatusProvider`](NonAuthoritativeInformationStatusProvider.html)
204 | [`GanbaroDigital\HttpStatus\StatusProviders\Successful\NoContentStatusProvider`](NoContentStatusProvider.html)
205 | [`GanbaroDigital\HttpStatus\StatusProviders\Successful\ResetContentStatusProvider`](ResetContentStatusProvider.html)
206 | [`GanbaroDigital\HttpStatus\StatusProviders\Successful\PartialContentStatusProvider`](PartialContentStatusProvider.html)
207 | [`GanbaroDigital\HttpStatus\StatusProviders\Successful\MultiStatusStatusProvider`](MultiStatusStatusProvider.html)
208 | [`GanbaroDigital\HttpStatus\StatusProviders\Successful\AlreadyReportedStatusProvider`](AlreadyReportedStatusProvider.html)
226 | [`GanbaroDigital\HttpStatus\StatusProviders\Successful\IMUsedStatusProvider`](IMUsedStatusProvider.html)

## Redirection Status Codes

These traits add the following HTTP 3xx status codes to your code:

HTTP Status Code | Value Object's Class
-----------------|--------------------
300 | [`GanbaroDigital\HttpStatus\StatusProviders\Redirection\MultipleChoicesStatusProvider`](MultipleChoicesStatusProvider.html)
301 | [`GanbaroDigital\HttpStatus\StatusProviders\Redirection\MovedPermanentlyStatusProvider`](MovedPermanentlyStatusProvider.html)
302 | [`GanbaroDigital\HttpStatus\StatusProviders\Redirection\FoundStatusProvider`](FoundStatusProvider.html)
303 | [`GanbaroDigital\HttpStatus\StatusProviders\Redirection\SeeOtherStatusProvider`](SeeOtherStatusProvider.html)
304 | [`GanbaroDigital\HttpStatus\StatusProviders\Redirection\NotModifiedStatusProvider`](NotModifiedStatusProvider.html)
305 | [`GanbaroDigital\HttpStatus\StatusProviders\Redirection\UseProxyStatusProvider`](UseProxyStatusProvider.html)
307 | [`GanbaroDigital\HttpStatus\StatusProviders\Redirection\TemporaryRedirectStatusProvider`](TemporaryRedirectStatusProvider.html)
308 | [`GanbaroDigital\HttpStatus\StatusProviders\Redirection\PermanentRedirectStatusProvider`](PermanentRedirectStatusProvider.html)

## RequestError Status Codes

These traits add the following HTTP 4xx status codes to your code:

HTTP Status Code | Value Object's Class
-----------------|--------------------
400 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\BadRequestStatusProvider`](BadRequestStatusProvider.html)
401 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\UnauthorizedStatusProvider`](UnauthorizedStatusProvider.html)
402 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\PaymentRequiredStatusProvider`](PaymentRequiredStatusProvider.html)
403 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\ForbiddenStatusProvider`](ForbiddenStatusProvider.html)
404 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\NotFoundStatusProvider`](NotFoundStatusProvider.html)
405 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\MethodNotAllowedStatusProvider`](MethodNotAllowedStatusProvider.html)
406 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\NotAcceptableStatusProvider`](NotAcceptableStatusProvider.html)
407 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\ProxyAuthenticationRequiredStatusProvider`](ProxyAuthenticationRequiredStatusProvider.html)
408 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\RequestTimeoutStatusProvider`](RequestTimeoutStatusProvider.html)
409 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\ConflictStatusProvider`](ConflictStatusProvider.html)
410 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\GoneStatusProvider`](GoneStatusProvider.html)
411 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\LengthRequiredStatusProvider`](LengthRequiredStatusProvider.html)
412 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\PreconditionFailedStatusProvider`](PreconditionRequiredStatusProvider.html)
413 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\PayloadTooLargeStatusProvider`](PayloadTooLargeStatusProvider.html)
414 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\UriTooLongStatusProvider`](UriTooLongStatusProvider.html)
415 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\UnsupportedMediaTypeStatusProvider`](UUnsupportedMediaTypeStatusProvider.html)
416 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\RangeNotSatisfiableStatusProvider`](RRangeNotSatisfiableStatusProvider.html)
417 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\ExpectationFailedStatusProvider`](ExpectationFailedStatusProvider.html)
418 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\ImATeapotStatusProvider`](ImATeapotStatusProvider.html)
421 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\MisdirectedRequestStatusProvider`](MisdirectedRequestStatusProvider.html)
422 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\UnprocessableEntityStatusProvider`](UUnprocessableEntityStatusProvider.html)
423 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\LockedStatusProvider`](LockedStatusProvider.html)
424 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\FailedDependencyStatusProvider`](FailedDependencyStatusProvider.html)
426 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\UpgradeRequiredStatusProvider`](UpgradeRequiredStatusProvider.html)
428 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\PreconditionRequiredStatusProvider`](PPreconditionRequiredStatusProvider.html)
429 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\TooManyRequestsStatusProvider`](TooManyRequestsStatusProvider.html)
431 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\RequestHeaderFieldsTooLargeStatusProvider`](RequestHeaderFieldsTooLargeStatusProvider.html)
451 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\UnavailableForLegalReasonsStatusProvider`](UnavailableForLegalReasonsStatusProvider.html)
498 | [`GanbaroDigital\HttpStatus\StatusProviders\RequestError\InvalidTokenStatusProvider`](InvalidTokenStatusProvider.html)

## RuntimeError Status Codes

These traits add the following HTTP 5xx status codes to your code:

HTTP Status Code | Value Object's Class
-----------------|--------------------
500 | [`GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\InternalServerErrorStatusProvider`](InternalServerErrorStatusProvider.html)
500 | [`GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\UnexpectedErrorStatusProvider`](UnexpectedErrorStatusProvider.html)
501 | [`GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\NotImplementedStatusProvider`](NotImplementedStatusProvider.html)
502 | [`GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\BadGatewayStatusProvider`](BadGatewayStatusProvider.html)
503 | [`GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\ServiceUnavailableStatusProvider`](ServiceUnavailableStatusProvider.html)
504 | [`GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\GatewayTimeoutStatusProvider`](GatewayTimeoutStatusProvider.html)
505 | [`GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\HttpVersionNotSupportedStatusProvider`](HttpVersionNotSupportedStatusProvider.html)
506 | [`GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\VariantAlsoNegotiatesStatusProvider`](VVariantAlsoNegotiatesStatusProvider.html)
507 | [`GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\InsufficientStorageStatusProvider`](IInsufficientStorageStatusProvider.html)
508 | [`GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\LoopDetectedStatusProvider`](LoopDetectedStatusProvider.html)
510 | [`GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\NotExtendedStatusProvider`](NotExtendedStatusProvider.html)
511 | [`GanbaroDigital\HttpStatus\StatusProviders\RuntimeError\NetworkAuthenticationRequiredStatusProvider`](NetworkAuthenticationRequiredStatusProvider.html)
