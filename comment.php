<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "header.php";
  include_once("header.php");
  include_once("navbar.php");

  // php select option value from database

  $hostname = "localhost";
  $username = "root";
  $password = "";
  $databaseName = "new_insertion";
  $port = 3307;

  // connect to mysql database

  $connect = mysqli_connect($hostname, $username, $password, $databaseName, $port);

  // mysql select query

  $query1 = "SELECT * FROM `嘉義市托嬰中心`";
  $query2 = "SELECT * FROM `彰化縣托嬰中心`";

  // for method 1

  $result1 = mysqli_query($connect, $query1);
  $result2 = mysqli_query($connect, $query2);

  // for method 2

  $options = "";
?>

<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "header.php";
  include_once("header.php");
  include_once("navbar.php");
?>

<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      body {
        background-color: white;
      }
    </style>
  </head>
  <body>
    <!-- 輸入嘉義市托嬰中心評價 -->
    <div class="container">
      <div class="row" align="center">
        <div class="col-lg-6" style="width:100%">
          <div class="jumbotron custom-junbotron" align="center">
            <form class="form-horizontal" method= "post" action = "add_com_chia.php">
              <fieldset>
                
                <!-- 標題 -->
                <legend><h3>嘉義市托嬰中心 評論區</h3></legend>

                <!-- 選擇托嬰中心 -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="機構名稱">機構名稱</label> 
                  <div class="col-md-5">
                    <select id="機構名稱" name="機構名稱" class="form-control">

                      <?php while($row1 = mysqli_fetch_array($result1)):;?>

                      <option  value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>

                      <?php endwhile;?>
                      <?php while($row1 = mysqli_fetch_array($result1)):;?>

                      <option  value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>

                      <?php endwhile;?>

                    </select>
                  </div>
                </div>

                <!-- 輸入評論 -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="comment">評論</label>  
                  <div class="col-md-5">
                    <textarea rows="5" cols="20" id="comment" name="comment" type="text" placeholder="" class="form-control input-md" required=""></textarea>
                  </div>
                </div>

                <!-- Add -->
                <div class="form-group" align="right">
                  <label class="col-md-4 control-label" for="submit"></label>
                  <div class="col-md-5">
                    <button id="submit" name="insert" class="btn btn-success"> Add</button>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- 嘉義市托嬰中心評價列表 -->
    <div align="center">
      <h3>嘉義市托嬰中心評價</h3>
      <?php
        include_once("comlist_chia.php");
      ?>
    </div>

    <!-- 輸入彰化縣托嬰中心評價 -->
    <div class="container" >
      <div class="row" align="center">
        <div class="col-lg-6" style="width:100%">
          <div class="jumbotron">
            <form class="form-horizontal" method= "post" action = "add_com_chung.php">
              <fieldset>

                <!-- 標題 -->
                <legend><h3>彰化縣托嬰中心 評論區</h3></legend>

                <!-- 選擇托嬰中心 -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="機構名稱">機構名稱</label> 
                  <div class="col-md-5">
                    <select  id="機構名稱" name="機構名稱"  class="form-control">

                      <?php while($row2 = mysqli_fetch_array($result2)):;?>

                      <option  value="<?php echo $row2[1];?>"><?php echo $row2[1];?></option>

                      <?php endwhile;?>
                      <?php while($row2 = mysqli_fetch_array($result2)):;?>

                      <option  value="<?php echo $row2[1];?>"><?php echo $row2[1];?></option>

                      <?php endwhile;?>

                    </select>
                  </div>     
                </div>

                <!-- 輸入評論 -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="comment">評論</label>  
                  <div class="col-md-5">
                    <textarea id="comment" name="comment" type="textarea" rows="5" cols="8" placeholder="" class="form-control input-md" required=""></textarea>
                  </div>
                </div>
                
                <!-- Add -->
                <div class="form-group" align="right">
                  <label class="col-md-4 control-label" for="submit"></label>
                  <div class="col-md-5">
                    <button id="submit" name="insert" class="btn btn-success"> Add</button>
                  </div>
                </div>
              </fieldset>
            </form> 
          </div>
        </div>
      </div>
    </div>
                
    <!-- 彰化縣托嬰中心評價列表 -->
    <div align="center">
      <h3>彰化縣托嬰中心評價</h3>
      <?php
        include_once("comlist_chung.php");
      ?>
    </div>
  </body>
</html> 
<?php
   include_once("footer.php");
   include_once("navbar.php");
?>