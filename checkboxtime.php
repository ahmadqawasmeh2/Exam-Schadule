<?php  

$host="localhost";
$username="root";   
$pass="123456789";  
$db_name="exam";  
 
$con=mysqli_connect("$host", "$username", "$pass","$db_name")or die("cannot connect");

    


 if(isset($_POST['save']))  
{  
	if (isset($_POST['Saturday'])){	$Saturday=$_POST['Saturday'];}else{$Saturday=0;}
	if (isset($_POST['Sunday'])){	$Sunday=$_POST['Sunday'];}else{$Sunday=0;}
	if (isset($_POST['Monday'])){	$Monday=$_POST['Monday'];}else{$Monday=0;}
	if (isset($_POST['Tuesday'])){	$Tuesday=$_POST['Tuesday']; }else{$Tuesday=0;}
	if (isset($_POST['Wednesday'])){	$Wednesday=$_POST['Wednesday']; }else{$Wednesday=0;}
	if (isset($_POST['Thursday'])){	$Thursday=$_POST['Thursday']; }else{$Thursday=0;}
		 
	$timeid=$_POST['timeid'];

	  
	
 
//$SQL="INSERT INTO inserttime(Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday) 
//VALUES($Saturday,$Sunday,$Monday,$Tuesday,$Wednesday,$Thursday)"; 
	//$SQL="update `inserttime` SET (`Saturday`, `Sunday`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`) VALUES ($Saturday,$Sunday,$Monday,$Tuesday,$Wednesday,$Thursday) where `time_id`=$timeid ";

	$SQL="UPDATE `inserttime` SET `Saturday` = $Saturday, `Sunday` = $Sunday, `Monday` =$Monday, `Tuesday` = $Tuesday, `Wednesday` = $Wednesday, `Thursday` = $Thursday WHERE `inserttime`.`time_id` = $timeid;";
$sql11=mysqli_query($con,$SQL);

  
if($sql11==1)  
   {  
      echo'<script>alert("UPDATE Successfully")</script>';  
   }  
else  
   {  
   	echo'<script>alert("Failed To UPDATE")</script>';  
    }  
} 

?>  
<html>
<head>
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<title>Time</title>
	<style type="text/css">
			.btn.btn-primary {
     border-color:#1e7743bd;
    color: black;
   background: linear-gradient(-135deg, #00861ed1, #0e3a0fba);
    width: 190px;
    
    margin-left: 100px;
   
    border-radius: 25px;
     font-size: 180%;
     margin-right: 50px;

}
.btn.btn-primary:hover,.btn-primary:active {
   background:#439057a1;
     outline:none;
      border-color:#1e7743bd;
       color: #fbfbfb;
}
#table-wrapper {
  position:relative;
}
#table-scroll {
  height:500px;
  overflow:auto;  
  margin-top:20px;
  width:90%;
  margin-left: 5%;
}

#table-wrapper table {
  width:100%;

}
#table-wrapper table * {
  color:black;
}
#table-wrapper table thead th .text {
  position:absolute;   
  top:-20px;
  z-index:2;
  height:20px;
  width:35%;
  border:1px solid red;
}
#table-wrapper thead tr th
{
    padding-top: 12px;
    padding-bottom: 12px;
   padding: 5px;
   background-color: #5ea5467d;
}
#table-wrapper tbody tr td
{
    padding-top: 12px;
    padding-bottom: 12px;
   padding: 5px;}
	</style>
</head>
<body>
	<?php include 'header - Time.php';?>
	
	
                      <div id="table-wrapper">
					 <div id="table-scroll">
							<table  align="center" border="1px">
							<thead>
							  <tr style="text-align:center">
								<th width="20%"  style="text-align:center">Time</th>
								<th style="text-align:center">Saturday</th>
								<th style="text-align:center">Sunday</th>
								<th style="text-align:center">Monday</th>
								<th style="text-align:center">Tuesday</th>
								<th style="text-align:center">Wednesday</th>
								<th style="text-align:center">Thursday</th>
								<th style="text-align:center">action</th>
								
							  </tr>
							</thead>
							
		<?php
				$conn=mysqli_connect("$host", "$username", "$pass","$db_name")or die("cannot connect");
				$query=mysqli_query($conn,"select * from timecheckbox")or die(mysqli_error());
					
				while($row=mysqli_fetch_array($query)){
					$id=$row['timechek_id'];
					$query2=mysqli_query($conn,"select * from inserttime where time_id =$id ")or die(mysqli_error());
					$row2=mysqli_fetch_array($query2);
						if ($row2['Saturday']==1)
							{$Sat='checked=""'; $sat1=0;}
						else{$Sat=""; $sat1=1;}

						if ($row2['Sunday']==1)
							{$Sun='checked=""'; $sun1=0;}
						else{$Sun=""; $sun1=1;}

                          if ($row2['Monday']==1)
							{$mon='checked=""'; $mon1=0;}
						else{$mon=""; $mon1=1;}
                        

                        if ($row2['Tuesday']==1)
							{$tue='checked=""'; $tue1=0;}
						else{$tue=""; $tue1=1;}

                        
                        if ($row2['Wednesday']==1)
							{$wed='checked=""'; $wed1=0;}
						else{$wed=""; $wed1=1;}

						 if ($row2['Thursday']==1)
							{$thu='checked=""'; $thu1=0;}
						else{$thu=""; $thu1=1;}



						date_default_timezone_set("Asia/Amman");
						$s=strtotime($row['time_start']);
						$e=strtotime($row['time_end']);
						
						$start=date("h:i:sa",$s);
						$end=date("h:i:sa",$e);
		?>         <form action="#" method="POST"  enctype="multipart/form-data">  
        <input type="hidden"  name="timeid" value="<?php echo $id;?>">

							 <tr style="text-align:center">
                        <td><?php echo $start."-".$end;?></td>

                        <td><input type="checkbox" name="Saturday"value="<?php echo $sat1;?>" <?php echo $Sat;?>  style="width: 20px; height: 20px; ">
                        </td>

                        <td><input type="checkbox" name="Sunday" value="<?php echo $sun1;?>"  <?php echo $Sun;?>  style="width: 20px; height: 20px; ">
                        </td>

                        <td><input type="checkbox" name="Monday" value="<?php echo$mon1;?>"  <?php echo $mon;?> style="width: 20px; height: 20px; ">
                        </td>

                        <td><input type="checkbox" name="Tuesday" value="<?php echo $tue1;?>"<?php echo $tue;?> style="width: 20px; height: 20px; ">
                        </td>

                        <td><input type="checkbox" name="Wednesday"value="<?php echo $wed1;?>" <?php echo $wed;?> style="width: 20px; height: 20px; ">
                        </td>

                        <td><input type="checkbox" name="Thursday" value="<?php echo $thu1;?>"<?php echo $thu;?> style="width: 20px; height: 20px;  ">
                        </td>

                        <td>
                       <input type="submit" value="save" name="save" class="btn btn-primary">
                       </td>
                       </tr>
                       
                       </form>
							
		<?php }?>					  
		             </table>    
						
<?php include 'slidebar.php';?>
					
						
		</body>
</html>