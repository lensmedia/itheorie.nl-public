# Authentication

## Obtaining a Bearer Token
Basic authentication is used to obtain a bearer token.
Authentication for this request is done using the brokers lens id/password!

### Request
```http
GET /auth
Authorization: Basic aGE6aGE=
```

### Response
```json
{
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2OTMzMTYzMDIsImlzcyI6Iml0aGVvcmllIiwic3ViIjoiY29ubmVjdC1hcGkiLCJhdWQiOiJCcm9rZXIgVm9vcmJlZWxkIiwicGsiOiI5Zjhka0dubVFXbmZqRkVua3FwczM4azJDMTdjZDI0NWI1OWU0YTcwYjQ1Y2JmMWJhYmQwYzk0MTMzODVjM2Q2ODlhMzZjY2E2OThlOTY1ODczMzM5YyIsInVzZXIiOiIwMUg5MFFaOUQ5WVNOOVo5MFRXQzZSVEZCRSIsImNvbXBhbnkiOiIwMUg5MFBXRVRINDdaVEdKTVA2OTgxUE5KUSIsImFjY291bnQiOiIwMUg5MFE2MzJBNDVFWkpCTldDMURHUFdWUCJ9.nUoDm1rk7Jwg8HL--PC38J_R5nGnx0FyUUrySarfHek"
}
```

### Errors
* {ERROR:basic_authentication_required}

#### Credentials
* {ERROR:broker_user_not_found}
* {ERROR:broker_company_not_found}
* {ERROR:broker_account_not_found}
* {ERROR:invalid_credentials}

#### Account status
* {ERROR:broker_user_is_disabled}
* {ERROR:broker_company_is_disabled}
* {ERROR:broker_account_is_disabled}

#### Other
* {ERROR:unknown_authentication_error}

## Using the Bearer Token for all other requests
For all other requests a bearer token is required.
```http
GET https://itheorie.nl/api/connect
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2OTMzMTYzMDIsImlzcyI6Iml0aGVvcmllIiwic3ViIjoiY29ubmVjdC1hcGkiLCJhdWQiOiJCcm9rZXIgVm9vcmJlZWxkIiwicGsiOiI5Zjhka0dubVFXbmZqRkVua3FwczM4azJDMTdjZDI0NWI1OWU0YTcwYjQ1Y2JmMWJhYmQwYzk0MTMzODVjM2Q2ODlhMzZjY2E2OThlOTY1ODczMzM5YyIsInVzZXIiOiIwMUg5MFFaOUQ5WVNOOVo5MFRXQzZSVEZCRSIsImNvbXBhbnkiOiIwMUg5MFBXRVRINDdaVEdKTVA2OTgxUE5KUSIsImFjY291bnQiOiIwMUg5MFE2MzJBNDVFWkpCTldDMURHUFdWUCJ9.nUoDm1rk7Jwg8HL--PC38J_R5nGnx0FyUUrySarfHek
```
```json
{
    "message": "Welcome to our iTheorie Connect API ..."
}
```

### Errors
**NOTE** As the bearer token is used for all requests, these broker side related errors **can occur** on any request and will not be mentioned any further.

* {ERROR:bearer_token_authentication_required}

#### Token status
* {ERROR:token_decoding_error}
* {ERROR:invalid_signature}
* {ERROR:token_not_yet_valid}
* {ERROR:token_has_expired}
* {ERROR:token_is_invalid}
* {ERROR:token_is_revoked}

#### Account status
* {ERROR:broker_user_not_found}
* {ERROR:broker_company_not_found}
* {ERROR:broker_account_not_found}
* {ERROR:broker_user_is_disabled}(format=`{code}` `{id}`)
* {ERROR:broker_company_is_disabled}(format=`{code}` `{id}`)
* {ERROR:broker_account_is_disabled}(format=`{code}` `{id}`)

_When disabled: {ERROR:broker_account_is_disabled}(description)_

#### Other
* {ERROR:unknown_authentication_error}

## Continue reading
A brief explanation of our error structure can be found in [error codes](error-codes.md).
If you want to get to the good part you can also continue reading about our [end points](end-points.md) these will reference back to the errors when applicable.
