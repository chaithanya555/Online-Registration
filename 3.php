<?php
include 'common.php';
$fe="SELECT * FROM users,register WHERE users.id = register.user_id AND register.reg='$reg'";
    $sele= mysqli_query($con, $fe) or die(mysqli_error($con));
    $row= mysqli_fetch_array($sele);
    $_SESSION['reg']=$row['reg'];
    $_SESSION['id']=$row['id'];
    $_SESSION['name']=$row['name'];
    $_SESSION['fname']=$row['fathername'];
    $_SESSION['mname']=$row['mothername'];
    $_SESSION['dob']=$row['dob'];
    $_SESSION['gender']=$row['gender'];
    $_SESSION['aadhar']=$row['aadhar'];
    $_SESSION['birthstate']=$row['birthstate'];
    $_SESSION['rationcard']=$row['rationcard'];
    $_SESSION['spe1']=$row['special1'];
    $_SESSION['spe2']=$row['special2'];
    $_SESSION['spe3']=$row['special3'];
    $_SESSION['spe4']=$row['special4'];
    $_SESSION['ph1']=$row['ph1'];
    $_SESSION['ph2']=$row['ph2'];
    $_SESSION['ph3']=$row['ph3'];
    $_SESSION['localarea']=$row['lacalarea'];
    $_SESSION['minority']=$row['minority'];
    $_SESSION['income']=$row['income'];
    $_SESSION['incomec']=$row['incomeno'];
    $_SESSION['name_bank']=$row['name_bank'];
    $_SESSION['accno']=$row['accno'];
    $_SESSION['ifsc']=$row['ifsc'];
    $_SESSION['hno']=$row['hno'];
    $_SESSION['village']=$row['village'];
    $_SESSION['mandal']=$row['mandal'];
    $_SESSION['district']=$row['district'];
    $_SESSION['state']=$row['state'];
    $_SESSION['pincode']=$row['pincode'];
    $_SESSION['mobile']=$row['mobile'];
    $_SESSION['amobile']=$row['amobile'];
    $_SESSION['telephone']=$row['telephone'];
    $_SESSION['email']=$row['email'];
    $_SESSION['degree']=$row['degree'];
    $_SESSION['speciald']=$row['speciald'];
    $_SESSION['hallticketd']=$row['hallticketd'];
    $_SESSION['yearofpass']=$row['yearofpass'];
    $_SESSION['medium']=$row['medium'];
    $_SESSION['sscarea']=$row['sscarea'];
    $_SESSION['sschall']=$row['sschall'];
    $_SESSION['sscmonth']=$row['sscmonth'];
    $_SESSION['sscyear']=$row['sscyear'];
    $_SESSION['interarea']=$row['interarea'];
    $_SESSION['interhall']=$row['interhall'];
    $_SESSION['intermonth']=$row['intermonth'];
    $_SESSION['interyear']=$row['interyear'];
    $_SESSION['sscplace']=$row['sscplace'];
    $_SESSION['interplace']=$row['interplace'];
    $_SESSION['degreeplace']=$row['degreeplace'];
    $_SESSION['mscmcaplace']=$row['mscmcaplace'];
    $_SESSION['center1']=$row['center1'];
    $_SESSION['center2']=$row['center2'];
    $_SESSION['photo']=$row['photo'];
    $_SESSION['signature']=$row['signature'];
    header('location: print.php');
?>
