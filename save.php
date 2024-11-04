<?php
include 'common.php';
if (!isset($_SESSION['name'])) {
 header('location: index.html');
}
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Online Application</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
        <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/icon.css">
    <link rel="stylesheet" href="css/material.deep_purple-pink.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="styles.css">
    <script src="js/material.min.js"></script>
    <script type="text/javascript">
        var countryLists = new Array(4) 
 countryLists["BE / BTech (Regular)"] = ["","AER-AERONAUTICAL ENGINEERING", "AGR-AGRICULTURAL ENGINEERING", "ASE-AEROSPACE ENGINEERING","AUT-AUTOMOBILE ENGINEERING","BIT-BIO-TECHNOLOGY / INDUSTRIAL BIO-TECHNOLOGY","BME-BIOMEDICAL ENGINEERING","CBO-CHEMICAL(BIO)/BIO-CHEMICAL ENGINEERING","CEE-CIVIL AND ENVIRONMENT ","CHE-CHEMICAL ENGINEERING / TECHNOLOGY","CIT-COMPUTER SCIENCE AND INFORMATION TECHNOLOGY","CON-CONSTRUCTION ENGINEERING","CPT-CHEMICAL(PETRO-CHEMICAL ENGINEERING)","CSE-COMPUTER SCIENCE AND ENGINEERING / COMPUTER ENGINEERING","CSS-COMPUTER SCIENCE AND SYSTEM ENGINEERING","CVL-CIVIL ENGINEERING","DRT-DAILY TECHNOLOGY/DAIRY SCIENCE","EAC-ELECTRONICS AND CONTROL ENGINEERING","ECE-ELECTRONICS AND COMMUNICATION ENGINEERING","ECP-ELECTRONICS AND COMPUTER ENGINEERING","ECT-ELECTRONICS ENGINEERING","EEE-ELECTRICAL AND ELECTRONICS ENGINEERING","EIE-ELECTRONICS AND INSTRUMENTATION ENGINEERING","ELE-ELECTRICAL ENGINEERING","ETC-ELECTRONICS AND TELECOMMUNICATION ENGINEERING","ETM-ELECTRONICS AND TELEMATICS ENGINEERING","FDT-FOOD TECHMNOLOGY / FOOD PROCESSINFG TECHNMOLOGY","FEN-FOOD ENGINEERING","FPE-FOOD PROCESSING ENGINEERING","FPT-FOOD PROCESSING AND PRESERVATION TECHNOLOGY","FSC-FOOD SCIENCE/FOOD SCIENCE AND TECHNOLOGY","GEG-GEO ENGINEERING AND GEO INFORMATICS","IAC-INSTRUMATION AND CONTROL ENGINEERING","INE-INDUSTRIAL ENGINEERING","INF-INFORMATION TECHNOLOGY","INS-INTREUMENTATION ENGINEERING/TECHNOLOGY","IPE-INDUSTRIAL AND PRODUCTION ENGINEERING","MEC-MECHANICAL ENGINEERINMG","MET-METALLURGY ENGINEERING","MIN-MINING ENGINEERING","MME-MINING MACHINERY ENGINEERING","MMS-MECHANICAL MECHATRONICS ENGINEERING","MMT-METTALLUGRY AND MATERIAL TECHNOLOGY","MPE-MECHANICAL PRODUCTION ENGINEERING","MRN-MECHANICAL MARINE ENGINEERING","MTS-MATERIAL SCIENCE","PDE-PRODUCTION ENGINEERING","PET-PETROLEUM ENGINEERING / PETRO-CHEMICAL ENGINEERING","PLN-PLANNING","PPT-PETROLEUM TECHNOLOGY"]; 
 countryLists["AMIE(Associate Member of the Institution of Engineers(WITH DIPLOMA IN CONCERNED DISCIPLINE))"] = ["","AER-AERONAUTICAL ENGINEERING", "AGR-AGRICULTURAL ENGINEERING","ASE-AEROSPACE ENGINEERING","AUT-AUTOMOBILE ENGINEERING","BIT-BIO-TECHNOLOGY / INDUSTRIAL BIO-TECHNOLOGY","CBO-CHEMICAL(BIO)/BIO-CHEMICAL ENGINEERING","CEE-CIVIL AND ENVIRONMENT ","CHE-CHEMICAL ENGINEERING / TECHNOLOGY","CIT-COMPUTER SCIENCE AND INFORMATION TECHNOLOGY","CON-CONSTRUCTION ENGINEERING","CPT-CHEMICAL(PETRO-CHEMICAL ENGINEERING)","CSE-COMPUTER SCIENCE AND ENGINEERING / COMPUTER ENGINEERING","CSS-COMPUTER SCIENCE AND SYSTEM ENGINEERING","CVL-CIVIL ENGINEERING","DRT-DAILY TECHNOLOGY/DAIRY SCIENCE","EAC-ELECTRONICS AND CONTROL ENGINEERING","ECE-ELECTRONICS AND COMMUNICATION ENGINEERING","ECP-ELECTRONICS AND COMPUTER ENGINEERING","ECT-ELECTRONICS ENGINEERING","EEE-ELECTRICAL AND ELECTRONICS ENGINEERING","EIE-ELECTRONICS AND INSTRUMENTATION ENGINEERING","ELE-ELECTRICAL ENGINEERING","ETC-ELECTRONICS AND TELECOMMUNICATION ENGINEERING","ETM-ELECTRONICS AND TELEMATICS ENGINEERING","FDT-FOOD TECHMNOLOGY / FOOD PROCESSINFG TECHNMOLOGY","FEN-FOOD ENGINEERING","FPE-FOOD PROCESSING ENGINEERING","FPT-FOOD PROCESSING AND PRESERVATION TECHNOLOGY","FSC-FOOD SCIENCE/FOOD SCIENCE AND TECHNOLOGY","IAC-INSTRUMATION AND CONTROL ENGINEERING","INE-INDUSTRIAL ENGINEERING","INF-INFORMATION TECHNOLOGY","INS-INTREUMENTATION ENGINEERING/TECHNOLOGY","IPE-INDUSTRIAL AND PRODUCTION ENGINEERING","MEC-MECHANICAL ENGINEERINMG","MET-METALLURGY ENGINEERING","MIN-MINING ENGINEERING","MME-MINING MACHINERY ENGINEERING","MMS-MECHANICAL MECHATRONICS ENGINEERING","MMT-METTALLUGRY AND MATERIAL TECHNOLOGY","MPE-MECHANICAL PRODUCTION ENGINEERING","MRN-MECHANICAL MARINE ENGINEERING","MTS-MATERIAL SCIENCE","PDE-PRODUCTION ENGINEERING","PET-PETROLEUM ENGINEERING / PETRO-CHEMICAL ENGINEERING","PLN-PLANNING","PPT-PETROLEUM TECHNOLOGY"]; 
 countryLists["AMMIE(Associate Member of the Institution of Engineers(WITH NON DIPLOMA AND OTHER DISCIPLINE))"] = ["","AER-AERONAUTICAL ENGINEERING", "AGR-AGRICULTURAL ENGINEERING","ASE-AEROSPACE ENGINEERING","AUT-AUTOMOBILE ENGINEERING","BIT-BIO-TECHNOLOGY / INDUSTRIAL BIO-TECHNOLOGY","CBO-CHEMICAL(BIO)/BIO-CHEMICAL ENGINEERING","CEE-CIVIL AND ENVIRONMENT ","CHE-CHEMICAL ENGINEERING / TECHNOLOGY","CIT-COMPUTER SCIENCE AND INFORMATION TECHNOLOGY","CON-CONSTRUCTION ENGINEERING","CPT-CHEMICAL(PETRO-CHEMICAL ENGINEERING)","CSE-COMPUTER SCIENCE AND ENGINEERING / COMPUTER ENGINEERING","CSS-COMPUTER SCIENCE AND SYSTEM ENGINEERING","CVL-CIVIL ENGINEERING","DRT-DAILY TECHNOLOGY/DAIRY SCIENCE","EAC-ELECTRONICS AND CONTROL ENGINEERING","ECE-ELECTRONICS AND COMMUNICATION ENGINEERING","ECP-ELECTRONICS AND COMPUTER ENGINEERING","ECT-ELECTRONICS ENGINEERING","EEE-ELECTRICAL AND ELECTRONICS ENGINEERING","EIE-ELECTRONICS AND INSTRUMENTATION ENGINEERING","ELE-ELECTRICAL ENGINEERING","ETC-ELECTRONICS AND TELECOMMUNICATION ENGINEERING","ETM-ELECTRONICS AND TELEMATICS ENGINEERING","FDT-FOOD TECHMNOLOGY / FOOD PROCESSINFG TECHNMOLOGY","FEN-FOOD ENGINEERING","FPE-FOOD PROCESSING ENGINEERING","FPT-FOOD PROCESSING AND PRESERVATION TECHNOLOGY","FSC-FOOD SCIENCE/FOOD SCIENCE AND TECHNOLOGY","IAC-INSTRUMATION AND CONTROL ENGINEERING","INE-INDUSTRIAL ENGINEERING","INF-INFORMATION TECHNOLOGY","INS-INTREUMENTATION ENGINEERING/TECHNOLOGY","IPE-INDUSTRIAL AND PRODUCTION ENGINEERING","MEC-MECHANICAL ENGINEERINMG","MET-METALLURGY ENGINEERING","MIN-MINING ENGINEERING","MME-MINING MACHINERY ENGINEERING","MMS-MECHANICAL MECHATRONICS ENGINEERING","MMT-METTALLUGRY AND MATERIAL TECHNOLOGY","MPE-MECHANICAL PRODUCTION ENGINEERING","MRN-MECHANICAL MARINE ENGINEERING","MTS-MATERIAL SCIENCE","PDE-PRODUCTION ENGINEERING","PET-PETROLEUM ENGINEERING / PETRO-CHEMICAL ENGINEERING","PLN-PLANNING","PPT-PETROLEUM TECHNOLOGY"]; 
 countryLists["BArch(BACHELOR OF ARCHITECTURE)"]= ["","ARC-ARCHITECTURE"];
 countryLists["BPlanning(BACHELOR OF PLANNING)"]= ["","PLN-PLANNING"]; 
 countryLists["MSc(MASTER OF SCIENCE)"]= ["","ASS-AUTMOSPHERIC SCIENCE","BCH-BIOCHEMISTRY","BOT-BOTANY","CHM-CHEMISTRY","FOT-FOOD TECHNOLOGY / FOOD SCIENCE AND TECHNOLOGY","FTM-FOOD TECHNOLOGY AND MANAGEMENT","MAT-MATHEMATICS/APP MATHEMATICS","MCB-MICROBIOLOGY","PHY-PHYSICS/APPLIED PHYSICS","ZOO-ZOOLOGY"];
 /* CountryChange() is called from the onchange event of a select element. 
 * param selectObj - the select object which fired the on change event. 
 */ 
 function countryChange(selectObj) { 
 // get the index of the selected option 
 var idx = selectObj.selectedIndex; 
 // get the value of the selected option 
 var which = selectObj.options[idx].value;  
 // use the selected option value to retrieve the list of items from the countryLists array 
 cList = countryLists[which]; 
 // get the country select element via its known id 
 var cSelect = document.getElementById("country"); 
 // remove the current options from the country select 
 var len=cSelect.options.length; 
 while (cSelect.options.length > 0) { 
 cSelect.remove(0); 
 } 
 var newOption; 
 // create new options 
 for (var i=0; i<cList.length; i++) { 
 newOption = document.createElement("option"); 
 newOption.value = cList[i];  // assumes option string and value are the same 
 newOption.text=cList[i]; 
 // add the new option 
 try { 
 cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE 
 } 
 catch (e) { 
 cSelect.appendChild(newOption); 
 } 
 } 
 }
$(function () {
   $("#photo").change(function (e){
      var a = e.target.files[0];
      alert(parseFloat(a.size / 1024).toFixed(2) + " KB.");
   });
}); 
function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    }
//]]>
    </script>
    <style>
    .co:hover {
       background-color: buttonface; 
    }
</style>
    </head>
    <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header>
        
          <nav class="navbar navbar-default" >
            <div class="row">
            <div class="col-md-12">
                <h1 id="h" class="st">
                
                Online Application
            </h1>
            </div>
        </div>
            <div class="container" style="padding-top: 0px;">
                
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="co is-active"><a href="index.html" style="color:white" >HOME</a></li>
                        <li class="co"><a href="#" style="color:white">ABOUT</a></li>
                        <li class="co"><a href="#" style="color:white">COURSES &AMP; ELIGIBILITIES</a></li>
                        <li class="co"><a href="#" style="color:white">MOCK TEST</a></li>
                        <li class="co"><a href="#" style="color:white">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
      </header>

            <div class="container">
            <div class="row row_style">
                <div class="col-xs-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h4>TS PGECET-2018 APPLICATION FORM</h4></div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" enctype="multipart/form-data" action="1.php" method="post">
                                <h3>Candidate details</h3><hr>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Candidate Name<font color="red">*</font>:</label><br>
                                        
                                        <?php if(isset($_SESSION['name'])){ ?>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Your Name" value="<?php echo $_SESSION['name']; ?>" required/>
                                        <P><font color="red">(As per SSC or Equivalent Records)</font></P>
                                        <?php
                                        }  ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Father's Name<font color="red">*</font>:</label><br>
                                        <?php if(isset($_SESSION['fname'])){ ?>
                                        <input type="text" class="form-control" name="fname" placeholder="Enter Father's Name" value="<?php echo $_SESSION['fname']; ?>" required/>
                                        <?php
                                        }  ?>
                                        <P><font color="red">(As per SSC or Equivalent Records)</font></P>
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Mother's Name<font color="red">*</font>:</label><br>
                                        <?php if(isset($_SESSION['mname'])){ ?>
                                        <input type="text" class="form-control" name="mname" placeholder="Enter Mother's Name" value="<?php echo $_SESSION['mname']; ?>" required />
                                        <?php
                                        }  ?>
                                        <P><font color="red">(As per SSC or Equivalent Records)</font></P>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Date of Birth<font color="red">* (dd/mm/yyyy)</font>:</label><br>
                                        <input class="form-control" name="dob" placeholder="MM/DD/YYYY" type="text" value="<?php echo $_SESSION['dob']; ?>" required>
                                        
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Gender<font color="red">*</font></label><br>
                                        <?php 
                                        $gender=$_SESSION['gender'];
                                        if($gender=="MALE") { ?>
                                        <input type="radio" name="gender" value="MALE" checked> Male
                                        <input type="radio" name="gender" value="FEMALE"> Female
                                        <input type="radio" name="gender" value="TRANSGENDER"> Transgender
                                        <?php } elseif($gender=="FEMALE") { ?>
                                        <input type="radio" name="gender" value="MALE" > Male
                                        <input type="radio" name="gender" value="FEMALE" checked> Female
                                        <input type="radio" name="gender" value="TRANSGENDER"> Transgender
                                        <?php } else { ?>
                                        <input type="radio" name="gender" value="MALE" > Male
                                        <input type="radio" name="gender" value="FEMALE"> Female
                                        <input type="radio" name="gender" value="TRANSGENDER" checked> Transgender
                                        <?php } ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Aadhaar Card Number<font color="red">*</font>:</label><br>
                                        <input type="text" class="form-control" name="aadhar" placeholder="Enter Aadhaar card number" onkeypress="javascript:return isNumber(event)"  pattern="[0-9]{12}" value="<?php echo $_SESSION['aadhar']; ?>" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Birth State<font color="red">*</font>:</label><br>
                                        <select class="form-control" name="bstate" required>
                                            <option value="<?php echo $_SESSION['birthstate']; ?>"><?php echo $_SESSION['birthstate']; ?></option>
                                            <option value="">--select--</option>
                                            <option value="Andhra Pradesh">Andra Pradesh</option>
                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                            <option value="Assam">Assam</option>
                                            <option value="Bihar">Bihar</option>
                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Haryana">Haryana</option>
                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                            <option value="Jharkhand">Jharkhand</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Madya Pradesh">Madya Pradesh</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Manipur">Manipur</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                            <option value="Mizoram">Mizoram</option>
                                            <option value="Nagaland">Nagaland</option>
                                            <option value="Orissa">Orissa</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Rajasthan">Rajasthan</option>
                                            <option value="Sikkim">Sikkim</option>
                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                            <option value="Telangana">Telangana</option>
                                            <option value="Tripura">Tripura</option>
                                            <option value="Uttaranchal">Uttaranchal</option>
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                            <option value="West Bengal">West Bengal</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Ration card Number :</label><br>
                                        <input type="text" class="form-control" name="rcard" value="<?php echo $_SESSION['rationcard']; ?>" placeholder="Enter Ration card Number" />
                                    </div>
                                </div>
                                <div>
                                    <label  class="control-label">Category Details</label>
                                </div>
                                <div class="form-group">
                                    
                                </div>
                                    
                                <h3>Special Reservation Category</h3><hr>  
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <?php
                                        $s1=$_SESSION['spe1'];
                                        if($s1=="YES"){ ?>
                                        <input type="checkbox" name="special1" value="National Cadet Cops(ncc)" checked>National Cadet Cops(ncc) <br>
                                        <?php 
                                        } else { ?>
                                        <input type="checkbox" name="special1" value="National Cadet Cops(ncc)">National Cadet Cops(ncc) <br>
                                        <?php } ?>
                                        <?php
                                        $s2=$_SESSION['spe2'];
                                        if($s2=="YES"){ ?>
                                        <input type="checkbox" name="special2" value="Children of Armed Personnel(CAP)" checked>Children of Armed Personnel(CAP)<br>
                                        <?php
                                        } else { ?>
                                        <input type="checkbox" name="special2" value="Children of Armed Personnel(CAP)">Children of Armed Personnel(CAP)<br>
                                        <?php } ?>
                                        <?php
                                        $s3=$_SESSION['spe3'];
                                        if($s3=="YES"){ ?>
                                        <input type="checkbox" name="special3" value="Sports and Games" checked>Sports and Games<br>
                                        <?php
                                        } else { ?>
                                        <input type="checkbox" name="special3" value="Sports and Games">Sports and Games<br>
                                        <?php } ?>
                                        <?php
                                        $s4=$_SESSION['spe4'];
                                        if($s4=="YES"){ ?>
                                        <input type="checkbox" name="special4" value="Angio-Indian" checked>Angio-Indian
                                        <?php
                                        } else { ?>
                                        <input type="checkbox" name="special4" value="Angio-Indian">Angio-Indian
                                        <?php } ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <P><font color="red">PH(Physically Handicapped)</font></P>
                                        <?php
                                        $p1=$_SESSION['ph1'];
                                        if($p1=="YES"){ ?>
                                        <input type="checkbox" name="ph1" value="VH (Visually Handicapped)" checked>VH (Visually Handicapped)<br>
                                        <?php
                                        } else { ?>
                                        <input type="checkbox" name="ph1" value="VH (Visually Handicapped)">VH (Visually Handicapped)<br>
                                        <?php } ?>
                                        <?php
                                        $p2=$_SESSION['ph2'];
                                        if($p2=="YES"){ ?>
                                        <input type="checkbox" name="ph2" value="HI (Hearing Impaired)" checked>HI (Hearing Impaired)<br>
                                        <?php
                                        } else { ?>
                                        <input type="checkbox" name="ph2" value="HI (Hearing Impaired)">HI (Hearing Impaired)<br>
                                        <?php } ?>
                                        <?php
                                        $p3=$_SESSION['ph3'];
                                        if($p3=="YES"){ ?>
                                        <input type="checkbox" name="ph3" value="OH (Orthopedically Handicapped)" checked>OH (Orthopedically Handicapped)
                                        <?php
                                        } else { ?>
                                        <input type="checkbox" name="ph3" value="OH (Orthopedically Handicapped)">OH (Orthopedically Handicapped)
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Are you Belong to Local Area?</label><br>
                                        <?php
                                        $a=$_SESSION['localarea'];
                                        if($a=="yes"){ ?>
                                        <input type="radio" name="area" value="yes" checked> Yes
                                        <input type="radio" name="area" value="no"> No
                                        <?php
                                        } else { ?>
                                        <input type="radio" name="area" value="yes" > Yes
                                        <input type="radio" name="area" value="no" checked> No
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Minority /Non Minority</label><br>
                                        <?php
                                        $m=$_SESSION['minority'];
                                        if($m=="Non Minority"){ ?>
                                        <input type="radio" name="minority" value="Non Minority" checked> Non Minority
                                        <input type="radio" name="minority" value="Minority"> Minority
                                        <?php
                                        } else { ?>
                                        <input type="radio" name="minority" value="Non Minority" > Non Minority
                                        <input type="radio" name="minority" value="Minority" checked> Minority
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-8">
                                        <label  class="control-label">Annual Income of Parents(Rs.)<font color="red">*</font></label><br>
                                        <?php
                                        $in=$_SESSION['income'];
                                        if($in=="Below one Lakh"){ ?>
                                        <input type="radio" name="income" value="Below one Lakh" checked> Below one Lakh
                                        <input type="radio" name="income" value="Above one Lakh below two Lakhs"> Above one Lakh below two Lakhs
                                        <input type="radio" name="income" value="More than two Lakhs"> More than two Lakhs
                                        <?php
                                        } elseif ($in=="Above one Lakh below two Lakhs") { ?>
                                        <input type="radio" name="income" value="Below one Lakh" > Below one Lakh
                                        <input type="radio" name="income" value="Above one Lakh below two Lakhs" checked> Above one Lakh below two Lakhs
                                        <input type="radio" name="income" value="More than two Lakhs"> More than two Lakhs
                                        <?php
                                        } else { ?>
                                        <input type="radio" name="income" value="Below one Lakh" > Below one Lakh
                                        <input type="radio" name="income" value="Above one Lakh below two Lakhs"> Above one Lakh below two Lakhs
                                        <input type="radio" name="income" value="More than two Lakhs" checked> More than two Lakhs
                                        <?php } ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Income Certificate Number :</label><br>
                                        <input type="text" class="form-control" name="incomec" placeholder="Enter Income Certificate Number" value="<?php echo $_SESSION['incomec']; ?>"/>
                                    </div>
                                </div>
                                <div>
                                    <label  class="control-label">Candidate Bank Details</label>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Name as in Bank Account:</label><br>
                                        <input type="text" class="form-control" name="namebank" placeholder="Enter Name as in Bank Account" value="<?php echo $_SESSION['name_bank']; ?>"/>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Account Number:</label><br>
                                        <input type="text" class="form-control" name="accno" placeholder="Enter Account Number" onkeypress="javascript:return isNumber(event)" value="<?php echo $_SESSION['accno']; ?>"/>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">IFSC Code:</label><br>
                                        <?php $if=$_SESSION['ifsc']; ?>
                                        <input type="text" class="form-control" name="ifsc" placeholder="Enter IFSC Code" value="<?=$if?>"/>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <h3>2.Address details</h3><hr>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">House No (or) C/O<font color="red">*</font>:</label><br>
                                        <?php $hno=$_SESSION['hno']; ?>
                                        <input type="text" class="form-control" name="hno" placeholder="Enter House No (or) C/O" value="<?=$hno?>" required />
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Village /Street /Locality<font color="red">*</font>:</label><br>
                                        <?php $vi=$_SESSION['village']; ?>
                                        <input type="text" class="form-control" name="village" placeholder="Enter Village /Street /Locality" value="<?=$vi?>" required />
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Mandal / Twon / City<font color="red">*</font>:</label><br>
                                        <?php $ma=$_SESSION['mandal']; ?>
                                        <input type="text" class="form-control" name="mandal" placeholder="Enter Mandal / Twon / City" value="<?=$ma?>" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">District<font color="red">*</font>:</label><br>
                                        <?php $di=$_SESSION['district']; ?>
                                        <input type="text" class="form-control" name="district" placeholder="Enter District" value="<?=$di?>" required />
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">State<font color="red">*</font>:</label><br>
                                        <?php $st=$_SESSION['state']; ?>
                                        <input type="text" class="form-control" name="astate" placeholder="Enter State" value="<?=$st?>" required />
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Pin Code<font color="red">*</font>:</label><br>
                                        <?php $pin=$_SESSION['pincode']; ?>
                                        <input type="text" class="form-control" name="pincode" placeholder="Enter Pin Csode" onkeypress="javascript:return isNumber(event)" pattern="[0-9]{6}" value="<?=$pin?>" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Mobile<font color="red">*</font>:</label><br>
                                        <?php $mo=$_SESSION['mobile']; ?>
                                        <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile No" onkeypress="javascript:return isNumber(event)" pattern="[6789][0-9]{9}" value="<?=$mo?>" required/>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Alternative Mobile Number:</label><br>
                                        <?php $amo=$_SESSION['amobile']; ?>
                                        <input type="text" class="form-control" name="amobile" placeholder="Enter Alternative Mobile Number" onkeypress="javascript:return isNumber(event)" pattern="[6789][0-9]{9}" value="<?=$amo?>" />
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Telephone Number(Landline):</label><br>
                                        <?php $tele=$_SESSION['telephone']; ?>
                                        <input type="text" class="form-control" name="telephone" placeholder="Enter Telephone Number(Landline)" value="<?=$tele?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Email<font color="red">*</font>:</label><br>
                                        <?php $em=$_SESSION['email']; ?>
                                        <input type="email" class="form-control" name="email" placeholder="Enter Email Id" value="<?=$em?>" required/>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <h3>Qulalifing Examination</h3><hr>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-6">
                                        <label  class="control-label">Qualifing Degree<font color="red">*</font>:</label><br>
                                        <select id="continent" onchange="countryChange(this);" class="form-control" name="degree" required>
                                            <option value="">--select degree--</option>
                                            <option value="BE / BTech (Regular)" <?php if($_SESSION['degree']=="BE / BTech (Regular)") {echo "selected"; } ?> >BE / BTech (Regular)</option>
                                            <option value="AMIE(Associate Member of the Institution of Engineers(WITH DIPLOMA IN CONCERNED DISCIPLINE))" <?php if($_SESSION['degree']=="AMIE(Associate Member of the Institution of Engineers(WITH DIPLOMA IN CONCERNED DISCIPLINE))") {echo "selected"; } ?>>AMIE(Associate Member of the Institution of Engineers)</option>
                                            <option value="AMMIE(Associate Member of the Institution of Engineers(WITH NON DIPLOMA AND OTHER DISCIPLINE))" <?php if($_SESSION['degree']=="AMMIE(Associate Member of the Institution of Engineers(WITH NON DIPLOMA AND OTHER DISCIPLINE))") {echo "selected"; } ?>>AMMIE(Associate Member of the Institution of Engineers(WITH NON DIPLOMA AND OTHER DISCIPLINE))</option>
                                            <option value="BArch(BACHELOR OF ARCHITECTURE)" <?php if($_SESSION['degree']=="BArch(BACHELOR OF ARCHITECTURE)") {echo "selected"; } ?>>BArch(BACHELOR OF ARCHITECTURE)</option>
                                            <option value="BPlanning(BACHELOR OF PLANNING)" <?php if($_SESSION['degree']=="BPlanning(BACHELOR OF PLANNING)") {echo "selected"; } ?> >BPlanning(BACHELOR OF PLANNING)</option>
                                            <option value="MSc(MASTER OF SCIENCE)" <?php if($_SESSION['degree']=="MSc(MASTER OF SCIENCE)") {echo "selected"; } ?> >MSc(MASTER OF SCIENCE)</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <label  class="control-label">Specialization Qualifing Degree<font color="red">*</font>:</label><br>
                                        <select id="country" class="form-control" name="specialization" required>
                                            <option value="<?php echo $_SESSION['speciald']; ?>"><?php echo $_SESSION['speciald']; ?></option>
                                            <option value="0">Select a specialization</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-6">
                                        <label  class="control-label">Hallticket number of Qualifying Examination<font color="red">*</font>:</label><br>
                                        <?php $qh=$_SESSION['hallticketd']; ?>
                                        <input type="text" class="form-control" name="qhall" placeholder="Enter Hallticket number of Qualifying Examination" onkeypress="javascript:return isNumber(event)" value="<?=$qh?>" required />
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <label  class="control-label">Year of App./Passing the Qualifying Exam<font color="red">*</font>:</label><br>
                                        <select class="form-control" name="qyear">
                                            <option value="">--select--</option>
                                            <?php
                                            for ($i=1940; $i<=2018; $i++)
                                            {
                                            ?>
                                                <option value="<?php echo $i; ?>" <?php if ($_SESSION['yearofpass']== $i) { echo "selected"; }?> ><?php echo $i;?></option>
                                            <?php 
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-12">
                                        <label  class="control-label">Medium of Instructionat Qualifying Exam<font color="red">*</font>:</label><br>
                                        <?php
                                        $medium=$_SESSION['medium'];
                                        if($medium=="English"){ ?>
                                        <input type="radio" name="medium" value="English" checked> English
                                        <input type="radio" name="medium" value="Telugu"> Telugu
                                        <input type="radio" name="medium" value="Urdu"> Urdu
                                        <input type="radio" name="medium" value="Others"> Others
                                        <?php }
                                        elseif($medium=="Telugu") { ?>
                                        <input type="radio" name="medium" value="English"> English
                                        <input type="radio" name="medium" value="Telugu" checked> Telugu
                                        <input type="radio" name="medium" value="Urdu"> Urdu
                                        <input type="radio" name="medium" value="Others"> Others
                                        <?php }
                                        elseif($medium=="Urdu") { ?>
                                        <input type="radio" name="medium" value="English"> English
                                        <input type="radio" name="medium" value="Telugu"> Telugu
                                        <input type="radio" name="medium" value="Urdu" checked> Urdu
                                        <input type="radio" name="medium" value="Others"> Others
                                        <?php }
                                        else { ?>
                                        <input type="radio" name="medium" value="English"> English
                                        <input type="radio" name="medium" value="Telugu"> Telugu
                                        <input type="radio" name="medium" value="Urdu" > Urdu
                                        <input type="radio" name="medium" value="Others" checked> Others
                                        <?php } ?>
                                    </div>
                                </div>
                                <div>
                                    <label  class="control-label">SSC or Equivalent(10th Class)<font color="red">*</font>:</label><br>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-3">
                                        <br>
                                        <?php 
                                        $ssca=$_SESSION['sscarea'];
                                        if($ssca=="Urban"){ ?>
                                        <input type="radio" name="placessc" value="Urban" checked> Urban
                                        <input type="radio" name="placessc" value="Rural"> Rural
                                        <?php }
                                        else { ?>
                                        <input type="radio" name="placessc" value="Urban" > Urban
                                        <input type="radio" name="placessc" value="Rural" checked> Rural
                                        <?php } ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">SSC Hall Ticket Number<font color="red">*</font>:</label><br>
                                        <?php $sh=$_SESSION['sschall']; ?>
                                        <input type="text" class="form-control" name="sschall" placeholder="Enter SSC Hall Ticket Number" onkeypress="javascript:return isNumber(event)" value="<?=$sh?>" required />
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">Month of Passing:</label><br>
                                        <select class="form-control" name="sscmonth">
                                            <option value="">--select--</option>
                                            <option value="April" <?php if($_SESSION['sscmonth']=="April") {echo "selected"; } ?>>April</option>
                                            <option value="June" <?php if($_SESSION['sscmonth']=="June") {echo "selected"; } ?>>June</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">Year of Passing:</label><br>
                                        <select class="form-control" name="sscyear">
                                            <option value="">--select--</option>
                                            <?php
                                            for ($i=1940; $i<=2018; $i++)
                                            {
                                            ?>
                                                <option value="<?php echo $i;?>" <?php if ($_SESSION['sscyear']== $i) { echo "selected"; }?> ><?php echo $i;?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <label  class="control-label">Intermediate or Equivalent(10+2)<font color="red">*</font>:</label><br>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-3">
                                        <br>
                                        <?php 
                                        $intera=$_SESSION['interarea'];
                                        if($intera=="Urban"){ ?>
                                        <input type="radio" name="placei" value="Urban" checked> Urban
                                        <input type="radio" name="placei" value="Rural"> Rural
                                        <?php }
                                        else { ?>
                                        <input type="radio" name="placei" value="Urban" > Urban
                                        <input type="radio" name="placei" value="Rural" checked> Rural
                                        <?php } ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">Intermediate Hall Ticket Number<font color="red">*</font>:</label><br>
                                        <?php $interh=$_SESSION['interhall']; ?>
                                        <input type="text" class="form-control" name="ihall" placeholder="Enter Intermediate Hall Ticket Number" onkeypress="javascript:return isNumber(event)" value="<?=$interh?>" required/>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">Month of Passing:</label><br>
                                        <select class="form-control" name="imonth">
                                            <option value="">--select--</option>
                                            <option value="March" <?php if($_SESSION['intermonth']=="March") {echo "selected"; } ?>>March</option>
                                            <option value="May" <?php if($_SESSION['intermonth']=="May") {echo "selected"; } ?> >May</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">Year of Passing:</label><br>
                                        <select class="form-control" name="iyear">
                                            <option value="">--select--</option>
                                            <?php
                                            for ($i=1940; $i<=2018; $i++)
                                            {
                                            ?>
                                                <option value="<?php echo $i;?>"  <?php if ($_SESSION['interyear']== $i) { echo "selected"; }?> ><?php echo $i;?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <label  class="control-label">Place of Study:</label><br>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-3">
                                       <label  class="control-label">Class-10<font color="red">*</font>:</label><br>
                                       <select class="form-control" name="sscplace" required>
                                           <option value="">--select--</option>
                                           <option value="Adilabad" <?php if ($_SESSION['sscplace']== 'Adilabad') { echo "selected"; }?> >Adilabad</option> 
                                           <option value="Bhadradri" <?php if ($_SESSION['sscplace']== 'Bhadradri') { echo "selected"; }?> >Bhadradri</option> 
                                           <option value="Hyderabad" <?php if ($_SESSION['sscplace']== 'Hyderabad') { echo "selected"; }?> >Hyderabad </option>
                                           <option value="Jagtial" <?php if ($_SESSION['sscplace']== 'Jagtial') { echo "selected"; }?> >Jagtial</option> 
                                           <option value="Jangaon" <?php if ($_SESSION['sscplace']== 'Jangaon') { echo "selected"; }?> >Jangaon</option> 
                                           <option value="Jayashankar" <?php if ($_SESSION['sscplace']== 'Jayashankar') { echo "selected"; }?> >Jayashankar</option> 
                                           <option value="Jogulamba(Gadwal)" <?php if ($_SESSION['sscplace']== 'Jogulamba(Gadwal)') { echo "selected"; }?>>Jogulamba(Gadwal)</option> 
                                           <option value="Kamareddy" <?php if ($_SESSION['sscplace']== 'Kamareddy') { echo "selected"; }?> >Kamareddy</option> 
                                           <option value="Karimnagar" <?php if ($_SESSION['sscplace']== 'Karimnagar') { echo "selected"; }?> >Karimnagar</option> 
                                           <option value="Khammam" <?php if ($_SESSION['sscplace']== 'Khammam') { echo "selected"; }?> >Khammam</option> 
                                           <option value="Mahabubabad" <?php if ($_SESSION['sscplace']== 'Mahabubabad') { echo "selected"; }?> >Mahabubabad</option> 
                                           <option value="Mahbubnagar" <?php if ($_SESSION['sscplace']== 'Mahbubnagar') { echo "selected"; }?> >Mahbubnagar</option> 
                                           <option value="Mancherial" <?php if ($_SESSION['sscplace']== 'Mancherial') { echo "selected"; }?> >Mancherial</option> 
                                           <option value="Medak" <?php if ($_SESSION['sscplace']== 'Medak') { echo "selected"; }?> >Medak</option> 
                                           <option value="Medchal–Malkajgiri" <?php if ($_SESSION['sscplace']== 'Medchal–Malkajgiri') { echo "selected"; }?> >Medchal–Malkajgiri</option> 
                                           <option value="Nagarkurnool" <?php if ($_SESSION['sscplace']== 'Nagarkurnool') { echo "selected"; }?> >Nagarkurnool</option> 
                                           <option value="Nalgonda" <?php if ($_SESSION['sscplace']== 'Nalgonda') { echo "selected"; }?> >Nalgonda</option> 
                                           <option value="Nirmal" <?php if ($_SESSION['sscplace']== 'Nirmal') { echo "selected"; }?> >Nirmal</option> 
                                           <option value="Nizamabad" <?php if ($_SESSION['sscplace']== 'Nizamabad') { echo "selected"; }?> >Nizamabad</option> 
                                           <option value="Peddapalli" <?php if ($_SESSION['sscplace']== 'Peddapalli') { echo "selected"; }?> >Peddapalli</option> 
                                           <option value="Rajanna" <?php if ($_SESSION['sscplace']== 'Rajanna') { echo "selected"; }?> >Rajanna</option> 
                                           <option value="Sircilla" <?php if ($_SESSION['sscplace']== 'Sircilla') { echo "selected"; }?> >Sircilla</option> 
                                           <option value="Ranga Reddy" <?php if ($_SESSION['sscplace']== 'Ranga Reddy') { echo "selected"; }?> >Ranga Reddy</option> 
                                           <option value="Sangareddy" <?php if ($_SESSION['sscplace']== 'Sangareddy') { echo "selected"; }?> >Sangareddy</option> 
                                           <option value="Siddipet" <?php if ($_SESSION['sscplace']== 'Siddipet') { echo "selected"; }?> >Siddipet</option> 
                                           <option value="Suryapet" <?php if ($_SESSION['sscplace']== 'Suryapet') { echo "selected"; }?> >Suryapet</option> 
                                           <option value="Vikarabad" <?php if ($_SESSION['sscplace']== 'Vikarabad') { echo "selected"; }?> >Vikarabad</option> 
                                           <option value="Wanaparthy" <?php if ($_SESSION['sscplace']== 'Wanaparthy') { echo "selected"; }?> >Wanaparthy</option> 
                                           <option value="Warangal (rural)" <?php if ($_SESSION['sscplace']== 'Warangal (rural)') { echo "selected"; }?> >Warangal (rural)</option> 
                                           <option value="Warangal (urban)" <?php if ($_SESSION['sscplace']== 'Warangal (urban)') { echo "selected"; }?> >Warangal (urban)</option> 
                                           <option value="Yadadri" <?php if ($_SESSION['sscplace']== 'Yadadri') { echo "selected"; }?> >Yadadri</option>
                                       </select>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">Intermediate or Equivalent(10+2)<font color="red">*</font>:</label><br>
                                        <select class="form-control" name="iplace" required>
                                            <option value="">--select--</option>
                                           <option value="Adilabad" <?php if ($_SESSION['interplace']== 'Adilabad') { echo "selected"; }?> >Adilabad</option> 
                                           <option value="Bhadradri" <?php if ($_SESSION['interplace']== 'Bhadradri') { echo "selected"; }?> >Bhadradri</option> 
                                           <option value="Hyderabad" <?php if ($_SESSION['interplace']== 'Hyderabad') { echo "selected"; }?> >Hyderabad </option>
                                           <option value="Jagtial" <?php if ($_SESSION['interplace']== 'Jagtial') { echo "selected"; }?> >Jagtial</option> 
                                           <option value="Jangaon" <?php if ($_SESSION['interplace']== 'Jangaon') { echo "selected"; }?> >Jangaon</option> 
                                           <option value="Jayashankar" <?php if ($_SESSION['interplace']== 'Jayashankar') { echo "selected"; }?> >Jayashankar</option> 
                                           <option value="Jogulamba(Gadwal)" <?php if ($_SESSION['interplace']== 'Jogulamba(Gadwal)') { echo "selected"; }?>>Jogulamba(Gadwal)</option> 
                                           <option value="Kamareddy" <?php if ($_SESSION['interplace']== 'Kamareddy') { echo "selected"; }?> >Kamareddy</option> 
                                           <option value="Karimnagar" <?php if ($_SESSION['interplace']== 'Karimnagar') { echo "selected"; }?> >Karimnagar</option> 
                                           <option value="Khammam" <?php if ($_SESSION['interplace']== 'Khammam') { echo "selected"; }?> >Khammam</option> 
                                           <option value="Mahabubabad" <?php if ($_SESSION['interplace']== 'Mahabubabad') { echo "selected"; }?> >Mahabubabad</option> 
                                           <option value="Mahbubnagar" <?php if ($_SESSION['interplace']== 'Mahbubnagar') { echo "selected"; }?> >Mahbubnagar</option> 
                                           <option value="Mancherial" <?php if ($_SESSION['interplace']== 'Mancherial') { echo "selected"; }?> >Mancherial</option> 
                                           <option value="Medak" <?php if ($_SESSION['interplace']== 'Medak') { echo "selected"; }?> >Medak</option> 
                                           <option value="Medchal–Malkajgiri" <?php if ($_SESSION['interplace']== 'Medchal–Malkajgiri') { echo "selected"; }?> >Medchal–Malkajgiri</option> 
                                           <option value="Nagarkurnool" <?php if ($_SESSION['interplace']== 'Nagarkurnool') { echo "selected"; }?> >Nagarkurnool</option> 
                                           <option value="Nalgonda" <?php if ($_SESSION['interplace']== 'Nalgonda') { echo "selected"; }?> >Nalgonda</option> 
                                           <option value="Nirmal" <?php if ($_SESSION['interplace']== 'Nirmal') { echo "selected"; }?> >Nirmal</option> 
                                           <option value="Nizamabad" <?php if ($_SESSION['interplace']== 'Nizamabad') { echo "selected"; }?> >Nizamabad</option> 
                                           <option value="Peddapalli" <?php if ($_SESSION['interplace']== 'Peddapalli') { echo "selected"; }?> >Peddapalli</option> 
                                           <option value="Rajanna" <?php if ($_SESSION['interplace']== 'Rajanna') { echo "selected"; }?> >Rajanna</option> 
                                           <option value="Sircilla" <?php if ($_SESSION['interplace']== 'Sircilla') { echo "selected"; }?> >Sircilla</option> 
                                           <option value="Ranga Reddy" <?php if ($_SESSION['interplace']== 'Ranga Reddy') { echo "selected"; }?> >Ranga Reddy</option> 
                                           <option value="Sangareddy" <?php if ($_SESSION['interplace']== 'Sangareddy') { echo "selected"; }?> >Sangareddy</option> 
                                           <option value="Siddipet" <?php if ($_SESSION['interplace']== 'Siddipet') { echo "selected"; }?> >Siddipet</option> 
                                           <option value="Suryapet" <?php if ($_SESSION['interplace']== 'Suryapet') { echo "selected"; }?> >Suryapet</option> 
                                           <option value="Vikarabad" <?php if ($_SESSION['interplace']== 'Vikarabad') { echo "selected"; }?> >Vikarabad</option> 
                                           <option value="Wanaparthy" <?php if ($_SESSION['interplace']== 'Wanaparthy') { echo "selected"; }?> >Wanaparthy</option> 
                                           <option value="Warangal (rural)" <?php if ($_SESSION['interplace']== 'Warangal (rural)') { echo "selected"; }?> >Warangal (rural)</option> 
                                           <option value="Warangal (urban)" <?php if ($_SESSION['interplace']== 'Warangal (urban)') { echo "selected"; }?> >Warangal (urban)</option> 
                                           <option value="Yadadri" <?php if ($_SESSION['interplace']== 'Yadadri') { echo "selected"; }?> >Yadadri</option>
                                       </select>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">Degree<font color="red">*</font>:</label><br>
                                        <select class="form-control" name="dplace" required>
                                           <option value="">--select--</option>
                                           <option value="Adilabad" <?php if ($_SESSION['degreeplace']== 'Adilabad') { echo "selected"; }?> >Adilabad</option> 
                                           <option value="Bhadradri" <?php if ($_SESSION['degreeplace']== 'Bhadradri') { echo "selected"; }?> >Bhadradri</option> 
                                           <option value="Hyderabad" <?php if ($_SESSION['degreeplace']== 'Hyderabad') { echo "selected"; }?> >Hyderabad </option>
                                           <option value="Jagtial" <?php if ($_SESSION['degreeplace']== 'Jagtial') { echo "selected"; }?> >Jagtial</option> 
                                           <option value="Jangaon" <?php if ($_SESSION['degreeplace']== 'Jangaon') { echo "selected"; }?> >Jangaon</option> 
                                           <option value="Jayashankar" <?php if ($_SESSION['degreeplace']== 'Jayashankar') { echo "selected"; }?> >Jayashankar</option> 
                                           <option value="Jogulamba(Gadwal)" <?php if ($_SESSION['degreeplace']== 'Jogulamba(Gadwal)') { echo "selected"; }?>>Jogulamba(Gadwal)</option> 
                                           <option value="Kamareddy" <?php if ($_SESSION['degreeplace']== 'Kamareddy') { echo "selected"; }?> >Kamareddy</option> 
                                           <option value="Karimnagar" <?php if ($_SESSION['degreeplace']== 'Karimnagar') { echo "selected"; }?> >Karimnagar</option> 
                                           <option value="Khammam" <?php if ($_SESSION['degreeplace']== 'Khammam') { echo "selected"; }?> >Khammam</option> 
                                           <option value="Mahabubabad" <?php if ($_SESSION['degreeplace']== 'Mahabubabad') { echo "selected"; }?> >Mahabubabad</option> 
                                           <option value="Mahbubnagar" <?php if ($_SESSION['degreeplace']== 'Mahbubnagar') { echo "selected"; }?> >Mahbubnagar</option> 
                                           <option value="Mancherial" <?php if ($_SESSION['degreeplace']== 'Mancherial') { echo "selected"; }?> >Mancherial</option> 
                                           <option value="Medak" <?php if ($_SESSION['degreeplace']== 'Medak') { echo "selected"; }?> >Medak</option> 
                                           <option value="Medchal–Malkajgiri" <?php if ($_SESSION['degreeplace']== 'Medchal–Malkajgiri') { echo "selected"; }?> >Medchal–Malkajgiri</option> 
                                           <option value="Nagarkurnool" <?php if ($_SESSION['degreeplace']== 'Nagarkurnool') { echo "selected"; }?> >Nagarkurnool</option> 
                                           <option value="Nalgonda" <?php if ($_SESSION['degreeplace']== 'Nalgonda') { echo "selected"; }?> >Nalgonda</option> 
                                           <option value="Nirmal" <?php if ($_SESSION['degreeplace']== 'Nirmal') { echo "selected"; }?> >Nirmal</option> 
                                           <option value="Nizamabad" <?php if ($_SESSION['degreeplace']== 'Nizamabad') { echo "selected"; }?> >Nizamabad</option> 
                                           <option value="Peddapalli" <?php if ($_SESSION['degreeplace']== 'Peddapalli') { echo "selected"; }?> >Peddapalli</option> 
                                           <option value="Rajanna" <?php if ($_SESSION['degreeplace']== 'Rajanna') { echo "selected"; }?> >Rajanna</option> 
                                           <option value="Sircilla" <?php if ($_SESSION['degreeplace']== 'Sircilla') { echo "selected"; }?> >Sircilla</option> 
                                           <option value="Ranga Reddy" <?php if ($_SESSION['degreeplace']== 'Ranga Reddy') { echo "selected"; }?> >Ranga Reddy</option> 
                                           <option value="Sangareddy" <?php if ($_SESSION['degreeplace']== 'Sangareddy') { echo "selected"; }?> >Sangareddy</option> 
                                           <option value="Siddipet" <?php if ($_SESSION['degreeplace']== 'Siddipet') { echo "selected"; }?> >Siddipet</option> 
                                           <option value="Suryapet" <?php if ($_SESSION['degreeplace']== 'Suryapet') { echo "selected"; }?> >Suryapet</option> 
                                           <option value="Vikarabad" <?php if ($_SESSION['degreeplace']== 'Vikarabad') { echo "selected"; }?> >Vikarabad</option> 
                                           <option value="Wanaparthy" <?php if ($_SESSION['degreeplace']== 'Wanaparthy') { echo "selected"; }?> >Wanaparthy</option> 
                                           <option value="Warangal (rural)" <?php if ($_SESSION['degreeplace']== 'Warangal (rural)') { echo "selected"; }?> >Warangal (rural)</option> 
                                           <option value="Warangal (urban)" <?php if ($_SESSION['degreeplace']== 'Warangal (urban)') { echo "selected"; }?> >Warangal (urban)</option> 
                                           <option value="Yadadri" <?php if ($_SESSION['degreeplace']== 'Yadadri') { echo "selected"; }?> >Yadadri</option>
                                       </select>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">MSC/MCA/Others:</label><br>
                                        <select class="form-control" name="mplace">
                                           <option value="">--select--</option>
                                           <option value="Adilabad" <?php if ($_SESSION['mscmcaplace']== 'Adilabad') { echo "selected"; }?> >Adilabad</option> 
                                           <option value="Bhadradri" <?php if ($_SESSION['mscmcaplace']== 'Bhadradri') { echo "selected"; }?> >Bhadradri</option> 
                                           <option value="Hyderabad" <?php if ($_SESSION['mscmcaplace']== 'Hyderabad') { echo "selected"; }?> >Hyderabad </option>
                                           <option value="Jagtial" <?php if ($_SESSION['mscmcaplace']== 'Jagtial') { echo "selected"; }?> >Jagtial</option> 
                                           <option value="Jangaon" <?php if ($_SESSION['mscmcaplace']== 'Jangaon') { echo "selected"; }?> >Jangaon</option> 
                                           <option value="Jayashankar" <?php if ($_SESSION['mscmcaplace']== 'Jayashankar') { echo "selected"; }?> >Jayashankar</option> 
                                           <option value="Jogulamba(Gadwal)" <?php if ($_SESSION['mscmcaplace']== 'Jogulamba(Gadwal)') { echo "selected"; }?>>Jogulamba(Gadwal)</option> 
                                           <option value="Kamareddy" <?php if ($_SESSION['mscmcaplace']== 'Kamareddy') { echo "selected"; }?> >Kamareddy</option> 
                                           <option value="Karimnagar" <?php if ($_SESSION['mscmcaplace']== 'Karimnagar') { echo "selected"; }?> >Karimnagar</option> 
                                           <option value="Khammam" <?php if ($_SESSION['mscmcaplace']== 'Khammam') { echo "selected"; }?> >Khammam</option> 
                                           <option value="Mahabubabad" <?php if ($_SESSION['mscmcaplace']== 'Mahabubabad') { echo "selected"; }?> >Mahabubabad</option> 
                                           <option value="Mahbubnagar" <?php if ($_SESSION['mscmcaplace']== 'Mahbubnagar') { echo "selected"; }?> >Mahbubnagar</option> 
                                           <option value="Mancherial" <?php if ($_SESSION['mscmcaplace']== 'Mancherial') { echo "selected"; }?> >Mancherial</option> 
                                           <option value="Medak" <?php if ($_SESSION['mscmcaplace']== 'Medak') { echo "selected"; }?> >Medak</option> 
                                           <option value="Medchal–Malkajgiri" <?php if ($_SESSION['mscmcaplace']== 'Medchal–Malkajgiri') { echo "selected"; }?> >Medchal–Malkajgiri</option> 
                                           <option value="Nagarkurnool" <?php if ($_SESSION['mscmcaplace']== 'Nagarkurnool') { echo "selected"; }?> >Nagarkurnool</option> 
                                           <option value="Nalgonda" <?php if ($_SESSION['mscmcaplace']== 'Nalgonda') { echo "selected"; }?> >Nalgonda</option> 
                                           <option value="Nirmal" <?php if ($_SESSION['mscmcaplace']== 'Nirmal') { echo "selected"; }?> >Nirmal</option> 
                                           <option value="Nizamabad" <?php if ($_SESSION['mscmcaplace']== 'Nizamabad') { echo "selected"; }?> >Nizamabad</option> 
                                           <option value="Peddapalli" <?php if ($_SESSION['mscmcaplace']== 'Peddapalli') { echo "selected"; }?> >Peddapalli</option> 
                                           <option value="Rajanna" <?php if ($_SESSION['mscmcaplace']== 'Rajanna') { echo "selected"; }?> >Rajanna</option> 
                                           <option value="Sircilla" <?php if ($_SESSION['mscmcaplace']== 'Sircilla') { echo "selected"; }?> >Sircilla</option> 
                                           <option value="Ranga Reddy" <?php if ($_SESSION['mscmcaplace']== 'Ranga Reddy') { echo "selected"; }?> >Ranga Reddy</option> 
                                           <option value="Sangareddy" <?php if ($_SESSION['mscmcaplace']== 'Sangareddy') { echo "selected"; }?> >Sangareddy</option> 
                                           <option value="Siddipet" <?php if ($_SESSION['mscmcaplace']== 'Siddipet') { echo "selected"; }?> >Siddipet</option> 
                                           <option value="Suryapet" <?php if ($_SESSION['mscmcaplace']== 'Suryapet') { echo "selected"; }?> >Suryapet</option> 
                                           <option value="Vikarabad" <?php if ($_SESSION['mscmcaplace']== 'Vikarabad') { echo "selected"; }?> >Vikarabad</option> 
                                           <option value="Wanaparthy" <?php if ($_SESSION['mscmcaplace']== 'Wanaparthy') { echo "selected"; }?> >Wanaparthy</option> 
                                           <option value="Warangal (rural)" <?php if ($_SESSION['mscmcaplace']== 'Warangal (rural)') { echo "selected"; }?> >Warangal (rural)</option> 
                                           <option value="Warangal (urban)" <?php if ($_SESSION['mscmcaplace']== 'Warangal (urban)') { echo "selected"; }?> >Warangal (urban)</option> 
                                           <option value="Yadadri" <?php if ($_SESSION['mscmcaplace']== 'Yadadri') { echo "selected"; }?> >Yadadri</option>
                                       </select>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <h3>Details of Common Entrance Test</h3><hr>
                                <div>
                                    <label  class="control-label">PGECET Exam Paper Choosen for Entrance Test</label><br>
                                    <label  class="control-label">BM-BIOMEDICAL ENGINEERING</label>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <br>
                                        <p>Regional Test Centre </p>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Preference 1<font color="red">*</font>:</label><br>
                                        <select class="form-control" name="center1" required>
                                            <option value="">--select--</option>
                                            <option value="Hyderabad West" <?php if ($_SESSION['center1']== 'Hyderabad West') { echo "selected"; }?> >Hyderabad West (Kukatpally, Patancheru, Gandipet, Moinabad and surrounding areas)</option>
                                            <option value="Hyderabad North" <?php if ($_SESSION['center1']== 'Hyderabad North') { echo "selected"; }?> >Hyderabad North (Medchal,Gandimaisamma and surrounding areas)</option>
                                            <option value="Hyderabad Central" <?php if ($_SESSION['center1']== 'Hyderabad Central') { echo "selected"; }?> >Hyderabad Central (Abids, Tarnaka and surrounding areas)</option>
                                            <option value="Hyderabad East" <?php if ($_SESSION['center1']== 'Hyderabad East') { echo "selected"; }?> >Hyderabad East (Ghatkesar, keesara and surrounding areas)</option>
                                            <option value="Hyderabad South-East" <?php if ($_SESSION['center1']== 'Hyderabad South-East') { echo "selected"; }?> >Hyderabad South-East (L.B. Nagar, Hayathnagar, Pedda amberpet, Ibrahimpatnam,Ramoji Film City area and surrounding areas)</option>
                                            <option value="Warangal" <?php if ($_SESSION['center1']== 'Warangal') { echo "selected"; }?> >Warangal</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Preference 2<font color="red">*</font>:</label><br>
                                        <select class="form-control" name="center2" required>
                                            <option value="">--select--</option>
                                            <option value="Hyderabad West" <?php if ($_SESSION['center2']== 'Hyderabad West') { echo "selected"; }?> >Hyderabad West (Kukatpally, Patancheru, Gandipet, Moinabad and surrounding areas)</option>
                                            <option value="Hyderabad North" <?php if ($_SESSION['center2']== 'Hyderabad North') { echo "selected"; }?> >Hyderabad North (Medchal,Gandimaisamma and surrounding areas)</option>
                                            <option value="Hyderabad Central" <?php if ($_SESSION['center2']== 'Hyderabad Central') { echo "selected"; }?> >Hyderabad Central (Abids, Tarnaka and surrounding areas)</option>
                                            <option value="Hyderabad East" <?php if ($_SESSION['center2']== 'Hyderabad East') { echo "selected"; }?> >Hyderabad East (Ghatkesar, keesara and surrounding areas)</option>
                                            <option value="Hyderabad South-East" <?php if ($_SESSION['center2']== 'Hyderabad South-East') { echo "selected"; }?>>Hyderabad South-East (L.B. Nagar, Hayathnagar, Pedda amberpet, Ibrahimpatnam,Ramoji Film City area and surrounding areas)</option>
                                            <option value="Warangal" <?php if ($_SESSION['center2']== 'Warangal') { echo "selected"; }?> >Warangal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="panel panel-primary">
                                    <div class="panel-heading"><h4>PHOTO AND SIGNATURE</h4></div>
                                </div>  
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <br>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label ><font color="red">Please choose the photo and signature again</font> </label>
                                        <label  class="control-label">Photo <font color="red">(<50kb jpg,jpeg)</font>:</label><br>
                                        <?php $img=$_SESSION['photo'];  ?>
                                        <img  src="<?php echo "$img"; ?>" width="100" height="150"/>
                                        <input type='file' class="form-control"  name="fileToUpload" id="fileToUpload" value="" accept="image/x-jpg,image/jpeg" size="50000" required />
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Signature <font color="red">(<50kb jpg,jpeg)</font>:</label><br>
                                        <?php $sig=$_SESSION['signature']; ?>
                                        <img src="<?php echo $sig; ?>" width="150" height="50"/>
                                        <input type='file' class="form-control"  name="fileToUpload1" id="fileToUpload1" value="" accept="image/x-jpg,image/jpeg" size="30000" required/>
                                        
                                    </div>
                                </div>
                                <div class="form-group" style="padding-left: 10px; padding-right: 10px;">
                                    <div class="col-xs-12" style="border:1px solid red;"><input type="checkbox" required>I have carefully gone through the instruction Booklet and I am conversant with the instruction. I shall abide by the eligibility conditions and other regulations to be satisfied for appering at the entrance test and admission into any course prescribed. Further, I assure that,I will not involve in any malpractice or illegal activities in the entrance test. In case, I have furnished any false information or involved in any malpractice or illegal activities, I am liable for punishment as per the existing law. I am responsible correctness of the above details filled by me and the CONVENER, TS PGECET-2018 is not responsible in any way. Mere appering for the entrance examination does not confer any right for me to take admission.</div>
                                    <br>
                                </div>    
                                <div class="col-xs-12"><font color="red">SAVE : </font>Will record the partially filled details in the Database. The same can be retrieved at your convenience and you can continue to fill the reset and submit the form.</div> 
                                <div class="col-xs-12"><font color="red">PREVIEW/SUBMIT :</font>You will have a chance to preview your application and then finally confirm your application by clicking on Confirm button.</div>
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-10">
                                        <button type="submit" name="action" value="save" >SAVE</button>
                                        <button type="submit" name="action" value="preview" >PREVIEW/SUBMIT</button> 
                                    </div>
                                </div>
                                
                                
                                
                                
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>


        <script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>

    </body>
</html>
