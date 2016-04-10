# CHANGELOG

## develop branch

* Added a value object to represent each support HTTP status code.
  * Added `HttpStatus`
* Added interfaces to represent each group of HTTP status codes.
  * Added `Specifications\InformationalStatus` for HTTP 1xx codes
  * Added `Specifications\SuccessfulStatus` for HTTP 2xx codes
  * Added `Specifications\RedirectionStatus` for HTTP 3xx codes
  * Added `Specifications\RequestErrorStatus` for HTTP 4xx codes
  * Added `Specifications\RuntimeErrorStatus` for HTTP 5xx codes
* Added classes to build HTTP status codes quickly and easily.
  * Added `Specifications\HttpStatusBuilder` to represent all status builders
  * Added `StatusBuilders\BuildContinueStatus`
