<!DOCTYPE html>
<html>
<head>
    <title>Iago Azevedo Lira | GTI 4° | Fatec Barueri</title>
    <script src="script.js"></script> <!-- Chama o jaja -->
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Chama o frufru -->
</head>
<body>    
    <form action="calcular.php" method="post" onsubmit="return validarFormulario();">
        <h1>Calculadora Simples</h1>
    
        <!-- Campo de entrada para o Número 1 -->
        <input type="text" name="n1" placeholder="Número 1">
        <br/>        



        <!-- Campo de entrada para o Número 2 -->
        <input type="text" name="n2" placeholder="Número 2">
        <br/>       

        <!-- Operações matemáticas -->
        <div class="operacoes">
        <label><input type="radio" name="operacao" value="soma"> Somar</label>
        <label><input type="radio" name="operacao" value="subtracao"> Subtrair</label>
        <label><input type="radio" name="operacao" value="mult"> Multiplicar</label>
        <label><input type="radio" name="operacao" value="div"> Dividir</label>
        <label><input type="radio" name="operacao" value="porcento"> Porcentagem</label>
        </div>

        <center>
        <!-- Botão para calcular -->
        <input type="submit" name="calcular" value="Calcular">

        <!-- Botão para limpar -->
        <input type="button" value="Limpar" onclick="limparCampos()">
        <br/>        
        </center>

        
        <!-- Resultado -->
        <label for="res">Resultado:</label>
        <input type="text" id="res" value="<?php if(isset($_GET["res"])) { echo $_GET["res"]; } ?>">
        <br>
        
        <h2>Iago Azevedo Lira | GTI 4° | Fatec Barueri</h2>
    </form>
</body>
</html>
