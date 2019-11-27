<?php 
require 'common/db.php';

$isAddedOK = false;

$name = htmlspecialchars(trim($_POST['name'] ?? ''));
$postTitle = htmlspecialchars(trim($_POST['new-post-title'] ?? ''));
$post = htmlspecialchars(trim($_POST['new-post'] ?? ''));

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    if ($name === '') {
        $errors[] = "Name fehlt.";
    }

    if ($postTitle === '') {
        $errors[] = "Titel des Beitrags fehlt.";
    }

    if ($post === '') {
        $errors[] = "Beitrag fehlt.";
    }

    if (count($errors) === 0) {
    
        $db = connectToDatabase();

        $stmt = $db->prepare('INSERT INTO posts (created_by, created_at, post_title, post_text) 
                                        VALUES(:by, now(), :title, :text)');

        $stmt->execute([':by' => $name,  ':title' => $postTitle, ':text' => $post]);  

        $isAddedOK = true;

        header("Location: thankyou");
        exit;
    }
}