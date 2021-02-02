<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    .contenedor{
        background-color: lightblue;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        width: 60%;
        height: 300px;
        margin: 40px auto;
        border: 1px solid black;
    }
    .soluciones{
        width: 30%;
    }
    .contenedor .soluciones p{
        font-size: 1.2rem;
    }
</style>
<?php
    
    //Recojo los datos del usuario
    $a = $_POST['campo1'];
    $b = $_POST['campo2'];
    $c = $_POST['campo3'];

    if($a == 0 and $b == 0 and $c == 0){
        echo '<div class="contenedor"><h2>No se han introducido valores.</h2><a href="index.html"><button type="button">VOLVER</button></a></div>';
    }
    else{
        if(($b**2)-(4*$a*$c) < 0){
            echo '<div class="contenedor">';
            echo '<h2>'. $a. 'x<sup>2</sup> + '. $b. 'x + '. $c. ' = 0'. '</h2>';
            echo "<div class='soluciones'><p>La ecuación no tiene soluciones</p></div>";
            echo '<a href="index.html"><button type="button">VOLVER</button></a>';
            echo '</div>';
        }
        else if(($b**2)-(4*$a*$c) == 0){
            $solucion = -$b/(2*$a);
            echo '<div class="contenedor">';
            echo '<h2>'. $a. 'x<sup>2</sup> + '. $b. 'x + '. $c. ' = 0'. '</h2>';
            echo "<div class='soluciones'><p>Solución única: ". $solucion. "</p></div>";
            echo '<a href="index.html"><button type="button">VOLVER</button></a>';
            echo '</div>';
        }
        else{
            $discriminante = ($b**2)-(4*$a*$c);
            $solucion1 = (-$b + sqrt($discriminante)) / (2*$a);
            $solucion2 = (-$b - sqrt($discriminante)) / (2*$a);
            echo '<div class="contenedor">';
            echo '<h2>'. $a. 'x<sup>2</sup> + '. $b. 'x + '. $c. ' = 0'. '</h2>';
            echo "<div class='soluciones'><p>Solución 1: ". $solucion1. "</p>";
            echo "<p>Solución 2: ". $solucion2. "</p></div>";
            echo '<a href="index.html"><button type="button">VOLVER</button></a>';
            echo '</div>';
        }
    }
    
?>