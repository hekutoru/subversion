<html>
<head>
<title>Numero Menor</title>
</head>
<body>
<?php
// Comentario del proyecto 1
if (isset($_REQUEST['numeros'])){
echo "el menor de entre ";
foreach($_REQUEST['numeros'] as $num){
echo " {".$num."}";
}
$menor = asort($_REQUEST['numeros']);
echo $menor;
}
//comentario en el proyecto2
//Comentario añadido despues
?>
<br><br><br>
<form action="pr03.php">
<input type="number" name="numeros[]" required />
<input type="number" name="numeros[]" required />
<input type="number" name="numeros[]" required />
<input type="number" name="numeros[]" required />
<input type="number" name="numeros[]" required />
<input type="number" name="numeros[]" required />
<input type="number" name="numeros[]" required />
<input type="number" name="numeros[]" required />
<input type="number" name="numeros[]" required />
<input type="number" name="numeros[]" required />

<br>
<button type="submit"> Dame el mnor</button>
</form>
</body>
</html>
