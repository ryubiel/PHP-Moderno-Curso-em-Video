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
        $total = $_GET['total'] ?? 0;
        
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="total">Qual é o total de segundos</label>
            <input type="number" name="total" id="total" min="1" value="<?=$total?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>   
            <h2>Totalizando</h2>
            <p>Analisando o valor que você digitou, <strong><?=number_format($total, 0, ",", ".")?></strong> segundos equivalem a um total de:</p>
            <?php 
                $sobra = $total;

                $semana = intdiv($sobra, 604800);
                $sobra = $sobra % 604800;

                $dia = intdiv($sobra, 86400);
                $sobra = $sobra % 86400;

                $hora = intdiv($sobra, 3600);
                $sobra = $sobra % 3600;

                $minuto = intdiv($sobra, 60);
                $sobra = $sobra % 60;

                echo "<ul>
                    <li>[$semana] semanas</li>
                    <li>[$dia] dias</li>
                    <li>[$hora] horas</li>
                    <li>[$minuto] minutos</li>
                    <li>[$sobra] segundos</li>
                </ul>"
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