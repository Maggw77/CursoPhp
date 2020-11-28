<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consola PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">PHP</a>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Consola de PHP</h1>
            <p class="lead">Home para consola</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-primary text-white">
                    <h3>Clase: Variables y tipos de datos</h3> <br>
                    <?php
                    $name = "Adrian";
                    $age = 25;
                    $height = 1.67;
                    echo "Hola " . $name . "tienes " . $age . " años " . "y tu estaturas es: " . $height . "mts " . "<br>";
                    echo "La variable age es de tipo " . gettype($height);
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-info text-white">
                    <h3>Clase: Operadores</h3> <br>
                    <?php
                    $num1 = 500;
                    $num2 = 100;
                    echo "El resultado de la suma es: " . ($num1 + $num2) . "<br>";
                    echo "El resultado de la resta es: " . ($num1 - $num2) . "<br>";
                    echo "El resultado de la multiplicacion es: " . ($num1 * $num2) . "<br>";
                    echo "El resultado de la division es: " . ($num1 / $num2) . "<br>";
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-primary text-white">
                    <h3>Clase: Condicional</h3> <br>
                    <?php
                    $adrian = "Adrian";
                    if ($adrian == "adrian") {
                        echo "hola Adrian";
                    } else if ($adrian == "Adrian") {
                        echo "Te equivocaste";
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-info text-white">
                    <h3>Clase: Condicional Switch</h3> <br>
                    <?php
                    $option = "Marlon";
                    switch ($option) {
                        case "Marlon":
                            echo "Escogiste la mejor opcion";
                            break;
                        default:
                            echo "no escogiste una buena opcion";
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="p-3 m-2 bg-success text-white">
                    <h3>Clase: Bucle While</h3> <br>
                    <?php
                    $optionn = 5;
                    while($optionn <=10) {
                        echo "El numero es: " .$optionn . "<br>";
                        $optionn++;
                    }
                    
                    ?>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3 m-2 bg-warning text-white">
                    <h3>Clase: Bucle For</h3> <br>
                    <?php
                    $optionn = 5;
                    for ($i=0; $i<=$optionn;$i++) {
                         echo "El numero: " . $i . "<br>";

                    }
                    
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>