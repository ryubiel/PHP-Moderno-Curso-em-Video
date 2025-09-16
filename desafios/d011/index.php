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
        $preco = $_GET['preco'] ?? 0;
        $percentual = $_GET['percentual'] ?? 0;
        
    ?>
    <main>
        <h1>Reajustador de preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>" required>
            <label for="percentual">Qual será o percentual de reajuste?(<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="percentual" id="percentual" min="0" max="100" value="<?=$percentual?>" oninput="mudaValor()">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>   
            <h2>Resultado do Reajuste</h2>
            <?php 
                $aumento = $preco * $percentual / 100;
                $pfinal = $aumento + $preco;

                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                echo "<p>O produto que custava " . numfmt_format_currency($padrao, $preco, "BRL") . ", com <strong>$percentual% de aumento</strong> vai passar a custar <strong>" . numfmt_format_currency($padrao, $pfinal, "BRL") ."</strong> a partir de agora.</p>";
            ?>
        </section>
        <script>
            mudaValor()

            function mudaValor() {
                p.innerText = percentual.value;
            }
        </script>
</body>
</html>