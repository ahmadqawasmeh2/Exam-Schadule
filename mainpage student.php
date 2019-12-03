<?php

if(isset($_POST['search']))
{

    $search = $_POST['search'];

    $query = "SELECT * FROM `huson_2019` WHERE stud_id=$search";


   
    $search_result = filterTable($query);

   
}
// else {
  //  $query = "SELECT * FROM `student`";
 //   $search_result = filterTable($query);
//}


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
  <title>Student</title>
  <style>
      .btn.btn-primary {
     border-color:#1e7743bd;
    color: black;
   background: linear-gradient(-135deg, #00861ed1, #0e3a0fba);
    width: 250px;
    margin-bottom: 20px;
    margin-left: 100px;
    margin-top: 20px;
    border-radius: 25px;
     font-size: 180%;
     

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

/*.student
{
  border: 1px solid #2a2a79;
  border-radius: 70px;
}*/


  </style>

</head>
<body>
<?php include 'header - Student.php';?>
<div class="student">
                  <form method="POST" action="#">
              <div align="center" style="margin-right:100px;" >
              <h4 >  <label >Student Number <input  type="text" name="search"></label>   
              </div>
               </h4>
                <br>
              <div class="row">
                <div class="col-4-lg" align="center">
                <input  style="height: 55px;;  width: 18%";  type="submit"id="search" class="btn btn-primary" value="Search">
  
                  </form>
    
    <?php include 'exportpdf.html'; ?>

    <input style="height: 55px;  width: 18%;" type="submit" class="btn btn-primary" id="export" value="Export Pdf" onclick="printPage()">
  
      </div>
        </div>

</div>
<div style="overflow-x:auto;">
   <div id="table-wrapper">
    <div id="table-scroll">
 <table align="center" border="1px ">
<thead>
    <tr>
      <th>stud_id</th>
     <th>stud_name</th>
       <th>sub_name</th>
         <th>major</th>
          <th>lab_no</th>
            <th>teach_name</th>
    </tr>
</thead>
<tbody>
         <?php
if($search_result){
       while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                   
                    <td><?php echo $row['stud_id'];?></td>
                    <td><?php echo $row['stud_name'];?></td>
                    <td><?php echo $row['sub_name'];?></td>
                     <td><?php echo $row['major'];?></td>
                    <td><?php echo $row['lab_no'];?></td>
                     <td><?php echo $row['teach_name'];?></td>
                </tr>
                <?php endwhile;
}

   ?>

   </tbody>
  </table>
    </div>
</div>
</div>
 

<?php include 'slidebar - Student.php';?>

</body>
</html>