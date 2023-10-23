<!DOCTYPE html>
<html>
<head>
    <title>Ler Registros</title>
</head>
<body>
    <h1>Registros</h1>
    <table border="1">
        <tr>
            <th>Pergunta</th>
            <th>Resposta A</th>
            <th>Resposta B</th>
            <th>Resposta C</th>
            <th>Resposta D</th>
            <th>Alternativa Correta</th>
        </tr>
        <?php
        $registros = file("registros.txt");
        foreach ($registros as $registro) {
            list($pergunta, $respostaA, $respostaB, $respostaC, $respostaD, $alternativaCorreta) = explode(", ", $registro);
            echo "<tr>";
            echo "<td>$pergunta</td>";
            echo "<td>$respostaA</td>";
            echo "<td>$respostaB</td>";
            echo "<td>$respostaC</td>";
            echo "<td>$respostaD</td>";
            echo "<td>$alternativaCorreta</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
