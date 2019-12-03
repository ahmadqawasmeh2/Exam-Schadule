<?php   
$server_name="localhost";
$user_name="root";
$password="123456789";	
$db_name="exam";

$conn=  new mysqli($server_name,$user_name,$password,$db_name);
if($conn -> connect-error)
{
	die("Error:".$conn -> connect-error);
}
else
{
	//echo" <strong><em>.all good </em></strong>"  ."<br>";


	$TABLE="<table align='center' border='1px'>
<thead>
    <tr>
      <th>Stage</th>
      <th>Majors</th>
      <th>Time_Start</th>
      <th>Time_End</th>
      <th>Teacher</th>
      <th>Days</th>
       <th>Lab</th>
        <th>Courses</th>
         <th>Class</th>
      
           <th>Houres</th>
      
    </tr>
</thead>";

$sql="SELECT * FROM computerized";
$result=$conn->query($sql);
if($result -> num_rows>0)
{   
	//echo" <strong><em>.some data selected</em></strong>" ."<br>";
echo"<br>";
	
	while($row=$result -> fetch_assoc())
{
		$TABLE=$TABLE .
		"<tr>
                    <td>".$row['Stage']."</td>
                    <td>". $row['Majors']."</td>
                    <td> ".$row['Time_Start']."</td>
                     <td> ".$row['Time-End  ']."</td>
                      <td> ".$row['Teacher']."</td>
                       <td> ".$row['Days']."</td>
                        <td>".$row['Lab']."</td>
                         <td>".$row['Courses']."</td>
                          <td>".$row['Class']."</td>
                           <td>".$row['Houres']."</td>

                </tr>";
	
	//echo $row ['id']."<br>".$row['Name'] ."<br>".$row['phone'] ."<br>".$row['Email']."<br>";
		
}	

                $TABLE=$TABLE."</table>";
}

else
{
	//echo"no data"."<br>";
}

$conn->close();	
}	


?>




<html>
<head>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<title>online-ba</title>
	<style type="text/css">
		#table-wrapper {
  position:relative;
}
#table-scroll {
  height:500px;
  overflow:auto;  
  margin-top:20px;width:90%;
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
  #Show
{
   margin-top: -93px;
}
	</style>
	
</head>
<body>
	<?php include'headeronline-ba.php';?>
        <div style="overflow-x:auto;">
   <div id="table-wrapper">
    <div id="table-scroll">
    	<?php echo $TABLE;?>
     </div>
 </div>
 <?php include 'slidebar.php'; ?>
</body>
</html>