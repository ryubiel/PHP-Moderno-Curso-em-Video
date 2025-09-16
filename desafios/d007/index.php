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
        $minimo = 1380;
        $salario = $_GET['sal'] ?? $minimo;
 
    ?>
    <main>
        <h1>Informe o seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" min="0" value="<?=$salario?>" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($minimo, 2, ",", ".")?></strong></p>
            <input type="submit" value="Analisar">
        </form>

        <section>   
            <h2>Resultado Final</h2>
            <?php 
                $minimos = intdiv($salario, $minimo);
                $resto = $salario % $minimo;

                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                echo "<p>Quem recebe um salário de ". numfmt_format_currency($padrao, $salario, "BRL") ." ganha <strong>$minimos salários mínimos</strong> + ". numfmt_format_currency($padrao, $resto, "BRL") ." </p>";
            ?>
        </section>
    </main>
</body>
</html>