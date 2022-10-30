<?php
namespace Core\orm\common;
class Connector
{
private $dsn;
private $username;
private $password;

public function __construct()
{
    $config = include_once (__DIR__) . '/../config/config.php';
    $host = $config['host'] ?? '';
    $dbname = $config['dbname'] ?? '';

    $this->dsn='mysql:host=' . $host . ';dbname=' . $dbname;
    $this->username= $config['username'] ?? '';
    $this->password= $config['password'] ?? '';
}

public function connect()
{
    return new \PDO ($this->dsn, $this->username, $this->password);
}
}