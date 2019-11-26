<?php 

$stmt = $dbConnection->prepare("INSERT INTO `posts` (created_by, created_at, post_title, post_text) 
                                   VALUES(:by, now(), :title, :text) ");
                                   
$stmt->execute([':by' => 'Davide',  ':title' => 'Titel', ':text' => 'Beitrag 2']);   