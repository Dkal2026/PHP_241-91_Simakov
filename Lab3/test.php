<?php
    $text = 'aa a1a a22a a333a a4444a a55555a aba aca';
    echo preg_replace( '/a\d*a/', '!',$text);
?>