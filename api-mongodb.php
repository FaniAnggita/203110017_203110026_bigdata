<?php
require 'vendor/autoload.php';

$server = "localhost:27017";
$m = new MongoDB\Client('mongodb://' . $server);

// select a database
$namaDB = "dbTED";
$namaCol = "colTED";

$db = $m->$namaDB;
//echo "Database mydb selected";
$collection = $db->$namaCol;
//echo "Collection selected succsessfully";
// $query = [];
// $cursor = $collection->find($query, ['limit' => 1000]);
$cursor = $collection->find();
$i = 0;

$title = $collection->find(array(), array('projection' => array('title' => 1, 'speaker' => 1)));
$i = 0;

// foreach ($title as $t) {
//     echo $t['title'];
// }
