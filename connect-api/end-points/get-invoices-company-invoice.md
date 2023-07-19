# Download de factuur als PDF

```http
GET /invoices/{company}/{invoice}
```

## Parameters
* `company` - `string` - ULID of KvK
* `invoice` - `int` - Factuurnummer

## Response
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
