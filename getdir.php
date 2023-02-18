<?php
    $dir = $_GET['dir'];
    $file = $_GET['file'];

    if($dir != null){

    $files = scandir($dir, SCANDIR_SORT_DESCENDING);

    foreach($files as $key => $value)
        print_r($key.": ".$value.", ");
    }

    if($file != null){
        $fl = $file = file_get_contents($file);
    }
?>