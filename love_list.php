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
		<!-- 標題 -->
		<div align="center">
			<legend>我的最愛-托嬰中心列表</legend>
		</div>

		<!-- 嘉義市-我的最愛-托嬰中心列表 -->
		<div align="center">          
			<div style="margin: 10px; width: fit-content;"><h2>嘉義市</h2></div>
			<div class="flex_container">
				<?php
					include_once("lovelist_chia.php");
				?>
			</div>
		</div>
		
		<!-- 彰化縣-我的最愛-托嬰中心列表 -->
		<div align="center">          
			<div style="margin: 10px; width: fit-content;"><h2>彰化縣</h2></div>
			<div class="flex_container">
				<?php
					include_once("lovelist_chung.php");
				?>
			</div>
		</div>
	</body>
</html>

<?php
   include_once("footer.php");
   include_once("navbar.php");
?>