# Download de factuur als PDF

## Request
```http
GET /invoices/{company}/{invoice}
```

### Parameters
* `company` - `string` - ULID of KvK
* `invoice` - `int` - Factuurnummer

## Response
### `404` Not Found
<dfn>Reseller</dfn> of factuur niet gevonden.

#### `error_reseller_not_found`
```json
{
    "code": 15122,
    "error": "reseller_not_found",
    "error_description": "Reseller not found"
}
```

#### `error_invoice_not_found`
```json
{
    "code": 15123,
    "error": "invoice_not_found",
    "error_description": "Invoice not found"
}
```

### `403` Forbidden
<dfn>Broker</dfn> heeft geen toestemming van deze <dfn>reseller</dfn>. En kan daarom de facturen niet downloaden.

#### `error_broker_no_permission_from_reseller`
```json
{
    "code": 13124,
    "error": "broker_no_permission_from_reseller",
    "error_description": "Broker has no permission to access this reseller"
}
```

### `200` OK
Binary file response met de inhoud van het PDF-factuur bestand.

```http
HTTP/1.1 200 OK
Content-Type: application/pdf
Content-Length: 12345
Content-Disposition: attachment; filename=IT12345.pdf

%PDF-1.4
%����
1 0 obj

...
```
