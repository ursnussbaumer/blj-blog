<?php

require 'models/list.model.php';

require 'views/navigation.view.php';

?>

<main>
    <h2>Alle Beiträge</h2>

    <section class="posts">
        <?php foreach($posts as $post): ?>
            <div class="post">
                <div class="post-title">
                    <?= $post["post_title"] ?>
                </div>
                <div class="post-text">
                <?= $post["post_text"] ?>
                </div>
                <div class="post-created">
                    erstellt von <?= $post["created_by"] ?> am <?= $post["created_at"] ?>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

    <aside>
        <h2>Andere Blogs</h2>
        
        <section class="other-blogs">
            <a href="http://10.20.18.106/blog/" target="_blank">Alessios Blog</a><br>
            <a href="http://10.20.18.101/blog_projekt/" target="_blank">Darvins Blog</a><br>
            <a href="http://10.20.18.105:8888/" target="_blank">Moritz' Blog</a><br>
            <a href="http://10.20.18.107/blog/" target="_blank">Marvins Blog</a><br>
            <a href="http://10.20.18.110/blog/" target="_blank">Lucas Blog</a><br>
            <a href="http://10.20.18.112/blog/" target="_blank">Erins Blog</a><br>
            <a href="http://10.20.18.113/tp/" target="_blank">Joshuas Blog</a><br>
            <a href="http://10.20.18.111/myblogtest/" target="_blank">Nicolas Blog</a><br>
            <a href="http://10.20.18.109/blog/views/formular.php" target="_blank">Davides Blog</a><br>
        </section>
    </aside>
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