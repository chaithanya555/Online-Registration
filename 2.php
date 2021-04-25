<?php
include 'common.php';
if(isset($_POST['action'])){
    $action1=$_POST['action'];
}
if($action1=='modify') {
    header('location: save.php');
}
elseif($action1=='confrim') {
    $reg1= mt_rand(1000000000, 9999999999);
    $userid=$_SESSION['id'];

    $reg = $reg1;
    $sql1="INSERT INTO register (reg,user_id) VALUES ('$reg','$userid')";
    $select_query_result= mysqli_query($con, $sql1) or die(mysqli_error($con));
    $fe="SELECT * FROM users,register WHERE users.id = register.user_id AND register.reg='$reg'";
    $sele= mysqli_query($con, $fe) or die(mysqli_error($con));
    $row= mysqli_fetch_array($sele);
    $regf = $row['reg'];
    $_SESSION['reg']=$regf;
    $_SESSION['id']=$row['id'];
    header('location: success.php');
}
else {
    
}
?>