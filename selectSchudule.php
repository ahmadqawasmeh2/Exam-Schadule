
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
	echo" <strong><em>.all good </em></strong>"  ."<br>";


	$TABLE="<table align='center' border='1px'>
<thead>
    <tr>
      <th>Schedule_Id</th>
      <th>student_Id</th>
     <th>Course_Id</th>
       <th>Course_Section_Id</th>
       <th>Teacher_Id</th>
       <th> Stuent_Course_Section_Id</th>
       <th>path of university</th>
      <th>Exeam_Table_time</th>
    </tr>
</thead>";

$sql="SELECT * FROM schedule";
$result=$conn->query($sql);
if($result -> num_rows>0)
{   
	//echo" <strong><em>.some data selected</em></strong>" ."<br>";
echo"<br>";
	
	while($row=$result -> fetch_assoc())
{
		$TABLE=$TABLE .
		"<tr>
                    <td><".$row['Schedule_Id']."</td>
                    <td><". $row['stud_IdIndex'].";</td>
                    <td>< ".$row['Course_Id'].";</td>
                    <td>< ".$row['Co_Se_Id'].";</td>
                    <td>< ".$row['Lecture_Id'].";</td>
                    <td>< ".$row['Stu_Cour_Section_Id'].";</td>
                    <td>< ".$row['paofuniv_Id'].";</td>
                    <td>< ".$row['Extble_Id'].";</td>

                </tr>";
	
	//echo $row ['id']."<br>".$row['Name'] ."<br>".$row['phone'] ."<br>".$row['Email']."<br>";
		
}	

                $TABLE=$TABLE."</table>";
}

else
{
	//echo"no data"."<br>";
}

$conn->close;	
}	
header("location:Schudule.php")

?>


