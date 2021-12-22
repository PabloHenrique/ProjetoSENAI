<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <title>Calcular</title>
    <link href="../style.css" rel="stylesheet">
</head>
<script type="text/javascript"></script>
<body>
    <div>
        <p>Vamos aos cálculos!</p>
        <p>Primeiramente, informe quantos resistores você deseja calcular:</p>
        <form action="" method="POST">
            <input type="number" name="qResit" placeholder="Exemplo: 7">
            <button type="submit" onclick='document.write("<?php inputResistores(); ?>")'>Calcular</button>
            <?php
                function inputResistores(){
                    $quant = $_POST['qResit'];
                    $contador = 1;
                    while($contador <= $quant){
                        echo '<label>Insira o valor do ',$contador,'° resistor:</label>';
                        echo '<input type="number" />';
                        echo '<br>';
                        $contador = $contador + 1;
                    }
                }
            ?>
        </form>
    </div>
</body>
</html>

<?php
/*
    function Calculo(){
        $quant = $_POST['qResit'];
        $c = 0;
        for($c = 0; $c < $quant; $c++){
            echo "hello!";
            echo '<input type="number" name="q">';
        }
    }
*/
?>