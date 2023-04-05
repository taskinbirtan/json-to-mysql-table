<?php

namespace JsonToMysqlTable;

class JsonToMysqlTableRepository
{
  private $db;

  public function __construct($db)
  {
    $this->db = $db;
  }

  public function createTable($data)
  {
    $table_name = $data->table_name;
    $fields = $data->fields;

    $sql = "CREATE TABLE $table_name (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY";

    foreach ($fields as $field) {
      $name = $field->name;
      $type = $field->type;
      $sql .= ", $name $type";
    }

    $sql .= ")";

    $this->db->query($sql);
  }
}
