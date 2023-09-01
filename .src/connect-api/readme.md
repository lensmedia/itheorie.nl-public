# Connect API
## Curiosities
Before we start. We assume that most technical terms regarding HTTP/REST API/JSON are known, this documentation is not intended for if you have never worked with API's.

Outside of the technical terms there are some extra points of attention used in this documentation that might be unclear:
<dl>
<dt><dfn>reseller</dfn>, rijscholen, verkoper</dt>
<dd>Driving schools, companies, etc. that sell the product to the end user (students)</dd>
<dt><dfn>broker</dfn>, tussenpersoon, wederverkoper, affiliate</dt>
<dd>Driving schools, companies, etc. that use this API in their product to sell products to <dfn>reseller</dfn></dd>
<dt><dfn>legacy api</dfn></dt>
<dd>Refers to our old JSON RPC Connect API, sometimes mentioned for clarification with migrations</dd>
<dt><dfn>kvk</dfn></dt>
<dd>Chamber of Commerce number (8 digits, as a string because sometimes they start with a 0), this is used as an argument in several end points. Note that the chamber of commerce number can be changed, do not use it for associations when storing things locally. It is also possible to work with static IDs in this new API.</dd>
<dt><dfn>toegangscode</dfn>, <dfn>access code</dfn>, <dfn>subscription</dfn></dt>
<dd>Access codes are the login codes that the student uses to log in to itheorie.nl. Subscription is the internal name that our itheorie student/user entity has received, if there is a reference to an id for an access code (instead of the access code itself) then it will be called that way.</dd>
</dl>

## Let's get started
Our API has been given the name Connect API (because it was found on that path). This API is intended for <dfn id="broker">brokers</dfn> who use our services. The ultimate goal of this API is to sell iTheorie access codes automatically via/to external parties.

If you want to get started please contact us so we can provide you with a test account on https://test.itheorie.nl. We would also need an external development IP address(es) to add you to the whitelist. 

Everything is available under the same URL as the legacy api. Root POST calls (`POST /api/connect`) still go to the old system (which will continue to work for the time being). All other calls under `https://test.itheorie.nl/api/connect` will connect to our new API. All paths documented in this documentation are relative to `https://test.itheorie.nl/api/connect` (or the live version `https://itheorie.nl/api/connect`) it is advised to do the same, so they can easily be swapped from test to live.

### JSON
Our api uses JSON. All requests must have the header `Content-Type: application/json` (if they have content) and all responses will have the header `Content-Type: application/json`.

#### Language negotiation
The API supports the `Accept-Language` header for both Dutch `nl` and English `en`. If this header is present, the API will try to return the response in the requested language. If the requested language is not available, or the header is not present, the API will return the response in Dutch. This is mainly useful for translated client validation error messages.

```http
GET https://test.itheorie.nl/api/connect
Accept-Language: en
```
```json
{
    "message": "Welcome to our iTheorie Connect API ..."
}
```

_If you would like another language to be supported in our API, please contact us, and we'll see what we can do for it. Note that this does not include course languages._

## Continue reading
* [Authentication](authentication.md)
* [End Points](end-points.md)
* [Error codes](error-codes.md)

## Contact
It can be that some things are not clear, you have a question about something or things are not working as expected. In any case please contact us!

For general questions you can contact [Peter Somers](mailto:p.somers@lensmedia.nl). For technical questions/suggestions you can contact our [IT department](mailto:it@lensmedia.nl) or use [github issues](https://github.com/lensmedia/itheorie.nl-public/issues)! And we will try to help you as soon as possible (workdays from 9.00 - 17.00).
