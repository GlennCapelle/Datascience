# Datascience

## Hardware Lijst
-   Raspberry Pi
-   Ultrasone Sensor
-   Button
-   Wires
-   Server

## Software Lijst
-   Raspberry Pi OS
-   Ubuntu 20.04
-   Python
-   Html
-   Php
-   Css
-   MySql

### Functie van afstandsmeter: 
De functie van de afstandsmeter is het meten van de afstand via een ultrasone sensor. Deze data wordt doorgestuurd naar een database op mijn server en dan wordt de data in database gebruikt om het laten zien op een website.

### Idee: 
Het idee is om een afstandsmeter te maken die de data naar een website stuurt via een server. Ik zag mensen die aan het werk waren een afstandsmeter gebruiken en alle afstanden die ze gemeten hadden schreven ze op. Het leek mij handiger om die data te sturen naar een database, dus hij stuurt nu de gemeten afstand met een naam en een beschrijving door naar de database.

### Wat is er precies gebeurd:
Ik heb eerst een database gemaakt op mijn laptop. Toen ben ik de database aan gaan passen via een python script, die ik ook op mijn laptop liet runnen. Ik ben daarna mijn Ubuntu server gaan configureren. Dus eerst de standaard dingen van een server, toen de database en tot slot de apache service waarmee ik mijn website kan zien. De website had ik al deels vorig jaar gemaakt(eigen project) Ik had dus al het login script, het logout script, een deel van het design en een deel van de html code. Ik heb hier nog wel toepassingen aangemaakt die logisch waren voor dit project. Daarna ben ik via mijn laptop de database gaan veranderen die op de server stond, hiervoor moest ik veel dingen veranderen op de server en ik moest ook een port openzetten op de router. Dit moest allemaal gebeuren zodat ik toegang had vanaf buitenaf. De Raspberry Py ben ik hierna gaan gebruiken. Ik heb de button en ultrasone sensor aangesloten en het script aangepast. Wanneer je het programma runned moet je eerst op de button klikken voordat de ultrasone sensor de afstand op gaat meten. Daarna kan je een naam en beschrijving meegeven aan de opgemeten afstand en dit wordt dan doorgestuurd naar de database. 

### Data pipeline:
Ultrasone Sensor/button --> raspberry door middel van Dupont Jumper Cables --> Ubuntu server --> Website(tcp/udp)

### Bewijs van werking: 
Video website: website/video/<br>
Video alles: raspberry/video/

### Code: 
Code raspberry: raspberry/<br>
Codes website: website/

### Uitbreidmogelijkheden: 
-   Een laser toevoegen, hiermee kan je precies zien waar je opricht voordat je op de button klikt.
-   Een behuizing/solderen, hierdoor wordt het apparaat handiger om mee te nemen.
-   Alles beveiligen, alles kan nog veel beter beveiligd worden. Op de server, de website, de code zelf en ook fysiek.
-   Een manier om altijd internet te hebben.

### Contact
Glenn Capelle<br>
0982591<br>
0982591@hr.nl

Laatste toevoeging:<br>
Ik heb alle dingen zoals wachtwoorden en database gegevens heb ik eruit gelaten.

Als er nog vragen zijn hoor ik ze graag!
