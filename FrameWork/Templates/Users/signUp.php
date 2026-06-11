<?php require dirname(__DIR__).'/Main/header.php';?>
<form action="/Simakov/FrameWork/www/users/register" method="POST">
    <?php if (!empty($error)): ?>
        <div style="background-color: red;padding: 5px;margin: 15px"><?= $error ?></div>
    <?php endif; ?>
    <div class="form-group">
        <label for="name">Имя</label>
        <input type="text" id="name" name="nickname">
    </div>
    <div class="form-group">
        <label for="text">Email</label>
        <input type="email" id="text" name="email">
    </div>
    <div class="form-group">
        <label for="text">Пароль</label>
        <input type="password" id="text" name="password">
    </div>

    <button type="submit" class="submit-btn">Зарегистрироваться</button>
</form>
<?php require dirname(__DIR__).'/Main/footer.php';?>