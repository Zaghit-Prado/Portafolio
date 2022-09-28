<?php
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo '
    <script>
    alert(El archivo es una imagen - " . $check["mime"] . ".";
    $uploadOk = 1;);
    </script>';
    header("create_account.php");
    $uploadOk = 1;
  } else {
    echo "El archivo no es una imagen.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Lo sentimos, el archivo ya existe.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
  echo "Lo sentimos, su archivo es demasiado grande.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Lo sentimos, solo se permiten archivos JPG, JPEG, PNG y GIF.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Lo sentimos, su archivo no fue subido.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "La foto ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " ha sido subido.";
  } else {
    echo "Lo sentimos, hubo un error al cargar su archivo.";
  }
}
?>