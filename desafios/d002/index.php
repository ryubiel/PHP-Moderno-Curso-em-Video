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
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100... <br>
            O valor gerado foi <strong>
            <?php
                $numero = mt_rand(0, 100);
                echo $numero;
            ?>
            </strong></p>
        <button onclick="javascript:location.reload()">&#x1F504; Gerar outro número</button>
    </main>
</body>

</html>