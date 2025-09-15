<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Resultado final</h1>
        <p>
            <?php
                $num = $_GET["numero"] ?? 0;
                $dolar = $num / 5.35;
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                echo "<p>Seus " . numfmt_format_currency($padrao, $num, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>

</html>