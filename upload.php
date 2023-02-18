<?php
    $uploaddir = getcwd();
    $uploadfile = $uploaddir.basename($_FILES['userfile']['name']);
    if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
        echo "Success\n";
    } else {
        echo "FAIL!!!\n";
    }

    print_r($_FILES);
    print "</pre>";
?>

<form action="" method="post"></form>
    <p>Pictures:
    <input type="file" name="" />
    <input type="submit" value="Send" />
    </p>
</form>