<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <<?php 
        // Capturando os dados do Formulário Retroalimentado
        $nasc = $_GET['nasc'] ?? '';
        $ano = $_GET['ano'] ?? '';
        $aatual = date(y);
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" min="0" value="<?=$nasc?>" required>
            <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$aatual?></strong>)</label>
            <input type="number" name="ano" id="ano" min="0" value="<?=$ano?>" required>
            <input type="submit" value="Qual será minha idade?">
        </form>

        <section>   
            <h2>Cálculo das Médias</h2>
            <?php 
                $media = ($v1 + $v2) / 2;
                $ponderada = ($v1 * $p1 + $v2 * $p2) / ($p1 + $p2);

                echo "<p>Analisando os valores $v1 e $v2:</p>";
                echo "<ul>
                        <li>A <strong> Média Aritmética Simples</strong> entre os valores é igual a " . number_format($media, 2,",",".") . "</li>
                        <li>A <strong> Média Aritmética Ponderada</strong> com pesos $p1 e $p2 é igual a " . number_format($ponderada, 2, ",", ".") . "</li>
                    </ul>";
            ?>
        </section>
    </main>
</body>
</html>