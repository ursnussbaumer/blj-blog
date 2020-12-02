<?php

require 'models/other-blogs.model.php';

require 'views/navigation.view.php';

?>

<main>
    <h2>Andere Blogs</h2>

    <p>Besuche auch die coolen Blogs von den BLJ-Lernenden.</p> 
    
    <section class="other-blogs">
        <ul>
        <?php foreach($ipTable as $ip): ?>
            <?php if(stripos($ip['blogAuthor'], 'urs') === false): ?>
            <li>
                <a class="btn btn-primary" href="<?= $ip['blogUrl'] ?>" target="_blank">Blog von <?= $ip['blogAuthor'] ?></a><br>
            </li>
            <?php endif; ?>
        <?php endforeach; ?>
        </ul>
    </section>
</main>