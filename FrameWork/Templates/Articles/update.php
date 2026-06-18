<?php require dirname(__DIR__).'/Main/header.php';?>
<form action="/Simakov/FrameWork/www/article/update/<?=$article->getId();?>" method="POST">
    <div class="form-group">
        <label for="name">Title</label>
        <input type="text" id="name" name="name" value="<?=$article->getName();?>" required>
    </div>
    <div class="form-group">
        <label for="text">Text</label>
        <input type="text" id="text" name="text" value="<?=$article->getText();?>" required>
    </div>

    <button type="submit" class="submit-btn">Обновить</button>
</form>
<?php require dirname(__DIR__).'/Main/footer.php';?>