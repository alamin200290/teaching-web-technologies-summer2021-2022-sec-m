<?php 

    $username = $_POST['username'];

    sleep(3);

    if($username != ""){
        echo "Success";
    }else{
        echo "Null value";
    }

?>