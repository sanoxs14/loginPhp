<?php session_start();
if(isset($_SESSION['usuario'])){
    header('Location: index.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING); 
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    echo "$usuario . $password . $password2";

    $errores = '';
    if (empty ($usuario) or empty ($password) or empty ($password2)){
        $errores .= '<li>Rellena los campos correctamente </li>';
    }else {
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=login_pratica', 'root','');
        }catch(PDOException $e){
            echo "Error: " .$e->getMessage();
        }

        $repetido =$conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT  1');
        $repetido->execute(array(':usuario' => $usuario));
        $resultado = $repetido ->fetch();
        if($resultado !=false){
            $errores .= '<li>Ya existe el usuario </li>';
        }
        $password = hash ('sha512' , $password);
        $password2 = hash ('sha512' , $password2);

        if ($password != $password2){
            $errores .= '<li>Las contraseñas no son iguales</li>';
        }
    }
    
    if($errores == ''){
        $statement = $conexion->prepare('INSERT INTO usuarios(id,usuario,pass) VALUES (null,:usuario, :pass)');
        $statement->execute(array(':usuario' => $usuario,':pass' =>$password));
        header('Location: login.php');
    }
}


require 'views/registro.view.php';
?>