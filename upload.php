<?php
$filename = $_FILES['archivo']['name'];
$filetmpname = $_FILES['archivo']['tmp_name'];
$filetype = $_FILES['archivo']['type'];
$filesize = $_FILES['archivo']['size'];
echo "el nombre: ".$filename;
echo "nombre tmp: ".$filetmpname;
echo "tipo: ".$filetype;
echo "tamaño: ".$filesize;
$imagen = "img/".$filename;
if($filetype == "image/jpeg" && $filesize <=2000000){
	move_uploaded_file($filetmpname,$imagen);
	echo "<img src='$imagen' width=80% height=80% />";
}
else{
	echo "la imagen no cumple con lo solicitado";
}
?>
