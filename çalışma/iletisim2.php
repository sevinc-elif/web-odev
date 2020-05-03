<!doctype html>
<html>
<head>


</head>

<body>
<img src="hos.jpg" width="500px"><br>
	<hr>
	<table>
		<tr>
		<td>Adı Soyadı</td>
		<td>:</td>
		<td>
		<?php
		echo $_POST["adi"]."&nbsp;".$_POST["soyadi"];
		?>
		</td>
		</tr>
		
		<tr>
		<td>TC Kimlik No</td>
		<td>:</td>
		<td>
		<?php
		echo $_POST["tcno"];
		?>
		</td>
		</tr>
		
		
		<tr>
		<td>Cinsiyeti</td>
		<td>:</td>
		<td>
		<?php
		if(isset($_POST['cinsiyet']))
		{
		echo $_POST['cinsiyet'];
		}
		?>
		</td>
		</tr>
		
		
		<tr>
		<td>Yaşadığı Şehir</td>
		<td>:</td>
		<td>
		<?php
		if(isset($_POST['sehir']))
		{
		echo $_POST['sehir']."<br>";
		}
		
		?>
		</td>
		</tr>
		
	</table>
	<?php
	//echo $_GET["adi"];
	//echo "&nbsp;";
	//echo $_GET["soyadi"];
	//echo "HOSGELDINIZ".$_POST["adi"]." ".$_POST["soyadi"];

	?>
</body>

</html>