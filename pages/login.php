<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Adress Form</title>
</head>
<body>
<?php 

session_start();

$numAddresses = isset($_POST["numAddresses"]) ? $_POST["numAddresses"] : 1; 

for ($i = 1; $i <= $numAddresses; $i++) {
?>
    <form action="../utils/results.php" method="POST">
        <?php for ($i = 0; $i < $numAddresses; $i++) { ?>
        <div class="address-container">
            <label for="street<?= $i ?>">Street:</label>
            <input type="text" id="street<?= $i ?>" name="street<?= $i ?>" maxlength="50" required>

            <label for="street_nb<?= $i ?>">Street Number:</label>
            <input type="number" id="street_nb<?= $i ?>" name="street_nb<?= $i ?>" required>

            <label for="type<?= $i ?>">Type:</label>
            <select id="type<?= $i ?>" name="type<?= $i ?>" maxlength="20" required>
                <option value="livraison">Livraison</option>
                <option value="facturation">Facturation</option>
                <option value="autre">Autre</option>
            </select>

            <label for="city<?= $i ?>">City:</label>
            <select id="city<?= $i ?>" name="city<?= $i ?>" required>
                <option value="Montreal">Montreal</option>
                <option value="Laval">Laval</option>
                <option value="Toronto">Toronto</option>
                <option value="Quebec">Quebec</option>
                
            </select>

            <label for="zipcode<?= $i ?>">Zipcode:</label>
            <input type="text" id="zipcode<?= $i ?>" name="zipcode<?= $i ?>" maxlength='6'  required>
        </div>
        <?php } ?>

        <input type="hidden" name="address_count" value="<?= $numAddresses ?>">
        <button type="submit">Vérifier</button>
    </form>
    <?php } ?>
</body>
</html>
