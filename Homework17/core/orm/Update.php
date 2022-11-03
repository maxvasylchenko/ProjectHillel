<?php

namespace Core\orm;
use Core\orm\common\Connector;
class Update
{
protected $tableName;
protected $setName;
protected $values;
protected Where $where;

    public function where ($condition)
    {
        $this->where = new Where;
        $this->where->setWhere($condition);
    }

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
    public function getSetName()
    {
        return $this->setName;
    }

    /**
     * @param mixed $setName
     */
    public function setSetName($setName): void
    {
        $this->setName = $setName;
    }

    /**
     * @return mixed
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param mixed $values
     */
    public function setValues($values): void
    {
        $this->values = $values;
    }
    public function update(): string
    {
        $sql = 'UPDATE ' . $this->tableName .= ' SET ' . $this->setName . ' FROM ' . $this->values;
        if (!empty($this->where)) {
            $sql .= $this->where->getWhere();
        }
        return $sql;
    }
    public function execute ()
    {
        $connect = new Connector();
        $PDO = $connect->connect();
        return $PDO->query($this->update());
    }
}