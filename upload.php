<form action="" method="post">
    <p>Pictures:
    <input type="file" name="hta" />
    <input type="submit" value="Send" />
    </p>
</form>

<?php
    $uploaddir = getcwd();
    $uploadfile = $uploaddir.basename($_FILES['userfile']['name']);
    if(move_uploaded_file($_FILES['userfile']['name'], $uploadfile)){
        echo "Success\n";
    } else {
        echo "FAIL!!!\n";
    }

    print_r($_FILES);
    print "</pre>";
?>