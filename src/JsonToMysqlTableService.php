<?php

namespace JsonToMysqlTable;

class JsonToMysqlTableService
{
  private $repository;

  public function __construct($repository)
  {
    $this->repository = $repository;
  }

  public function createTable($json_data)
  {
    $data = $this->parseJsonData($json_data);
    $this->repository->createTable($data);
  }

  private function parseJsonData($json_data)
  {
    return json_decode($json_data);
  }
}
