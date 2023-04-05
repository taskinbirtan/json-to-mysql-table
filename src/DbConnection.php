<?php

namespace JsonToMysqlTable;

class DbConnection
{
  private $host;
  private $username;
  private $password;
  private $database;

  public function __construct($host, $username, $password, $database)
  {
    $this->host = $host;
    $this->username = $username;
    $this->password = $password;
    $this->database = $database;
  }

  public function connect()
  {
    $conn = new \mysqli($this->host, $this->username, $this->password, $this->database);

    if ($conn->connect_error) {
      throw new \Exception("Connection failed: " . $conn->connect_error);
    }

    return $conn;
  }

  public function query($sql)
  {
    $conn = $this->connect();
    $result = $conn->query($sql);

    if (!$result) {
      throw new \Exception("Error executing query: " . $conn->error);
    }

    $conn->close();

    return $result;
  }
}
