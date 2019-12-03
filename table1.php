 
 <?php

        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 100;
        $offset = ($pageno-1) * $no_of_records_per_page;

        $conn=mysqli_connect("localhost","root","123456789","exam");
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }

        $total_pages_sql = "SELECT COUNT(*) FROM huson_2019";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
    $TABLE="<table align='center' border='1px' id='tablehtm'>
  <thead '>
    <tr>
      <th>ID</th>
      <th>Number_Student</th>
      <th>Name_Student</th>
       <th>sub_id</th>
        <th>sub_name</th>
         <th>class</th>
          <th>path of university</th>
           <th>lab_no</th>
            <th>lab_name</th>
             <th>Teach_name</th>
    </tr>
</thead>
           <tfoot>
           <tr>
      <th>ID</th>
      <th>Number_Student</th>
      <th>Name_Student</th>
       <th>sub_id</th>
        <th>sub_name</th>
         <th>class</th>
          <th>path of university</th>
           <th>lab_no</th>
            <th>lab_name</th>
             <th>Teach_name</th>
    </tr>
            </tfoot>
                               ";



        $sql = "SELECT * FROM huson_2019 LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($res_data)){
             $TABLE=$TABLE .
                    "<tr>
                     <td>".$row["Id"]."</td>
                   <td>".$row["stud_id"]."</td>
                   <td>".$row["stud_name"]."</td>
                    <td> ".$row["sub_id"]."</td>
                   <td>".$row["sub_name"]."</td>
                    <td> ".$row["class"]."</td>
                   <td>".$row["major"]."</td>
                    <td> ".$row["lab_no"]."</td>
                   <td>".$row["lab_name"]."</td>
                    <td> ".$row["teach_name"]."</td>
                 </tr>";   
        }
         $TABLE=$TABLE."</table>";
     
        mysqli_close($conn);
    ?>

<html>
<head>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<title>Table</title>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet"href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">

<script type="text/javascript" 

src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript"src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        
<style type="text/css">


  #table-wrapper {
  position:relative;
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
 
}
#table-scroll {
  height:1000px;
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
#table-wrapper thead tr th
{
    padding-top: 12px;
    padding-bottom: 12px;
   padding: 5px;
   background-color: #5ea5467d;
}
#table-wrapper tfoot tr th
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
#table-wrapper table thead th .text {
  position:absolute;   
  top:-20px;
  z-index:2;
  height:20px;
  width:35%;
  border:1px solid red;
}

</style>
</head>
<body>
	<?php include 'header -table.php'; ?>
  <br><br>
    <div>
          <ul class="pagination" style="margin-left:53px;">
  
        <li ><a href="?pageno=1" style=" color: #67b16d;"><em><strong>First</em> </strong></a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a  style=" color: #67b16d;"href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>"><em><strong>Prev</em> </strong></a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a  style=" color: #67b16d;" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>"><em><strong>Next</em> </strong></a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>"style="color: #67b16d;"><em><strong>Last</em> </strong></a></li>
    </ul>
        </div>
 <div id="table-wrapper" style="margin-top: -38px;">
    <div id="table-scroll">
<?php echo  $TABLE;?>  
</div>
</div>
         <div>
          <ul class="pagination" style="margin-left:805px;margin-top: 0px;">
  
        <li ><a href="?pageno=1" style=" color: #67b16d;"><em><strong>First</em> </strong></a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a  style=" color: #67b16d;"href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>"><em><strong>Prev</em> </strong></a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a  style=" color: #67b16d;" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>"><em><strong>Next</em> </strong></a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>"style="color:#67b16d;"><em><strong>Last</em> </strong></a></li>
    </ul>
        </div>
<?php include 'slidebar.php'; ?>

</body>
</html>