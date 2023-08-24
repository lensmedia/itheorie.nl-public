### ResellerData
| name                    | type                                     | description                                        |
|-------------------------|------------------------------------------|----------------------------------------------------|
| `id`                    | `Ulid`                                   | reseller (company) id                              |
| `name`                  | `string`                                 | reseller name                                      |
| `email`                 | `string`\|`null`                         | current email address                              |
| `defaultAddress`        | [`AddressData`](address-data.md)\|`null` | address data for the reseller                      |
| `payment`               | [`PaymentData`](payment-data.md)         | payment information                                |
| `canPurchase`           | `bool`                                   | whether the reseller can purchase products         |
| `canNotPurchaseReasons` | `string[]`                               | reasons why the reseller can not purchase products |

### AddressData
| name           | type             | description                                     |
|----------------|------------------|-------------------------------------------------|
| `streetName`   | `string`         |                                                 |
| `streetNumber` | `int`            |                                                 |
| `addition`     | `string`\|`null` | house number addition (A, unit B, etc...)       |
| `zipCode`      | `string`         |                                                 |
| `city`         | `string`         |                                                 |
| `country`      | `string`         | string ISO 3166-1 alpha-2 (currently only `NL`) |


### PaymentData
| name             | type                                     | description                                                         |
|------------------|------------------------------------------|---------------------------------------------------------------------|
| `accountHolder`  | `string`\|`null`                         | reseller account holder name                                        |
| `iban`           | `string`\|`null`                         | reseller account number (IBAN)                                      |
| `billingAddress` | [`AddressData`](address-data.md)\|`null` | reseller billing address falling back to default address if not set |

### AddressData
| name           | type             | description                                     |
|----------------|------------------|-------------------------------------------------|
| `streetName`   | `string`         |                                                 |
| `streetNumber` | `int`            |                                                 |
| `addition`     | `string`\|`null` | house number addition (A, unit B, etc...)       |
| `zipCode`      | `string`         |                                                 |
| `city`         | `string`         |                                                 |
| `country`      | `string`         | string ISO 3166-1 alpha-2 (currently only `NL`) |


