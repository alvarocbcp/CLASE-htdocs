<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Importo la clase Persona
        include 'Persona.php';
        //Importo la clase Cliente
        include 'Cliente.php';

        //Creo una persona
        $persona = new Persona('43984273', 'Alvaro', 'Cabello');
        
        //Mostrarla usando el metodo __toString()
        echo $persona. "<br>";

        //Cambiar el apellido
        $persona -> setApellido("Montes");

        //Volver a mostrar
        echo $persona. "<br>";

        //Creo un cliente
        $cliente = new Cliente("48148874F", "Alvaro", "Cabello", 100);

        //Muestro el cliente
        echo $cliente. "<br>";

        //Le subo el sueldo al cliente 400€
        $cliente -> setSaldo($cliente -> getSaldo() + 400);

        //Lo muestro de nuevo
        echo $cliente. "<br>";

    ?>
</body>
</html>