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

[[INCLUDE:address-data.md]]

[[INCLUDE:payment-data.md]]
