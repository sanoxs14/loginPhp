<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Enlaza los archivos de CSS de Bootstrap desde el CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <!-- Enlaza los archivos de FontAwes  desde el CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-hzRZuLmVvoz+WU6PIwlFuybRg5R5GyfzC6x2Q6Mz14E95eU3qor0TD8Oe6lmyGYwB2Q74JLr8yeheTRqpLrCpA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
        <link rel="stylesheet" href="/CURSOPHP8/login_registro/css/estilos.css">

<!-- Enlaza los archivos de JavaScript de Bootstrap desde el CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>


    <title>Inicio Sesion</title>
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center"><i class="fas fa-user mr-2"></i>Iniciar Sesion</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>">
                            <div class="form-group">
                                <label for="username">Usuario</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="usuario" name="usuario" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block my-5">Iniciar Sesion</button>
                            <?php if(!empty($errores)): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $errores ; ?>
                                </div>
                            <?php endif; ?>
                        </form>
                        <p> No tienes cuenta? </p>
                        <a class="" href="registro.php">Registrarse</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>