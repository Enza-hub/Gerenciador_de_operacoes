<?php include_once"config.php";?>
<!DOCTYPE html>
<html>
<body>
<?php
$Cliente = $_POST ["Cliente"];
$Data = $_POST ["Data"];
$ValorOriginal = $_POST["ValorOriginal"];
$ValorConvertido = $_POST["ValorConvertido"];
$conn= mysqli_connect($servidor, $dbname, $dbusuario, $dbsenha);
mysqli_select_db($conn, 'dbname');
$sql = "INSERT INTO gerenciamento (Cliente, Data, ValorOriginal, ValorConvertido) VALUES ('$Cliente', '$Data', '$ValorOriginal', '$ValorConvertido')";
if (mysqli_query($conn, $sql)) {
		echo "<script>alert('Dados salvos!'); window.location= 'index.php';</script>";
	}else{

	}	
?>
</body>
</html>