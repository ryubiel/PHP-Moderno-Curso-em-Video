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
                $ant = $num - 1;
                $suc = $num + 1;
                echo "O número escolhido foi <strong>$num</strong>";
                echo "<br>O seu <em>antecessor</em> é <strong>$ant</strong>";
                echo "<br>O seu <em>sucessor</em> é <strong>$suc</strong>";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>

</html>