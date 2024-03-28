<?php
   include_once("header.php");
   include_once("navbar.php");
?>
<html>
  <head>
    <style>
    body {
      background-image: url();
      background-color: white;
    }
    th {
      text-align: center;
    }
    tr {
      height: 30px;
    }
    td {
      padding-top: 5px;
      padding-left: 20px; 
      padding-bottom: 5px;  
      height: 20px;
    }
    </style>
  </head>
  <body>
    <br>
    <div class="container">
      <?php
        echo "<tr>
              <td>";
        // your database connection
        $host       = "localhost"; 
        $username   = "root"; 
        $password   = "";
        $database   = "new_insertion"; 
        $port       = 3307;

        // select database
        $connect=mysqli_connect($host,$username,$password,$database,$port) or die(mysqli_error($connect)); 
        mysqli_select_db($connect,$database,) or die(mysqli_error($connect)); 

        $query = ("SELECT * FROM 彰化縣托嬰中心");
        $result = mysqli_query($connect,$query) or die(mysqli_error($connect));
        echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                <tr>
                    <th>機構名稱</th>
                    <th>地址</th>
                    <th>電話</th>
                    <th>核定收托人數</th>
                    <th>我的最愛</th>
                </tr>";
        while($row = mysqli_fetch_array($result))
        {
        echo "<tr>";
        echo "<td>" . $row['機構名稱'] . "</td>";
        echo "<td>" . $row['地址'] . "</td>";
        echo "<td>" . $row['電話'] . "</td>";
        echo "<td>" . $row['核定收托人數'] . "</td>";
        echo "<td><form class='form-horizontal' method='post' action='add_lovelist_chung.php'>
        <input name='babycenter_id' type='hidden' value='".$row['babycenter_id']."';>
        <input type='submit' class='btn btn-success' name='Add' value='Add'>
        </form></td>";
        echo "</tr>";
        }
        echo "</table>";

        echo "</td>           
              </tr>";
        echo "</div>";

        // delete record
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
          echo '<script type="text/javascript">
                  alert("row Successfuly Added");
                  location="list.php";
                </script>';
        }
        if(isset($_POST['babycenter_id']))
        {
          $babycenter_id = mysqli_real_escape_string($connect,$_POST['babycenter_id']);
          $sql = mysqli_query($connect,"DELETE FROM 彰化縣托嬰中心 WHERE babycenter_id='$babycenter_id'");
        if(!$sql)
        {
          echo ("Could not delete rows" .mysqli_error($connect));
        }
      
        }
      ?>
    </div>
  </body>
</html>
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");
?>