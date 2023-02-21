<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Enlaza los archivos de CSS de Bootstrap desde el CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <!-- Enlaza los archivos de FontAwes  desde el CDN -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    
    <link rel="stylesheet" href="/CURSOPHP8/login_registro/css/estilos.css">

<!-- Enlaza los archivos de JavaScript de Bootstrap desde el CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <title>Registro</title>
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center"><i class="fas fa-user mr-2"></i>Registro</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  name="login">
                            <div class="form-group">
                                <label for="username">Usuario</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"> 
                                        <span class="input-group-text material-symbols-outlined">person</span>
                                    </div>
                                    <input type="text" class="form-control" id="usuario" name="usuario" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        
                                        <span class="input-group-text material-symbols-outlined ">lock</span>
                                    </div>
                                    <input type="password" class="form-control" id="password" name="password" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password2">Repetir contraseña</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text material-symbols-outlined">lock</span>
                                </div>
                                <input type="password" class="form-control" id="password2" name="password2" >
                            </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block my-5">Registrarse</button>

                            <?php if(!empty($errores)): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $errores ; ?>
                                </div>
                            <?php endif; ?>
                        </form>
                        <p> Ya tienes cuenta? </p>
                        <a class="" href="login.php">Iniciar Sesion</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>