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
      <th>Lecture_Id</th>
      <th>Teachname</th>
    </tr>
</thead>";

$sql="SELECT * FROM lecture";
$result=$conn->query($sql);
if($result -> num_rows>0)
{   
	//echo" <strong><em>.some data selected</em></strong>" ."<br>";
echo"<br>";
	
	while($row=$result -> fetch_assoc())
{
		$TABLE=$TABLE .
		"<tr>
                    <td><".$row['Lecture_Id']."</td>
                    <td><". $row['Teacher'].";</td>
                   
                    
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
header("location:Teacher.php")

?>


