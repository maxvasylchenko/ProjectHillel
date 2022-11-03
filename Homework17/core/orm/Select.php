<?php
namespace Core\orm;
use Core\orm\common\Connector;
class Select extends Sql
{
    protected $tableName;
    protected $columns = '*';
    protected Where $where;

    public function where ($condition)
    {
       $this->where = new Where;
       $this->where->setWhere($condition);
    }
    public function getTableName()
    {
        return $this->tableName;
    }


    public function setTableName($tableName): void
    {
        $this->tableName = $tableName;
    }

    /**
     * @return mixed
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * @param mixed $columns
     */
    public function setColumns($columns): void
    {
        $this->columns = $columns;
    }

    public function getSQL(): string
    {
        $sql = 'SELECT ' .$this->columns. ' FROM '. $this->tableName;
        if (!empty($this->where)){
            $sql .= $this->where->getWhere();
        }
        return $sql;
    }
    public function execute()
    {
        $connect = new Connector();
        $PDO = $connect->connect();
        return $PDO->query($this->getSQL());
    }
    // SELECT * FROM `users`
}
//https://codersrank.io/
//https://www.codewars.com/collections/php-in-action