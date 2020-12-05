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
        <?php
        include('man.php');
        include('ESCUELA/escuela.php');

        ?>
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
                    while ($optionn <= 10) {
                        echo "El numero es: " . $optionn . "<br>";
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
                    for ($i = 0; $i <= $optionn; $i++) {
                        echo "El numero: " . $i . "<br>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="p-3 m-2 bg-danger text-white">
                    <h4>Clase: Arrays Int</h4> <br>
                    <?php
                    $nums = array(1, 5, 6, 8, 10);
                    echo $nums[3];
                    for ($i = 0; $i < count($nums); $i++) {

                        echo $nums[$i] . "<br>";
                    }

                    ?>
                </div>
            </div>
            <div class="col-4">
                <div class="p-3 m-2 bg-info text-white">
                    <h4>Clase: Arrays String</h4> <br>
                    <?php
                    $letters = array("hola", "soy", "Adrian", "Estoy aprendiento", "PHP");

                    for ($i = 0; $i < count($letters); $i++) {

                        echo $letters[$i] . "<br>";
                    }

                    ?>
                </div>
            </div>
            <div class="col-4">
                <div class="p-3 m-2 bg-primary text-white">
                    <h4>Clase: Arrays Forech</h4> <br>
                    <?php
                    $names = array("Adrian", "Marlon", "Edison", "Marco");

                    foreach ($names as $name) {
                        echo $name . "<br>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="p-3 m-2 bg-warning text-white">
                    <h3>Clase: Break</h3> <br>
                    <?php
                    $lastnames = array("Gonzalez", "Garzona", "Alvarez", "Enriquez");

                    foreach ($lastnames as $lastname) {
                        if ($lastname == "Alvarez") {
                            break;
                        }
                        echo $lastname . "<br>";
                    }
                    ?>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3 m-2 bg-success text-white">
                    <h3>Clase: Continue</h3> <br>
                    <?php
                    $names = array("Adrian", "Marlon", "Edison", "Marco");

                    foreach ($names as $name) {
                        if ($name == "Marlon") {
                            continue;
                        }
                        echo $name . "<br>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-danger text-white">
                    <h3>Clase: Funciones</h3> <br>
                    <?php
                    function calc($sing, $nump, $nums)
                    {

                        switch ($sing) {
                            case "+":
                                return $nump + $nums;
                                break;
                            case "-":
                                return $nump - $nums;
                                break;
                            default:
                                return 0;
                        }
                    }
                    $result = calc("-", 10, 20);
                    echo "El resultado es: " . $result;
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-success text-white">
                    <h3>POO</h3> <br>
                    <?php
                    class person
                    {
                        public $name;
                        public $age;
                        public $profesion;
                        public $comment;

                        function __construct($name, $age, $profesion, $comment)
                        {
                            $this->name = $name;
                            $this->age = $age;
                            $this->profesion = $profesion;
                            $this->comment = $comment;
                        }
                        public function gethi()
                        {
                            return "Hola " . $this->name . " Tienes " . $this->age . " Años, tu quieres ser " . $this->profesion . " y hoy quieres " . $this->comment;
                        }
                    }
                    $Marlon = new person("Marlon", 25, "Ingeniero", "aprender Laravel");
                    $Marcos = new person("Marcos", 20, "Ingeniero", "aprender PHP");
                    echo $Marlon->gethi() . "<br>";
                    echo $Marcos->gethi();
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-primary text-white">
                    <h3>Clase: Herencia</h3> <br>
                    <?php
                    class student
                    {
                        public $nombre;
                        public $edad;

                        function __construct($nombre, $edad)

                        {
                            $this->nombre = $nombre;
                            $this->edad = $edad;
                        }
                        public function hola()
                        {

                            return "hola " . $this->nombre . " tienes " . $this->edad . " años";
                        }
                    }
                    class alumno extends student
                    {

                        public function coestas()
                        {
                            return "como estas";
                        }
                    }

                    $Allan = new alumno("Allan", 30);
                    echo $Allan->hola() . "<br>";
                    echo $Allan->coestas();

                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-info text-white">
                    <h3>Metodos estaticos</h3> <br>
                    <?php
                    class estatico
                    {

                        public static function pruebasum($uno, $dos)
                        {

                            return $uno + $dos;
                        }
                        public static function prueresta($uno, $dos)
                        {

                            return $uno - $dos;
                        }
                    }
                    echo "La suma es: " . estatico::pruebasum(10, 10) . "<br>";
                    echo "La resta es: " . estatico::prueresta(30, 10);
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="p-3 m-2 bg-success text-white">
                    <h3>Formularios</h3> <br>
                    <form class="form-inline" method="post" action="#">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="id" class="sr-only">Primer Numero</label>
                            <input type="text" class="form-control" id="num1" name="num1" placeholder="Primer numero">
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="id" class="sr-only">Segundo Numero</label>
                            <input type="text" class="form-control" id="num2" name="num2" placeholder="Segundo numero">
                        </div>
                        <button type="text" class="btn btn-primary mb-2">Realizar suma</button>
                    </form>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3 m-2 bg-dark text-white">
                    <h3>Resultado</h3> <br>
                    <?php
                    if (isset($_POST['num1']) && isset($_POST['num2'])) {
                        echo $_POST['num1'] + $_POST['num2'];
                    } else {
                        echo "Esperando suma......";
                    }

                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="p-3 m-2 bg-success text-white">
                    <h3>Formularios Get</h3> <br>
                    <form class="form-inline" method="get" action="#">
                        <div class="form-group mx-sm-1 mb-2">
                            <input type="number" class="form-control" id="num3" name="num3" placeholder="">
                        </div>
                        <div class="form-group mx-sm-1 mb-2">
                            <input type="number" class="form-control" id="num4" name="num4" placeholder="">
                        </div>
                        <button type="text" class="btn btn-primary mb-2">Operar</button>
                    </form>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3 m-2 bg-dark text-white">
                    <h3>Resultado Calculadora</h3> <br>
                    <?php
                    if (isset($_GET['num3']) && isset($_GET['num4'])) {
                        $result = $_GET['num3'] + $_GET['num4'];
                        echo "El resultado es: " . $result;
                    } else {
                        echo "Esperando Respuesta";
                    }

                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="p-3 m-2 bg-success text-white">
                    <h3>Formularios Post</h3> <br>
                    <form class="form-inline" method="post" action="#">
                        <div class="form-group mx-sm-1 mb-2">
                            <input type="number" class="form-control" id="num3" name="num3" placeholder="">
                        </div>
                        <div class="form-group mx-sm-1 mb-2">
                            <input type="number" class="form-control" id="num4" name="num4" placeholder="">
                        </div>
                        <button type="text" class="btn btn-primary mb-2">Operar</button>
                    </form>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3 m-2 bg-dark text-white">
                    <h3>Resultado Calculadora</h3> <br>
                    <?php
                    if (isset($_POST['num3']) && isset($_POST['num4'])) {
                        $result = $_POST['num3'] + $_POST['num4'];
                        echo "El resultado es: " . $result;
                    } else {
                        echo "Esperando Respuesta";
                    }

                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-primary text-white">
                    <h3>Include</h3> <br>
                    <?php
                    $Gonzalez = new Man("Adrian", "Gonzalez");
                    $Liceo =new \escuelas\escuela("Liceo centroamericano","Santa Rosita","Privado");
                    echo $Gonzalez->greetings() . "<br>";
                    echo $Liceo->getescuela();
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