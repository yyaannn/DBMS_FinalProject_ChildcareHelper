<?php 
  $con = mysqli_connect ('localhost', 'root', '', 'new_insertion', 3307);
  if (!$con)
  {
    echo 'not connected to server';
  }
  mysqli_select_db($con, 'new_insertion') or die(mysqli_error($con));
    
  $Comment = $_POST['comment'];

  function getPosts()
  {
    $posts = array();
    $posts[0] = $_POST['機構名稱'];
    return $posts;
  }

  if (isset($_POST['insert'])) {
    
    $data = getPosts();

    $existing_Query = "SELECT * FROM `彰化縣托嬰中心評價` WHERE `機構名稱`='$data[0]' OR `評價`='$Comment' ";
    $existing_Result = mysqli_query($con, $existing_Query);

    $insert_Query = "INSERT INTO `彰化縣托嬰中心評價` (`機構名稱`,`評價`) VALUES ('$data[0]', '$Comment')";
    $insert_Result = mysqli_query($con, $insert_Query);
    if ($insert_Result) {
      echo "<script>
              alert('成功新增評論!');
              window.location='comment.php';
            </script>";
    } else {
      echo "<script>
              alert('無法新增評論!');
              window.location='comment.php';
            </script>";
    }
  }
?>