<?php

try {
    $con = new PDO ("mysql:host=localhost;dbname=database", "root", "root");

    $sql = "CREATE DATABASE 'database'";

    $con->exec($sql);
    echo 'Congratulation, DB created!';
} catch (PDOException $b) {
    echo "error:" . $b->getMessage();
}

try {
    $con = new PDO ("mysql:host=localhost;dbname=database", "root", "root");

    $sql = "CREATE TABLE 'contacts' ('phone' integer unsigned,
                                     'telegram' enum ('ordinary', 'premium'),
                                     'viber' varchar (220),
                                     'whatsapp' varchar (228) DEFAULT NULL");

    $con->exec($sql);
    echo 'Congratulation, Table created!';
} catch (PDOException $b) {
    echo "error:" . $b->getMessage();
}
try {
    $con = new PDO ("mysql:host=localhost;dbname=database", "root", "root");

    $sql = " INSERT 'contacts' ('phone', 'telegram', 'viber', 'whatsapp') VALUES ()";
    $telegrams = ['ordinary', 'premium'];
    for ($a = 1; $a < 550; $a++){
        $phone = rand (12345645321, 65432123456);
        $telegram = $telegrams[array_rand($telegrams)];
        $sql .= "($phone, '$telegram', 'rakuten$a.viber', meta$a:facebook)";
    }
    $con->exec($sql);
    } catch (PDOException $b) {
    echo "error:" . $b->getMessage();
}