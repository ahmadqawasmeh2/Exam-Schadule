<!DOCTYPE html>
<html>
<head>
	<title>Main Page</title>
	<style type="text/css">
		.btn.btn-primary {
    border-color: #3472F7;
    color: #fbfbfb;
    background-color: #3472f7;
    width: 250px;
    margin-bottom: 20px;
    margin-left: 200px;
    margin-top: 20px;

}
	</style>
</head>
<body>
<?php include 'header.php';?>
<div class="row">
	<div class="col-4-lg">
							<form >
							<button style="height: 72px;  width: 69%;" type="button" class="btn btn-primary"><strong><em>Fill & Genaret</em></strong></button>
						</form>
				<form action="baking.php" method="post">
				<button style="height: 72px;  width: 69%;" type="button" class="btn btn-primary" name="Backup"><strong><em>Backup</em></strong></button>
			</form>
	</div>
	<div class="col-4-lg">
				<form action="restore.php" method="post">
				<button style="height: 72px; width: 69%;" type="button" class="btn btn-primary" name="restore"><strong><em>Restors</em></strong></button>
			   </form>
						<form>
						<button style="height: 72px;  width: 69%;" type="button" class="btn btn-primary"><strong><em>Delet Table</em></strong></button>
					</form>
	</div>
</div>

<?php include 'slidebar.php';?>
</body>
</html>