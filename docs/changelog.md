# CHANGELOG

## develop branch

* Added a value object to represent each support HTTP status code.
  * Added `HttpStatus`
  * Added `ContinueStatus` to represent HTTP 100
  * Added `SwitchingProtocolsStatus` to represent HTTP 101
  * Added `OkStatus` to represent HTTP 200
  * Added `CreatedStatus` to represent HTTP 201
  * Added `AcceptedStatus` to represent HTTP 202
  * Added `NonAuthoritativeInformationStatus` to represent HTTP 203
  * Added `NoContentStatus` to represent HTTP 204
  * Added `ResetContentStatus` to represent HTTP 205
  * Added `PartialContentStatus` to represent HTTP 206
  * Added `MultipleChoicesStatus` to represent HTTP 300
  * Added `MovedPermanentlyStatus` to represent HTTP 301
  * Added `FoundStatus` to represent HTTP 302
  * Added `SeeOtherStatus` to represent HTTP 303
  * Added `NotModifiedStatus` to represent HTTP 304
  * Added `UseProxyStatus` to represent HTTP 305
  * Added `TemporaryRedirectStatus` to represent HTTP 307
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
* Added interfaces to represent each group of HTTP status codes.
  * Added `Specifications\InformationalStatus` for HTTP 1xx codes
  * Added `Specifications\SuccessfulStatus` for HTTP 2xx codes
  * Added `Specifications\RedirectionStatus` for HTTP 3xx codes
  * Added `Specifications\RequestErrorStatus` for HTTP 4xx codes
  * Added `Specifications\RuntimeErrorStatus` for HTTP 5xx codes
