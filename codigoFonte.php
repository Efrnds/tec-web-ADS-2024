<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        padding: 2dvh;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 5dvh 0;
        width: 100%;
    }

    pre {
        display: flex;
        flex-direction: column;
        padding: 10px;
        border: 1px solid #cecece;
        border-radius: 5px;
        background-color: #eee;
        box-shadow: #000000 0px 0px 4px -2px;
        width: 30dvw;
    }

    a {
        margin: auto;
        text-align: center;
        width: 100%;
        font-size: large;
        font-weight: bold;
        color: #00F;
    }
</style>

<body>
    <pre>
        <code>
Exercicio 1:
    if (isset($_POST["ex1"])) {
        $nomeEx1 = strtolower($_POST["ex1"]);
        switch ($nomeEx1) {
            case "a":
            case "e":
            case "i":
            case "o":
            case "u":
                echo "É uma vogal";
                break;
            case "b":
            case "c":
            case "d":
            case "f":
            case "g":
            case "h":
            case "j":
            case "k":
            case "l":
            case "m":
            case "n":
            case "p":
            case "q":
            case "r":
            case "s":
            case "t":
            case "v":
            case "w":
            case "x":
            case "y":
            case "z":
                echo "É uma consoante";
                break;
            default:
                echo "Entrada inválida!";
        }
    }
</code>
    </pre>
    <pre>
        <code>
        Exercicio 2:
        if (isset($_POST["ex2"])) {
            $nomeEx2 = $_POST["ex2"];
            switch ($nomeEx2) {
                case 2:
                    echo "28 dias, e 29 a cada 4 anos";
                    break;
                case 4:
                case 6:
                case 9:
                case 11:
                    echo "30 dias";
                    break;
                case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12:
                    echo "31 dias";
                    break;
                default:
                    echo "Entrada inválida!";
            };
        };
    </code>
    </pre>
    <pre>
    <code>
        Exercicio 3:
        for ($i = 1; $i <= 50; $i++) {
            if ($i % 2 == 1) {
                echo " " . $i;
            }
        }
    </code>
    </pre>
    <pre>
    <code>
        Exercicio 4:
        if (isset($_POST["num1Ex4"]) && isset($_POST["num2Ex4"])) {
            $num1Ex4 = $_POST["num1Ex4"];
            $num2Ex4 = $_POST["num2Ex4"];
            for ($i = 1; $i <= $num2Ex4; $i++) {
                $num1Ex4 *= $num1Ex4;
                echo "\n" . $num1Ex4;
            }
        }
    </code>
    </pre>
    <pre>
        <code>
        Exercicio 5:
        $n = 999;
        $fib = 1;
        $i = 0;
        for ($k = 1; $k <= $n; $k++) {
            $t = $i + $fib;
            $i = $fib;
            $fib = $t;
            if ($fib >= 500) {
                break;
            }
            echo " " . $fib;
        }
        </code>
    </pre>
    <pre>
        <a href="listaDeExercicios.php">Voltar</a>
    </pre>
</body>

</html>