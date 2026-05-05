<!DOCTYPE html>
<html lang="en">
<head>
    <title>Гражданство</title>
</head> 
<body>
    <main>
        <div class="container alumni-sans-pinstripe-regular">
            <form action="" method="post">
                <input type="hidden" name="create">
                <label for="birthday">Введите день рождения</label>
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
    $day = date('Y-m-d');
    $birthday = explode("-", $_POST["birthday"]);
    $days = explode("-", $day);

    if($day == $_POST["birthday"])
    {
        echo "С днём рождения";
    }
    else
    {
        $result1 = $birthday[1] - $days[1];
        echo abs($result1 * 30);
    }
?>