# Beknopte informatie over een student (progressie).

```apacheconf
GET /students/{accessCode}
```

## Response
Samengevatte resultaten van de student:
- Gestart op
- Vordering in percentage, waarbij
  - Alle hoofdstukken
  - Alle examens
  - Alle theorielessen
- Slagingskans: percentage van de laatste 5-10 examens geslaagd/gezakt <= misschien
  is dit iets te ambitieus?
- Laatste activiteit
