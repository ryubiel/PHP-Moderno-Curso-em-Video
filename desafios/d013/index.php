<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <<?php 
        // Capturando os dados do Formulário Retroalimentado
        $saque = $_GET['saque'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$) <sup>*</sup></label>
            <input type="number" name="saque" id="saque" min="5" step="5" value="<?=$saque?>">
            <p style="font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>   
            <h2>Saque de <?=$saque?> realizado</h2>
            <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
            <?php 
                $sobra = $saque;

                $n100 = intdiv($sobra, 100);
                $sobra %= 100;

                $n50 = intdiv($sobra, 50);
                $sobra %= 50;

                $n10 = intdiv($sobra, 10);
                $sobra %= 10;

                $n5 = intdiv($sobra, 5);
                $sobra %= 5;
                echo "Olá, mundo! \u{1F30E}";
            ?>
            
            <ul>
                <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x<?=$n100?></li>
                <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x<?=$n50?></li>
                <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x<?=$n10?></li>
                <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x<?=$n5?></li>
            </ul>
        </section>
        <script>
            mudaValor()

            function mudaValor() {
                p.innerText = percentual.value;
            }
        </script>
</body>
</html>