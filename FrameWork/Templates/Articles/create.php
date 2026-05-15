<?php require dirname(__DIR__).'/Main/header.php';?>
<form action="/Simakov/FrameWork/www/article/store" method="POST">
    <div class="form-group">
        <label for="name">Title</label>
        <input type="text" id="name" name="name" placeholder="Иван Иванов" >
    </div>
    <div class="form-group">
        <label for="text">Text</label>
        <input type="text" id="text" name="text" placeholder="Минимум 8 символов">
    </div>

    <button type="submit" class="submit-btn">Зарегистрироваться</button>
</form>
<?php require dirname(__DIR__).'/Main/footer.php';?>