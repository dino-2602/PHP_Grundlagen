<!DOCTYPE html>
<html>
<head>
    <title>Dateneingabe mit POST/GET</title>
</head>
<body>
    <form method="POST" action="berechnung.php">
        <label for="liter1">Tankfüllung 1 (in Litern):</label>
        <input type="text" name="liter1" id="liter1"><br><br>
        
        <label for="liter2">Tankfüllung 2 (in Litern):</label>
        <input type="text" name="liter2" id="liter2"><br><br>
        
        <label for="preis">Literpreis (in Euro):</label>
        <input type="text" name="preis" id="preis"><br><br>
        
        <button type="submit">Berechnen</button>
    </form>
</body>
</html>
