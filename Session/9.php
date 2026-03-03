<?php

    if(isset($_COOKIE['counter'])){
        $i = $_COOKIE['counter'] += 1;
    }
    else{
        $i = 1;
    }
    setcookie('counter', $i);
    echo 'Вы обновили страницу '.$_COOKIE['counter'].' раз';
?>