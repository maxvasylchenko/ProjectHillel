<?php

use Core\orm\common\Connector;

class Sql
{
    protected string $tableName;
    protected Where $where;
}
    public function where($condition)
    {
        $this->where = new Where;
        $this->where->setWhere($condition);
     /**
      * @return string
      */
    public function getTableName(): string
    {
        return $this->tableName;
    }

    /**
     * @param string $tableName
     */
    public function setTableName(string $tableName): void
    {
        $this->tableName = $tableName;
    }
        public function execute()
    {
        $connect = new Connector();
        $PDO = $connect->connect();
        return $PDO->query($this->getSQL());
}
}