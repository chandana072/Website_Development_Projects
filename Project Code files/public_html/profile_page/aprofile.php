<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
     <!-- Add this css File in head tag-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
    <title>Vaccination Management System</title>
    <script>
        $(document).ready(function(){
            $(document).on('click','update',function(){

                var vaccine_name =$("vaccine_name").val();
                var given_date = $("given_date").val();

                $.ajax({
                    url:"editprocess.php",
                    type="post",
                    data:{vaccine_name:vaccine_name, given_date:given_date},
                });
            });
        });
    </script>

    <script>
        function call(clicked) { 
                document.getElementById("name").value = clicked; 
            } 
    </script>
</head>
<?php include "profileprocess.php";?>
<body class="bd">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#"><b>Welcome <?php if(!isset($_SESSION)){ session_start(); } echo "Admin";?></b></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="..\schedule\schedule.html">Vaccine Schedule</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="..\logout.php">LogOut</a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <div id="myModal" class="modal fade" role="dialog" method="post">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Date Updation</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form name="form-group" method="post" action="editprocess.php">
                            <table  class="table table-striped">
                                <tr>
                                    <th>Vaccine Code</th>
                                    <td><input type="text" id="name" name="vaccine_name" value="" readonly="true" style="border:none"></td>
                                </tr>
                                <tr>
                                    <th>Set Date</th>
                                    <td><input type="date" name="given_date" value="" style="border:none"></td>
                                    <td><input type="hidden" name="emailaddress" value="<?php echo fetch('email')?>" style="border:none"></td>
                                </tr>

                            </table>
                             <input type="submit" name="update" value="Update">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

     
        <div class="grid-container">  
            <div class="row">
                <div class="w-25 align-self-start">
                        <img class="p-4" src="https://images-na.ssl-images-amazon.com/images/I/71o6C5im%2BrL._SX355_.jpg">
                    </div>
                    <div class="w-50">
                        <h1> User Name:: <?php echo $_SESSION['username']; ?> </h1>
                        <div class="table" style="background-color:#AED6F1;">
                            <table class="table">
                                <tr>
                                    <th>Father's Name</th>
                                    <td><?php echo fetch('fathername')?></td>
                                </tr>
                                <tr>
                                    <th>Mother's Name</th>
                                    <td><?php echo fetch('mothername')?></td>
                                </tr>
                                <tr>
                                    <th>Child's Date of Birth</th>
                                    <td><?php echo fetch('date_of_birth')?></td>
                                </tr>
                                <tr>
                                    <th>Child Weight</th>
                                    <td><?php echo fetch('baby_weight')."kg"?></td>
                                </tr>
                                <tr>
                                    <th>Contact</th>
                                    <td><?php echo fetch('contact')?></td>
                                </tr>
                                <tr>
                                    <th>Email ID</th>
                                    <td style="width:30%;"><?php echo fetch('email')?></td>
                                </tr>
                            </table>
                        </div>
                    </div>      
                </div>
                <div class="row">
                <div class="col-12 align-self-end" id="table">
                    <h2 class="text-danger"><b> Vaccination Schedule   <button type="button" class="btn btn-dark float-right"><i class="fa fa-rocket"></i><a href="../admin.php" class="text-white">BACK</a></button></b>
                    </h2>
                    <table class="table table-striped" style="white-space: nowrap;">
                        <thead>
                            <tr>
                                <th scope="col">Age(completed)</th>
                                <th scope="col">Vaccines</th>
                                <th scope="col">Doses</th>
                                <th scope="col">Content Tag</th>
                                <th scope="col">Approx Cost</th>
                                <th scope="col">Predicted Date</th>
                                <th scope="col">Appointment Date</th>
                                <th scoper="col">Action</th>
                                <th scope="col">Vaccinated Date</th> 
                                <th scoper="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <th scope="row" rowspan="4" id="first">Birth</th>
                                    <tr>
                                        <td>Bacillius Calmette-Guerin (BCG)</td>
                                        <td>1</td>
                                        <td>BCG</td>
                                        <td>Rs.91-Rs.1025</td>
                                        <td><?php echo date_cal("7 days")?></td>
                                        <td id="BCG"><?php echo fetch('BCG1');?></td>
                                        <td><button type="button" class="btn btn-info" id="BCG1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="BCG"><?php echo fetch('BCG');?></td>
                                        <td><button type="button" class="btn btn-info" id="BCG" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                     <tr>
                                        <td>Oral polio Vaccine (OPV 0)</td>
                                        <td>1</td>
                                        <td>OPV</td>
                                        <td>25-Rs.230</td>
                                        <td><?php echo date_cal("12 days")?></td>
                                        <td id="OPV"><?php echo fetch('OPV1');?></td>
                                        <td><button type="button" class="btn btn-info" id="OPV1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="OPV"><?php echo fetch('OPV');?></td>
                                        <td><button type="button" class="btn btn-info" id="OPV" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>Hepatitis B (Hep-B1)</td>
                                        <td>1</td>
                                        <td>Hep-B</td>
                                        <td>Rs.52.25-Rs.6000</td>
                                        <td><?php echo date_cal("21 days")?></td>
                                        <td id="Hep_B1"><?php echo fetch('Hep_B11');?></td>
                                        <td><button type="button" class="btn btn-info" id="Hep_B11" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="Hep_B1"><?php echo fetch('Hep_B1');?></td>
                                        <td><button type="button" class="btn btn-info" id="Hep_B1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                </tr>
                                <tr>
                                    <th scope="row" rowspan="7">6 weeks</th>
                                    <tr>
                                        <td>Dipthena Tetanus and Pertussis<br> vaccine(DTwP 1)</td>
                                        <td>1</td>
                                        <td>DTP</td>
                                        <td>Rs.225</td>
                                        <td><?php echo date_cal("42 days")?></td>
                                        <td id="DTP_6w"><?php echo fetch('DTP_6w1');?></td>
                                        <td><button type="button" class="btn btn-info" id="DTP_6w1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="DTP_6w"><?php echo fetch('DTP_6w');?></td>
                                        <td><button type="button" class="btn btn-info" id="DTP_6w" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>Inactivated polio vaccine(IPV 1)</td>
                                        <td>1</td>
                                        <td>IPV</td>
                                        <td>Rs.440</td>
                                        <td><?php echo date_cal("46 days")?></td>
                                        <td id="IPV_6w"><?php echo fetch('IPV_6w1');?></td>
                                        <td><button type="button" class="btn btn-info" id="IPV_6w1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="IPV_6w"><?php echo fetch('IPV_6w');?></td>
                                        <td><button type="button" class="btn btn-info" id="IPV_6w" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>Hepatitis B (Hep-B2)</td>
                                        <td>1</td>
                                        <td>Hep-B</td>
                                        <td>Rs.52.25-Rs.6000</td>
                                        <td><?php echo date_cal("51 days")?></td>
                                        <td id="Hep_b_6w"><?php echo fetch('Hep_b_6w1');?></td>
                                        <td><button type="button" class="btn btn-info" id="Hep_b_6w1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="Hep_b_6w"><?php echo fetch('Hep_b_6w');?></td>
                                        <td><button type="button" class="btn btn-info" id="Hep_b_6w" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>Haemaphilus influenzae type B(Hib 1)</td>
                                        <td>1</td>
                                        <td>Hib</td>
                                        <td>Rs.113-Rs.252.5</td>
                                        <td><?php echo date_cal("56 days")?></td>
                                        <td id="Hib_6w"><?php echo fetch('Hib_6w1');?></td>
                                        <td><button type="button" class="btn btn-info" id="Hib_6w1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="Hib_6w"><?php echo fetch('Hib_6w');?></td>
                                        <td><button type="button" class="btn btn-info" id="Hib_6w" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>Rotavirus 1</td>
                                        <td>1</td>
                                        <td>Roravirus</td>
                                        <td>Rs.689-Rs.1499</td>
                                        <td><?php echo date_cal("60 days")?></td>
                                        <td id="Rotavirus_6w"><?php echo fetch('Rotavirus_6w1');?></td>
                                        <td><button type="button" class="btn btn-info" id="Rotavirus_6w1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="Rotavirus_6w"><?php echo fetch('Rotavirus_6w');?></td>
                                        <td><button type="button" class="btn btn-info" id="Rotavirus_6w" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>Pneumococcal conjugate vaccin(PVC 2)</td>
                                        <td>1</td>
                                        <td>PCV</td>
                                        <td>Rs.1496-Rs.3801</td>
                                        <td><?php echo date_cal("66 days")?></td>
                                        <td id="PCV_6w"><?php echo fetch('PCV_6w1');?></td>
                                        <td><button type="button" class="btn btn-info" id="PCV_6w1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="PCV_6w"><?php echo fetch('PCV_6w');?></td>
                                        <td><button type="button" class="btn btn-info" id="PCV_6w" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                </tr>
                                <tr>
                                    <th scope="row" rowspan="6">10 weeks</th>
                                    <tr>
                                        <td>Diptheria Tetanus and Pertussia vaccine (DTwP2)</td>
                                        <td>1</td>
                                        <td>DTP</td>
                                        <td>Rs.225</td>
                                        <td><?php echo date_cal("70 days")?></td>
                                        <td id="DTP_10w"><?php echo fetch('DTP_10w1');?></td>
                                        <td><button type="button" class="btn btn-info" id="DTP_10w1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="DTP_10w"><?php echo fetch('DTP_10w');?></td>
                                        <td><button type="button" class="btn btn-info" id="DTP_10w" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>Inactiveed polio vaccine(IPV 2)</td>
                                        <td>1</td>
                                        <td>IPV</td>
                                        <td>Rs.440</td>
                                        <td><?php echo date_cal("75 days")?></td>
                                        <td id="IPV_10w"><?php echo fetch('IPV_10w1');?></td>
                                        <td><button type="button" class="btn btn-info" id="IPV_10w1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="IPV_10w"><?php echo fetch('IPV_10w');?></td>
                                        <td><button type="button" class="btn btn-info" id="IPV_10w" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>Haemaphilus influenzae type B(Hib 2)</td>
                                        <td>1</td>
                                        <td>Hib</td>
                                        <td>Rs.113-Rs.252.6</td>
                                        <td><?php echo date_cal("80 days")?></td>
                                        <td id="Hib_10w"><?php echo fetch('Hib_10w1');?></td>
                                        <td><button type="button" class="btn btn-info" id="Hib_10w1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="Hib_10w"><?php echo fetch('Hib_10w');?></td>
                                        <td><button type="button" class="btn btn-info" id="Hib_10w" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>Rotavirus 2</td>
                                        <td>1</td>
                                        <td>Rotavirus</td>
                                        <td>Rs.689-Rs.1499</td>
                                        <td><?php echo date_cal("86 days")?></td>
                                        <td id="Rotavirus_10w"><?php echo fetch('Rotavirus_10w1');?></td>
                                        <td><button type="button" class="btn btn-info" id="Rotavirus_10w1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="Rotavirus_10w"><?php echo fetch('Rotavirus_10w');?></td>
                                        <td><button type="button" class="btn btn-info" id="Rotavirus_10w" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>Pneumocccal conjugate vaccine(PCV 2)</td>
                                        <td>1</td>
                                        <td>PCV</td>
                                        <td>Rs.1496-Rs.3801</td>
                                        <td><?php echo date_cal("90 days")?></td>
                                        <td id="PCV_10w"><?php echo fetch('PCV_10w1');?></td>
                                        <td><button type="button" class="btn btn-info" id="PCV_10w1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="PCV_10w"><?php echo fetch('PCV_10w');?></td>
                                        <td><button type="button" class="btn btn-info" id="PCV_10w" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                </tr>
                                <tr>
                                    <th scope="row" rowspan="6">14 weeks</th>
                                    <tr>
                                        <td>Diptheria Tetanus and Pertussia vaccine (DTwP3)</td>
                                        <td>1</td>
                                        <td>DTP</td>
                                        <td>Rs.225</td>
                                        <td><?php echo date_cal("98 days")?></td>
                                        <td id="DTP_14w"><?php echo fetch('DTP_14w1');?></td>
                                        <td><button type="button" class="btn btn-info" id="DTP_14w1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="DTP_14w"><?php echo fetch('DTP_14w');?></td>
                                        <td><button type="button" class="btn btn-info" id="DTP_14w" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>Inactiveed polio vaccine(IPV 3)</td>
                                        <td>1</td>
                                        <td>IPV</td>
                                        <td>Rs.440</td>
                                        <td><?php echo date_cal("101 days")?></td>
                                        <td id="IPV_14w"><?php echo fetch('IPV_14w1');?></td>
                                        <td><button type="button" class="btn btn-info" id="IPV_14w1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="IPV_14w"><?php echo fetch('IPV_14w');?></td>
                                        <td><button type="button" class="btn btn-info" id="IPV_14w" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>Haemaphilus influenzae type B(Hib 3)</td>
                                        <td>1</td>
                                        <td>Hib</td>
                                        <td>Rs.113-Rs.252.6</td>
                                        <td><?php echo date_cal("110 days")?></td>
                                        <td id="Hib_14w"><?php echo fetch('Hib_14w1');?></td>
                                        <td><button type="button" class="btn btn-info" id="Hib_14w1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="Hib_14w"><?php echo fetch('Hib_14w');?></td>
                                        <td><button type="button" class="btn btn-info" id="Hib_14w" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>Rotavirus 3</td>
                                        <td>1</td>
                                        <td>Rotavirus</td>
                                        <td>Rs.689-Rs.1499</td>
                                        <td><?php echo date_cal("115 days")?></td>
                                        <td id="Rotavirus_14w"><?php echo fetch('Rotavirus_14w1');?></td>
                                        <td><button type="button" class="btn btn-info" id="Rotavirus_14w1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="Rotavirus_14w"><?php echo fetch('Rotavirus_14w');?></td>
                                        <td><button type="button" class="btn btn-info" id="Rotavirus_14w" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>Pneumocccal conjugate vaccine(PCV 3)</td>
                                        <td>1</td>
                                        <td>PCV</td>
                                        <td>Rs.1496-Rs.3801</td>
                                        <td><?php echo date_cal("120 days")?></td>
                                        <td id="PCV_14w"><?php echo fetch('PCV_14w1');?></td>
                                        <td><button type="button" class="btn btn-info" id="PCV_14w1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="PCV_14w"><?php echo fetch('PCV_14w');?></td>
                                        <td><button type="button" class="btn btn-info" id="PCV_14w" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                </tr>
                                <tr>
                                    <th scope="row" rowspan="3">6 months</th>
                                    <tr>
                                        <td>Oral polio Vaccine (OPV 1)</td>
                                        <td>1</td>
                                        <td>OPV</td>
                                        <td>Rs.230</td>
                                        <td><?php echo date_cal("180 days")?></td>
                                        <td id="OPV_6m"><?php echo fetch('OPV_6m1');?></td>
                                        <td><button type="button" class="btn btn-info" id="OPV_6m1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="OPV_6m"><?php echo fetch('OPV_6m');?></td>
                                        <td><button type="button" class="btn btn-info" id="OPV_6m" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>Hepatitis B (Hep-B3)</td>
                                        <td>1</td>
                                        <td>Hep-B</td>
                                        <td>Rs.52.25-Rs.6000</td>
                                        <td><?php echo date_cal("187 days")?></td>
                                        <td id="Hep_B_6m"><?php echo fetch('Hep_B_6m1');?></td>
                                        <td><button type="button" class="btn btn-info" id="Hep_B_6m1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="Hep_B_6m"><?php echo fetch('Hep_B_6m');?></td>
                                        <td><button type="button" class="btn btn-info" id="Hep_B_6m" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr> 
                                </tr>
                                <tr>    
                                    <th scope="row" rowspan="3">9 months</th>
                                    <tr>
                                        <td>Oral polio Vaccine (OPV 2)</td>
                                        <td>1</td>
                                        <td>OPV</td>
                                        <td>Rs.230</td>
                                        <td><?php echo date_cal("270 days")?></td>
                                        <td id="OPV_9m"><?php echo fetch('OPV_9m1');?></td>
                                        <td><button type="button" class="btn btn-info" id="OPV_9m1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="OPV_9m"><?php echo fetch('OPV_9m');?></td>
                                        <td><button type="button" class="btn btn-info" id="OPV_9m" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>Measies Murmps and Rubelies(MMR-1)</td>
                                        <td>1</td>
                                        <td>MMR</td>
                                        <td>Rs.156-Rs.600</td>
                                        <td><?php echo date_cal("277 days")?></td>
                                        <td id="MMR_9m"><?php echo fetch('MMR_9m1');?></td>
                                        <td><button type="button" class="btn btn-info" id="MMR_9m1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="MMR_9m"><?php echo fetch('MMR_9m');?></td>
                                        <td><button type="button" class="btn btn-info" id="MMR_9m" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                </tr>
                                <tr>
                                    <th scope="row">9-12 months</th>
                                      
                                        <td>Typhoid Conjugate vaccine</td>
                                        <td>1</td>
                                        <td>TCV</td>
                                        <td>Rs.150-Rs.525</td>
                                        <td><?php echo date_cal("310 days")?></td>
                                        <td id="TCV_9m"><?php echo fetch('TCV_9m1');?></td>
                                        <td><button type="button" class="btn btn-info" id="TCV_9m1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="TCV_9m"><?php echo fetch('TCV_9m');?></td>
                                        <td><button type="button" class="btn btn-info" id="TCV_9m" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row">12 months</th>
                                        <td>Hepatitis A (Hep-A1)</td>
                                        <td>1</td>
                                        <td>Hep-A</td>
                                        <td>Rs.1003-Rs.1395</td>
                                        <td><?php echo date_cal("360 days")?></td>
                                        <td id="Hep_A_12m"><?php echo fetch('Hep_A_12m1');?></td>
                                        <td><button type="button" class="btn btn-info" id="Hep_A_12m1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="Hep_A_12m"><?php echo fetch('Hep_A_12m');?></td>
                                        <td><button type="button" class="btn btn-info" id="Hep_A_12m" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                </tr>
                                <tr>
                                    <th scope="row" rowspan="4">15 months</th>
                                    <tr>
                                        <td>Measies Mumps and Rubells(MMR2)</td>
                                        <td>1</td>
                                        <td>MMR</td>
                                        <td>Rs.155-Rs.600</td>
                                        <td><?php echo date_cal("450 days")?></td>
                                        <td id="MMR_15m"><?php echo fetch('MMR_15m1');?></td>
                                        <td><button type="button" class="btn btn-info" id="MMR_15m1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="MMR_15m"><?php echo fetch('MMR_15m');?></td>
                                        <td><button type="button" class="btn btn-info" id="MMR_15m" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>Varic 1</td>
                                        <td>1</td>
                                        <td>Varicells</td>
                                        <td>Rs.1623-Rs.2259</td>
                                        <td><?php echo date_cal("460 days")?></td>
                                        <td id="V_15m"><?php echo fetch('V_15m1');?></td>
                                        <td><button type="button" class="btn btn-info" id="V_15m1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="V_15m"><?php echo fetch('V_15m');?></td>
                                        <td><button type="button" class="btn btn-info" id="V_15m" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>PCV vaccine</td>
                                        <td>1</td>
                                        <td>PCV</td>
                                        <td>Rs.1495-Rs.3801</td>
                                        <td><?php echo date_cal("470 days")?></td>
                                        <td id="PCV_15m"><?php echo fetch('PCV_15m1');?></td>
                                        <td><button type="button" class="btn btn-info" id="PCV_15m1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="PCV_15m"><?php echo fetch('PCV_15m');?></td>
                                        <td><button type="button" class="btn btn-info" id="PCV_15m" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                </tr>
                                
                                <tr>
                                    <th scope="row" rowspan="4">16 to 18 months</th>
                                    <tr>
                                        <td>Dipthena perusis and Tetanus(DTwP B1)</td>
                                        <td>1</td>
                                        <td>DTP</td>
                                        <td>Rs.225</td>
                                        <td><?php echo date_cal("510 days")?></td>
                                        <td id="DTP_16m"><?php echo fetch('DTP_16m1');?></td>
                                        <td><button type="button" class="btn btn-info" id="DTP_16m1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="DTP_16m"><?php echo fetch('DTP_16m');?></td>
                                        <td><button type="button" class="btn btn-info" id="DTP_16m" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>Inactivated polio vaccine(IPV B1)</td>
                                        <td>1</td>
                                        <td>IPV</td>
                                        <td>Rs.440</td>
                                        <td><?php echo date_cal("518 days")?></td>
                                        <td id="IPV_16m"><?php echo fetch('IPV_16m1');?></td>
                                        <td><button type="button" class="btn btn-info" id="IPV_16m1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="IPV_16m"><?php echo fetch('IPV_16m');?></td>
                                        <td><button type="button" class="btn btn-info" id="IPV_16m" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>Hepatitis B (Hep-B1)</td>
                                        <td>1</td>
                                        <td>Hep-B</td>
                                        <td>Rs.113-Rs.262.5</td>
                                        <td><?php echo date_cal("525 days")?></td>
                                        <td id="Hib_16m"><?php echo fetch('Hib_16m1');?></td>
                                        <td><button type="button" class="btn btn-info" id="Hib_16m1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="Hib_16m"><?php echo fetch('Hib_16m');?></td>
                                        <td><button type="button" class="btn btn-info" id="Hib_16m" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                </tr>
                                
                                <tr>
                                    <th scope="row">18 months</th>
                                        <td>Hepatitis B (Hep-A2)</td>
                                        <td>1</td>
                                        <td>Hep-A</td>
                                        <td>Rs.1003-Rs.1395</td>
                                        <td><?php echo date_cal("540 days")?></td>
                                        <td id="Hep_A_18m"><?php echo fetch('Hep_A_18m1');?></td>
                                        <td><button type="button" class="btn btn-info" id="Hep_A_18m1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="Hep_A_18m"><?php echo fetch('Hep_A_18m');?></td>
                                        <td><button type="button" class="btn btn-info" id="Hep_A_18m" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">2 years</th>
                                        <td>Boster of Typhoid Conjugate Vaccine</td>
                                        <td>1</td>
                                        <td>BTCV</td>
                                        <td>Rs.150-Rs.525</td>
                                        <td><?php echo date_cal("730 days")?></td>
                                        <td id="TCV_2y"><?php echo fetch('TCV_2y1');?></td>
                                        <td><button type="button" class="btn btn-info" id="TCV_2y1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="TCV_2y"><?php echo fetch('TCV_2y');?></td>
                                        <td><button type="button" class="btn btn-info" id="TCV_2y" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                </tr>
                                <tr>
                                    <th scope="row" rowspan="5">4 to 6 years</th>
                                    <tr>
                                        <td>Dipthena perusis and Tetanus(DTwP B1)</td>
                                        <td>1</td>
                                        <td>DTP</td>
                                        <td>Rs.225</td>
                                        <td><?php echo date_cal("1480 days")?></td>
                                        <td id="DTP_4y"><?php echo fetch('DTP_4y1');?></td>
                                        <td><button type="button" class="btn btn-info" id="DTP_4y1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="DTP_4y"><?php echo fetch('DTP_4y');?></td>
                                        <td><button type="button" class="btn btn-info" id="DTP_4y" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>oral polio vaccine (OVP 3)</td>
                                        <td>1</td>
                                        <td>OPV</td>
                                        <td>Rs.230</td>
                                        <td><?php echo date_cal("1500 days")?></td>
                                        <td id="OPV_4y"><?php echo fetch('OPV_4y1');?></td>
                                        <td><button type="button" class="btn btn-info" id="OPV_4y1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="OPV_4y"><?php echo fetch('OPV_4y');?></td>
                                        <td><button type="button" class="btn btn-info" id="OPV_4y" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>Vercillia 2</td>
                                        <td>1</td>
                                        <td>varicclia</td>
                                        <td>Rs.1626-Rs.2259</td>
                                        <td><?php echo date_cal("1520 days")?></td>
                                        <td id="V_4y"><?php echo fetch('V_4y1');?></td>
                                        <td><button type="button" class="btn btn-info" id="V_4y1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="V_4y"><?php echo fetch('V_4y');?></td>
                                        <td><button type="button" class="btn btn-info" id="V_4y" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>Measles,Mumps and Rubella (MMR 3)</td>
                                        <td>1</td>
                                        <td>MMR</td>
                                        <td>Rs.155-Rs.600</td>
                                        <td><?php echo date_cal("1520 days")?></td>
                                        <td id="MMR_4y"><?php echo fetch('MMR_4y1');?></td>
                                        <td><button type="button" class="btn btn-info" id="MMR_4y1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="MMR_4y"><?php echo fetch('MMR_4y');?></td>
                                        <td><button type="button" class="btn btn-info" id="MMR_4y" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                </tr>
                                <tr>
                                    <th scope="row" rowspan="4">10 to 12years</th>
                                    <tr>
                                        <td>Tdap Td</td>
                                        <td>1</td>
                                        <td>Tdap</td>
                                        <td>Rs.767-Rs.1096</td>
                                        <td><?php echo date_cal("3665 days")?></td>
                                        <td id="Tdap_10y"><?php echo fetch('Tdap_10y1');?></td>
                                        <td><button type="button" class="btn btn-info" id="Tdap_10y1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="Tdap_10y"><?php echo fetch('Tdap_10y');?></td>
                                        <td><button type="button" class="btn btn-info" id="Tdap_10y" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td>Human Papillarna</td>
                                        <td>1</td>
                                        <td>HPV</td>
                                        <td>Rs.2150-Rs.2259</td>
                                        <td><?php echo date_cal("3700 days")?></td>
                                        <td id="HPV_10y"><?php echo fetch('HPV_10y1');?></td>
                                        <td><button type="button" class="btn btn-info" id="HPV_10y1" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button>
                                        <td id="HPV_10y"><?php echo fetch('HPV_10y');?></td>
                                        <td><button type="button" class="btn btn-info" id="HPV_10y" data-toggle="modal" data-target="#myModal" onClick="call(this.id)">Edit</button></td>
                                    </tr>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
                
    <div class="footer text-center pt-0">
            <p> Copyright<i class="fa fa-copyright" aria-hidden="true"></i> 2020 | Vaccine Management System</p>
            </div>
</body>
</html>