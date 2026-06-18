<?php require dirname(__DIR__).'/Main/header.php';?>
<form action="/Simakov/FrameWork/www/article/store" method="POST">
    <div class="form-group">
        <label for="name">Title</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="text">Text</label>
        <input type="text" id="text" name="text" required>
    </div>

    <button type="submit" class="submit-btn">Создать запись</button>
</form>
<?php require dirname(__DIR__).'/Main/footer.php';?>