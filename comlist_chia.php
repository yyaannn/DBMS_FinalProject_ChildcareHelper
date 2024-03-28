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

        $query = ("SELECT * FROM `嘉義市托嬰中心評價` order by 機構名稱" );
        $result = mysqli_query($connect,$query) or die(mysqli_error($connect));
        echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                <tr>
                  <th>機構名稱</th>
                  <th>評價</th>
                  <th>更新評論</th>
                  <th>刪除評論</th>
                </tr>";
        while($row = mysqli_fetch_array($result)) {
          echo "<tr>";
          echo "<td>" . $row['機構名稱'] . "</td>";
          echo "<td>" . $row['評價'] . "</td>";
          echo "<td  style='width: 80px;>
                  <form class='form-horizontal' method='post' action='com_update_chia.php'>
                    <input name='comment_id' type='hidden' value='".$row['comment_id']."';>
                    <input type='submit' class='btn btn-primary' name='update' value='update'>
                  </form>
                </td>";
          echo "<td  style='width: 80px;>
                  <form class='form-horizontal' method='post' action='comlist_chia.php'>
                    <input name='comment_id' type='hidden' value='".$row['comment_id']."';>
                    <input type='submit' class='btn btn-danger' name='delete' value='Delete'>
                  </form>
                </td>";
          echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
        echo "</td>           
              </tr>";

        if(isset($_POST['delete'])) {
          $comment_id = mysqli_real_escape_string($connect,$_POST['comment_id']);
          $sql = mysqli_query($connect,"DELETE FROM 嘉義市托嬰中心評價 WHERE comment_id='$comment_id'");
          if(!$sql) {
            echo ("Could not delete rows" .mysqli_error($connect));
          }  
          echo '<script>
                  alert("成功刪除評論!");
                  location="comment.php";
                </script>';
        }
        else if (isset($_POST['update'])) {
          $comment_id = mysqli_real_escape_string($connect, $_POST['comment_id']);
          header("Location: com_update_chia.php?comment_id=" . $comment_id);
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