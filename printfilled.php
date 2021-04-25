<!DOCTYPE html>

<html>
    <head>
        <title>Print Application form</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
        <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/icon.css">
    <link rel="stylesheet" href="css/material.deep_purple-pink.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="styles.css">
    <script src="js/material.min.js"></script>
    <script>
        function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    }
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
                        <div class="panel-heading"><h4>PRINT TS PGECET -2018 APPLICATION FORM</h4></div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" enctype="multipart/form-data" action="4.php" method="post">
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Registration Number<font color="red">*</font>:</label><br>
                                        <input type="text" class="form-control" name="register" placeholder="Enter Your Registration Number" onkeypress="javascript:return isNumber(event)"  pattern="[0-9]{10}" required/>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Date of Birth<font color="red">* (dd/mm/yyyy)</font>:</label><br>
                                        <input class="form-control" id="date" name="dob" placeholder="MM/DD/YYYY" type="text"/>
                                          
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Hallticket number of Qualifying Examination<font color="red">*</font>:</label><br>
                                        <input type="text" class="form-control" name="qhall" placeholder="Enter Hallticket number of Qualifying Examination" onkeypress="javascript:return isNumber(event)" required />
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Mobile<font color="red">*</font>:</label><br>
                                        <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile No" onkeypress="javascript:return isNumber(event)" pattern="[6789][0-9]{9}" required/>
                                    </div>
                                </div>
                                <div style="text-align: center;">
                                    <button type="submit" class="btn btn-success">Print Application</button>
                                </div> 
                                <div style="text-align: center; color: red;">
                                <?php if (isset($_GET['error'])) {
                                    echo $_GET['error']; }?>
                                
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

