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
* Added interfaces to represent each group of HTTP status codes.
  * Added `Specifications\InformationalStatus` for HTTP 1xx codes
  * Added `Specifications\SuccessfulStatus` for HTTP 2xx codes
  * Added `Specifications\RedirectionStatus` for HTTP 3xx codes
  * Added `Specifications\RequestErrorStatus` for HTTP 4xx codes
  * Added `Specifications\RuntimeErrorStatus` for HTTP 5xx codes
