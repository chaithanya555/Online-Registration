<?php
include 'common.php';
$reg1= mysqli_real_escape_string($con,$_POST['register']);

$register = $reg1;
$dobr= mysqli_real_escape_string($con,$_POST['dob']);
$qhallr= mysqli_real_escape_string($con,$_POST['qhall']);
$mobiler= mysqli_real_escape_string($con,$_POST['mobile']);
$fetc="SELECT * FROM users,register WHERE users.id = register.user_id AND register.reg='$register'";
$seler= mysqli_query($con, $fetc) or die(mysqli_error($con));
$rowr= mysqli_fetch_array($seler);
if(mysqli_num_rows($seler)==0){
    $error = "<span class='red'>NO DATA FOUND</span>";
    
  header('location: printfilled.php?error=' . $error);
}
else{
    
    $regf = $rowr['reg'];
    $degreer = $rowr['degree'];
    $hallticketdf = $rowr['hallticketd'];
    $yop = $rowr['yearofpass'];
    $mediumr = $rowr['medium'];
    $named = $rowr['name'];
$fnamef = $rowr['fathername'];
$mnamef = $rowr['mothername'];
$dobf = $rowr['dob'];
$genderf = $rowr['gender'];
$aadharf = $rowr['aadhar'];
$birthstatef = $rowr['birthstate'];
$rationcardf = $rowr['rationcard'];
$special1f = $rowr['special1'];
$special2f = $rowr['special2'];
$special3f = $rowr['special3'];
$special4f = $rowr['special4'];
$ph1f = $rowr['ph1'];
$ph2f = $rowr['ph2'];
$ph3f = $rowr['ph3'];
$lacalareaf = $rowr['lacalarea'];
$minorityf = $rowr['minority'];
$incomef = $rowr['income'];
$incomenof = $rowr['incomeno'];
$name_bankf = $rowr['name_bank'];
$accnof = $rowr['accno'];
$ifscf = $rowr['ifsc'];
$hnof = $rowr['hno'];
$villagef = $rowr['village'];
$mandalf = $rowr['mandal'];
$districtf = $rowr['district'];
$statef = $rowr['state'];
$pincodef = $rowr['pincode'];
$mobilef = $rowr['mobile'];
$amobilef = $rowr['amobile'];
$telephonef = $rowr['telephone'];
$emailf = $rowr['email'];
$degreef = $rowr['degree'];
$specialdf = $rowr['speciald'];
$hallticketdf = $rowr['hallticketd'];
$yearofpassf = $rowr['yearofpass'];
$mediumf = $rowr['medium'];
$sscareaf = $rowr['sscarea'];
$sschallf = $rowr['sschall'];
$sscmonthf = $rowr['sscmonth'];
$sscyearf = $rowr['sscyear'];
$interareaf = $rowr['interarea'];
$interhallf = $rowr['interhall'];
$intermonthf = $rowr['intermonth'];
$interyearf = $rowr['interyear'];
$sscplacef = $rowr['sscplace'];
$interplacef = $rowr['interplace'];
$degreeplacef = $rowr['degreeplace'];
$mscmcaplacef = $rowr['mscmcaplace'];
$center1f = $rowr['center1'];
$center2f = $rowr['center2'];
    if(($dobr!==$dobf) || ($qhallr!==$hallticketdf) || ($mobiler!==$mobilef)) {
        $error = "<span class='red'>NO DATA FOUND</span>";
    
  header('location: printfilled.php?error=' . $error);
    }
    else {
    $_SESSION['reg']=$regf;
    $_SESSION['id']=$rowr['id'];
    $_SESSION['name']=$named;
    $_SESSION['fname']=$fnamef;
    $_SESSION['mname']=$mnamef;
    $_SESSION['dob']=$dobf;
    $_SESSION['gender']=$genderf;
    $_SESSION['aadhar']=$aadharf;
    $_SESSION['birthstate']=$birthstatef;
    $_SESSION['rationcard']=$rationcardf;
    $_SESSION['spe1']=$special1f;
    $_SESSION['spe2']=$special2f;
    $_SESSION['spe3']=$special3f;
    $_SESSION['spe4']=$special4f;
    $_SESSION['ph1']=$ph1f;
    $_SESSION['ph2']=$ph2f;
    $_SESSION['ph3']=$ph3f;
    $_SESSION['localarea']=$lacalareaf;
    $_SESSION['minority']=$minorityf;
    $_SESSION['income']=$incomef;
    $_SESSION['incomec']=$incomenof;
    $_SESSION['name_bank']=$name_bankf;
    $_SESSION['accno']=$accnof;
    $_SESSION['ifsc']=$ifscf;
    $_SESSION['hno']=$hnof;
    $_SESSION['village']=$villagef;
    $_SESSION['mandal']=$mandalf;
    $_SESSION['district']=$districtf;
    $_SESSION['state']=$statef;
    $_SESSION['pincode']=$pincodef;
    $_SESSION['mobile']=$mobilef;
    $_SESSION['amobile']=$amobilef;
    $_SESSION['telephone']=$telephonef;
    $_SESSION['email']=$emailf;
    $_SESSION['degree']=$degreer;
    $_SESSION['speciald']=$specialdf;
    $_SESSION['hallticketd']=$hallticketdf;
    $_SESSION['yearofpass']=$yop;
    $_SESSION['medium']=$mediumf;
    $_SESSION['sscarea']=$sscareaf;
    $_SESSION['sschall']=$sschallf;
    $_SESSION['sscmonth']=$sscmonthf;
    $_SESSION['sscyear']=$sscyearf;
    $_SESSION['interarea']=$interareaf;
    $_SESSION['interhall']=$interhallf;
    $_SESSION['intermonth']=$intermonthf;
    $_SESSION['interyear']=$interyearf;
    $_SESSION['sscplace']=$sscplacef;
    $_SESSION['interplace']=$interplacef;
    $_SESSION['degreeplace']=$degreeplacef;
    $_SESSION['mscmcaplace']=$mscmcaplacef;
    $_SESSION['center1']=$center1f;
    $_SESSION['center2']=$center2f;
    $_SESSION['photo']=$rowr['photo'];
    $_SESSION['signature']=$rowr['signature'];
    header('location: print.php');
    }
}
?>

