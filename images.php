<?php

require_once 'database.php';


var_dump($_POST);
$file = $_FILES['image']['name'];

if(isset($file) && $file != ''){

    $type = reset(explode('/', $_FILES['image']['type']));


   //echo 'Type: '.$type.' Extention: '.$ext;

   if($type != 'image'){
       echo 'File must be an image';
       exit();
   }


   $binImg = file_get_contents($_FILES['image']['tmp_name']);
   //require 'images.php';
   echo '<img src="data:image/png;base64,'.base64_encode($binImg).'"/>';
    
}else echo 'No image loaded';



//echo '<img src="data:image/png;base64,'.base64_encode($binImg).'"/>';

//Para convertir los datos contenidos en el tipo de datos BLOB de vuelta en imágenes, 
//se utilizan la función base64_encode de PHP integrada.

//En este caso, imagen/png es media_type y la cadena codificada Base64 de la columna 
//product_image es base_64_encoded_data.
?>

