<!DOCTYPE html>
<html>
<head>
    <title>Gravar Registros</title>
</head>
<body>
    <h1>Gravar Registros</h1>
    <form method="post" action="salvar.php">
        <label for="pergunta">Pergunta:</label>
        <input type="text" name="pergunta" required><br><br>
        
        <label for="resposta_a">Resposta A:</label>
        <input type="text" name="resposta_a" required><br><br>
        
        <label for="resposta_b">Resposta B:</label>
        <input type="text" name="resposta_b" required><br><br>
        
        <label for="resposta_c">Resposta C:</label>
        <input type="text" name="resposta_c" required><br><br>
        
        <label for="resposta_d">Resposta D:</label>
        <input type="text" name="resposta_d" required><br><br>
        
        <label for="alternativa_correta">Alternativa Correta:</label>
        <input type="text" name="alternativa_correta" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
