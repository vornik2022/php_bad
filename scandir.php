<?php
    $dir = getcwd();
    $files = scandir($dir, SCANDIR_SORT_DESCENDING);
    print_r($files);
?>
