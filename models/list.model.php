<?php

require 'common/db.php';

$db = connectToDatabase();
$stmt = $db->query('select * from posts');
$posts = $stmt->fetchAll();