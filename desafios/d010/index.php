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
        $aatual = date('Y');
        $nasc = $_GET['nasc'] ?? 0;
        $ano = $_GET['ano'] ?? $aatual;
        
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" max="<?=$aatual?>" value="<?=$nasc?>" required>
            <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <?=$aatual?>)</label>
            <input type="number" name="ano" id="ano" min="0" value="<?=$ano?>" required>
            <input type="submit" value="Qual será minha idade?">
        </form>

        <section>   
            <h2>Resultado</h2>
            <?php 
                $idade = $ano - $nasc;

                echo "<p>Quem nasceu em $nasc vai ter $idade anos em $ano!</p>";
            ?>
        </section>
    </main>
</body>
</html>