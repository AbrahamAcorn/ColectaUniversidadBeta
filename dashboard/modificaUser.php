<?php
    session_start();
    if($_SESSION['autenticado'] == false){
        header("location:../login/login.php");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../assets/css/estilo.css"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-0 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body px-5 py-4 text-center">
                            <div class="mb-md-1 mt-md-1 pb-0">
                                <h2 class="fw-bold mb-0 text-uppercase">Registrate</h2>
                                <p class="text-white-50 mb-5">Ingresa un Usuario y Contraseña!</p>
                
                                <form method="POST" action="php/altas_usuarios.php">
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" id="caja_user" name="caja_user" class="form-control form-control-lg"/>
                                        <label class="form-label" for="caja_user">Usuario</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="caja_correo2" name="caja_correo2" class="form-control form-control-lg"/>
                                        <label class="form-label" for="caja_correo2">Mail</label>
                                    </div>
                    
                    
                                    <div class="form-outline form-white mb-0">
                                        <input type="password" id="caja_psw" name="caja_psw" class="form-control form-control-lg" />
                                        <label class="form-label" for="caja_psw">Crea una contraseña</label>
                                    </div>

                                    <div class="form-outline form-white mb-0">
                                        <input type="password" id="caja_confirm" name="caja_confirm" class="form-control form-control-lg" />
                                        <label class="form-label" for="caja_confirm">Repite tu contraseña</label>
                                    </div>
                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Registrarse</button>
                    
                                </form>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>