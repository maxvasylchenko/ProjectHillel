<?php
namespace App\Models;
use Core\orm\Insert;
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
    public function createContact (array $data): void
    {
        //array_key($data);
        //array_values($data);
        $objInsert = new Insert ();
        $objInsert->setColumn(array_keys($data));
        $objInsert->setValue(array_values($data));
        $objInsert->setTableName('contacts');
        $objInsert->execute();
    }
}