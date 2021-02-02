<style>
    div{
        width: 100%;
        max-width: 400px;
        padding: 20px;
        text-align: center;
        margin: auto;
        margin-top: 40px;
        animation: cambia-color 10s linear infinite;
        background: -webkit-linear-gradient(left, rgb(255, 86, 86), rgb(255, 161, 250));
        background-size: 400% 400%;
    }
    div h2{
        font-weight: 100;
    }
@keyframes cambia-color{
    0%{
        background-position: 0%, 50%;
    }
    50%{
        background-position: 100%, 50%;
    }
    100%{
        background-position: 0%, 100%;
    }
}

</style>

<?php

$user = $_POST['user'];
$pass = $_POST['pass'];

echo '<div><h2>Usuario: ' . $user . '</h2><br>';
echo '<h2>Contraseña: ' . $pass . '</h2></div>';

if ($_POST['user']=="Alvaro" and $_POST['pass']=="1234"){
    header("Location:bienvenido.html");
}else{
    header("Location:error.html");
}

?>