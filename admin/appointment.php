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
						<h2 class="text-black font-w600">Appointments</h2>
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
                                <th>Age</th>
                                <th>Telephone</th>
                                <th>Email</th>
                                <th>Date</th>
                            </tr>
							<?php 
                                include 'config.php';
                                $SQL="SELECT * FROM `appointment`";
                                $result=mysqli_query($conn, $SQL);
                                $rows=mysqli_num_rows($result);
                                if ($rows > 0) {?><tr><?php
                                    while ($row = mysqli_fetch_array($result)) {?>
                                        <td><?php echo $row['ID']; ?></td>
                                        <td><?php echo $row['patinet_name']; ?></td>
                                        <td><?php echo $row['age']; ?></td>
                                        <td><?php echo $row['telephone']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
										<td><?php echo $row['date']; ?></td>
                                    </tr>
                                    <?php
                                    }?><?php
                                }
            ?>
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