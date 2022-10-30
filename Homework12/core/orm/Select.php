<?php
namespace Core\orm;
use Core\orm\common\Connector;
class Select
{
    protected $tableName;
    protected $columns = '*';

    /**
     * @return mixed
     */
    public function getTableName()
    {
        return $this->tableName;
    }

    /**
     * @param mixed $tableName
     */
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
        return 'SELECT ' .$this->columns. ' FROM '. $this->tableName;
    }
    public function execute()
    {
        $connect = new Connector();
        $PDO = $connect->connect();
        return $PDO->query($this->getSQL());
    }
    // SELECT * FROM `users`
}