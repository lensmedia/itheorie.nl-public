# Reseller information
Detailed information about a <dfn>reseller</dfn>.

> **info** can be used to resolve a <dfn>reseller</dfn> chamber of commerce number to get the ID for long term associations.

> **info** billing contains some information regarding if the <dfn>reseller</dfn> can purchase products. These are also triggered when making a purchase however they are triggered separately as actual error responses.

## Request
```http
GET /{reseller}
```
```http
GET https://test.theorie.nl/api/connect/69599068
```
```http
GET https://test.theorie.nl/api/connect/01H90PZFEDWE3YWZJPD8Z7030P
```

### Parameters
* {INCLUDE:../includes/reseller-parameter.md}

## Responses
### Schema
#### ResellerData
{INCLUDE:../includes/schemas/reseller-data.md}

#### AddressData
{INCLUDE:../includes/schemas/address-data.md}

#### BillingData
{INCLUDE:../includes/schemas/billing-data.md}

### Example
```json
{
    "id": "01H90PZFEDWE3YWZJPD8Z7030P",
    "name": "Reseller Voorbeeld",
    "email": "reseller@voorbeeld.nl",
    "defaultAddress": {
        "streetName": "Oosterwal",
        "streetNumber": 4,
        "addition": null,
        "zipCode": "7241AP",
        "city": "Lochem",
        "country": "NL"
    },
    "billing": {
        "accountHolder": "Reseller Voorbeeld",
        "iban": "NL96SNSB0115541241",
        "billingAddress": null,
        "canPurchase": false,
        "canNotPurchaseReasons": {
            "400002": "Er zijn geen incasso gegevens bekend bij iTheorie.",
            "400003": "Er is geen e-mailadres bekend bij iTheorie."
        }
    }
}
```

### Errors

#### {INCLUDE:../includes/reseller-attribute-title.md}
{INCLUDE:../includes/reseller-errors.md}
