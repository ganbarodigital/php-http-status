---
currentSection: usage
currentItem: usage
pageflow_prev_url: ../installation.html
pageflow_prev_text: Installation
pageflow_next_url: http-status-value-objects.html
pageflow_next_text: HTTP Status Value Objects
---

# Usage

## Introduction

You can use the _HTTP Status Library_ in three different ways:

* simply instantiate new value objects for known HTTP status codes, and/or
* use the traits in the `StatusProviders` namespace to add a `getHttpStatus()` method to your own value objects, entities and exceptions
* implement one of the `HttpException` interfaces to allow code to catch whole classes of exception quickly and easily
