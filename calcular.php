<?php
// Se clicar no "calcular", passa por isso, que no começo é declarar variaveis
if (isset($_POST["calcular"])) {
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $operacao = $_POST["operacao"];
    $resultado = 0;

    // "Fazendo" o calculo
    if  ($operacao === "soma") {
          $resultado = $n1 + $n2;
      } 
      elseif ($operacao === "subtracao") {
          $resultado = $n1 - $n2;
      } 
      elseif ($operacao === "mult") {
          $resultado = $n1 * $n2;
      }
      elseif ($operacao === "div") {
          $resultado = $n1 / $n2;
      }
      elseif ($operacao === "porcento") {
        $resultado = ($n1 / 100) * $n2;
    }
  
    // Volta para a página com o valor do resultado
    header("Location: index.php?res=$resultado");
    exit();
    }
?>