<?php include 'session.php';?>
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
            padding-left: 20px;
            padding-right: 20px;
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
						<h2 class="text-black font-w600">Assigning New Jobs</h2>
						<h4 class="text-primary mb-0 ">Administrator | Kamal Rajapakshe</h4>
					</div>
				</div>
                <div class="row">
        			<div class="col-xl-8 col-sm-3">
				        <div class="card">
					        <div class="card-body">
                                <form method="POST" action="data-job.php">
                                    <div class="form-group">
                                        <label class="mb-1 text-black"><strong>Job ID</strong></label>
                                            <input type="text" 
                                                name="jobID"
                                                class="form-control" 
                                                required
                                                placeholder="enter Job ID">
                                    </div>  
                                    <div class="form-group">
                                        <label class="mb-1 text-black"><strong>Job Title</strong></label>
                                            <input type="text" 
                                                name="jobtitle"
                                                class="form-control" 
                                                required
                                                placeholder="enter Job title">
                                    </div> 
                                    <div class="form-group">
                                        <label class="mb-1 text-black"><strong>Assign To</strong></label>
                                            <input type="text" 
                                                name="employee"
                                                class="form-control" 
                                                required
                                                placeholder="enter Employee Name">
                                    </div> 
                                    <div class="form-group">
                                        <label class="mb-1 text-black"><strong>Deadline</strong></label>
                                            <input type="text" 
                                                name="deadline"
                                                class="form-control"
                                                required 
                                                placeholder="enter Deadline Date">
                                    </div> 
    
                                    <div class="text-center mt-4">
                                        <a href="userclick_details.php">
                                            <button
                                                type="submit"
                                                style="height:58px; width:190px;"
                                                class="
                                                    btn btn-outline-danger
                                                    px-8
                                                    my-2
                                                    ml-0 ml-sm-1
                                                    text-center
                                                    "
                                                name="newjob"
                                                >
                                                <b><xyz style="font-size:20px">Assign Job</xyz></b>
                                            </button>
                                        </a>
                                    </div>
                                </form>
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