<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navbar.php");
?>

<html>
    <head>
        <style>
            body {
                background-color: white;
            }
        </style>
    </head>
    <body>
        <div align="center">
            <legend>小測驗</legend>
        </div>
        <div align="center">
            <iframe src="https://www.liqform.com/v/n5j8h6i4" frameborder="0" width="80%" height="1100"></iframe>	
        </div>
    </body>
</html>

<?php
   include_once("footer.php");
   include_once("navbar.php");
?>