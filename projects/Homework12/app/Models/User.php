<?php
namespace App\Models;
use Core\orm\Select;
class User
{
    public function getAll(): array
    {
        $select = new Select();
        $select->setTableName('users');
        $data = $select->execute();
        $rows = $data->fetchAll(\PDO::FETCH_ASSOC);
        //var_dump($rows);
            return $rows;
        }
}