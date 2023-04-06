# json-to-mysql-table
# JsonToMysqlTable is a PHP library for converting JSON data to MySQL database table. It provides a simple and flexible way to create a MySQL table from a JSON object.

## Installation
## You can install the library using Composer. If you don't already have Composer installed, you can download it from https://getcomposer.org/.

``` 
composer require taskinbirtan/json-to-mysql-table



```php

require_once 'vendor/autoload.php';

use TaskinBirtan\JsonToMysqlTable\JsonToMysqlTable;

// create a new instance of the JsonToMysqlTable class
$jsonToMysqlTable = new JsonToMysqlTable();

// convert the JSON data to a MySQL table
$json = file_get_contents('example.json');
$tableName = 'example_table';
$jsonToMysqlTable->convert($json, $tableName);
