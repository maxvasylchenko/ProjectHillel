<?php
namespace App\Models;
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
}