<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Medicare Hospitals Dashboard</title>
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
            padding-left: 30px;
            padding-right: 30px;
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
						<h2 class="text-black font-w600">View Blogs</h2>
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
                                <th>Blog Title</th>
                                <th>Published Date</th>
                                <th>Views</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>Ovarian Cysts and Pregnancy: Could A Cyst Stop Me from Having a Baby?</td>
                                <td>09-11-2021</td>
                                <td>521</td>
                                <td><center><a href="javascript:void(0)" class="text-danger mb-2">
														<i class="las la-times-circle scale5"></i>
													</a><center></td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>5 Facts You Should Know Before Having a Vasectomy</td>
                                <td>06-11-2021</td>
                                <td>1065</td>
                                <td><center><a href="javascript:void(0)" class="text-danger mb-2">
														<i class="las la-times-circle scale5"></i>
													</a><center></td>

                            </tr>
                            <tr>
                                <td>03</td>
                                <td>Hospital-Based In Vitro Fertilization: What Makes IVF at Penn Medicine Different?</td>
                                <td>04-11-2021</td>
                                <td>1065</td>
                                <td><center><a href="javascript:void(0)" class="text-danger mb-2">
														<i class="las la-times-circle scale5"></i>
													</a><center></td>

                            </tr>
                            <tr>
                                <td>03</td>
                                <td>5 Myths About Polycystic Ovary Syndrome (PCOS)</td>
                                <td>03-11-2021</td>
                                <td>5469</td>
                                <td><center><a href="javascript:void(0)" class="text-danger mb-2">
														<i class="las la-times-circle scale5"></i>
													</a><center></td>

                            </tr>
                            <tr>
                                <td>04</td>
                                <td>Fertility Specialist or Ob/Gyn: Which Is Right for You?</td>
                                <td>01-11-2021</td>
                                <td>1796</td>
                                <td><center><a href="javascript:void(0)" class="text-danger mb-2">
														<i class="las la-times-circle scale5"></i>
													</a><center></td>

                            </tr>
                            <tr>
                                <td>05</td>
                                <td>Documentary Offers In-Depth Look at Fertility Treatments at Penn Medicine</td>
                                <td>30-10-2021</td>
                                <td>3465</td>
                                <td><center><a href="javascript:void(0)" class="text-danger mb-2">
														<i class="las la-times-circle scale5"></i>
													</a><center></td>

                            </tr>
                            <tr>
                                <td>06</td>
                                <td>Pick Your Battles: How to Handle Insensitive Comments About Fertility</td>
                                <td>27-10-2021</td>
                                <td>8846</td>
                                <td><center><a href="javascript:void(0)" class="text-danger mb-2">
														<i class="las la-times-circle scale5"></i>
													</a><center></td>

                            </tr>
                            <tr>
                                <td>07</td>
                                <td>Is Egg Freezing Right for You?</td>
                                <td>24-10-2021</td>
                                <td>1600</td>
                                <td><center><a href="javascript:void(0)" class="text-danger mb-2">
														<i class="las la-times-circle scale5"></i>
													</a><center></td>

                            </tr>
                            <tr>
                                <td>08</td>
                                <td>Fertility is an Equal-Opportunity Issue for Couples</td>
                                <td>20-10-2021</td>
                                <td>2468</td>
                                <td><center><a href="javascript:void(0)" class="text-danger mb-2">
														<i class="las la-times-circle scale5"></i>
													</a><center></td>

                            </tr>

                        </table>

                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

    <?php include 'footer.php';?>
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