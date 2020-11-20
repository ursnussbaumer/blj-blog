<?php

require 'models/list.model.php';

require 'views/navigation.view.php';

?>

<main>
    <h2>Beiträge</h2>

    <section class="posts">
        <?php foreach($posts as $post): ?>
            <div class="post">
                <div class="post-title">
                    <?= $post["post_title"] ?>
                </div>
                <div class="post-text">
                <?= $post["post_text"] ?>
                </div>
                <?php if($post["image_url"] != ''): ?>
                <div class="post-image">
                    <img src="<?= $post["image_url"] ?>" alt="Bild" />
                </div>
                <?php endif; ?>
                <div class="post-created">
                    erstellt von <?= $post["created_by"] ?> am <?= $post["created_at"] ?>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</main>

<!--
 foreach( as $post) {
    echo '<strong>ID:' . $post["id"] . '</strong><br>'; 
    echo 'Erstellt von: ' . $post["created_by"] . '<br>'; 
    echo 'Erstellt am: ' . $post["created_at"] . '<br>';
    echo 'Titel: ' . $post["post_title"] . '<br>';
    echo 'Beitrag: ' . $post["post_text"] . '<br>';
    echo '<hr />';
}  
-->