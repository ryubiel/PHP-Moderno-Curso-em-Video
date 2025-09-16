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
        $numero = $_GET['num'] ?? 0;
 
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" min="0" value="<?=$numero?>" step="0.01">
            <input type="submit" value="Calcular Raízes">
        </form>

        <section>   
            <h2>Resultado Final</h2>
            <?php 
                $rq = $numero ** (1/2); // ou sqrt($numero);
                $rc = $numero ** (1/3);

                echo "<p>Analisando o <strong>número $numero</strong>, temos:</p>";
                echo "<ul>
                        <li>A sua raiz quadrada é <strong>".number_format($rq, 3, ',', '.')."</strong></li>
                        <li>A sua raiz cúbica é <strong>".number_format($rc, 3, ',', '.')."</strong></li>
                    </ul>";
            ?>
        </section>
    </main>
</body>
</html>