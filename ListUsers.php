<?php
/**
 * Created by PhpStorm.
 * User: Madumal Sameera
 * Date: 3/18/2016
 * Time: 10:44 AM
 */
//if($_SERVER['REQUEST_METHOD']=="post"){
    include 'Connection.php';

    displayUser();
echo "sameera";

//}

function displayUser(){
    global $connect;

    $query="select * from users";

    $result=mysqli_query($connect,$query);
    $num_rows=mysqli_num_rows($result);

    $temp_array=array();

    if($num_rows>0){
        while($row=mysqli_fetch_assoc($result)){
            $temp_array[]=$row;
        }
    }

    header('Content-Type: application/json');
    echo json_encode(array("student"=>$temp_array));
    //echo json_encode("Your password is incorrect");
    mysqli_close($connect);
}
