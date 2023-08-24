# Reseller gegevens aanpassen
<dfn>Reseller</dfn> gegevens updaten.

**WIP:** deze moet nog verder uitgedacht worden, het was de bedoeling om de rijschool de gegevens te kunnen laten aanpassen die ook te zien zijn bij [:link: `/resellers/{reseller}`](get-resellers-reseller.md). 

Maar hier moet nog iets langer naar gekeken worden dan ik nu tijd voor heb. Rijscholen kunnen in ieder geval zelf al wel hun gegevens aanpassen als ze inloggen op https://itheorie.nl/rijscholen mocht het nodig zijn!

## Request
```http
PATCH /resellers/{reseller}
```

### Parameters
* `reseller` - `string` - ULID of KvK van <dfn>reseller</dfn>
