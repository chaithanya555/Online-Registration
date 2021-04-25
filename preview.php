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
 countryLists["BE / BTech (Regular)"] = ["AER-AERONAUTICAL ENGINEERING", "AGR-AGRICULTURAL ENGINEERING", "ASE-AEROSPACE ENGINEERING","AUT-AUTOMOBILE ENGINEERING","BIT-BIO-TECHNOLOGY / INDUSTRIAL BIO-TECHNOLOGY","BME-BIOMEDICAL ENGINEERING","CBO-CHEMICAL(BIO)/BIO-CHEMICAL ENGINEERING","CEE-CIVIL AND ENVIRONMENT ","CHE-CHEMICAL ENGINEERING / TECHNOLOGY","CIT-COMPUTER SCIENCE AND INFORMATION TECHNOLOGY","CON-CONSTRUCTION ENGINEERING","CPT-CHEMICAL(PETRO-CHEMICAL ENGINEERING)","CSE-COMPUTER SCIENCE AND ENGINEERING / COMPUTER ENGINEERING","CSS-COMPUTER SCIENCE AND SYSTEM ENGINEERING","CVL-CIVIL ENGINEERING","DRT-DAILY TECHNOLOGY/DAIRY SCIENCE","EAC-ELECTRONICS AND CONTROL ENGINEERING","ECE-ELECTRONICS AND COMMUNICATION ENGINEERING","ECP-ELECTRONICS AND COMPUTER ENGINEERING","ECT-ELECTRONICS ENGINEERING","EEE-ELECTRICAL AND ELECTRONICS ENGINEERING","EIE-ELECTRONICS AND INSTRUMENTATION ENGINEERING","ELE-ELECTRICAL ENGINEERING","ETC-ELECTRONICS AND TELECOMMUNICATION ENGINEERING","ETM-ELECTRONICS AND TELEMATICS ENGINEERING","FDT-FOOD TECHMNOLOGY / FOOD PROCESSINFG TECHNMOLOGY","FEN-FOOD ENGINEERING","FPE-FOOD PROCESSING ENGINEERING","FPT-FOOD PROCESSING AND PRESERVATION TECHNOLOGY","FSC-FOOD SCIENCE/FOOD SCIENCE AND TECHNOLOGY","GEG-GEO ENGINEERING AND GEO INFORMATICS","IAC-INSTRUMATION AND CONTROL ENGINEERING","INE-INDUSTRIAL ENGINEERING","INF-INFORMATION TECHNOLOGY","INS-INTREUMENTATION ENGINEERING/TECHNOLOGY","IPE-INDUSTRIAL AND PRODUCTION ENGINEERING","MEC-MECHANICAL ENGINEERINMG","MET-METALLURGY ENGINEERING","MIN-MINING ENGINEERING","MME-MINING MACHINERY ENGINEERING","MMS-MECHANICAL MECHATRONICS ENGINEERING","MMT-METTALLUGRY AND MATERIAL TECHNOLOGY","MPE-MECHANICAL PRODUCTION ENGINEERING","MRN-MECHANICAL MARINE ENGINEERING","MTS-MATERIAL SCIENCE","PDE-PRODUCTION ENGINEERING","PET-PETROLEUM ENGINEERING / PETRO-CHEMICAL ENGINEERING","PLN-PLANNING","PPT-PETROLEUM TECHNOLOGY"]; 
 countryLists["AMIE(Associate Member of the Institution of Engineers(WITH DIPLOMA IN CONCERNED DISCIPLINE))"] = ["AER-AERONAUTICAL ENGINEERING", "AGR-AGRICULTURAL ENGINEERING","ASE-AEROSPACE ENGINEERING","AUT-AUTOMOBILE ENGINEERING","BIT-BIO-TECHNOLOGY / INDUSTRIAL BIO-TECHNOLOGY","CBO-CHEMICAL(BIO)/BIO-CHEMICAL ENGINEERING","CEE-CIVIL AND ENVIRONMENT ","CHE-CHEMICAL ENGINEERING / TECHNOLOGY","CIT-COMPUTER SCIENCE AND INFORMATION TECHNOLOGY","CON-CONSTRUCTION ENGINEERING","CPT-CHEMICAL(PETRO-CHEMICAL ENGINEERING)","CSE-COMPUTER SCIENCE AND ENGINEERING / COMPUTER ENGINEERING","CSS-COMPUTER SCIENCE AND SYSTEM ENGINEERING","CVL-CIVIL ENGINEERING","DRT-DAILY TECHNOLOGY/DAIRY SCIENCE","EAC-ELECTRONICS AND CONTROL ENGINEERING","ECE-ELECTRONICS AND COMMUNICATION ENGINEERING","ECP-ELECTRONICS AND COMPUTER ENGINEERING","ECT-ELECTRONICS ENGINEERING","EEE-ELECTRICAL AND ELECTRONICS ENGINEERING","EIE-ELECTRONICS AND INSTRUMENTATION ENGINEERING","ELE-ELECTRICAL ENGINEERING","ETC-ELECTRONICS AND TELECOMMUNICATION ENGINEERING","ETM-ELECTRONICS AND TELEMATICS ENGINEERING","FDT-FOOD TECHMNOLOGY / FOOD PROCESSINFG TECHNMOLOGY","FEN-FOOD ENGINEERING","FPE-FOOD PROCESSING ENGINEERING","FPT-FOOD PROCESSING AND PRESERVATION TECHNOLOGY","FSC-FOOD SCIENCE/FOOD SCIENCE AND TECHNOLOGY","IAC-INSTRUMATION AND CONTROL ENGINEERING","INE-INDUSTRIAL ENGINEERING","INF-INFORMATION TECHNOLOGY","INS-INTREUMENTATION ENGINEERING/TECHNOLOGY","IPE-INDUSTRIAL AND PRODUCTION ENGINEERING","MEC-MECHANICAL ENGINEERINMG","MET-METALLURGY ENGINEERING","MIN-MINING ENGINEERING","MME-MINING MACHINERY ENGINEERING","MMS-MECHANICAL MECHATRONICS ENGINEERING","MMT-METTALLUGRY AND MATERIAL TECHNOLOGY","MPE-MECHANICAL PRODUCTION ENGINEERING","MRN-MECHANICAL MARINE ENGINEERING","MTS-MATERIAL SCIENCE","PDE-PRODUCTION ENGINEERING","PET-PETROLEUM ENGINEERING / PETRO-CHEMICAL ENGINEERING","PLN-PLANNING","PPT-PETROLEUM TECHNOLOGY"]; 
 countryLists["AMMIE(Associate Member of the Institution of Engineers(WITH NON DIPLOMA AND OTHER DISCIPLINE))"] = ["AER-AERONAUTICAL ENGINEERING", "AGR-AGRICULTURAL ENGINEERING","ASE-AEROSPACE ENGINEERING","AUT-AUTOMOBILE ENGINEERING","BIT-BIO-TECHNOLOGY / INDUSTRIAL BIO-TECHNOLOGY","CBO-CHEMICAL(BIO)/BIO-CHEMICAL ENGINEERING","CEE-CIVIL AND ENVIRONMENT ","CHE-CHEMICAL ENGINEERING / TECHNOLOGY","CIT-COMPUTER SCIENCE AND INFORMATION TECHNOLOGY","CON-CONSTRUCTION ENGINEERING","CPT-CHEMICAL(PETRO-CHEMICAL ENGINEERING)","CSE-COMPUTER SCIENCE AND ENGINEERING / COMPUTER ENGINEERING","CSS-COMPUTER SCIENCE AND SYSTEM ENGINEERING","CVL-CIVIL ENGINEERING","DRT-DAILY TECHNOLOGY/DAIRY SCIENCE","EAC-ELECTRONICS AND CONTROL ENGINEERING","ECE-ELECTRONICS AND COMMUNICATION ENGINEERING","ECP-ELECTRONICS AND COMPUTER ENGINEERING","ECT-ELECTRONICS ENGINEERING","EEE-ELECTRICAL AND ELECTRONICS ENGINEERING","EIE-ELECTRONICS AND INSTRUMENTATION ENGINEERING","ELE-ELECTRICAL ENGINEERING","ETC-ELECTRONICS AND TELECOMMUNICATION ENGINEERING","ETM-ELECTRONICS AND TELEMATICS ENGINEERING","FDT-FOOD TECHMNOLOGY / FOOD PROCESSINFG TECHNMOLOGY","FEN-FOOD ENGINEERING","FPE-FOOD PROCESSING ENGINEERING","FPT-FOOD PROCESSING AND PRESERVATION TECHNOLOGY","FSC-FOOD SCIENCE/FOOD SCIENCE AND TECHNOLOGY","IAC-INSTRUMATION AND CONTROL ENGINEERING","INE-INDUSTRIAL ENGINEERING","INF-INFORMATION TECHNOLOGY","INS-INTREUMENTATION ENGINEERING/TECHNOLOGY","IPE-INDUSTRIAL AND PRODUCTION ENGINEERING","MEC-MECHANICAL ENGINEERINMG","MET-METALLURGY ENGINEERING","MIN-MINING ENGINEERING","MME-MINING MACHINERY ENGINEERING","MMS-MECHANICAL MECHATRONICS ENGINEERING","MMT-METTALLUGRY AND MATERIAL TECHNOLOGY","MPE-MECHANICAL PRODUCTION ENGINEERING","MRN-MECHANICAL MARINE ENGINEERING","MTS-MATERIAL SCIENCE","PDE-PRODUCTION ENGINEERING","PET-PETROLEUM ENGINEERING / PETRO-CHEMICAL ENGINEERING","PLN-PLANNING","PPT-PETROLEUM TECHNOLOGY"]; 
 countryLists["BArch(BACHELOR OF ARCHITECTURE)"]= ["ARC-ARCHITECTURE"];
 countryLists["BPlanning(BACHELOR OF PLANNING)"]= ["PLN-PLANNING"]; 
 countryLists["MSc(MASTER OF SCIENCE)"]= ["ASS-AUTMOSPHERIC SCIENCE","BCH-BIOCHEMISTRY","BOT-BOTANY","CHM-CHEMISTRY","FOT-FOOD TECHNOLOGY / FOOD SCIENCE AND TECHNOLOGY","FTM-FOOD TECHNOLOGY AND MANAGEMENT","MAT-MATHEMATICS/APP MATHEMATICS","MCB-MICROBIOLOGY","PHY-PHYSICS/APPLIED PHYSICS","ZOO-ZOOLOGY"];
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
                        <div class="panel-heading"><h4>APPLICATION FORM</h4></div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" enctype="multipart/form-data" action="2.php" method="post">
                                <h3>Candidate details</h3><hr>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Candidate Name</label><br>
                                        <?php echo $_SESSION['name']; ?>
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Father's Name</label><br>
                                        <?php echo $_SESSION['fname']; ?>
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Mother's Name</label><br>
                                        <?php echo $_SESSION['mname']; ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Date of Birth<font color="red">(dd/mm/yyyy)</font></label><br>
                                        <?php echo $_SESSION['dob']; ?>
                                        
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Gender</label><br>
                                        <?php echo $_SESSION['gender']; ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Aadhaar Card Number</label><br>
                                        <?php echo $_SESSION['aadhar']; ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Birth State</label><br>
                                        <?php echo $_SESSION['birthstate']; ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Ration card Number :</label><br>
                                        <?php echo $_SESSION['rationcard']; ?>
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
                                        National Cadet Cops(ncc): <?php echo $_SESSION['spe1']; ?> <br>
                                        Children of Armed Personnel(CAP): <?php echo $_SESSION['spe2']; ?><br>
                                        Sports and Games: <?php echo $_SESSION['spe3']; ?><br>
                                        Angio-Indian: <?php echo $_SESSION['spe4']; ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <P><font color="red">PH(Physically Handicapped)</font></P>
                                        VH (Visually Handicapped): <?php echo $_SESSION['ph1']; ?><br>
                                        HI (Hearing Impaired): <?php echo $_SESSION['ph2']; ?><br>
                                        OH (Orthopedically Handicapped): <?php echo $_SESSION['ph3']; ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Local Area</label><br>
                                        <?php if($_SESSION['localarea']=='yes') {
                                            echo 'OU';
                                        }else{
                                        echo 'NO';
                                        } ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Minority /Non Minority</label><br>
                                        <?php if($_SESSION['minority']=="Minority") {
                                            echo 'YES';
                                        } else {
                                            echo 'N.A';
                                        } ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-8">
                                        <label  class="control-label">Annual Income of Parents(Rs.)</label><br>
                                        <?php
                                        echo $_SESSION['income'];
                                        ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Income Certificate Number :</label><br>
                                        <?php echo $_SESSION['incomec']; ?>
                                    </div>
                                </div>
                                <div>
                                    <label  class="control-label">Candidate Bank Details</label>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Name as in Bank Account:</label><br>
                                        <?php echo $_SESSION['name_bank']; ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Account Number:</label><br>
                                        <?php echo $_SESSION['accno']; ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">IFSC Code:</label><br>
                                        <?php 
                                        echo $_SESSION['ifsc']; ?>
                                        
                                    </div>
                                </div>
                                <br>
                                <br>
                                <h3>2.Address details</h3><hr>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">House No (or) C/O:</label><br>
                                        <?php echo $_SESSION['hno']; ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Village /Street /Locality:</label><br>
                                        <?php echo $_SESSION['village']; ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Mandal / Twon / City:</label><br>
                                        <?php echo $_SESSION['mandal']; ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">District:</label><br>
                                        <?php echo $_SESSION['district']; ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">State:</label><br>
                                        <?php echo $_SESSION['state']; ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Pin Code:</label><br>
                                        <?php echo $_SESSION['pincode']; ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Mobile:</label><br>
                                        <?php echo $_SESSION['mobile']; ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Alternative Mobile Number:</label><br>
                                        <?php echo $_SESSION['amobile']; ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Telephone Number(Landline):</label><br>
                                        <?php echo $_SESSION['telephone']; ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Email:</label><br>
                                        <?php echo $_SESSION['email']; ?>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <h3>Qualifying Examination</h3><hr>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-6">
                                        <label  class="control-label">Qualifing Degree</label><br>
                                        <?php echo $_SESSION['degree']; ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <label  class="control-label">Specialization Qualifing Degree</label><br>
                                        <?php echo $_SESSION['speciald']; ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-6">
                                        <label  class="control-label">Hallticket number of Qualifying Examination</label><br>
                                        <?php echo $_SESSION['hallticketd']; ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <label  class="control-label">Year of App./Passing the Qualifying Exam<font color="red">*</font>:</label><br>
                                        <?php echo $_SESSION['yearofpass']; ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-12">
                                        <label  class="control-label">Medium of Instruction at Qualifying Exam</label><br>
                                        <?php
                                        echo $_SESSION['medium'];?>
                                    </div>
                                </div>
                                <div>
                                    <label  class="control-label">SSC or Equivalent(10th Class)</label><br>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-3">
                                        <br>
                                        <?php 
                                        echo $_SESSION['sscarea'];?>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">SSC Hall Ticket Number</label><br>
                                        <?php echo $_SESSION['sschall']; ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">Month of Passing:</label><br>
                                        <?php echo $_SESSION['sscmonth']; ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">Year of Passing:</label><br>
                                        <?php echo $_SESSION['sscyear']; ?>
                                    </div>
                                </div>
                                <div>
                                    <label  class="control-label">Intermediate or Equivalent(10+2)</label><br>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-3">
                                        <br>
                                        <?php echo $_SESSION['interarea']; ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">Intermediate Hall Ticket Number</label><br>
                                        <?php echo $_SESSION['interhall']; ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">Month of Passing:</label><br>
                                        <?php echo $_SESSION['intermonth']; ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">Year of Passing:</label><br>
                                        <?php echo $_SESSION['interyear']; ?>
                                    </div>
                                </div>
                                <div>
                                    <label  class="control-label">Place of Study:</label><br>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-3">
                                       <label  class="control-label">Class-10</label><br>
                                       <?php echo $_SESSION['sscplace']; ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">Intermediate or Equivalent(10+2)</label><br>
                                        <?php echo $_SESSION['interplace']; ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">Degree</label><br>
                                        <?php echo $_SESSION['degreeplace']; ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">MSC/MCA/Others:</label><br>
                                        <?php echo $_SESSION['mscmcaplace']; ?>
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
                                        <label  class="control-label">Preference 1</label><br>
                                        <?php echo $_SESSION['center1']; ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Preference 2</label><br>
                                        <?php echo $_SESSION['center2']; ?>
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
                                        <?php $img=$_SESSION['photo'];  ?>
                                        <img  src="<?php echo "$img"; ?>" width="100" height="150"/>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <?php $sig=$_SESSION['signature']; ?>
                                        <img src="<?php echo $sig; ?>" width="150" height="50"/>
                                        
                                        
                                    </div>
                                </div>
                                <div class="form-group" style="padding-left: 10px; padding-right: 10px;">
                                    <div class="col-xs-12" style="border:1px solid red;">  I have carefully gone through the instruction Booklet and I am conversant with the instruction. I shall abide by the eligibility conditions and other regulations to be satisfied for appering at the entrance test and admission into any course prescribed. Further, I assure that,I will not involve in any malpractice or illegal activities in the entrance test. In case, I have furnished any false information or involved in any malpractice or illegal activities, I am liable for punishment as per the existing law. I am responsible correctness of the above details filled by me and the CONVENER is not responsible in any way. Mere appering for the entrance examination does not confer any right for me to take admission.</div>
                                    <br>
                                </div>    
                                <div class="col-xs-12"><font color="red">MODIFY : </font>Enables the candidate to re-inspect the entire application to correct any errors or mistakes in his/her application.</div> 
                                <div class="col-xs-12"><font color="red">Confrim/Freeze :</font>To finally submit the application. The data in the application is frozen and no more editing is allowed.</div>
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-10">
                                        <button type="submit" name="action" value="modify" >MODIFY</button>
                                        <button type="submit" name="action" value="confrim" >Confrim/Freeze</button> 
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
      </main>
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



