<?php
require 'common/db.php';

$db = connectToIPDatabase();
$stmt = $db->query('select * from blog_url order by blogAuthor asc');
$ipTable = $stmt->fetchAll();

// var_dump($ipTable);