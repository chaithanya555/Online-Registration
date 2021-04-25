
<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
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
//]]>
function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    }
    </script>
    <script type="text/javascript">
     function configureDropDownLists(ddl1,ddl2) {
    var bca = ['Agnikulakshatriya','Bahurupi','Balasanthu','Banda','Bandara','Bedar','Bestha','Bhajantri','Boya','Budabukkala','Chakali','Chopemari','Chunduvallu','Dasari','Devaravandlu','Dommara','Gangaputra','Gangavar','Gangiredlavaru','Goondla','Gudala','Jalari','Jangam','Jogi','Joshinandiwalas','Kaikadi','Kalinga','Kanjara-bhatta','Katipapala','Kirataka','Kopmare','Korcha','Kunapuli','Mahendra','Mandula','Mangala','Mangali','Medari','Mehtar','Modibanda','Mondipatta','Mondivaru','Mutyalammavandlu','Nakkala','Nayi-brahmin','Nettikotala','Neyyala','Nirshikari','Nishadi','Nokkar','Odde','Oddilu','Palli','Pallikapu','Pallireddi','Pambala','Pamula','Pardhi','Pariki Muggul','Pattapu','Peddaboya','Peddammavandlu','Pitchiguntla','Rajaka','Reddika','Talayari','Vaddelu','Vaddi','Valmiki','Vamsharaj','Vannar','Vannekapu','Vannereddi','Vanyakulakshatriya','Veerabhadreeya','Veeramushti','Yata','Yellammavandlu','Yellapi'];
    var bcb = ['Achukatlavandlu','Aryakshatriya','Ausula','Balija','Chitrakara','Chittari','Devanga','Devathilakula','Dudekula','Ediga','Gamalla','Gandla','Giniyar','Goud','Goundla','Gowda','Jandra','Kaikala','Kaikolan','Kalalee','Kammari','Kamsali','Kanchari','Karikalabhakthulu','Karne Bhakthulu','Khatri','Kulala','Kummara','Kurni','Kuruba','Kuruma','Laddaf','Nagavaddilu','Nakhas','Neelakanthi','Noorbasha','Nossi','Padmasali','Patkar','Pattusali','Perika','Perika Balija','Pinjari','Puragiri Kshatriya','Sali','Salivahana','Salivan','Sangunther','Segidi','Senapathulu','Sengundam','Settibalija','Silpis','Srisayana','Swakulasali','Telikula','Thogata','Thogata Sali','Thogata Veera Kshatriya','Thogati','Vadla','Vadra','Vadrangi','Viswabrahmin','Viswakarma'];
    var bcc = ['SC Converts to Christian'];
    var bcd = ['Agaru','Arekatika','Atagara','Bhatraju','Bhavasara Kshatriya','Bukka','Chattada Sri Vaishnava','Chippolu','Dasari','Ganika','Gavara','Godaba','Golla','Hatkar','Jakkala','Jingar','Kachi','Kalavanthula','Kandra','Katika','Koppulavelama','Koshti','Krishnabalija','Mali','Mathura','Mera','Mudiraj','Munnurukapu','Mutrasi','Nagavamsa','Nagavamsam','Nelli','Passi','Poosala','Rangrez','Sadhuchetty','Sagara','Satani','Suryabalija','Tammali','Tenugollu','Turupukapus','Uppara','Vanjara','Vanjari','Yadava'];
    var bce = ['Achchukattalavandlu','Achchupanivallu','Achchukattuvaru','Achukatlavandlu','Attar Saibulu','Attarollu','Bonthala','Borewale','Chakalas','Chakketakare','Chakkitakanevale','','TurkaChakali','TurkaChakla','TurkaSakala','Yaba'];
    var sc =['Adi Andhra','Adi Dravida','Anamuk','Aray Mala','Arundharitya','Arwa Mala','Bariki','Bavuri','Beda Jangam','Bindla','Budga Jangam','Byagara','Byagari','Chachandi','Chachati','Chalavadi','Chamar','Chamar-Ravidas','Chamar-Rohidas','Chambhar','Chandala','Chindollu','Dakkal','Dandasi','Dhor','Dokkalwar','Dom','Dombara','Ellamalwar','Ghasi','Godagali','Godagula','Godari','Gosangi','Haddi','Holeya','Holeya Dasari','Jaggali','Jambuwulu','Kolupulvandlu','Madari Kuruva','Madasi Kuruva','Madiga','Madiga Dasu','Mahar','Mahter',';Mala','Mala Ayawaru','Mala Dasari','Mala Dasu','Mala Hannai','Mala Jangam','Mala Masti','Mala Sale','Mala Sanyasi','Mang','Mang Gardodi','Manne','Mashteen','Mashti','Matangi','Mitha Ayyalvar','Mochi','Moti','Muchi','Mundala','Netkani','Paidi','Paky','Pambada','Pambala','Pamidi','Panchama','Pano','Pariah','Relli','Relli','Samagara','Samban','Sapru','Sindhollu','Thoti','Yatala','Yellammalwandlu'];
    var st = ['Andh/Sadhu Andh','Bagata','Banjara','Bartika','Bentho Oriya','Bhil','Bhinekoya','Boda gadaba','Chenchu','Desaya Kondhs','Dhulia','Dolikoya','Dongria','Gadabas','Gond','Goudu','Gutob Gadaba','Guttakoya','Hill Reddis','Holva','Jatapus','kallayigadaba','Kammara','Kammarakoya','Kapugadaba','Kapusavara'];
    switch (ddl1.value) {
        case 'BC-A':
            ddl2.options.length = 0;
            for (i = 0; i < bca.length; i++) {
                createOption(ddl2, bca[i], bca[i]);
            }
            break;
    case 'BC-B':
            ddl2.options.length = 0; 
        for (i = 0; i < bcb.length; i++) {
            createOption(ddl2, bcb[i], bcb[i]);
            }
            break;
        case 'BC-C':
            ddl2.options.length = 0;
            for (i = 0; i < bcc.length; i++) {
                createOption(ddl2, bcc[i], bcc[i]);
            }
            break;
        case 'BC-D':
            ddl2.options.length = 0;
            for (i = 0; i < bcd.length; i++) {
                createOption(ddl2, bcd[i], bcd[i]);
            }
            break;
        case 'BC-E':
            ddl2.options.length = 0;
            for (i = 0; i < bce.length; i++) {
                createOption(ddl2, bce[i], bce[i]);
            }
            break;
        case 'SC':
            ddl2.options.length = 0;
            for (i = 0; i < sc.length; i++) {
                createOption(ddl2, sc[i], sc[i]);
            }
            break;
        case 'ST':
            ddl2.options.length = 0;
            for (i = 0; i < st.length; i++) {
                createOption(ddl2, st[i], st[i]);
            }
            break;    
            default:
                ddl2.options.length = 0;
            break;
    }

}

    function createOption(ddl, text, value) {
        var opt = document.createElement('option');
        opt.value = value;
        opt.text = text;
        ddl.options.add(opt);
    }
</script>
    </head>
    <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
    <div>
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
                                        <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required/>
                                        <P><font color="red">(As per SSC or Equivalent Records)</font></P>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Father's Name<font color="red">*</font>:</label><br>
                                        <input type="text" class="form-control" name="fname" placeholder="Enter Father's Name" required/>
                                        <P><font color="red">(As per SSC or Equivalent Records)</font></P>
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Mother's Name<font color="red">*</font>:</label><br>
                                        <input type="text" class="form-control" name="mname" placeholder="Enter Mother's Name" required />
                                        <P><font color="red">(As per SSC or Equivalent Records)</font></P>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Date of Birth<font color="red">* (dd/mm/yyyy)</font>:</label><br>
                                        <input class="form-control" maxlength="10" id="date" name="dob" placeholder="MM/DD/YYYY" type="text"/>
                                        
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Gender<font color="red">*</font></label><br>
                                        <input type="radio" name="gender" value="MALE" checked> Male
                                        <input type="radio" name="gender" value="FEMALE"> Female
                                        <input type="radio" name="gender" value="TRANSGENDER"> Transgender
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Aadhaar Card Number<font color="red">*</font>:</label><br>
                                        <input type="text" class="form-control" maxlength="12" name="aadhar" placeholder="Enter Aadhaar card number" onkeypress="javascript:return isNumber(event)"  pattern="[0-9]{12}" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Birth State<font color="red">*</font>:</label><br>
                                        <select class="form-control" name="bstate">
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
                                        <input type="text" class="form-control" name="rcard" placeholder="Enter Ration card Number" />
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
                                        <input type="checkbox" name="special1" value="National Cadet Cops(ncc)">National Cadet Cops(ncc) <br>
                                        <input type="checkbox" name="special2" value="Children of Armed Personnel(CAP)" >Children of Armed Personnel(CAP)<br>
                                        <input type="checkbox" name="special3" value="Sports and Games">Sports and Games<br>
                                        <input type="checkbox" name="special4" value="Angio-Indian">Angio-Indian
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <P><font color="red">PH(Physically Handicapped)</font></P>
                                        <input type="checkbox" name="ph1" value="VH (Visually Handicapped)">VH (Visually Handicapped)<br>
                                        <input type="checkbox" name="ph2" value="HI (Hearing Impaired)">HI (Hearing Impaired)<br>
                                        <input type="checkbox" name="ph3" value="OH (Orthopedically Handicapped)">OH (Orthopedically Handicapped)
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Are you Belong to Local Area?</label><br>
                                        <input type="radio" name="area" value="yes" checked> Yes
                                        <input type="radio" name="area" value="no"> No
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Minority /Non Minority</label><br>
                                        <input type="radio" name="minority" value="Non Minority" checked> Non Minority
                                        <input type="radio" name="minority" value="Minority"> Minority
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-8">
                                        <label  class="control-label">Annual Income of Parents(Rs.)<font color="red">*</font></label><br>
                                        <input type="radio" name="income" value="Below one Lakh" checked> Below one Lakh
                                        <input type="radio" name="income" value="Above one Lakh below two Lakhs"> Above one Lakh below two Lakhs
                                        <input type="radio" name="income" value="More than two Lakhs"> More than two Lakhs
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Income Certificate Number :</label><br>
                                        <input type="text" class="form-control" name="incomec" placeholder="Enter Income Certificate Number" />
                                    </div>
                                </div>
                                <div>
                                    <label  class="control-label">Candidate Bank Details</label>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Name as in Bank Account:</label><br>
                                        <input type="text" class="form-control" name="namebank" placeholder="Enter Name as in Bank Account" />
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Account Number:</label><br>
                                        <input type="text" class="form-control" name="accno" onkeypress="javascript:return isNumber(event)" placeholder="Enter Account Number" />
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">IFSC Code:</label><br>
                                        <input type="text" class="form-control" name="ifsc" placeholder="Enter IFSC Code" />
                                    </div>
                                </div>
                                <br>
                                <br>
                                <h3>2.Address details</h3><hr>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">House No (or) C/O<font color="red">*</font>:</label><br>
                                        <input type="text" class="form-control" name="hno" placeholder="Enter House No (or) C/O" required />
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Village /Street /Locality<font color="red">*</font>:</label><br>
                                        <input type="text" class="form-control" name="village" placeholder="Enter Village /Street /Locality" required />
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Mandal / Twon / City<font color="red">*</font>:</label><br>
                                        <input type="text" class="form-control" name="mandal" placeholder="Enter Mandal / Twon / City" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">District<font color="red">*</font>:</label><br>
                                        <input type="text" class="form-control" name="district" placeholder="Enter District" required />
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">State<font color="red">*</font>:</label><br>
                                        <input type="text" class="form-control" name="astate" placeholder="Enter State" required />
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Pin Code<font color="red">*</font>:</label><br>
                                        <input type="text" class="form-control" maxlength="6" name="pincode" placeholder="Enter Pin Code" onkeypress="javascript:return isNumber(event)" pattern="[0-9]{6}" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Mobile<font color="red">*</font>:</label><br>
                                        <input type="text" class="form-control" maxlength="10" name="mobile" placeholder="Enter Mobile No" onkeypress="javascript:return isNumber(event)" pattern="[6789][0-9]{9}" required/>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Alternative Mobile Number:</label><br>
                                        <input type="text" class="form-control" name="amobile" placeholder="Enter Alternative Mobile Number" onkeypress="javascript:return isNumber(event)" pattern="[6789][0-9]{9}" />
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Telephone Number(Landline):</label><br>
                                        <input type="text" class="form-control" name="telephone" placeholder="Enter Telephone Number(Landline)" onkeypress="javascript:return isNumber(event)" maxlength="12" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Email<font color="red">*</font>:</label><br>
                                        <input type="email" class="form-control" name="email" placeholder="Enter Email Id" required/>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <h3>Qualifying Examination</h3><hr>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-6">
                                        <label  class="control-label">Qualifying Degree<font color="red">*</font>:</label><br>
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
                                    <div class="col-xs-12 col-sm-6">
                                        <label  class="control-label">Specialization Qualifing Degree<font color="red">*</font>:</label><br>
                                        <select id="country" class="form-control" name="specialization" required>
                                            <option value="">Select a specialization</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-6">
                                        <label  class="control-label">Hallticket number of Qualifying Examination<font color="red">*</font>:</label><br>
                                        <input type="text" class="form-control" name="qhall" placeholder="Enter Hallticket number of Qualifying Examination" onkeypress="javascript:return isNumber(event)" required />
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <label  class="control-label">Year of App./Passing the Qualifying Exam<font color="red">*</font>:</label><br>
                                        <select class="form-control" name="qyear">
                                            <option value="">--select--</option>
                                            <?php
                                            for ($i=1940; $i<=2018; $i++)
                                            {
                                            ?>
                                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-12">
                                        <label  class="control-label">Medium of Instructionat Qualifying Exam<font color="red">*</font>:</label><br>
                                        <input type="radio" name="medium" value="English" checked> English
                                        <input type="radio" name="medium" value="Telugu"> Telugu
                                        <input type="radio" name="medium" value="Urdu"> Urdu
                                        <input type="radio" name="medium" value="Others"> Others
                                    </div>
                                </div>
                                <div>
                                    <label  class="control-label">SSC or Equivalent(10th Class)<font color="red">*</font>:</label><br>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-3">
                                        <br>
                                        <input type="radio" name="placessc" value="Urban" checked> Urban
                                        <input type="radio" name="placessc" value="Rural"> Rural
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">SSC Hall Ticket Number<font color="red">*</font>:</label><br>
                                        <input type="text" class="form-control" name="sschall" placeholder="Enter SSC Hall Ticket Number" onkeypress="javascript:return isNumber(event)" required/>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">Month of Passing:</label><br>
                                        <select class="form-control" name="sscmonth" required>
                                            <option value="">--select--</option>
                                            <option value="April">April</option>
                                            <option value="June">June</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">Year of Passing:</label><br>
                                        <select class="form-control" name="sscyear" required>
                                            <option value="">--select--</option>
                                            <?php
                                            for ($i=1940; $i<=2018; $i++)
                                            {
                                            ?>
                                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
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
                                        <input type="radio" name="placei" value="Urban" checked> Urban
                                        <input type="radio" name="placei" value="Rural"> Rural
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">Intermediate Hall Ticket Number<font color="red">*</font>:</label><br>
                                        <input type="text" class="form-control" name="ihall" placeholder="Enter Intermediate Hall Ticket Number" onkeypress="javascript:return isNumber(event)" required />
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">Month of Passing:</label><br>
                                        <select class="form-control" name="imonth" required>
                                            <option value="">--select--</option>
                                            <option value="March">March</option>
                                            <option value="May">May</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">Year of Passing:</label><br>
                                        <select class="form-control" name="iyear" required>
                                            <option value="">--select--</option>
                                            <?php
                                            for ($i=1940; $i<=2018; $i++)
                                            {
                                            ?>
                                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
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
                                           <option value="Adilabad">Adilabad</option> 
                                           <option value="Bhadradri">Bhadradri</option> 
                                           <option value="Hyderabad">Hyderabad </option>
                                           <option value="Jagtial">Jagtial</option> 
                                           <option value="Jangaon">Jangaon</option> 
                                           <option value="Jayashankar">Jayashankar</option> 
                                           <option value="Jogulamba(Gadwal)">Jogulamba(Gadwal)</option> 
                                           <option value="Kamareddy">Kamareddy</option> 
                                           <option value="Karimnagar">Karimnagar</option> 
                                           <option value="Khammam">Khammam</option> 
                                           <option value="Mahabubabad">Mahabubabad</option> 
                                           <option value="Mahbubnagar">Mahbubnagar</option> 
                                           <option value="Mancherial">Mancherial</option> 
                                           <option value="Medak">Medak</option> 
                                           <option value="Medchal–Malkajgiri">Medchal–Malkajgiri</option> 
                                           <option value="Nagarkurnool">Nagarkurnool</option> 
                                           <option value="Nalgonda">Nalgonda</option> 
                                           <option value="Nirmal">Nirmal</option> 
                                           <option value="Nizamabad">Nizamabad</option> 
                                           <option value="Peddapalli">Peddapalli</option> 
                                           <option value="Rajanna">Rajanna</option> 
                                           <option value="Sircilla">Sircilla</option> 
                                           <option value="Ranga Reddy">Ranga Reddy</option> 
                                           <option value="Sangareddy">Sangareddy</option> 
                                           <option value="Siddipet">Siddipet</option> 
                                           <option value="Suryapet">Suryapet</option> 
                                           <option value="Vikarabad">Vikarabad</option> 
                                           <option value="Wanaparthy">Wanaparthy</option> 
                                           <option value="Warangal (rural)">Warangal (rural)</option> 
                                           <option value="Warangal (urban)">Warangal (urban)</option> 
                                           <option value="Yadadri">Yadadri</option>
                                       </select>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">Intermediate or Equivalent(10+2)<font color="red">*</font>:</label><br>
                                        <select class="form-control" name="iplace" required>
                                            <option value="">--select--</option>
                                           <option value="Adilabad">Adilabad</option> 
                                           <option value="Bhadradri">Bhadradri</option> 
                                           <option value="Hyderabad">Hyderabad </option>
                                           <option value="Jagtial">Jagtial</option> 
                                           <option value="Jangaon">Jangaon</option> 
                                           <option value="Jayashankar">Jayashankar</option> 
                                           <option value="Jogulamba(Gadwal)">Jogulamba(Gadwal)</option> 
                                           <option value="Kamareddy">Kamareddy</option> 
                                           <option value="Karimnagar">Karimnagar</option> 
                                           <option value="Khammam">Khammam</option> 
                                           <option value="Mahabubabad">Mahabubabad</option> 
                                           <option value="Mahbubnagar">Mahbubnagar</option> 
                                           <option value="Mancherial">Mancherial</option> 
                                           <option value="Medak">Medak</option> 
                                           <option value="Medchal–Malkajgiri">Medchal–Malkajgiri</option> 
                                           <option value="Nagarkurnool">Nagarkurnool</option> 
                                           <option value="Nalgonda">Nalgonda</option> 
                                           <option value="Nirmal">Nirmal</option> 
                                           <option value="Nizamabad">Nizamabad</option> 
                                           <option value="Peddapalli">Peddapalli</option> 
                                           <option value="Rajanna">Rajanna</option> 
                                           <option value="Sircilla">Sircilla</option> 
                                           <option value="Ranga Reddy">Ranga Reddy</option> 
                                           <option value="Sangareddy">Sangareddy</option> 
                                           <option value="Siddipet">Siddipet</option> 
                                           <option value="Suryapet">Suryapet</option> 
                                           <option value="Vikarabad">Vikarabad</option> 
                                           <option value="Wanaparthy">Wanaparthy</option> 
                                           <option value="Warangal (rural)">Warangal (rural)</option> 
                                           <option value="Warangal (urban)">Warangal (urban)</option> 
                                           <option value="Yadadri">Yadadri</option>
                                       </select>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">Degree<font color="red">*</font>:</label><br>
                                        <select class="form-control" name="dplace" required>
                                            <option value="">--select--</option>
                                           <option value="Adilabad">Adilabad</option> 
                                           <option value="Bhadradri">Bhadradri</option> 
                                           <option value="Hyderabad">Hyderabad </option>
                                           <option value="Jagtial">Jagtial</option> 
                                           <option value="Jangaon">Jangaon</option> 
                                           <option value="Jayashankar">Jayashankar</option> 
                                           <option value="Jogulamba(Gadwal)">Jogulamba(Gadwal)</option> 
                                           <option value="Kamareddy">Kamareddy</option> 
                                           <option value="Karimnagar">Karimnagar</option> 
                                           <option value="Khammam">Khammam</option> 
                                           <option value="Mahabubabad">Mahabubabad</option> 
                                           <option value="Mahbubnagar">Mahbubnagar</option> 
                                           <option value="Mancherial">Mancherial</option> 
                                           <option value="Medak">Medak</option> 
                                           <option value="Medchal–Malkajgiri">Medchal–Malkajgiri</option> 
                                           <option value="Nagarkurnool">Nagarkurnool</option> 
                                           <option value="Nalgonda">Nalgonda</option> 
                                           <option value="Nirmal">Nirmal</option> 
                                           <option value="Nizamabad">Nizamabad</option> 
                                           <option value="Peddapalli">Peddapalli</option> 
                                           <option value="Rajanna">Rajanna</option> 
                                           <option value="Sircilla">Sircilla</option> 
                                           <option value="Ranga Reddy">Ranga Reddy</option> 
                                           <option value="Sangareddy">Sangareddy</option> 
                                           <option value="Siddipet">Siddipet</option> 
                                           <option value="Suryapet">Suryapet</option> 
                                           <option value="Vikarabad">Vikarabad</option> 
                                           <option value="Wanaparthy">Wanaparthy</option> 
                                           <option value="Warangal (rural)">Warangal (rural)</option> 
                                           <option value="Warangal (urban)">Warangal (urban)</option> 
                                           <option value="Yadadri">Yadadri</option>
                                       </select>
                                    </div>
                                    <div class="col-xs-12 col-sm-3">
                                        <label  class="control-label">MSC/MCA/Others:</label><br>
                                        <select class="form-control" name="mplace">
                                            <option value="">--select--</option>
                                           <option value="Adilabad">Adilabad</option> 
                                           <option value="Bhadradri">Bhadradri</option> 
                                           <option value="Hyderabad">Hyderabad </option>
                                           <option value="Jagtial">Jagtial</option> 
                                           <option value="Jangaon">Jangaon</option> 
                                           <option value="Jayashankar">Jayashankar</option> 
                                           <option value="Jogulamba(Gadwal)">Jogulamba(Gadwal)</option> 
                                           <option value="Kamareddy">Kamareddy</option> 
                                           <option value="Karimnagar">Karimnagar</option> 
                                           <option value="Khammam">Khammam</option> 
                                           <option value="Mahabubabad">Mahabubabad</option> 
                                           <option value="Mahbubnagar">Mahbubnagar</option> 
                                           <option value="Mancherial">Mancherial</option> 
                                           <option value="Medak">Medak</option> 
                                           <option value="Medchal–Malkajgiri">Medchal–Malkajgiri</option> 
                                           <option value="Nagarkurnool">Nagarkurnool</option> 
                                           <option value="Nalgonda">Nalgonda</option> 
                                           <option value="Nirmal">Nirmal</option> 
                                           <option value="Nizamabad">Nizamabad</option> 
                                           <option value="Peddapalli">Peddapalli</option> 
                                           <option value="Rajanna">Rajanna</option> 
                                           <option value="Sircilla">Sircilla</option> 
                                           <option value="Ranga Reddy">Ranga Reddy</option> 
                                           <option value="Sangareddy">Sangareddy</option> 
                                           <option value="Siddipet">Siddipet</option> 
                                           <option value="Suryapet">Suryapet</option> 
                                           <option value="Vikarabad">Vikarabad</option> 
                                           <option value="Wanaparthy">Wanaparthy</option> 
                                           <option value="Warangal (rural)">Warangal (rural)</option> 
                                           <option value="Warangal (urban)">Warangal (urban)</option> 
                                           <option value="Yadadri">Yadadri</option>
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
                                            <option value="Hyderabad West">Hyderabad West (Kukatpally, Patancheru, Gandipet, Moinabad and surrounding areas)</option>
                                            <option value="Hyderabad North">Hyderabad North (Medchal,Gandimaisamma and surrounding areas)</option>
                                            <option value="Hyderabad Central">Hyderabad Central (Abids, Tarnaka and surrounding areas)</option>
                                            <option value="Hyderabad East">Hyderabad East (Ghatkesar, keesara and surrounding areas)</option>
                                            <option value="Hyderabad South-East">Hyderabad South-East (L.B. Nagar, Hayathnagar, Pedda amberpet, Ibrahimpatnam,Ramoji Film City area and surrounding areas)</option>
                                            <option value="Warangal">Warangal</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Preference 2<font color="red">*</font>:</label><br>
                                        <select class="form-control" name="center2" required>
                                            <option value="">--select--</option>
                                            <option value="Hyderabad West">Hyderabad West (Kukatpally, Patancheru, Gandipet, Moinabad and surrounding areas)</option>
                                            <option value="Hyderabad North">Hyderabad North (Medchal,Gandimaisamma and surrounding areas)</option>
                                            <option value="Hyderabad Central">Hyderabad Central (Abids, Tarnaka and surrounding areas)</option>
                                            <option value="Hyderabad East">Hyderabad East (Ghatkesar, keesara and surrounding areas)</option>
                                            <option value="Hyderabad South-East">Hyderabad South-East (L.B. Nagar, Hayathnagar, Pedda amberpet, Ibrahimpatnam,Ramoji Film City area and surrounding areas)</option>
                                            <option value="Warangal">Warangal</option>
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
                                        <label  class="control-label">Photo <font color="red">(<50kb jpg,jpeg)</font>:</label><br>
                                        <img  src="images/user.png" alt="your image" width="100" height="100"/>
                                        <input type="file" name="fileToUpload" id="fileToUpload" accept="image/x-jpg,image/jpeg" size="50000" required/>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Signature <font color="red">(<30kb jpg,jpeg)</font>:</label><br>
                                        <img  src="images/sign.jpg" alt="your image" width="100" height="60"/>
                                        <input type="file" name="fileToUpload1" id="fileToUpload1" accept="image/x-jpg,image/jpeg" size="30000" required/>
                                        
                                    </div>
                                </div>
                                <div class="form-group" style="padding-left: 10px; padding-right: 10px;">
                                    <div class="col-xs-12" style="border:1px solid red;"><input type="checkbox" required>I have carefully gone through the instruction Booklet and I am conversant with the instruction. I shall abide by the eligibility conditions and other regulations to be satisfied for appering at the entrance test and admission into any course prescribed. Further, I assure that,I will not involve in any malpractice or illegal activities in the entrance test. In case, I have furnished any false information or involved in any malpractice or illegal activities, I am liable for punishment as per the existing law. I am responsible correctness of the above details filled by me and the CONVENER not responsible in any way. Mere appering for the entrance examination does not confer any right for me to take admission.</div>
                                    <br>
                                </div>    
                                <div class="col-xs-12"><font color="red">SAVE : </font>Will record the partially filled details in the Database. The same can be retrieved at your convenience and you can continue to fill the reset and submit the form.</div> 
                                <div class="col-xs-12"><font color="red">PREVIEW/SUBMIT :</font>You will have a chance to preview your application and then finally confirm your application by clicking on Confirm button.</div>
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-10">
                                        <button type="submit" name="action" value="save" class="btn btn-success">SAVE</button>
                                        <button type="submit" name="action" value="preview" class="btn btn-success">PREVIEW/SUBMIT</button> 
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
		var date_input=$('input[name="dob"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'dd/mm/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
  
    </body>
</html>