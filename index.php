<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>MyBlog</title>
</head>
<body>
    <?php 
        require 'views/navigation.view.php' 
    ?>
    
    <h1>Mein Blog</h1>
    
    <?php 
        require 'views/list.view.php';
    ?>
</body>
</html>