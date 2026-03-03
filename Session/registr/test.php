<?php session_start(); ?>
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
            <form action="query.php" method="post">
                <input type="hidden" name="create">

                <label for="Firstname" class="label">Введите фамилию</label>
                <input type="text" name='Firstname' id='Firstname'><br>

                <label for="name">Введите имя</label>
                <input type="text" name='name' id='name'><br>

                <label for="Lastname">Введите отчество</label>
                <input class="bungee-spice-regular" type="text" name='Lastname' id='Lastname'><br>

                <label for="phone">Введите телефон</label>
                <input class="bungee-spice-regular" type="tel" name='phone' id='phone'><br>

                <label for="email">Введите email</label>
                <input type="email" name='email' id='email'cols="30" value=<?php echo $_SESSION['email'];?>><br>

                <label for="addres">Введите аддрес</label>
                <textarea name="addres" id="addres" cols="70" rows="5"></textarea><br>

                <button class="my-button dancing-script-uniquifier" type="submit">Submit</button>
            </form>
        </div>
    </main>
</body>
</html>