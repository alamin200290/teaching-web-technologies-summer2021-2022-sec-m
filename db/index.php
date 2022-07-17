<?php 

    $conn = mysqli_connect('localhost', 'root', '', 'webtech');

    // if($conn){
    //     echo "success";
    // }else{  
    //     echo "DB error";
    // }

    $sql = "select * from users";
    $result = mysqli_query($conn, $sql);

    echo "<table border=1>
            <tr>
                <td>ID</td>
                <td>USername</td>
                <td>Email</td>
            </tr>";

    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['username']}</td>
                    <td>{$row['email']}</td>
            </tr>";
    }

    echo "</table>";
?>