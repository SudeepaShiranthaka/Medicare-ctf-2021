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
						<h2 class="text-black font-w600">Users - IT Division</h2>
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
                                <td>Mr. Kapila Perera</td>
                                <td>kapila.p@medicare.lk</td>
                                <td>kapila.p</td>
                                <td>06-09-2021</td>
                                <td>5.13 PM</td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>Mr. Nayana Diwakara</td>
                                <td>nayana.d@medicare.lk</td>
                                <td>nayana.d</td>
                                <td>02-05-2021</td>
                                <td>4.35 PM</td>
                            </tr>
			                <tr>
                                <td>03</td>
                                <td>Mr. Ranasinghe  Silu</td>
                                <td>ranasinghe.s@medicare.lk</td>
                                <td>ranasinghe.s</td>
                                <td>01-08-2021</td>
                                <td>3.30 PM</td>
                            </tr>

			                <tr>
                                <td>04</td>
                                <td>Ms. Melani  Premaratne</td>
                                <td>melani.p@medicare.lk</td>
                                <td>melani.p</td>
                                <td>08-08-2021</td>
                                <td>11.30 AM</td>
                            </tr>
			                <tr>
                                <td>05</td>
                                <td>Mr. Geeshapathi  Maitreya</td>
                                <td>geeshapathi.m@medicare.lk</td>
                                <td>geeshapathi.m</td>
                                <td>09-11-2021</td>
                                <td>2.30 PM</td>
                            </tr>
			                <tr>
                                <td>06</td>
                                <td>Ms. Krishani  Goonesena</td>
                                <td>krishani.g@medicare.lk</td>
                                <td>krishani.g</td>
                                <td>04-10-2021</td>
                                <td>12.30 PM</td>
                            </tr>
			                <tr>
                                <td>07</td>
                                <td>Mr. Dhammika  Jinavamsa</td>
                                <td>dhammika.j@medicare.lk</td>
                                <td>dhammika.j</td>
                                <td>06-05-2021</td>
                                <td>1.55 PM</td>
                            </tr>
			                <tr>
                                <td>08</td>
                                <td>Mr. Gajanayake  Hemantha</td>
                                <td>gajanayake.h@medicare.lk</td>
                                <td>gajanayake.h</td>
                                <td>05-07-2021</td>
                                <td>6.30 AM</td>
                            </tr>
			                <tr>
                                <td>09</td>
                                <td>Mr. Pilapitiya  Vijaya</td>
                                <td>pilapitiya.v@medicare.lk</td>
                                <td>pilapitiya.v</td>
                                <td>03-01-2020</td>
                                <td>5.30 PM</td>
                            </tr>
			                <tr>
                                <td>10</td>
                                <td>Ms. Januka  Kotiduwakku</td>
                                <td>januka.k@medicare.lk</td>
                                <td>januka.k</td>
                                <td>04-09-2021</td>
                                <td>3.38 PM</td>
                            </tr>
			                <tr>
                                <td>11</td>
                                <td>Mrs. Anuruddhika  Devapriya</td>
                                <td>anuruddhika.d@medicare.lk</td>
                                <td>anuruddhika.d</td>
                                <td>30-05-2021</td>
                                <td>7.20 PM</td>
                            </tr>
			                <tr>
                                <td>12</td>
                                <td>Mr. Kishan  Attygalle</td>
                                <td>krishan.a@medicare.lk</td>
                                <td>krishan.a</td>
                                <td>06-09-2021</td>
                                <td>12.39 PM</td>
                            </tr>
			                <tr>
                                <td>13</td>
                                <td>Mr. Ravishan  Wimalasuriya</td>
                                <td>ravishan.w@medicare.lk</td>
                                <td>ravishan.w</td>
                                <td>28-07-2021</td>
                                <td>10.30 AM</td>
                            </tr>
			                <tr>
                                <td>14</td>
                                <td>Ms. Waruni  Jayamanne</td>
                                <td>waruni.j@medicare.lk</td>
                                <td>waruni.j</td>
                                <td>09-07-2021</td>
                                <td>9.20 PM</td>
                            </tr>
			                <tr>
                                <td>15</td>
                                <td>Ms. Namalee  Mallawarachchi</td>
                                <td>nimal.s@medicare.lk</td>
                                <td>nimal.s</td>
                                <td>25-10-2021</td>
                                <td>4.30 PM</td>
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