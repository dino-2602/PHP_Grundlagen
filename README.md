# PHP Grundlagen

Dieses Projekt enthält eine grundlegende Übung zu PHP und umfasst PHP-Code zur Berechnung der Benzinkosten sowie eine Erweiterung mit Dateneingabe über ein HTML-Formular.

## Projektstruktur
- **benzin_kosten.php**: Script zur Berechnung der Benzinkosten für zwei feste Tankfüllungen.
- **eingabe.php**: HTML-Formular, um Eingabewerte für die Benzinkostenberechnung zu erfassen.
- **berechnung.php**: PHP-Skript zur Verarbeitung der eingegebenen Daten und Ausgabe der berechneten Kosten.

## Aufgabenbeschreibung

### 1. Kostenermittlung und Ausgabe
Die erste Aufgabe besteht darin, die Addition und Multiplikation mehrerer Zahlen vorzunehmen, um die Benzinkosten zu berechnen. Die Werte sind fest im Code eingetragen:
- **Tankfüllungen**: `liter1 = 40.5` und `liter2 = 35.7`
- **Literpreis**: `preis = 1.499`
- **Ausgabe**: "Die Benzinkosten betragen für 76.2 Liter 114.2238 €"

### Screenshot
-! [Bezinkosten](https://github.com/dino-2602/PHP_Grundlagen/blob/main/PHP_Grundlagen/screenshots/Aufgabe%201.png)

### 2. Erweiterung: Dateneingabemöglichkeiten
In der Erweiterung wird ein HTML-Formular verwendet, um Werte für die Tankfüllungen und den Literpreis einzugeben. Die Daten werden mittels der POST-Methode an ein PHP-Skript übergeben, das die Berechnung durchführt und das Ergebnis ausgibt.

### Screenshots
- ! [Eingabe](https://github.com/dino-2602/PHP_Grundlagen/blob/main/PHP_Grundlagen/screenshots/Erweiterung%20Eingabe.png)
- ! [Berechnung](https://github.com/dino-2602/PHP_Grundlagen/blob/main/PHP_Grundlagen/screenshots/Erweiterung%20Berechnung.png)

## Installation und Ausführung
1. **XAMPP einrichten**:
   - Man stellt sicher, dass XAMPP installiert ist und der Apache-Webserver läuft.
2. **Dateien in das htdocs-Verzeichnis kopieren**:
   - Dateien sollten im Ordner `Pfad abhänging vom Installtionspfad von XAMPP` htdocs gespeichert sein
3. **Projekt im Browser aufrufen**:
   - Beispiel: `benzin_kosten.php`: [http://localhost/`Pfad von htdocs bis einschließlich .php File`]
   - Dies gilt für alle Files

## Hinweise
- Man sollte darauf achten, dass `$_POST`-Werte korrekt überprüft werden, um Fehlereingaben zu vermeiden.
- Die `php.ini`-Einstellungen können je nach Serverkonfiguration variieren.

## Lizenz
Dieses Projekt ist für Bildungszwecke im Rahmen des ITL-Unterrichts an der Landesberufsschule Eibiswald gedacht.
