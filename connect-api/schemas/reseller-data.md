# ResellerData
| type                | name           | description                                            |
|---------------------|----------------|--------------------------------------------------------|

/** @var Ulid reseller (company) id */
public Ulid $id;

/** @var string reseller name */
public string $name;

/** @var string|null current email address */
public ?string $email;

/** @var AddressData|null address data for the reseller */
public ?AddressData $defaultAddress;

/** @var PaymentData payment information */
public PaymentData $payment;

public bool $canPurchase;

/** @var string[] */
public array $canNotPurchaseReasons = [];
