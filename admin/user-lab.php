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
						<h2 class="text-black font-w600">Users - Lab Assistants</h2>
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
                                <td>Mr. Yasendra  Jayewardene</td>
                                <td>yasendra.j@medicare.lk</td>
                                <td>yasendra.j</td>
                                <td>12-04-2021</td>
                                <td>6.13 PM</td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>Ms. Lochana  Maitreya</td>
                                <td>lochana.m@medicare.lk</td>
                                <td>lochana.m</td>
                                <td>24-01-2021</td>
                                <td>2.33 PM</td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>Mrs. Pramila  Walpola</td>
                                <td>pramila.w@medicare.lk</td>
                                <td>pramila.w</td>
                                <td>02-02-2021</td>
                                <td>10.13 AM</td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td>Ms. Lochana  Maitreya</td>
                                <td>lochana.m@medicare.lk</td>
                                <td>lochana.m</td>
                                <td>24-01-2021</td>
                                <td>2.33 PM</td>
                            </tr>
                            <tr>
                                <td>05</td>
                                <td>Mr. Priyanath  Walpola</td>
                                <td>priyanath.w@medicare.lk</td>
                                <td>priyanath.w</td>
                                <td>10-03-2021</td>
                                <td>12.05 PM</td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td>Mr. Pathirara  Abeyesundere</td>
                                <td>pathirara.a@medicare.lk</td>
                                <td>pathirara.a</td>
                                <td>12-08-2021</td>
                                <td>8.13 AM</td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td>Mr. Sudheera  Jayaweera</td>
                                <td>sudheera.j@medicare.lk</td>
                                <td>sudheera.j</td>
                                <td>23-06-2021</td>
                                <td>7.45 AM</td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td>Ms. Pavithra  Gunewardena</td>
                                <td>pavithra.g@medicare.lk</td>
                                <td>pavithra.g</td>
                                <td>15-09-2021</td>
                                <td>11.55 AM</td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td>Mrs. Dilana  Rajapaksa</td>
                                <td>dilana.r@medicare.lk</td>
                                <td>dilana.r</td>
                                <td>30-03-2021</td>
                                <td>6.45 PM</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Mr. Sanuja  Abeysekera</td>
                                <td>sanuja.a@medicare.lk</td>
                                <td>sanuja.a</td>
                                <td>16-06-2021</td>
                                <td>11.34 AM</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Mr. Priyashantha  Gnanananda</td>
                                <td>priyashantha.g@medicare.lk</td>
                                <td>priyashantha.g</td>
                                <td>13-09-2021</td>
                                <td>10.39 AM</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Mr. Illangage  Malinga</td>
                                <td>illangage.m@medicare.lk</td>
                                <td>illangage.m</td>
                                <td>12-01-2021</td>
                                <td>09.12 AM</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Mr. Nadeeka  Gunewardena</td>
                                <td>nadeeka.g@medicare.lk</td>
                                <td>nadeeka.g</td>
                                <td>23-10-2021</td>
                                <td>06.19 AM</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Ms. Niluka  Lankage</td>
                                <td>niluka.l@medicare.lk</td>
                                <td>niluka.l</td>
                                <td>06-12-2021</td>
                                <td>10.12 AM</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Ms. Lochana  Dahanayake</td>
                                <td>lochana.d@medicare.lk</td>
                                <td>lochana.d</td>
                                <td>09-05-2021</td>
                                <td>09.54 AM</td>
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