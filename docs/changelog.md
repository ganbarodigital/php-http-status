# CHANGELOG

## develop branch

* Added a value object to represent each support HTTP status code.
  * Added `HttpStatus`
  * Added `ContinueStatus` to represent HTTP 100
  * Added `SwitchingProtocolsStatus` to represent HTTP 101
  * Added `ProcessingStatus` to represent HTTP 102
  * Added `OkStatus` to represent HTTP 200
  * Added `CreatedStatus` to represent HTTP 201
  * Added `AcceptedStatus` to represent HTTP 202
  * Added `NonAuthoritativeInformationStatus` to represent HTTP 203
  * Added `NoContentStatus` to represent HTTP 204
  * Added `ResetContentStatus` to represent HTTP 205
  * Added `PartialContentStatus` to represent HTTP 206
  * Added `MultiStatusStatus` to represent HTTP 207
  * Added `AlreadyReportedStatus` to represent HTTP 208
  * Added `IMUsedStatus` to represent HTTP 226
  * Added `MultipleChoicesStatus` to represent HTTP 300
  * Added `MovedPermanentlyStatus` to represent HTTP 301
  * Added `FoundStatus` to represent HTTP 302
  * Added `SeeOtherStatus` to represent HTTP 303
  * Added `NotModifiedStatus` to represent HTTP 304
  * Added `UseProxyStatus` to represent HTTP 305
  * Added `TemporaryRedirectStatus` to represent HTTP 307
  * Added `PermanentRedirectStatus` to represent HTTP 308
  * Added `BadRequestStatus` to represent HTTP 400
  * Added `UnauthorizedStatus` to represent HTTP 401
  * Added `PaymentRequiredStatus` to represent HTTP 402
  * Added `ForbiddenStatus` to represent HTTP 403
  * Added `NotFoundStatus` to represent HTTP 404
  * Added `MethodNotAllowed` to represent HTTP 405
  * Added `NotAcceptableStatus` to represent HTTP 406
  * Added `ProxyAuthenticationRequiredStatus` to represent HTTP 407
  * Added `RequestTimeoutStatus` to represent HTTP 408
  * Added `ConflictStatus` to represent HTTP 409
  * Added `GoneStatus` to represent HTTP 410
  * Added `LengthRequiredStatus` to represent HTTP 411
  * Added `PreconditionFailedStatus` to represent HTTP 412
  * Added `PayloadTooLargeStatus` to represent HTTP 413
  * Added `UriTooLongStatus` to represent HTTP 414
  * Added `UnsupportedMediaTypeStatus` to represent HTTP 415
  * Added `RangeNotSatisfiableStatus` to represent HTTP 416
  * Added `ExpectationFailedStatus` to represent HTTP 417
  * Added `ImATeapotStatus` to represent HTTP 418
  * Added `MisdirectedRequestStatus` to represent HTTP 421
  * Added `UnprocessableEntityStatus` to represent HTTP 422
  * Added `LockedStatus` to represent HTTP 423
  * Added `FailedDependencyStatus` to represent HTTP 424
  * Added `UpgradeRequiredStatus` to represent HTTP 426
  * Added `PreconditionRequiredStatus` to represent HTTP 428
  * Added `TooManyRequestsStatus` to represent HTTP 429
  * Added `RequestHeaderFieldsTooLargeStatus` to represent HTTP 431
  * Added `UnavailableForLegalReasonsStatus` to represent HTTP 451
  * Added `InternalServerErrorStatus` to represent HTTP 500
  * Added `UnexpectedError` to represent HTTP 500
  * Added `NotImplemented` to represent HTTP 501
  * Added `BadGatewayStatus` to represent HTTP 502
  * Added `ServiceUnavailableStatus` to represent HTTP 503
  * Added `GatewayTimeoutStatus` to represent HTTP 504
  * Added `HttpVersionNotSupportedStatus` to represent HTTP 505
  * Added `VariantAlsoNegotiatesStatus` to represent HTTP 506
  * Added `InsufficientStorageStatus` to represent HTTP 507
  * Added `LoopDetectedStatus` to represent HTTP 508
  * Added `NotExtendedStatus` to represent HTTP 510
  * Added `NetworkAuthenticationRequiredStatus` to represent HTTP 511
* Added interfaces to represent each group of HTTP status codes.
  * Added `Specifications\InformationalStatus` for HTTP 1xx codes
  * Added `Specifications\SuccessfulStatus` for HTTP 2xx codes
  * Added `Specifications\RedirectionStatus` for HTTP 3xx codes
  * Added `Specifications\RequestErrorStatus` for HTTP 4xx codes
  * Added `Specifications\RuntimeErrorStatus` for HTTP 5xx codes
* Added traits to provide HTTP status codes in value objects et al
  * Added `Specifications\HttpStatusProvider` for your value objects to implement
  * Added `ContinueStatusProvider`
  * Added `ProcessingStatusProvider`
  * Added `SwitchingProtocolsStatusProvider`
  * Added `FoundStatusProvider`
  * Added `MovedPermanentlyStatusProvider`
  * Added `MultipleChoicesStatusProvider`
  * Added `NotModifiedStatusProvider`
  * Added `PermanentRedirectStatusProvider`
  * Added `SeeOtherStatusProvider`
  * Added `TemporaryRedirectStatusProvider`
  * Added `UseProxyStatusProvider`
  * Added `BadRequestStatusProvider`
  * Added `ConflictStatusProvider`
  * Added `ExpectationFailedStatusProvider`
  * Added `FailedDependencyStatusProvider`
  * Added `ForbiddenStatusProvider`
  * Added `GoneStatusProvider`
  * Added `ImATeapotStatusProvider`
  * Added `LengthRequiredStatusProvider`
  * Added `LockedStatusProvider`
  * Added `MethodNotAllowedStatusProvider`
  * Added `MisdirectedRequestStatusProvider`
  * Added `NotAcceptableStatusProvider`
  * Added `NotFoundStatusProvider`
  * Added `PayloadTooLargeStatusProvider`
  * Added `PaymentRequiredStatusProvider`
  * Added `PreconditionFailedStatusProvider`
  * Added `PreconditionRequiredStatusProvider`
  * Added `ProxyAuthenticationRequiredStatusProvider`
  * Added `RangeNotSatisfiableStatusProvider`
  * Added `RequestHeaderFieldsTooLargeStatusProvider`
  * Added `RequestTimeoutStatusProvider`
  * Added `TooManyRequestsStatusProvider`
  * Added `UnauthorizedStatusProvider`
  * Added `UnavailableForLegalReasonsStatusProvider`
  * Added `UnprocessableEntityStatusProvider`
  * Added `UnsupportedMediaTypeStatusProvider`
  * Added `UpgradeRequiredStatusProvider`
  * Added `UriTooLongStatusProvider`
  * Added `BadGatewayStatusProvider`
  * Added `GatewayTimeoutStatusProvider`
  * Added `HttpVersionNotSupportedStatusProvider`
  * Added `InsufficientStorageStatusProvider`
