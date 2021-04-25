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
    <style>
    .co:hover {
       background-color: buttonface; 
    }
</style>
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
 </script>
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
                        <div class="panel-heading"><h4>FEE PAYMENT FOR TS PGECET - 2018</h4></div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Qualifying Exam Hall Ticket Number<font color="red">*</font>:</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-5">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Qualifying Exam Hall Ticket Number" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                    <label  class="control-label">Candidate's Name <font color="red">*</font>:</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-5">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Candidate's Name " required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                    <label  class="control-label">Date of Birth<font color="red">* (as per SSC or Equivalent)</font>:</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-5 input-append date">
                                        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                    <label  class="control-label">Mobile Number<font color="red">*</font>:</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-5">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Mobile Number" pattern="[6789][0-9]{9}" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                    <label  class="control-label">Mobile Number Mentioned Above Is My<font color="red">*</font>:</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-5">
                                        <input type="radio" name="mobileno" value="self" checked> Self
                                        <input type="radio" name="mobileno" value="father"> Father
                                        <input type="radio" name="mobileno" value="mother"> Mother
                                        <input type="radio" name="mobileno" value="relative"> Relative 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                    <label  class="control-label">Alternate Mobile Number:</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-5">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Alternate Mobile Number " pattern="[6789][0-9]{9}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                    <label  class="control-label">E-Mail ID<font color="red">*</font>:</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-5">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Enter E-Mail ID" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                    <label  class="control-label">Category<font color="red">*</font>:</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <input type="radio" name="caste" value="oc" checked> OC  
                                        <input type="radio" name="caste" value="bc-a"> BC_A  
                                        <input type="radio" name="caste" value="bc-b"> BC_B  
                                        <input type="radio" name="caste" value="bc-c"> BC_C  
                                        <input type="radio" name="caste" value="bc-d"> BC_D  
                                        <input type="radio" name="caste" value="bc-e"> BC_E  
                                        <input type="radio" name="caste" value="sc"> SC  
                                        <input type="radio" name="caste" value="st"> ST
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                    <label  class="control-label">Qualifying Degree<font color="red">*</font>:</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-5">
                                        <select id="continent" onchange="countryChange(this);" class="form-control" name="degree" required>
                                            <option value="">--select degree--</option>
                                            <option value="BE / BTech (Regular)">BE / BTech (Regular)</option>
                                            <option value="AMIE(Associate Member of the Institution of Engineers(WITH DIPLOMA IN CONCERNED DISCIPLINE))">AMIE(Associate Member of the Institution of Engineers)</option>
                                            <option value="AMMIE(Associate Member of the Institution of Engineers(WITH NON DIPLOMA AND OTHER DISCIPLINE))">AMMIE(Associate Member of the Institution of Engineers(WITH NON DIPLOMA AND OTHER DISCIPLINE))</option>
                                            <option value="BArch(BACHELOR OF ARCHITECTURE)">BArch(BACHELOR OF ARCHITECTURE)</option>
                                            <option value="BPlanning(BACHELOR OF PLANNING)">BPlanning(BACHELOR OF PLANNING)</option>
                                            <option value="MSc(MASTER OF SCIENCE)">MSc(MASTER OF SCIENCE)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                    <label  class="control-label">Specialization in Qualifying Degree<font color="red">*</font>:</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-5">
                                        <select id="country" class="form-control" name="specialization" required>
                                            <option value="">Select a specialization</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                    <label  class="control-label">Payment Type :</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-5">
                                        <input type="radio" name="payment" value="self" checked> Net Banking (SBI/HDFC)
                                        <input type="radio" name="payment" value="father"> Net Banking (OTHERS)
                                        <input type="radio" name="payment" value="mother"> Credit Card
                                        <input type="radio" name="payment" value="relative"> Debit Card
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-10">
                                       <button type="submit" class="btn btn-primary">Proceed to Pay</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer"><font color="red">NOTE: In case your account is debited and the website gets disconnected before payment receipt generation, kindly compulsory check your Payment Status using Payment Status option by providing your details. If you get message "Payment Details Not Found" , candidate is requested to go for a fresh payment and the amount for the failure transaction will be refunded to their debited bank account in 5 working days.</font></div>
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
