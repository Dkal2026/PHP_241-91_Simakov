<?php
    session_start();
    $_SESSION['test'] = 'test';
    echo $_SESSION['test'];
?>