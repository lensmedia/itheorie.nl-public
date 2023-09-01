# Create a new purchase for a specific reseller
## Request

```http
POST /{reseller}/purchases
```

### Parameters
* {INCLUDE:../includes/reseller-parameter.md}

## Request
### Schema
| name                        | type              | description                                                                                                                                                                                                                                                                                  |
|-----------------------------|-------------------|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `course`                    | `string`\|`null`  | ULID id off the course you want to activate. Can be omitted if you want to let the student choose which course they want to follow when they first log in.                                                                                                                                   |
| `name`                      | `string`\|`null`  | Name of the student. _**optional unless** `permissions_to_share_progress` is set to `true`. Then we need a name to display on the driving school and students page of https://itheorie.nl._                                                                                                  |
| `email`                     | `string`\|`null`  | Email address of the student. _This is only used for notifications of important changes (for example a theory lesson that is cancelled)._                                                                                                                                                    |
| `mobilePhone`               | `string`\|`null`  | Mobile phone number of the student (preferably international format `+31612345678` otherwise it will be automatically converted (for `NL`) which does not always work well). _This is only used for SMS notifications of important changes (for example a theory lesson that is cancelled)._ |
| `permissionToShareProgress` | `boolean`\|`null` | Yes/no of the <dfn>reseller</dfn> has received permission from the student to view the progress (default `false`). Without this permission, the <dfn>reseller</dfn> cannot view the `/students/{accessCode}` routes where the progress can be seen.                                          |

### Example
```json
{
    "course": "01GYFBWMYGGARXBN40X7FFDCNZ",
    "name": "Voorbeeld Cursist",
    "email": "cursist@voorbeeld.nl",
    "mobilePhone": "+31612345678",
    "permissionToShareProgress": true
}
```

## Response
### `303` See Other
On **success**, you will be redirected to the purchase details page [:link: `/{reseller}/purchases/{purchase}`](reseller-purchases-purchase-get.md).

### Errors

#### {INCLUDE:../includes/reseller-parameter-title.md}
{INCLUDE:../includes/reseller-parameter-errors.md}

#### Prerequisites failed
* {ERROR:reseller_user_missing_email_contact_method}
* {ERROR:reseller_company_missing_direct_debit_payment_method}

#### Request Content
* {ERROR:unable_to_decode_request_body}
* {ERROR:unable_to_parse_request_body}
{INCLUDE:../includes/unable-to-parse-request-body-example.md}

* {ERROR:validation_failed}
{INCLUDE:../includes/validation-failed-example.md}
