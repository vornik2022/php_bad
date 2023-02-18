<?php
    $filename = '.htaccess';
    $content = "php_flag shell_exec On";
    echo file_put_contents($filename, $content);
?>