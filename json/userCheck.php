<?php 

    $json =$_POST['data'];
    // $user = json_decode($json);
    // print_r($user->username);

    $user = ['username'=> 'alamin', 'password'=>'123'];
    $json = json_encode($user);
    echo $json;
?>