# Lijst met beschikbare cursussen
Lijst met alle cursussen die op dit moment beschikbaar zijn in iTheorie. **Let op:** het kan wezen dat een cursist een oudere cursus volgt die hier niet meer tussen staat!

```apacheconf
GET /courses
```

## Response
### Schema
| veld | type | beschrijving |
|-|-|-|
| `id` | `string` | Unieke identifier van de cursus (ULID) |
| `license` | `string` | Rijbewijs categorie (`b` personenauto, `a` motor, `am` bromfiets) |
|`locale`|`string`| Taal van cursus `nl` of `en`|
|`title`|`string`|Titel van de cursus|
|`image`|`string`|Url naar de afbeelding die wij bij de cursus gebruiken|
|`published_at`|`datetime`|Datum waarop de cursus beschikbaar is gekomen|
|`updated_at`|`datetime`|Datum waarop de cursus voor het laatst is bijgewerkt<br>_Let op bij deze word voorlopig nog niet gekeken naar wijzigingen in de lesinhoud (is uiteindelijk wel de bedoeling)._|
|`chapters`|`string[]`|Lijst met hoofdstuk namen|
|`exams`|`string[]`|Lijst met examen namen|
|`zoom_lessons`|`string[]`|Lijst met beschikbare zoom cursus namen|

### Voorbeeld
```json
[{
    "id": "01GC7ABB22TT7Y6883YPVHFCG5",
    "license": "b",
    "locale": "nl",
    "title": "Theoriecursus personenauto",
    "image": "https://itheorie.nl/assets/images/course/01GC7ABB22TT7Y6883YPVHFCG5.jpg",
    "published_at": "2023-01-01T00:00:00+00:00",
    "updated_at": "2023-01-01T00:00:00+00:00",
    "chapters": [ "Wetgeving", ... ],
    "exams": [ "Examen 1", "Examen 2", ... ],
    "zoom_lessons" [ "Wetgeving", ... ]
}, {
    ...
}]
```
