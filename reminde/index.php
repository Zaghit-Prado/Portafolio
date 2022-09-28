
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Economic Rats - Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- FONTS -->
    <!-- Crimson Pro -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
</head>

<body style="background-color: #010409;">
    <!--Hey! This is the original version
of Simple CSS Waves-->

    <div class="header">

        <!--Content before waves-->
        <div class="inner-header flex">
            <!--Just the logo.. Don't mind this-->

            <!-- HERE START -->
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow-2-strong" style="border-radius: 1rem; background-color: #0d1117;">
                            <div class="card-body p-5 text-center" style="padding: 30px!important;">
                                <div class="login-container-texts">
                                    <h1 class="login-container-texts__title">Bienvenido</h1>
                                    <p class="login-container-texts__subtitle">Ingresa tu datos por favor.</p>
                                </div>

                                <form action="../reminde/php/Ejecucion.php" class="form" method="POST">
                                    <label for="email" class="form__label">Correo electrónico</label>
                                    <input name="email" type="text" id="email" placeholder="example@example.com" class="form__input form__input--email">

                                    <label for="password" class="form__label">Contraseña</label>
                                    <input name="password" type="password" id="password" placeholder="*********" class="form__input form__input--password">

                                    <input type="submit" name="login" value="Ingresar" class="form__button-signin">

                                </form>

                                <div>
                                    <a href="create_account.php" class="btn btn-lg btn-block" style=" background-color: #30363d;
                                        color: #fff;
                                        border-radius: 8px;
                                        font-weight: bold;
                                        width: 50%;
                                        height: 32px;
                                        font-size: 15px;
                                    ">
                                        Registrarme
                                    </a>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--Waves Container-->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(0,0,0,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(0,0,0,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(0,0,0,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#010409"/>
                </g>
            </svg>
        </div>
        <!--Waves end-->

    </div>
    <!--Header ends-->

    <!--Content starts-->
    <div class="content flex" style="background-color: #010409; color: rgb(255, 255, 255);">
        <p>By.Team Rats | Economic Rats </p>
    </div>
    <!--Content ends-->

    <script src="./assets/js/main.js"></script>
</body>

</html>