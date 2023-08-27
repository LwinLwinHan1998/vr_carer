<?php
$hostname = "megashop-do-user-14537762-0.b.db.ondigitalocean.com";
$port = "25060";
$dbname = "vr_carer";
$username = "doadmin";
$password = "AVNS_GXwfrWR2c0tg20CnL2E";
$pdo = new PDO(
    "mysql:host=$hostname;port=$port;dbname=$dbname",
    $username,
    $password
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
