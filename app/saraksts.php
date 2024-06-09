<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="kandidati.php" method="post">
        <label for="party_name">Saraksta Nosaukums:</label>
        <input type="text" id="party_name" name="party_name" required><br><br>

        <label for="candidate_count">Kandidatu skaits:</label>
        <input type="number" id="candidate_count" name="candidate_count" min="1" required><br><br>

        <input type="submit" value="Apstiprinat">
    </form>
</body>

</html>