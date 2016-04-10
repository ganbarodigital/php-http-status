---
currentMenu: httpstatus
---

# The HttpStatus Value Object

The `StatusBuilders` return a `HttpStatus` value object:

    class HttpStatus
    {
        public function __construct($statusCode, $reasonPhrase);
        public function getStatusCode();
        public function getReasonPhrase();
        public function getStatusLine();
    }

## Construction

## getStatusCode()

`HttpStatus::getStatusCode()` returns the HTTP status code as an integer:

    $status = new HttpStatus(404, "Not Found");
    $statusCode = $status->getStatusCode();

    // $statusCode contains the value '400' as an integer

HTTP status codes are part of the HTTP standards. Servers, proxies and clients use these codes to understand what happened with a HTTP request.

## getReasonPhrase()

`HttpStatus::getReasonPhrase()` returns the HTTP reason phrase as a string:

    $status = new HttpStatus(404, "Not Found");
    $reasonPhrase = $status->getReasonPhrase();

    // $reasonPhrase contains the value 'Not Found' as a string

HTTP reason phrases are part of the HTTP standards. They're informational, and are there for humans to read. Servers, proxies and clients may store, forward and log these reason phrases, but they should never actually parse them or use them to understand what happened with a HTTP request.

## getStatusLine()

`HttpStatus::getStatusLine()` returns the HTTP status line. This is the string that is printed after the HTTP protocol version at the start of any HTTP response.

    $status = new HttpStatus(404, "Not Found");
    $statusLine = $status->getStatusLine();

    // $statusLine contains the value "404 Not Found" as a string

    // use $statusLine to set the response from your PHP app
    header($_SERVER["SERVER_PROTOCOL"] ." " . $statusLine);
