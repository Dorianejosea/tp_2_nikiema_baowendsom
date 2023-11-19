<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Adresse Form</title>
</head>
<body>
    <div classs="container">
        <form action="pages/login.php" method="post">
            <label for="numAddresses">Combien d'adresses avez-vous ?</label>
            <input type="number" name="numAddresses" min="1" required>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>