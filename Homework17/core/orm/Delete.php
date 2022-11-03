<?php

namespace Core\orm;

use Core\orm\common\Connector;

class Delete
{
//DELETE FROM TABLENAME WHERE CONDITION
private string $tableName;
protected Where $where;

    public function where($condition)
    {
        $this->where = new Where;
        $this->where->setWhere($condition);
    }

    public function getTableName(): string
    {
        return $this->tableName;
    }
    public function setTableName(string $tableName): void
    {
        $this->tableName = $tableName;
    }
    */
    public function getSQL(): string
    {
        $sql = 'DELETE FROM '. $this->tableName;
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
}