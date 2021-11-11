<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MediCare - Hospital Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/logo.png">
	<link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="./vendor/lightgallery/css/lightgallery.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <style>
        th, td { 
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            padding-right: 10px;
        }
    </style>

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

	<?php include 'navheader.php';?>

	<?php include 'chatboxnav.php';?>

    <?php include 'header.php';?>

	<?php include 'slidenav.php';?>

		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
				<div class="form-head d-flex align-items-center mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-black font-w600">Users - Doctors</h2>
						<h4 class="text-primary mb-0 ">Administrator | Kamal Rajapakshe</h4>
					</div>
				</div>
                 <div class="row">
			<div class="col-xl-12 col-sm-6">
				<div class="card">
					<div class="card-body">
                        <table border="2">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Last Login Date</th>
                                <th>Last Login Time</th>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>Dr. Amal Priyantha</td>
                                <td>amal.p@medicare.lk</td>
                                <td>amal.p</td>
                                <td>22-10-2021</td>
                                <td>5.23 PM</td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>Dr. Nimal Sirithunga</td>
                                <td>nimal.s@medicare.lk</td>
                                <td>nimal.s</td>
                                <td>25-10-2021</td>
                                <td>4.30 PM</td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>Dr. Monika  Wijetunge</td>
                                <td>monika.w@medicare.lk</td>
                                <td>monika.w</td>
                                <td>12-05-2021</td>
                                <td>3.20 PM</td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td>Dr. Thilakarathne  Saranankara</td>
                                <td>thilakarathne.s@medicare.lk</td>
                                <td>thilakarathne.s</td>
                                <td>24-03-2021</td>
                                <td>12.13 PM</td>
                            </tr>
                            <tr>
                                <td>05</td>
                                <td>Dr. Praneeth  Peiris</td>
                                <td>praneeth.p@medicare.lk</td>
                                <td>praneeth.p</td>
                                <td>19-05-2021</td>
                                <td>11.18 AM</td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td>Dr. Mahadewa  Premaratne</td>
                                <td>mahadewa.p@medicare.lk</td>
                                <td>mahadewa.p</td>
                                <td>28-01-2021</td>
                                <td>10.11 AM</td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td>Dr. Solanga  Priyantha</td>
                                <td>salanga.p@medicare.lk</td>
                                <td>salanga.p</td>
                                <td>12-11-2021</td>
                                <td>08.19 PM</td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td>Dr. Siriwardhana  Chandawimala</td>
                                <td>siriwardhana.c@medicare.lk</td>
                                <td>siriwardhana.c</td>
                                <td>23-10-2021</td>
                                <td>09.10 AM</td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td>Dr. Sampath  Goonesena</td>
                                <td>sampath.g@medicare.lk</td>
                                <td>sampath.g</td>
                                <td>05-03-2021</td>
                                <td>03.24 PM</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Dr. Niwunhella  Dharmapala</td>
                                <td>niwunhella.d@medicare.lk</td>
                                <td>niwunhella.d</td>
                                <td>09-10-2021</td>
                                <td>12.54 PM</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Dr. Malweena  Siriwardena</td>
                                <td>malweena.s@medicare.lk</td>
                                <td>malweena.s</td>
                                <td>10-11-2021</td>
                                <td>10.14 AM</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Dr. Samodha  Vikkamabahu</td>
                                <td>samodha.v@medicare.lk</td>
                                <td>samodha.v</td>
                                <td>07-10-2021</td>
                                <td>09.12 AM</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Dr. Fernando  Gunewardena</td>
                                <td>fernando.g@medicare.lk</td>
                                <td>fernando.g</td>
                                <td>02-11-2021</td>
                                <td>08.14 AM</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Dr. Gunith  Dissanayake</td>
                                <td>gunith.d@medicare.lk</td>
                                <td>gunith.d</td>
                                <td>04-12-2021</td>
                                <td>06.13 PM</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Dr. Eshan  Pathiraja</td>
                                <td>eshan.p@medicare.lk</td>
                                <td>eshan.p</td>
                                <td>06-12-2021</td>
                                <td>04.11 PM</td>
                            </tr>

                        </table>

                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
        <div class="row">
			<div class="col-xl-3 col-sm-6">
				<div class="card">
					<div class="card-body">
                        
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

    <?php include 'footer.php';?>
   
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
	
	<!--removeIf(production)-->
        
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./js/custom.min.js"></script>
	<script src="./js/deznav-init.js"></script>
	<script src="./vendor/lightgallery/js/lightgallery-all.min.js"></script>
	<script>
		$('#lightgallery').lightGallery({
			thumbnail:true,
		});
	</script>
    



	
		
</body>

</html>