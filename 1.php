<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000) {
    $error = "<script>alert('file size should be less than 50kb  ');</script>";
    
  header('location: save.php?error=' . $error);
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$target_file1 = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
$uploadOk1 = 1;
$imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk1 = 1;
    } else {
        echo "File is not an image.";
        $uploadOk1 = 0;
    }
}
// Check if file already exists
if (file_exists($target_file1)) {
    echo "Sorry, file already exists.";
    $uploadOk1 = 0;
}
// Check file size
if ($_FILES["fileToUpload1"]["size"] > 20000) {
    echo "Sorry, your file is too large.";
    $uploadOk1 = 0;
}
// Allow certain file formats
if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
&& $imageFileType1 != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk1 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk1 == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1)) {
        echo "The file ". basename( $_FILES["fileToUpload1"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
include 'common.php';
$name1= mysqli_real_escape_string($con,$_POST['name']);
$fname1= mysqli_real_escape_string($con,$_POST['fname']);
$mname1= mysqli_real_escape_string($con,$_POST['mname']);
$dob1= mysqli_real_escape_string($con,$_POST['dob']);
$gender1= mysqli_real_escape_string($con,$_POST['gender']);
$aadhar1= mysqli_real_escape_string($con,$_POST['aadhar']);
$bis1= mysqli_real_escape_string($con,$_POST['bstate']);
$rcard1= mysqli_real_escape_string($con,$_POST['rcard']);
if(isset($_POST['special1'])){
    $ss1="YES";
$spe11= mysqli_real_escape_string($con,$ss1);
}
else{
    $ss1="NO";
  $spe11= mysqli_real_escape_string($con,$ss1);  
}
if(isset($_POST['special2'])){
    $ss2="YES";
$spe21= mysqli_real_escape_string($con,$ss2);
}
else{
    $ss2="NO";
  $spe21= mysqli_real_escape_string($con,$ss2);  
}
if(isset($_POST['special13'])){
    $ss3="YES";
$spe31= mysqli_real_escape_string($con,$ss3);
}
else{
    $ss3="NO";
  $spe31= mysqli_real_escape_string($con,$ss3);  
}
if(isset($_POST['special4'])){
    $ss41="YES";
$spe41= mysqli_real_escape_string($con,$ss4);
}
else{
    $ss4="NO";
  $spe41= mysqli_real_escape_string($con,$ss4);  
}
if(isset($_POST['ph1'])){
    $p1="YES";
$ph11= mysqli_real_escape_string($con,$p1);
}
else{
    $p1="NO";
  $ph11= mysqli_real_escape_string($con,$p1);  
}
if(isset($_POST['ph2'])){
    $p2="YES";
$ph21= mysqli_real_escape_string($con,$p2);
}
else{
    $p2="NO";
  $ph21= mysqli_real_escape_string($con,$p2);  
}
if(isset($_POST['ph3'])){
    $p3="YES";
$ph31= mysqli_real_escape_string($con,$p3);
}
else{
    $p3="NO";
  $ph31= mysqli_real_escape_string($con,$p3);  
}
$area1= mysqli_real_escape_string($con,$_POST['area']);
$minority1= mysqli_real_escape_string($con,$_POST['minority']);
$income1= mysqli_real_escape_string($con,$_POST['income']);
$incomec1= mysqli_real_escape_string($con,$_POST['incomec']);
$bname1= mysqli_real_escape_string($con,$_POST['namebank']);
$accno1= mysqli_real_escape_string($con,$_POST['accno']);
$ifsc1= mysqli_real_escape_string($con,$_POST['ifsc']);
$hno1= mysqli_real_escape_string($con,$_POST['hno']);
$village1= mysqli_real_escape_string($con,$_POST['village']);
$mandal1= mysqli_real_escape_string($con,$_POST['mandal']);
$district1= mysqli_real_escape_string($con,$_POST['district']);
$astate1= mysqli_real_escape_string($con,$_POST['astate']);
$pincode1= mysqli_real_escape_string($con,$_POST['pincode']);
$mobile1= mysqli_real_escape_string($con,$_POST['mobile']);
$amobile1= mysqli_real_escape_string($con,$_POST['amobile']);
$telephone1= mysqli_real_escape_string($con,$_POST['telephone']);
$email1= mysqli_real_escape_string($con,$_POST['email']);
$degree1= mysqli_real_escape_string($con,$_POST['degree']);
$dspecial1= mysqli_real_escape_string($con,$_POST['specialization']);
$qhall1= mysqli_real_escape_string($con,$_POST['qhall']);
$qyear1= mysqli_real_escape_string($con,$_POST['qyear']);
$medium1= mysqli_real_escape_string($con,$_POST['medium']);
$placessc1= mysqli_real_escape_string($con,$_POST['placessc']);
$sschall1= mysqli_real_escape_string($con,$_POST['sschall']);
$sscmonth1= mysqli_real_escape_string($con,$_POST['sscmonth']);
$sscyear1= mysqli_real_escape_string($con,$_POST['sscyear']);
$placei1= mysqli_real_escape_string($con,$_POST['placei']);
$ihall1= mysqli_real_escape_string($con,$_POST['ihall']);
$imonth1= mysqli_real_escape_string($con,$_POST['imonth']);
$iyear1= mysqli_real_escape_string($con,$_POST['iyear']);
$sscplace1= mysqli_real_escape_string($con,$_POST['sscplace']);
$iplace1= mysqli_real_escape_string($con,$_POST['iplace']);
$dplace1= mysqli_real_escape_string($con,$_POST['dplace']);
$mplace1= mysqli_real_escape_string($con,$_POST['mplace']);
$center11= mysqli_real_escape_string($con,$_POST['center1']);
$center21= mysqli_real_escape_string($con,$_POST['center2']);
$photo= mysqli_real_escape_string($con,"uploads/".$_FILES['fileToUpload']['name']);
$sign= mysqli_real_escape_string($con,"uploads/".$_FILES['fileToUpload1']['name']);
if(isset($_POST['action'])){
    $action=$_POST['action'];
}
if($action == 'save'  ){
    if(!isset($_SESSION['id'])) {
        $first = substr($name1, 0, 5);
        $second = substr($aadhar1, 6,12);
        $id=$first.$second;
        $id1= md5($id);
        include 'algorithm.php';
    $sql="INSERT INTO users(id,name,fathername,mothername,dob,gender,aadhar,birthstate,rationcard,special1,special2,special3,special4,ph1,ph2,ph3,lacalarea,minority,income,incomeno,name_bank,accno,ifsc,hno,village,mandal,district,state,pincode,mobile,amobile,telephone,email,degree,speciald,hallticketd,yearofpass,medium,sscarea,sschall,sscmonth,sscyear,interarea,interhall,intermonth,interyear,sscplace,interplace,degreeplace,mscmcaplace,center1,center2,photo,signature) VALUES('$id1','$name','$fname','$mname','$dob','$gender','$aadhar','$bis','$rcard','$spe1','$spe2','$spe3','$spe4','$ph1','$ph2','$ph3','$area','$minority','$income','$incomec','$bname','$accno','$ifsc','$hno','$village','$mandal','$district','$astate','$pincode','$mobile','$amobile','$telephone','$email','$degree','$dspecial','$qhall','$qyear','$medium','$placessc','$sschall','$sscmonth','$sscyear','$placei','$ihall','$imonth','$iyear','$sscplace','$iplace','$dplace','$mplace','$center1','$center2','$photo','$sign')";
    $select_query_result= mysqli_query($con, $sql) or die(mysqli_error($con));
    $select_query="SELECT * FROM users WHERE id='$id1'";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    $row= mysqli_fetch_array($select_query_result);
    include 'decrypt.php';
    
    $_SESSION['id']=$row['id'];
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
    $_SESSION['degree']=$degreef;
    $_SESSION['speciald']=$specialdf;
    $_SESSION['hallticketd']=$hallticketdf;
    $_SESSION['yearofpass']=$yearofpassf;
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
    $_SESSION['photo']=$row['photo'];
    $_SESSION['signature']=$row['signature'];
    header('location: save.php');
    }
    else {
        include 'algorithm.php';
        $id1=$_SESSION['id'];
        $sq="UPDATE users SET name='$name',fathername='$fname',mothername='$mname',dob='$dob',gender='$gender',aadhar='$aadhar',birthstate='$bis',rationcard='$rcard',special1='$spe1',special2='$spe2',special3='$spe3',special4='$spe4',ph1='$ph1',ph2='$ph2',ph3='$ph3',lacalarea='$area',minority='$minority',income='$income',incomeno='$incomec',name_bank='$bname',accno='$accno',ifsc='$ifsc',hno='$hno',village='$village',mandal='$mandal',district='$district',state='$astate',pincode='$pincode',mobile='$mobile',amobile='$amobile',telephone='$telephone',email='$email',degree='$degree',speciald='$dspecia',hallticketd='$qhall',yearofpass='$qyear',medium='$medium',sscarea='$placessc',sschall='$sschall',sscmonth='$sscmonth',sscyear='$sscyear',interarea='$placei',interhall='$ihall',intermonth='$imonth',interyear='$iyear',sscplace='$sscplace',interplace='$iplace',degreeplace='$dplace',mscmcaplace='$mplace',center1='$center1',center2='$center2',photo='$photo',signature='$sign' WHERE id='$id1'";
        $select_query_result= mysqli_query($con, $sq) or die(mysqli_error($con));
    $select_query="SELECT * FROM users WHERE id='$id1'";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    $row= mysqli_fetch_array($select_query_result);
    include 'decrypt.php';
     $_SESSION['id']=$row['id'];
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
    $_SESSION['degree']=$degreef;
    $_SESSION['speciald']=$specialdf;
    $_SESSION['hallticketd']=$hallticketdf;
    $_SESSION['yearofpass']=$yearofpassf;
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
    $_SESSION['photo']=$row['photo'];
    $_SESSION['signature']=$row['signature'];
    header('location: save.php');
    }
}
elseif($action == 'preview'){
    $first = substr($name1, 0, 5);
    $second = substr($aadhar1, 6,12);
    $id=$first.$second;
    $id1= md5($id);
    include 'algorithm.php';
    $sql="INSERT INTO users(id,name,fathername,mothername,dob,gender,aadhar,birthstate,rationcard,special1,special2,special3,special4,ph1,ph2,ph3,lacalarea,minority,income,incomeno,name_bank,accno,ifsc,hno,village,mandal,district,state,pincode,mobile,amobile,telephone,email,degree,speciald,hallticketd,yearofpass,medium,sscarea,sschall,sscmonth,sscyear,interarea,interhall,intermonth,interyear,sscplace,interplace,degreeplace,mscmcaplace,center1,center2,photo,signature) VALUES('$id1','$name','$fname','$mname','$dob','$gender','$aadhar','$bis','$rcard','$spe1','$spe2','$spe3','$spe4','$ph1','$ph2','$ph3','$area','$minority','$income','$incomec','$bname','$accno','$ifsc','$hno','$village','$mandal','$district','$astate','$pincode','$mobile','$amobile','$telephone','$email','$degree','$dspecial','$qhall','$qyear','$medium','$placessc','$sschall','$sscmonth','$sscyear','$placei','$ihall','$imonth','$iyear','$sscplace','$iplace','$dplace','$mplace','$center1','$center2','$photo','$sign')";
    $select_query_result= mysqli_query($con, $sql) or die(mysqli_error($con));
    $select_query="SELECT * FROM users WHERE id='$id1'";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    $row= mysqli_fetch_array($select_query_result);
    include 'decrypt.php';
     $_SESSION['id']=$row['id'];
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
    $_SESSION['degree']=$degreef;
    $_SESSION['speciald']=$specialdf;
    $_SESSION['hallticketd']=$hallticketdf;
    $_SESSION['yearofpass']=$yearofpassf;
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
    $_SESSION['photo']=$row['photo'];
    $_SESSION['signature']=$row['signature'];
    
    header('location: preview.php');
}
else {
    
}
?>