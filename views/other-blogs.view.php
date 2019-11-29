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
            <?php if(!(strtolower($ip['vorname']) === 'urss')): ?>
            <li>
                <a class="btn btn-primary" href="http://<?= $ip['Ip'] ?>" target="_blank">Blog von <?= $ip['vorname'] ?></a><br>
            </li>
            <?php endif; ?>
        <?php endforeach; ?>
        </ul>
    </section>
</main>