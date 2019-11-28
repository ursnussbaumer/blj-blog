<?php
require 'common/db.php';

$db = connectToDatabase();
$query = 'select * from posts order by id desc limit 3';

if (($_GET['action'] ?? '') === 'all') {
    $query = 'select * from posts order by id desc';
}

$stmt = $db->query($query);
$posts = $stmt->fetchAll();