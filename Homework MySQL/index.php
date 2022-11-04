<?php
//1) Создать таблицу и наполнить тестовыми данными (500+ записей). Для этого можно использовать подобный скрипт как мы писали на уроке (но с другой сущностью, не юзеры).
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
//2) Создать индексы для запроса:
SELECT * FROM `table_name` WHERE `field_name` = 'value' AND `field_name2` = 'value2' ORDER BY `id`

/*3)Создать полнотекстовый индекс для поиска по 2 полям.
Все поля в запросе и в таблицах произвольные, главное что бы они подходили под запрос который я написал выше*/
