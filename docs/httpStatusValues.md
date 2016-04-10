---
currentMenu: httpStatusValues
---

# HTTP Status Value Classes

Here's the full list of which class represents which HTTP status code.

## Informational Status Codes

These classes represent the HTTP 1xx status codes:

HTTP Status Code | Value Object's Class
-----------------|--------------------
100 | `GanbaroDigital\HttpStatusAware\StatusValues\Informational\ContinueStatus`
101 | `GanbaroDigital\HttpStatusAware\StatusValues\Informational\SwitchingProtocolsStatus`

Each of these classes implements the `GanbaroDigital\HttpStatusAware\Specifications\InformationalStatus` interface.

## Successful Status Codes

These classes represent the HTTP 2xx status codes:

HTTP Status Code | Value Object's Class
-----------------|--------------------
200 | `GanbaroDigital\HttpStatusAware\StatusValues\Successful\OkStatus`
201 | `GanbaroDigital\HttpStatusAware\StatusValues\Successful\CreatedStatus`
202 | `GanbaroDigital\HttpStatusAware\StatusValues\Successful\AcceptedStatus`
203 | `GanbaroDigital\HttpStatusAware\StatusValues\Successful\NonAuthoritativeInformationStatus`
204 | `GanbaroDigital\HttpStatusAware\StatusValues\Successful\NoContentStatus`
205 | `GanbaroDigital\HttpStatusAware\StatusValues\Successful\ResetContentStatus`
206 | `GanbaroDigital\HttpStatusAware\StatusValues\Successful\PartialContentStatus`

Each of these classes implements the `GanbaroDigital\HttpStatusAware\Specifications\SuccessfulStatus` interface.

## Redirection Status Codes

These classes represent the HTTP 3xx status codes:

HTTP Status Code | Value Object's Class
-----------------|--------------------
300 | `GanbaroDigital\HttpStatusAware\StatusValues\Redirection\MultipleChoicesStatus`
300 | `GanbaroDigital\HttpStatusAware\StatusValues\Redirection\MovedPermanentlyStatus`

Each of these classes implements the `GanbaroDigital\HttpStatusAware\Specifications\RedirectionStatus` interface.

## RequestError Status Codes

These classes represent the HTTP 4xx status codes:

HTTP Status Code | Value Object's Class
-----------------|--------------------
400 | `GanbaroDigital\HttpStatusAware\StatusValues\RequestError\BadRequestStatus`

Each of these classes implements the `GanbaroDigital\HttpStatusAware\Specifications\RequestErrorStatus` interface.

## RuntimeError Status Codes

These classes represent the HTTP 5xx status codes:

HTTP Status Code | Value Object's Class
-----------------|--------------------
500 | `GanbaroDigital\HttpStatusAware\StatusValues\RuntimeError\InternalServerError`
500 | `GanbaroDigital\HttpStatusAware\StatusValues\RuntimeError\UnexpectedError`

Each of these classes implements the `GanbaroDigital\HttpStatusAware\Specifications\RuntimeErrorStatus` interface.
