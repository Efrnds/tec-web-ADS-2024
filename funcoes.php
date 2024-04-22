<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <div class="ex1">
            <form method="post">
                <label for="url">Insira o Url da imagem</label>
                <input type="text" id="url" name="url" placeholder="url">
                <label for="alt">Insira a descrição da imagem da imagem caso ela não carregue</label>
                <input type="text" id="alt" name="alt" placeholder="alt">
                <label for="Width">Insira a largura da imagem</label>
                <input type="number" id="width" name="width" placeholder="width">
                <label for="Height">Insira a altura da imagem</label>
                <input type="number" id="height" name="height" placeholder="height">
                <input type="submit" value="enviar">
            </form>
            <p>
                <?php
                function teste($url, $alt, $width, $height)
                {
                    echo "<img src='$url' alt='$alt' width='$width' height='$height'>";
                }
                if (isset($_POST['url']) && isset($_POST['alt']) && isset($_POST['width']) && isset($_POST['height'])) {
                    $url = $_POST['url'];
                    $alt = $_POST['alt'];
                    $width = $_POST['width'];
                    $height = $_POST['height'];
                    teste($url, $alt, $width, $height);
                } else {
                    echo "Preencha todos os campos";
                }
                ?>
            </p>
        </div>
        <div class="ex2"></div>
        <a href="index.php">voltar</a>
    </main>
</body>

</html>
