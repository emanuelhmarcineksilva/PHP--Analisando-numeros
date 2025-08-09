<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado Conversão</title>
</head>
<body>
    <section>
        <?php 
        $_numero = $_GET["numero"];

        $_analisando_inteiro = intdiv($_numero, 1);
        $_analisando_decimal = $_numero - intdiv($_numero, 1);
        ?>

        <ul>
            <?php 
            echo("<p>Analizando o número <b>" . $_numero . "</b> encontra-se:</p>");
            echo("<li>Parte inteira " . $_analisando_inteiro);
            echo("<li>Parte decimal " . $_analisando_decimal);
            ?>
        </ul>
    </section>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>

</html>
