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
			.outer {
				display: flex;
				padding: 10px;
			}
		</style>
	</head>
	<body>
		<div align="center">
			<legend>托嬰中心列表</legend>
		</div>
		<div align="center">          
			<h3>嘉義市</h3>
			<div class="outer">
				<iframe src="https://www.google.com/maps/d/u/0/embed?mid=19dfPF4uTZk35je2QPwLd9S1LJz2_xCA&ehbc=2E312F"  style="width:25%; height:200px; position: sticky; top: 50px; left: 0%;"></iframe>
				<?php
				include_once("bc_chia_list.php");
				?>
			</div>
		</div>
		<div align="center">          
			<h3>彰化縣</h3>
			<div class="outer">
				<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1unGTXeNAYZEoOFhCAdtlL1TbGBeVX3o&ehbc=2E312F" style="width:25%; height:200px; position: sticky; top: 50px; left: 0%;"></iframe>
				<?php
					include_once("bc_chung_list.php");
				?>
			</div>
		</div>
	</body>
</html>
			
<?php
   include_once("footer.php");
   include_once("navbar.php");
?>