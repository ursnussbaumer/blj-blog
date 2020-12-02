<?php
    require 'models/add.model.php'
?>

<h2>Beitrag erfassen</h2>
<?php if (isset($errors) && count($errors) > 0): ?>
    <div class="error-box">
        <ul>
        <?php foreach($errors as $error): ?> 
            <li>
                <?= $error ?>
            </li>
        <?php endforeach; ?>    
        </ul>
    </div>
<?php endif; ?>

<form action="add" method="post">
    <fieldset>
        <!-- <legend class="form-legend">Einen neuen Beitrag erfassen</legend> -->
        <div class="form-group">
            <label class="form-label" for="name">Dein Name</label>
            <input class="form-control" type="text" id="name" name="name" value="<?= $name ?>">
        </div>
    
        <div class="form-group">
            <label class="form-label" for="new-post-title">Titel deines Beitrags</label>
            <input class="form-control" type="text" id="new-post-title" name="new-post-title" value="<?= $postTitle ?>">
        </div>
        <div class="form-group">
            <label for="new-post" class="form-label">Dein Beitrag</label>
            <textarea name="new-post" id="new-post" rows="3" class="form-control"><?= $post ?></textarea>
        </div>
        <div class="form-group">
            <label class="form-label" for="new-post-title">Bild (URL)</label>
            <input class="form-control" type="text" id="image-url" name="image-url" value="<?= $imgURL ?>">
        </div>
    </fieldset>
    <div class="form-actions">
        <input class="btn btn-primary" type="submit" value="Beitrag abschicken">
        <a href="list" class="btn">Abbrechen</a>
    </div>
</form>