<?php
error_reporting(E_ERROR | E_PARSE);
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["foto_sub"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "El archivo es una imagen - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "La foto ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " ha sido subido.";
  } else {
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- importamos las fuentes de google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <link href="css-train-404-page/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- cierre importe de fonts -->
    <link rel="icon" type="image/x-icon" href="img/logo-gh.svg">

    <title>Economic Rats | Create account</title>

    <link rel="stylesheet" href="./assets/css/create_account.css">
</head>

<body>
    <div class="login">
        <div class="form-container">
            <h1 class="title">¿Cúal es tu nombre?</h1>
            <form action="create_account.php" method="post" enctype="multipart/form-data">
                    <label for="photo" class="label">Seleccione la imagen para cargar:</label>
                    <div class="col-xs-6" style="    display: flex;
    flex-direction: column;
    align-content: center;
    flex-wrap: wrap;">
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                    <div class="col-xs-6" style="    display: flex;
    flex-direction: column;
    align-content: center;
    flex-wrap: wrap;">
                        <input class="btn btn-outline-light" type="submit" value="Upload Image" name="foto_sub">
                    </div>
                </form>
            <form action="../reminde/php/Ejecucion.php" method="post" class="form">
                <div>
                <label  for="name" class="label">Subir imagen y aparecera su nombre:</label>
                    <input name="foto" id="foto" type="text" value="<?php echo htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]))?>" class="input input-name" readonly="" required>
                    
                    <label  for="name" class="label">Fullname</label>
                    <input type="text" name="name" id="name" placeholder="Cristiano Ronaldo dos Santos Aveiro" class="input input-name" required>

                    <label for="email" class="label">Correo</label>
                    <input type="text" name="email" id="email" placeholder="example@example.com" class="input input-email" required>

                    <label for="password" class="label">Contraseña</label>
                    <input type="password" name="password" id="password" placeholder="*********" class="input input-password" required>

                    <label for="username" class="label">Username</label>
                    <input type="text" name="username" id="username" placeholder="elbicho7" class="input input-name" required>

                    <label for="country" class="label">País</label>

                    <select name="country" id="country" class="country">
                    <?php
        include('Global/conexion.php');
        global $user;
        $user = $_GET['email'];
        $consulta = $conexion->query("SELECT * FROM `paises`;");
        while ($fila = $consulta->fetch_array()) {
        ?>      
                        <option value="<?php echo $fila['id_pais'];?>"><?php echo $fila['pais'];?></option>
           <?php  
                    }
                    ?>               
                    </select>

                    <!-- <label for="country" class="label">País</label>
                    <input type="text" id="country" placeholder="Perú" class="input input-email">

                    <label for="phone" class="label">Teléfono</label>
                    <input type="text" id="phone" placeholder="952254854" class="input input-email"> -->
                </div>
                

                <input type="submit" name="registrar" value="Create account" class="primary-button login-button">
            </form>
            

        </div>
    </div>
</body>

</html>