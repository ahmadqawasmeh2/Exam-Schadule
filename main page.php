
<!DOCTYPE html>
<html>
<head>
	<title>Main Page</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	
	<style type="text/css">

		.btn.btn-primary {
    border-color:#1e7743bd;
    color: black;
   background: linear-gradient(-135deg, #00861ed1, #0e3a0fba);

    width: 250px;
    margin-bottom: 20px;
    margin-left: 200px;
    margin-top: 20px;
    border-radius: 15px 45px;
     font-size: 180%;


}
.btn.btn-primary:hover,.btn-primary:active {
   background:#439057a1;
     outline:none;
      border-color:#1e7743bd;
       color: #fbfbfb;
}

	</style>
</head>
<body>  
<?php
if ($_SESSION['type']=='admin')
	{header("location: main page.php"); } ?>
 
 <?php include 'header.php';?>
 <br><br>
<div class="row">
	<div class="col-4-lg">
						
							<button style="height: 72px;  width: 69%;" type="button" class="btn btn-primary"><strong><em>Schedule join exams</em></strong></button>

							<button style="height: 72px;  width: 69%;" type="button" class="btn btn-primary"><strong><em>Schedule exams single courses</em></strong></button>

							<button style="height: 72px;  width: 69%;" type="button" class="btn btn-primary"><strong><em>Common Materials</em></strong></button>
					 
				<a href="baking.php">
				<button style="height: 72px;  width: 69%;" type="button" class="btn btn-primary" name="Backup"><strong><em>Backup</em></strong>
	
			</button>
			 </a>
	</div>
	<div class="col-4-lg">
				<a href="restore.php">
               
				<button style="height: 72px; width: 69%;" type="button" class="btn btn-primary" name="restore"><strong><em>Restors</em></strong>

				</button>
			  </a>
						<a href="del.php">
						<button style="height: 72px;  width: 69%;" type="button" class="btn btn-primary" name="delet"><strong><em>Delet Table</em></strong></button>
					</a>
	</div>
</div>



<?php include 'slidebar.php';?>


</body>
</html>