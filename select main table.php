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


	$TABLE="<table id='dtVerticalScrollExample' class='table table-striped table-bordered table-sm' cellspacing='0' width='100%''>
       <thead>
            <tr>
              <th class='th-sm'>Sub_Id
              </th>
              <th class='th-sm'>Sub_Name
              </th>
              <th class='th-sm'>Class
              </th>
              <th class='th-sm'>Student_Id
              </th>
              <th class='th-sm'>Student_Name
              </th>
              <th class='th-sm'>Major
              </th>
			   <th class='th-sm'>Lab_Number
              </th>
			   <th class='th-sm'>Lab_Name
              </th>
			   <th class='th-sm'>Teacher_Name
              </th>
            </tr>
          </thead>";

$sql="SELECT * FROM huson_2019";
$result=$conn->query($sql);
if($result -> num_rows>0)
{   
	echo" <strong><em>.some data selected</em></strong>" ."<br>";
echo"<br>";
	
	while($row=$result -> fetch_assoc())
{
		$TABLE=$TABLE .
		" <tr>
              <td>".$row["sub_id"]."</td>
              <td>".$row["sub_name"]."</td>
              <td>".$row["class"]."</td>
              <td>".$row["stud_id"]."</td>
              <td>".$row["stud_name"]."</td>
              <td>".$row["major"]."</td>
              <td>".$row["lab_no"]."</td>
              <td>".$row["lab_name"]."</td>
              <td>".$row["teach_name"]."</td>
            </tr>";
	
	//echo $row ['id']."<br>".$row['Name'] ."<br>".$row['phone'] ."<br>".$row['Email']."<br>";
		
}	
		

                $TABLE=$TABLE."</table>";
}

else
{
	echo"no data"."<br>";
	

}
$conn->close;
	
	
	
}	

?>