# Error codes
Error codes are prefixed with the HTTP status code and are returned in the response body as an error object with a unique error code, name and description.

These have the same properties for almost everything. One exception is validation errors (`validation_failed`), there are more fields there indicating errors for each field.

## Voorbeeld
```json
{
    "code": 12345,
    "error": "error_name",
    "error_description": "Error description"
}
```

## Errors
### `400` Bad Request
#### `{ERROR:unable_to_decode_request_body}(code)` {ERROR:unable_to_decode_request_body}(id)
> {ERROR:connect_api_exception}(message)

{ERROR:unable_to_decode_request_body}(description)

#### `{ERROR:unable_to_parse_request_body}(code)` {ERROR:unable_to_parse_request_body}(id)
> {ERROR:unable_to_decode_request_body}(message)

{ERROR:unable_to_parse_request_body}(description)

#### `{ERROR:validation_failed}(code)` {ERROR:validation_failed}(id)
> {ERROR:unable_to_parse_request_body}(message)

{ERROR:validation_failed}(description)

#### `{ERROR:invalid_reseller_parameter}(code)` {ERROR:invalid_reseller_parameter}(id)
> {ERROR:validation_failed}(message)

{ERROR:invalid_reseller_parameter}(description)

#### `{ERROR:invalid_subscription_parameter}(code)` {ERROR:invalid_subscription_parameter}(id)
> {ERROR:invalid_reseller_parameter}(message)

{ERROR:invalid_subscription_parameter}(description)

#### `{ERROR:invalid_access_code_parameter}(code)` {ERROR:invalid_access_code_parameter}(id)
> {ERROR:invalid_subscription_parameter}(message)

{ERROR:invalid_access_code_parameter}(description)

#### `{ERROR:reseller_company_missing_direct_debit_payment_method}(code)` {ERROR:reseller_company_missing_direct_debit_payment_method}(id)
> {ERROR:invalid_access_code_parameter}(message)

{ERROR:reseller_company_missing_direct_debit_payment_method}(description)

#### `{ERROR:reseller_user_missing_email_contact_method}(code)` {ERROR:reseller_user_missing_email_contact_method}(id)
> {ERROR:reseller_company_missing_direct_debit_payment_method}(message)

{ERROR:reseller_user_missing_email_contact_method}(description)

### `401` Unauthorized
#### `{ERROR:basic_authentication_required}(code)` {ERROR:basic_authentication_required}(id)
> {ERROR:reseller_user_missing_email_contact_method}(message)

{ERROR:basic_authentication_required}(description)

#### `{ERROR:bearer_token_authentication_required}(code)` {ERROR:bearer_token_authentication_required}(id)
> {ERROR:basic_authentication_required}(message)

{ERROR:bearer_token_authentication_required}(description)

#### `{ERROR:invalid_credentials}(code)` {ERROR:invalid_credentials}(id)
> {ERROR:bearer_token_authentication_required}(message)

{ERROR:invalid_credentials}(description)

#### `{ERROR:token_is_revoked}(code)` {ERROR:token_is_revoked}(id)
> {ERROR:invalid_credentials}(message)

{ERROR:token_is_revoked}(description)

#### `{ERROR:token_decoding_error}(code)` {ERROR:token_decoding_error}(id)
> {ERROR:token_is_revoked}(message)

{ERROR:token_decoding_error}(description)

#### `{ERROR:invalid_signature}(code)` {ERROR:invalid_signature}(id)
> {ERROR:token_decoding_error}(message)

{ERROR:invalid_signature}(description)

#### `{ERROR:token_not_yet_valid}(code)` {ERROR:token_not_yet_valid}(id)
> {ERROR:invalid_signature}(message)

{ERROR:token_not_yet_valid}(description)

#### `{ERROR:token_has_expired}(code)` {ERROR:token_has_expired}(id)
> {ERROR:token_not_yet_valid}(message)

{ERROR:token_has_expired}(description)

#### `{ERROR:token_is_invalid}(code)` {ERROR:token_is_invalid}(id)
> {ERROR:token_has_expired}(message)

{ERROR:token_is_invalid}(description)

#### `{ERROR:broker_user_not_found}(code)` {ERROR:broker_user_not_found}(id)
> {ERROR:token_is_invalid}(message)

{ERROR:broker_user_not_found}(description)

#### `{ERROR:broker_company_not_found}(code)` {ERROR:broker_company_not_found}(id)
> {ERROR:broker_user_not_found}(message)

{ERROR:broker_company_not_found}(description)

#### `{ERROR:broker_account_not_found}(code)` {ERROR:broker_account_not_found}(id)
> {ERROR:broker_company_not_found}(message)

{ERROR:broker_account_not_found}(description)

### `403` Forbidden
#### `{ERROR:broker_user_is_disabled}(code)` {ERROR:broker_user_is_disabled}(id)
> {ERROR:broker_account_not_found}(message)

{ERROR:broker_user_is_disabled}(description)

#### `{ERROR:broker_company_is_disabled}(code)` {ERROR:broker_company_is_disabled}(id)
> {ERROR:broker_user_is_disabled}(message)

{ERROR:broker_company_is_disabled}(description)

#### `{ERROR:broker_account_is_disabled}(code)` {ERROR:broker_account_is_disabled}(id)
> {ERROR:broker_company_is_disabled}(message)

{ERROR:broker_account_is_disabled}(description)

#### `{ERROR:reseller_company_is_disabled}(code)` {ERROR:reseller_company_is_disabled}(id)
> {ERROR:broker_account_is_disabled}(message)

{ERROR:reseller_company_is_disabled}(description)

#### `{ERROR:reseller_is_disabled}(code)` {ERROR:reseller_is_disabled}(id)
> {ERROR:reseller_company_is_disabled}(message)

{ERROR:reseller_is_disabled}(description)

#### `{ERROR:reseller_can_not_view_subscription}(code)` {ERROR:reseller_can_not_view_subscription}(id)
> {ERROR:reseller_is_disabled}(message)

{ERROR:reseller_can_not_view_subscription}(description)

#### `{ERROR:reseller_company_not_found_by_id}(code)` {ERROR:reseller_company_not_found_by_id}(id)
> {ERROR:reseller_can_not_view_subscription}(message)

{ERROR:reseller_company_not_found_by_id}(description)

#### `{ERROR:reseller_company_not_found_by_chamber_of_commerce}(code)` {ERROR:reseller_company_not_found_by_chamber_of_commerce}(id)
> {ERROR:reseller_company_not_found_by_id}(message)

{ERROR:reseller_company_not_found_by_chamber_of_commerce}(description)

### `404` Not Found
#### `{ERROR:reseller_not_found}(code)` {ERROR:reseller_not_found}(id)
> {ERROR:reseller_company_not_found_by_chamber_of_commerce}(message)

{ERROR:reseller_not_found}(description)

#### `{ERROR:course_not_found}(code)` {ERROR:course_not_found}(id)
> {ERROR:reseller_not_found}(message)

{ERROR:course_not_found}(description)

#### `{ERROR:subscription_not_found_by_access_code}(code)` {ERROR:subscription_not_found_by_access_code}(id)
> {ERROR:course_not_found}(message)

{ERROR:subscription_not_found_by_access_code}(description)

#### `{ERROR:subscription_not_found_by_id}(code)` {ERROR:subscription_not_found_by_id}(id)
> {ERROR:subscription_not_found_by_access_code}(message)

{ERROR:subscription_not_found_by_id}(description)

#### `{ERROR:invoice_not_found}(code)` {ERROR:invoice_not_found}(id)
> {ERROR:subscription_not_found_by_id}(message)

{ERROR:invoice_not_found}(description)

### `500` Internal Server Error
If you get any of these responses, or if you get a 500 response that does not even match our  format, please contact us. We will try to fix it as soon as possible!

#### `{ERROR:unknown_error}(code)` {ERROR:unknown_error}(id)
> {ERROR:invoice_not_found}(message)

{ERROR:unknown_error}(description)

#### `{ERROR:unknown_authentication_error}(code)` {ERROR:unknown_authentication_error}(id)
> {ERROR:unknown_error}(message)

{ERROR:unknown_authentication_error}(description)

### `503` Service Unavailable
It is possible that we are updating iTheorie, usually that is done within a few seconds and no one notices. But sometimes we have to reserve some time for running a migration. At that time it could happen that the API is temporarily unavailable. A response with this status code will be returned. This response might be of any content-type, no error object will be returned.

#### `{ERROR:connect_api_exception}(code)` {ERROR:connect_api_exception}(id)
_{ERROR:connect_api_exception}(description)_
