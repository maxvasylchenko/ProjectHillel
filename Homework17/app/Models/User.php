<?php
namespace App\Models;
use Core\orm\Insert;
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
        public function createUser (array $data): void
        {
        //array_key($data);
        //array_values($data);
            $objInsert = new Insert ();
            $objInsert->setColumn(array_keys($data));
            $objInsert->setValue(array_values($data));
            $objInsert->setTableName('users');
            $objInsert->execute();
        }
        public function auth($email, $password): bool
        {
            $objSelect = new Select ();
            $objSelect->setWhere("email='" . $email . "' AND password = '" .$password . "'");
            $objSelect->setTableName('users');
            $data = $objISelect->execute();
            $result = $data->fetchAll(\PDO::FETCH_ASSOC);
            retutn !empty($result);
        }
}