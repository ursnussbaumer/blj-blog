<?php

require 'models/other-blogs-api.model.php';

require 'views/navigation.view.php';

?>

<main>
    <h2> Beiträge aus anderen Blogs</h2>
    <section class="others-api">
        <h3>Beiträge aus Rouvens Blog</h3>
        <p>API: <a target="_blank" href="http://www.041er-blj.ch/2020/rohaenggi/blog/api.php">http://www.041er-blj.ch/2020/rohaenggi/blog/api.php</a></p>
        <section class="posts">
            <?php foreach($rouvenPosts as $post): ?>
                <div class="post">
                    <div class="post-title">
                        <?= htmlspecialchars($post[0]) ?>
                    </div>
                    <div class="post-text">
                    <?= htmlspecialchars($post[3]) ?>
                    </div>
                    <?php if($post[4] != ''): ?>
                    <div class="post-image">
                        <img src="<?= htmlspecialchars($post[4]) ?>" alt="Bild" />
                    </div>
                    <?php endif; ?>
                    <div class="post-created">
                        erstellt von <?= htmlspecialchars($post[1]) ?> am <?= htmlspecialchars($post[2]) ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    <section>
</main>

