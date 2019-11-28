<?php 
require 'common/db.php';

$isAddedOK = false;

$name = trim($_POST['name'] ?? '');
$postTitle = trim($_POST['new-post-title'] ?? '');
$post = trim($_POST['new-post'] ?? '');
$imgURL = trim($_POST['image-url'] ?? '');

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    if (stripos($name, '<script>') > -1 
            || stripos($postTitle, '<script>') > -1 
            || stripos($post, '<script>') > -1  
            || stripos($imgURL, '<script>') > -1) {
        
        $name = $postTitle = $post = $imgURL = '';
        $errors[] = "Your hack failed. Nice try.";
    }
    else {
        if ($name === '') {
            $errors[] = "Name fehlt.";
        }

        if ($postTitle === '') {
            $errors[] = "Titel des Beitrags fehlt.";
        }
        

        if ($post === '') {
            $errors[] = "Beitrag fehlt.";
        }
    }

    if (count($errors) === 0) {
    
        $db = connectToDatabase();

        $stmt = $db->prepare('INSERT INTO posts (created_by, created_at, post_title, post_text, image_url) 
                                        VALUES(:by, now(), :title, :text, :img)');

        $stmt->execute([':by' => htmlspecialchars($name)
                        ,  ':title' => htmlspecialchars($postTitle)
                        , ':text' => htmlspecialchars($post)
                        , ':img' => htmlspecialchars($imgURL)]);  

        $isAddedOK = true;

        header("Location: thankyou");
        exit;
    }
}