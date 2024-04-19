<html lang="pt-br">
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        display: grid;
        grid-template-columns: 1fr 1fr;
        font-family: sans-serif;
        gap: 10px;
        background-color: #ffffff;
    }

    .result {
        display: flex;
        flex-direction: column;
        align-items: start;
        gap: 5px;
        margin-right: auto;
    }

    .exercicio {
        display: flex;
        flex-direction: column;
        width: 40dvw;
        gap: 10px;
        margin: auto;
        padding: 10px;
        border: 1px solid #cecece;
        border-radius: 5px;
        min-height: 20vh;
        background-color: #eee;
        box-shadow: #000000 0px 0px 4px -2px;
    }

    p a {
        margin: auto;
        text-align: center;
        width: 100%;
        font-size: large;
        font-weight: bold;
        color: #00F;
    }
</style>

<body>
    <div class="exercicio">
        <h1>Exercício 1:</h1>
        <form method="post" id="form1" class="input">
            <label for="ex1">Escreva uma letra parar saber se é vogal ou consoante:</label>
            <div>
                <input type="text" id="ex1" name="ex1" />
                <button type="submit" form="form1">enviar</button>
            </div>
        </form>
        <div class="result">
            <p>
                Saída Exercício 1:
            </p>
            <h4>
                <?php
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
                ?>
            </h4>
        </div>
    </div>
    <div class="exercicio">
        <h1>Exercício 2:</h1>
        <form class="input" method="post" id="form2">
            <label for="ex2">Escreva um mês (em números) para descobrir quantos dias tem neste mês</label>
            <div>
                <input type="text" id="ex2" name="ex2" />
                <button type="submit" form="form2">enviar</button>
            </div>
        </form>
        <div class="result">
            <p>
                Saída Exercício 2:
            </p>
            <h4>
                <?php
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
                ?>
            </h4>
        </div>
    </div>
    <div class="exercicio">
        <h1>Exercício 3:</h1>
        <div class="result">

            <p>
                Saída Exercício 3:
            </p>
            <?php
            for ($i = 1; $i <= 50; $i++) {
                if ($i % 2 == 1) {
                    echo " " . $i;
                }
            }
            ?>
        </div>
    </div>
    <div class="exercicio">
        <h1>Exercício 4:</h1>
        <form class="input" method="post" id="form4">
            <label for="ex4">Escreva dois números, a base e o expoente, para calcularmos:</label>
            <div>
                <input type="text" id="num1Ex4" name="num1Ex4" placeholder="Número 1" />
                <input type="text" id="num2ex4" name="num2Ex4" placeholder="Número 2" />
                <button type="submit" form="form4">enviar</button>
            </div>
        </form>
        <div class="result">
            <p>
                Saída Exercício 4:
            </p>
            <?php
            if (isset($_POST["num1Ex4"]) && isset($_POST["num2Ex4"])) {
                $num1Ex4 = $_POST["num1Ex4"];
                $num2Ex4 = $_POST["num2Ex4"];
                for ($i = 1; $i <= $num2Ex4; $i++) {
                    $num1Ex4 *= $num1Ex4;
                    echo "\n" . $num1Ex4;
                }
            }
            ?>
        </div>
    </div>
    <div class="exercicio">
        <h1>Exercício 5:</h1>
        <p>Sequência de Fibonacchi</p>
        <div class="result">
            <p>
                Saída Exercício 5:
            </p>
            <?php
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
            ?>
        </div>
    </div>
    <div class="exercicio">
        <p>Clique <a href="codigoFonte.php">aqui</a> para ver o código.</p>
        <p>Clique <a href="index.php">aqui</a> para voltar ao hub.</p>
    </div>
</body>

</html>