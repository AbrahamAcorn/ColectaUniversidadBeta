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
                                <h2 class="fw-bold mb-0 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Por favor, ingrese su Usuario y Contraseña!</p>
                
                                <form method="post" action="../php/validar_usuario.php">
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" id="caja_usuario" name="caja_usuario" class="form-control form-control-lg"/>
                                        <label class="form-label" for="caja_usuario">Usuario</label>
                                    </div>
                    
                                    <div class="form-outline form-white mb-0">
                                        <input type="password" id="caja_psw" name="caja_psw" class="form-control form-control-lg" />
                                        <label class="form-label" for="caja_psw">Contraseña</label>
                                    </div>
                    
                                    <p class="small mb-4 pb-lg-1">
                                        <a class="text-white-50" href="">¿Olvidaste tu Contraseña?</a>
                                    </p>
                    
                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Iniciar Sesion</button>
                    
                                </form>
                            <div>
                                <p class="mb-0">¿No tienes una cuenta?
                                    <a href="registro.html" class="text-white-50 fw-bold">Registrate</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>