# Lijst met beschikbare cursussen
Lijst met alle cursussen die **op dit moment beschikbaar zijn** in iTheorie. **Let op:** het kan wezen dat een cursist een oudere cursus volgt die hier niet meer tussen staat! 

Zoek je gegevens van een cursus die niet meer actief is dan kan je de specifieke cursus opvragen met [:link: `GET /courses/{course}`](get-courses-course.md). Deze end-point 
werkt met alle cursussen die wij in ons systeem hebben staan.

_B.v. onlangs zijn de cursussen motor en bromfiets veranderd naar een nieuwe indeling, cursistsen die hiervoor al bezig waren hebben nog de oude cursus die niet in deze lijst staat._

## Request
```http
GET /courses
```

## Response
### `200` OK
#### Schema
| veld                    | beschrijving                                                                                                                                                                   |
|-------------------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `id: string`            | Unieke identifier van de cursus (ULID)                                                                                                                                         |
| `license: string`       | Rijbewijs categorie (`b` personenauto, `a` motor, `am` bromfiets)                                                                                                              |
| `locale: string`        | Taal van cursus `nl` of `en`                                                                                                                                                   |
| `title: string`         | Titel van de cursus                                                                                                                                                            |
| `description: string`   | Omschrijving van de cursus                                                                                                                                                     |
| `image: string`         | Url naar de afbeelding die wij bij de cursus gebruiken                                                                                                                         |
| `publishedAt: datetime` | Datum waarop de cursus beschikbaar is gekomen                                                                                                                                  |
| `updatedAt: datetime`   | Datum waarop de cursus voor het laatst is bijgewerkt<br>_Let op bij deze word voorlopig nog niet gekeken naar wijzigingen in de lesinhoud (is uiteindelijk wel de bedoeling)._ |
| `chapters: string[]`    | Lijst met hoofdstuk namen                                                                                                                                                      |
| `exams: string[]`       | Lijst met examen namen                                                                                                                                                         |
| `zoomLessons: string[]` | Lijst met beschikbare zoom cursus namen                                                                                                                                        |

#### Voorbeeld
```json
[{
    "id": "01GC7ABB22TT7Y6883YPVHFCG5",
    "license": "b",
    "locale": "nl",
    "title": "Theoriecursus personenauto",
    "description": "De iTheorie opleiding voor het CBR theorie-examen auto bestaat uit een leergedeelte, 8 theorielessen via een livestream en maar liefst 50 oefenexamens.\niTheorie is een innovatieve leermethode die is afgestemd op de behoeften en het leertempo van de cursist. Met de interactieve leermiddelen, boeiende video's en realistische oefenexamens leer je op een leuke en efficiënte manier alle verkeerstheorie.\nOns platform is 24/7 beschikbaar, zodat er op elk moment en overal geleerd kan worden.",
    "image": "https://itheorie.nl/assets/images/course/01GC7ABB22TT7Y6883YPVHFCG5.jpg",
    "publishedAt": "2023-01-01T00:00:00+00:00",
    "updatedAt": "2023-01-01T00:00:00+00:00",
    "chapters": [ "Wetgeving", ... ],
    "exams": [ "Examen 1", "Examen 2", ... ],
    "zoomLessons" [ "Wetgeving", ... ]
}, {
   ...
}]
```

### `403` Forbidden
`403001 broker_is_disabled`
<dfn>Broker</dfn> is uitgeschakeld.
