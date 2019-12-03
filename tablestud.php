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

        $total_pages_sql = "SELECT COUNT(*) FROM student";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
    $TABLE="<table align='center' border='1px'>
<thead>
    <tr>
      <th>stud_Id</th>
      <th>student_Number</th>
     <th>student_name</th>
    </tr>
</thead>
           <tfoot>
          <tr>
      <th>stud_Id</th>
      <th>student_Number</th>
     <th>student_name</th>
    </tr>
            </tfoot>
                               ";



        $sql = "SELECT * FROM student LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($res_data)){
             $TABLE=$TABLE .
                    "<tr>
                     <td>".$row["stud_Id"]."</td>
                   <td>".$row["stud_Num"]."</td>
                   <td>".$row["stud_name"]."</td>
                   
                 </tr>";   
        }
         $TABLE=$TABLE."</table>";
     
        mysqli_close($conn);
    ?>

