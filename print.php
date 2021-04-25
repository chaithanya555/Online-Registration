<?php
include 'common.php';
if (!isset($_SESSION['name'])) {
 header('location: index.html');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Print Application</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
     
    </head>
    <body style="border: 1px solid black;">
        
           
            <div class="grp-cntnr">  
                    <div class="question-pnl">
                        <div class="row">
                            
                        </div>
                        <hr>
                        <br>
                        <div class="container">
                        <div class="row">
                            <div class="col-xs-9">
                        
                                <div class="col-xs-1">1.</div>
                                <div class="col-xs-5">  PGECET Exam Paper For Entrance Test#</div>
                                <div class="col-xs-6">: ryuiolkjkm</div>
                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-9">
                                <div class="col-xs-1">2.</div>
                            <div class="col-xs-10">
                                <div class="col-xs-6">(a) Qualifying Examination#</div>
                                <div class="col-xs-6">: <?php echo $_SESSION['degree']; ?></div>
                            
                            </div>
                                 
                            <div class="col-xs-10">
                        
                                <div class="col-xs-1">  </div>
                                <div class="col-xs-6">(b) Qualifying Exam Hall Ticket No#</div>
                                <div class="col-xs-5">: <?php echo $_SESSION['hallticketd']; ?></div>
                            
                            </div>
                            <div class="col-xs-10">
                        
                                <div class="col-xs-1">  </div>
                                <div class="col-xs-6">(c) Year of App./Passing the Qualifying Exam</div>
                                <div class="col-xs-5">: <?php echo $_SESSION['yearofpass']; ?></div>
                            
                            </div>
                            <div class="col-xs-10">
                        
                                <div class="col-xs-1">  </div>
                                <div class="col-xs-6">(d) Medium of Instruction at Qualifying Exam</div>
                                <div class="col-xs-5">: <?php echo $_SESSION['medium']; ?></div>
                            
                            </div>
                            <div class="col-xs-10">
                        
                                <div class="col-xs-1">  </div>
                                <div class="col-xs-6">(e) Place of Study - Intermediate  or Equivalent</div>
                                <div class="col-xs-5">: <?php echo $_SESSION['interarea']; ?></div>
                            
                            </div>
                            <br>
                            <br>
                            <div class="col-xs-10">
                        
                                <div class="col-xs-1">3</div>
                                <div class="col-xs-6">(a) Candidate Name#</div>
                                <div class="col-xs-5">: <?php echo $_SESSION['name']; ?></div>
                            
                            </div>
                            <div class="col-xs-10">
                        
                                <div class="col-xs-1"> </div>
                                <div class="col-xs-6">(b) Father's Name#</div>
                                <div class="col-xs-5">: <?php echo $_SESSION['fname']; ?></div>
                            </div>
                            <div class="col-xs-10">
                                <div class="col-xs-1"> </div>
                                <div class="col-xs-6">(c) Mother's Name#</div>
                                <div class="col-xs-5">: <?php echo $_SESSION['mname']; ?></div>
                            </div>
                            <div class="col-xs-10">
                                <div class="col-xs-1"> </div>
                                <div class="col-xs-6">(d) Date of Birth (dd/mm/yyyy)#</div>
                                <div class="col-xs-5">: <?php echo $_SESSION['dob'];?></div>
                            </div>
                            <div class="col-xs-10">
                                <div class="col-xs-1"> </div>
                                <div class="col-xs-6">(e) Birth State</div>
                                <div class="col-xs-5">: <?php echo $_SESSION['birthstate']; ?></div>
                            </div>
                            <div class="col-xs-10">
                                <div class="col-xs-1"> </div>
                                <div class="col-xs-6">(f) Gender</div>
                                <div class="col-xs-5">: <?php echo $_SESSION['gender']; ?></div>
                            </div>
                            <br>
                            <br>
                            <div class="col-xs-10">
                                <div class="col-xs-1">4</div>
                                <div class="col-xs-6">Category</div>
                                <div class="col-xs-5">: ryuiolkjkm</div>
                            </div>
                            <div class="col-xs-10">
                                <div class="col-xs-1">5</div>
                                <div class="col-xs-6">Local Area</div>
                                <div class="col-xs-5">: <?php echo $_SESSION['localarea']; ?></div>
                            </div>
                            <div class="col-xs-10">
                                <div class="col-xs-1">6</div>
                                <div class="col-xs-6">(a) Non-Minority/Minority</div>
                                <div class="col-xs-5">: <?php echo $_SESSION['minority']; ?></div>
                            </div>
                            <div class="col-xs-10">
                                <div class="col-xs-1"></div>
                                <div class="col-xs-6">(b) Minority Category</div>
                                <div class="col-xs-5">: ryuiolkjkm</div>
                            </div>
                            <div class="col-xs-10">
                                <div class="col-xs-1">7</div>
                                <div class="col-xs-6">Annual Income of Parents (Rs)</div>
                                <div class="col-xs-5">: <?php echo $_SESSION['income']; ?></div>
                            </div>
                            <div class="col-xs-10">
                                <div class="col-xs-1">8</div>
                                <div class="col-xs-6">(a) Study Details</div>
                            </div>
                            </div>
                            <div class="col-xs-3" >
                                <div >
                                <?php
                                $barcodeText = trim($_SESSION['reg']);
				$barcodeType="code128";
				$barcodeDisplay="horizontal";
				$barcodeSize="20";
				$printText="true";
                                echo '<h4 >Registration No:</h4>';
				echo '<img style="border: 1px solid black;" class="barcode" align="center" alt="'.$barcodeText.'" src="barcode.php?text='.$barcodeText.'&codetype='.$barcodeType.'&orientation='.$barcodeDisplay.'&size='.$barcodeSize.'&print='.$printText.'"/>';
                                ?>
                                </div>
                                <br>
                                <div >
                                     <img style="border: 1px solid black;"  src="<?php echo $_SESSION['photo']; ?>" width="100" height="150"/>
                                </div>
                                <br>
                                <div >
                                    <img style="border: 1px solid black;" src="<?php echo $_SESSION['signature']; ?>" width="150" height="50"/>
                                </div>
                                
                            </div>
                        </div>
                            <div style="padding-left: 30px; padding-right: 30px;">
                            <table class="table table-bordered">
                                <tr>
                                    <td>Class-10</td>
                                    <td><?php echo $_SESSION['sscplace']; ?></td>
                                    <td>Intermediate/Diploma</td>
                                    <td><?php echo $_SESSION['interplace']; ?></td>
                                </tr>
                                <tr>
                                    <td>Degree</td>
                                    <td><?php echo $_SESSION['degreeplace']; ?></td>
                                    <td>MSC / MCA / Others</td>
                                    <td><?php echo $_SESSION['mscmcaplace']; ?></td>
                                </tr>
                            </table>
                            </div>
                            <div class="row">
                                <div class="col-xs-9">
                                <div class="col-xs-10">
                                    <div class="col-xs-1"> </div>
                                    <div class="col-xs-5">(b) Place of Study - SSC or Equivalent</div>
                                    <div class="col-xs-6">: <?php echo $_SESSION['sscarea']; ?></div>
                                </div>
                                <div class="col-xs-10">
                                    <div class="col-xs-1"> </div>
                                    <div class="col-xs-5">(c) SSC Hall Ticket No &amp; Year of Passing</div>
                                    <div class="col-xs-6">: <?php echo $_SESSION['sschall'].",".$_SESSION['sscmonth']."-".$_SESSION['sscyear']; ?></div>
                                </div>
                                <div class="col-xs-10">
                                    <div class="col-xs-1"> </div>
                                    <div class="col-xs-5">(d) Inter Hall Ticket No &amp; Year of Passing</div>
                                    <div class="col-xs-6">: <?php echo $_SESSION['interhall'].",".$_SESSION['intermonth']."-".$_SESSION['interyear']; ?></div>
                                </div>
                                <br>
                                <br>
                                <div class="col-xs-10">
                                    <div class="col-xs-1">9</div>
                                    <div class="col-xs-5">(a) Address for Correspondence</div>
                                    <div class="col-xs-6">: <?php echo $_SESSION['hno'].",".$_SESSION['village']; ?> <br><?php echo $_SESSION['mandal'].",".$_SESSION['district']; ?> <br> <?php echo $_SESSION['state'].",".$_SESSION['pincode']; ?></div>
                                </div>
                                <div class="col-xs-10">
                                    <div class="col-xs-1"> </div>
                                    <div class="col-xs-5">(b) Contact Telephone Number (Mobile)</div>
                                    <div class="col-xs-3">: <?php echo $_SESSION['mobile']; ?></div>
                                    <div class="col-xs-3">(c) Email Id: <?php echo $_SESSION['email']; ?></div>
                                </div>
                                <div class="col-xs-10">
                                    <div class="col-xs-1">10</div>
                                    <div class="col-xs-5">Regional Test Centre Preferences</div>
                                </div>
                                </div>
                                <div class="col-xs-3" >
                                    <div>
                                    </div>
                                </div>
                            </div>
                            <div style="padding-left: 30px; padding-right: 30px;">
                            <table class="table table-bordered">
                                <tr>
                                    <td align="center">Preference 1</td>
                                    <td align="center">Preference 2</td>
                                </tr>
                                <tr>
                                    <td align="center"><?php echo $_SESSION['center1']; ?></td>
                                    <td align="center"><?php echo $_SESSION['center2']; ?></td>
                                </tr>
                            </table>
                            </div>
                            <div class="row">
                                <div class="col-xs-10">
                                    <div class="col-xs-1">11</div>
                                    <div class="col-xs-5">(a) Fee particulars-Payment through</div>
                                    <div class="col-xs-3">: ryuiolkjkm</div>
                                    <div class="col-xs-3">(b) Amount(in Rs.): </div>
                                </div>
                                <div class="col-xs-10">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-5">(c) Payment Reference Id</div>
                                    <div class="col-xs-6">: ryuiolkjkm</div>
                                </div>
                            </div>
                            <div>
                                <p>#-These Fields CANNOT be edited by candidate, but written request can be made to the CONVENER or Regional Coordinator of TS PGECET - 2018 or email to convenor.pgecet@tsche.ac.in </p>
                                <p>Remaining fields can be edited by the candidate during the permitted period. For any details contact at 040-27097124.</p>
                            </div>
                            <br>
                            <hr>
                            Declaration:
                            <div style="padding-left: 20px;">
                                <p>1) I have carefully gone through the instruction booklet and I am conversant with the instruction. I shall abide by the eligibility conditions and other regulations to be satisfied for appering at the entrance test and admission into any course prescribed. Further, I assure that, I will not involve in any malpractice or illegal activities in the entrance test. In case, I have furnished any false information or involved in any malpractice or illegal activities, I am liable for the punishment as per the existing law.</p>
                            </div>
                            Date : <?php echo date("d/m/Y")." ".date("h:i:sa"); ?><br>
                        </div>
                    </div>
            
                </div>
            </div>
        <div style="text-align: center;">
            <button onclick="myFunction()" class="btn btn-primary" >Print this page</button>
                            <a href="http://localhost/Pg/print.php" download><img src="http://pdf-ace.com/images/buttons/save-as-pdf-1.gif" width="118" height="25" alt="Save as PDF" /></a>
        </div>
        <script>
function myFunction() {
    window.print();
}
</script>
    </body>
</html>
<?php session_destroy();?>
