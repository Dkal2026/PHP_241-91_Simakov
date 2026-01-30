<?php
    print_r(preg_replace( '~([a-z])(\\\\)\1([a-z])~', '!', 'a\a a\a a\\\a'));
?>
