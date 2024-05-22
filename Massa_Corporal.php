<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 8</title>
</head>
<body>
    <!--Escreva um algoritmo que leia a altura e o peso de uma pessoa,
     calcule o seu IMC (Índice de Massa Corporal) e exiba para o usuário.    -->
     <label >
        <form method="POST">
            Altura: <input type="text" name="altura"><br><br>
            Peso: <input type="text" name="peso"><br><br>
            <input type="submit" value="Calcular"><br><br>


        </form>
     </label>
</body><br><br>
<?php
$Altura = $_POST['altura'];
$Peso = $_POST['peso'];
$IMC = ($Altura * $Altura) /$Peso;
print_r("Altura : ".$Altura. "<br><br> Peso: ".$Peso." quilos. " ."<br><br>Seu Índice de Massa Corporal (IMC) é: ".$IMC);
?>
</html>