<?php

namespace JsonToMysqlTable;

class JsonToMysqlTableController
{
  private $service;

  public function __construct($service)
  {
    $this->service = $service;
  }

  public function createTableFromJson($json_data)
  {
    try {
      $this->service->createTable($json_data);
      return "Table created successfully";
    } catch (\Exception $e) {
      return "Error: " . $e->getMessage();
    }
  }
}
