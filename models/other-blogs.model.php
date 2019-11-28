<?php
require 'common/db.php';

$db = connectToIPDatabase();
$stmt = $db->query('select * from ipadressen order by vorname');
$ipTable = $stmt->fetchAll();