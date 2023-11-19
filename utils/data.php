<?php
    require_once('../config/connection.php');
    require_once('../functions/validation.php');
    require_once("../functions/userCrud.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $address_count = isset($_POST["address_count"]) ? (int)$_POST["address_count"] : 0;
    ?>
    <h2>Verification des adresses</h2>
    <ul>
        <?php for ($i = 0; $i < $address_count; $i++) { ?>
            <li>
                <strong>Street:</strong> <?= $_POST["street$i"] ?><br>
                <strong>Street Number:</strong> <?= $_POST["street_nb$i"] ?><br>
                <strong>Type:</strong> <?= $_POST["type$i"] ?><br>
                <strong>City:</strong> <?= $_POST["city$i"] ?><br>
                <strong>Zipcode:</strong> <?= $_POST["zipcode$i"] ?><br>
            </li>
        <?php } ?>
    </ul>
    <?php } ?>

