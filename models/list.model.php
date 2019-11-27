<?php
require 'common/db.php';

$db = connectToDatabase();
$stmt = $db->query('select * from posts order by id desc');
$posts = $stmt->fetchAll();