<?php
namespace App\Models;
use Core\orm\Select;
class Contact
{
    public function getAll(): array
    {
        $select = new Select();
        $select->setTableName('contacts');
        $data3 = $select->execute();
        $rows = $data3->fetchAll(\PDO::FETCH_ASSOC);
        //var_dump($rows);
        return $rows;
    }
}