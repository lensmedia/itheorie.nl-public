# Download de factuur als PDF

## Request
```http
GET /{reseller}/invoices/{invoice}
```

### Parameters
* `reseller` - `string` - ULID or KvK of <dfn>reseller</dfn>
* `invoice` - `int` - Invoice number (without `IT` prefix as mentioned in the invoice itself)

## Response
### `200` OK
File response with content of the invoice PDF.

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

### `403` Forbidden
### `404` Not Found
