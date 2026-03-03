<!DOCTYPE html>
<html lang="en">
<head>
    <title>Гражданство</title>
</head> 
<body>
    <header>
        <nav>
            <a href="test.php">след. стр.</a>
        </nav>
    </header>
    <main>
        <div class="container alumni-sans-pinstripe-regular">
            <form action="" method="post">
                <input type="hidden" name="create">
                <label for="birthday">Введи день рождения</label>
                <input type="date" name='birthday'>
                <button class="my-button dancing-script-uniquifier" type="submit">Submit</button>
            </form>
        </div>
    </main>
</body>
</html>
<?php
    session_start();

    if(isset($_POST["create"])){
        if(!empty($_POST["birthday"])){
            setcookie('hapybirthday', $_POST["birthday"]);
        }
    }
    $day = date('l jS \of F Y');
    $birthday = $_COOKIE['hapybirthday'];
    $day = (int)$day;
    $birthday = (int)$birthday;
    echo $day - $birthday;
?>