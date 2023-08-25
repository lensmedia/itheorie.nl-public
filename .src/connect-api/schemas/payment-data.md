| name             | type                                     | description                                                         |
|------------------|------------------------------------------|---------------------------------------------------------------------|
| `accountHolder`  | `string`\|`null`                         | reseller account holder name                                        |
| `iban`           | `string`\|`null`                         | reseller account number (IBAN)                                      |
| `billingAddress` | [`AddressData`](address-data.md)\|`null` | reseller billing address falling back to default address if not set |
