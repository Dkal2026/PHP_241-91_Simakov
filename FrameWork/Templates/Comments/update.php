<?php require dirname(__DIR__).'/Main/header.php';?>
<form action="/Simakov/FrameWork/www/comment/update/<?=$comment->getId();?>" method="POST">
    <div class="form-group">
        <label for="text">Комментарий</label>
        <input type="text" id="text" name="text" value="<?=$comment->getText();?>" required>
    </div>

    <button type="submit" class="submit-btn">Обновить</button>
</form>
<?php require dirname(__DIR__).'/Main/footer.php';?>