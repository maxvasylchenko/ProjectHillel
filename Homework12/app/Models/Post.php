<?php
namespace App\Models;
use Core\orm\Insert;
use Core\orm\Select;
class Post
{
    public function getAll(): array
    {
        $select = new Select();
        $select->setTableName('posts');
        $data2 = $select->execute();
        $rows = $data2->fetchAll(\PDO::FETCH_ASSOC);
        //var_dump($rows);
        return $rows;
    }
    public function createPost (array $data): void
    {
        //array_key($data);
        //array_values($data);
        $objInsert = new Insert ();
        $objInsert->setColumn(array_keys($data));
        $objInsert->setValue(array_values($data));
        $objInsert->setTableName('posts');
        $objInsert->execute();
    }
}