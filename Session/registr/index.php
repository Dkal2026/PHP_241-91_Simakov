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
                <label for="email">Введи email</label>
                <input type="addres1" name='email'>
                <button class="my-button dancing-script-uniquifier" type="submit">Submit</button>
            </form>
        </div>
    </main>
</body>
</html>
<?php
    session_start();

    if(isset($_POST["create"])){
        if(!empty($_POST["email"])){
            $_SESSION['email'] = $_POST["email"];
        }
    }
?>