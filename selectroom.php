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
      <th>Room_Id</th>
      <th>Room Name</th>
      <th>Room capacity</th>
     <th>class</th>
    </tr>
</thead>";

$sql="SELECT * FROM room";
$result=$conn->query($sql);
if($result -> num_rows>0)
{   
	//echo" <strong><em>.some data selected</em></strong>" ."<br>";
echo"<br>";
	
	while($row=$result -> fetch_assoc())
{
		$TABLE=$TABLE .
		"<tr>
                    <td><".$row['Room_Id']."</td>
                    <td><". $row['labname'].";</td>
                    <td>< ".$row['Room capacity'].";</td>
                    <td>< ".$row['class'].";</td>
                    
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
header("location:Room.php")

?>