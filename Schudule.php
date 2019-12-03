<?php

if(isset($_POST['search']))
{
    $Search = $_POST['Search'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM 'schedule' WHERE CONCAT('Schedule_Id') LIKE '%".$Search."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `schedule`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "123456789", "exam");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<title>Student</title>
	<style>
		  .btn.btn-primary {
      border-color:#1e7743bd;
    color: black;
   background: linear-gradient(-135deg, #00861ed1, #0e3a0fba);
    width: 250px;
    margin-bottom: 20px;
    margin-left: 200px;
    margin-top: 20px;
    border-radius: 25px;
     font-size: 180%;
     margin-right: 100px;

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
  #Show
{
   margin-top: -93px;
}

	</style>
</head>
<body>
<?php include 'header - Schudule.php';?>
 
					
 
 	
 		<br> <br><br> <br><br> <br>
 	<form method="POST" action="Schudule.php">	
<div align="center" class="Schudule" style="margin-right:100px;margin-top: -105px;">
<h4 >  <label >Schedule_Id <input  type="text" name="search"></label>   
</div>
 </h4>
  <br>



<div class="row">
	<div class="col-4-lg" align="center">
		<input style="height: 55px;  width: 18%"; type="submit" class="btn btn-primary" value="Search">

		</form>
		 <?php include 'exportpdf.html'; ?>

    <input style="height: 55px;  width: 18%"; type="submit" class="btn btn-primary" value="Export Pdf" onclick="printPage()">
	</div>
	
</div>

<form method="POST" action="selectSchudule.php">
 <div align="center">
<input style="height: 55px;  width: 18%"; type="submit" class="btn btn-primary"id="Show" value="Show All">
</div>
</form>
<div style="overflow-x:auto;">
   <div id="table-wrapper">
    <div id="table-scroll">
  <table align="center" border="1px ">
<thead>
  
    <tr>
      
      <th>Name-Student</th>
      <th>Number-Student</th>
     <th>Name-Course</th>
       <th>Room</th>
       <th>Time-Exam</th>
       <th>Day-Exam</th>
       <th>Date-Exam</th>
      <th>Teacher-Name</th>
      
    
    </tr>
</thead>
<tbody>
      <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['Schedule_Id'];?></td>
                    <td><?php echo $row['stud_IdIndex '];?></td>
                      <td><?php echo $row['Course_Id'];?></td> 
                       <td><?php echo $row['Co_Se_Id'];?></td>
                       <td><?php echo $row['Lecture_Id'];?></td>
                          <td><?php echo $row['Stu_Cour_Section_Id'];?></td>
                             <td><?php echo $row['paofuniv_Id'];?></td>
                                <td><?php echo $row['Extble_Id'];?></td>

                </tr>
                <?php endwhile;?>
   

   </tbody>
  </table>
</div>
</div>
</div>
<?php include 'slidebar.php';?>

</body>
</html>