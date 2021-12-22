<!DOCTYPE html>
<meta charset="utf-8"> 
<html>
    <head>
        <head lang="pt-br">
        <title>Resistência</title>
        <link href="../style.css" rel="stylesheet">
    </head>
    <script type="text/javascript"></script>
    <body>
    <section>
        <div>
            <p>Vamos aos calculos! [Resistência - R]</p>
            <p>Insira os valores respectivamente:</p>
            <form action="" method="post">
            Digite o valor a ser convertido:
                <input type="number" step="any" id="valor1" name="valor1" placeholder="Exemplo: 2,5"><br>
                <br>
                MegOhm (MΩ)<input type="radio" name="op1" value="MegaEntrada"><br>
                KilOhm (KΩ)<input type="radio" name="op1" value="KiloEntrada"><br>
                Ohm (Ω)<input type="radio" name="op1" value="OhmEntrada"><br>
                MiliOhm (mΩ)<input type="radio" name="op1" value="MiliEntrada"><br>
                MicrOhm (uΩ)<input type="radio" name="op1" value="MicroEntrada"><br> 
                <br><br>
                <label>Para qual unidade você deseja converter?</label>
                <br>
                MegOhm (MΩ)<input type="radio" name="op2" value="MegaSaida"><br>
                KilOhm (KΩ)<input type="radio" name="op2" value="KiloSaida"><br>
                Ohm (Ω)<input type="radio" name="op2" value="OhmSaida"><br>
                MiliOhm (mΩ)<input type="radio" name="op2" value="MiliSaida"><br>
                MicrOhm (uΩ)<input type="radio" name="op2" value="MicroSaida"><br>
                <br><br>
                <button type="summit" onclick='document.write("<?php calculo(); ?>")'>Calcular</button>
                <button type="summit" onclick='window.location.href="../ProjetoConversorSenai/index.html"'>Retornar</button>
            </form>
        </div>
    </section>
    </body>
</html>
<?php

function calculo(){
    $entrada = "";
    $saida = "";
    //recebendo valores das radios [Opção1]
    if($_POST['op1'] == "MegaEntrada"){
        $entrada = 'MegaE';
    }
    else if($_POST['op1'] == "KiloEntrada"){
        $entrada = 'KiloE';
    }
    else if($_POST['op1'] == "OhmEntrada"){
        $entrada = 'OhmE';
    }
    else if($_POST['op1'] == "MiliEntrada"){
        $entrada = 'MiliE';
    }
    else if($_POST['op1'] == "MicroEntrada"){
        $entrada = 'MicroE';
    }
    //recebendo valores das radios [Opção2]
    if($_POST['op2'] == "MegaSaida"){
        $saida = 'MegaS';
    }
    else if($_POST['op2'] == "KiloSaida"){
        $saida = 'KiloS';
    }
    else if($_POST['op2'] == "OhmSaida"){
        $saida = 'OhmS';
    }
    else if($_POST['op2'] == "MiliSaida"){
        $saida = 'MiliS';
    }
    else if($_POST['op2'] == "MicroSaida"){
        $saida = 'MicroS';
    }


    //recebendo valores das variáveis
    $valor = $_POST['valor1'];
    //conversão unidade repetida
    if($entrada == 'MegaE' and $saida == 'MegaS'){
        echo 'Não é possível converter valores de uma mesma unidade!';
    }
    else if($entrada == 'KiloE' and $saida == 'KiloS'){
        echo 'Não é possível converter valores de uma mesma unidade!';
    }
    else if($entrada == 'OhmE' and $saida == 'OhmS'){
        echo 'Não é possível converter valores de uma mesma unidade!';
    }
    else if($entrada == 'MiliE' and $saida == 'MiliS'){
        echo 'Não é possível converter valores de uma mesma unidade!';
    }
    else if($entrada == 'MicroE' and $saida == 'MicroS'){
        echo 'Não é possível converter valores de uma mesma unidade!';
    }
    //conversão MEGOHM
    if($entrada == 'MegaE' and $saida == 'KiloS'){
        $valor = $valor * 1000;
        echo 'O resultado da conversão é: ', $valor, ' KΩ';
    }
    else if($entrada == 'MegaE' and $saida == 'OhmS'){
        $valor = $valor * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' Ω';
    }
    else if($entrada == 'MegaE' and $saida == 'MiliS'){
        $valor = $valor * 1000 * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' mΩ';
    }
    else if($entrada == 'MegaE' and $saida == 'MicroS'){
        $valor = $valor * 1000 * 1000 * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' uΩ';
    }
    //conversão QUILOHM
    if($entrada == 'KiloE' and $saida == 'MegaS'){
        $valor = $valor / 1000;
        echo 'O resultado da conversão é: ', $valor, ' MΩ';
    }
    else if($entrada == 'KiloE' and $saida == 'OhmS'){
        $valor = $valor * 1000;
        echo 'O resultado da conversão é: ', $valor, ' Ω';
    }
    else if($entrada == 'KiloE' and $saida == 'MiliS'){
        $valor = $valor * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' mΩ';
    }
    else if($entrada == 'KiloE' and $saida == 'MicroS'){
        $valor = $valor * 1000 * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' uΩ';
    }
    //conversão OHM
    if($entrada == 'OhmE' and $saida == 'MegaS'){
        $valor = $valor / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' MΩ';
    }
    else if($entrada == 'OhmE' and $saida == 'KiloS'){
        $valor = $valor / 1000;
        echo 'O resultado da conversão é: ', $valor, ' kΩ';
    }
    else if($entrada == 'OhmE' and $saida == 'MiliS'){
        $valor = $valor * 1000;
        echo 'O resultado da conversão é: ', $valor, ' mΩ';
    }
    else if($entrada == 'OhmE' and $saida == 'MicroS'){
        $valor = $valor * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' uΩ';
    }
    //conversão MILIOHM
    if($entrada == 'MiliE' and $saida == 'MegaS'){
        $valor = $valor / 1000 / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' MΩ';
    }
    else if($entrada == 'MiliE' and $saida == 'KiloS'){
        $valor = $valor / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' kΩ';
    }
    else if($entrada == 'MiliE' and $saida == 'OhmS'){
        $valor = $valor / 1000;
        echo 'O resultado da conversão é: ', $valor, ' Ω';
    }
    else if($entrada == 'MiliE' and $saida == 'MicroS'){
        $valor = $valor * 1000;
        echo 'O resultado da conversão é: ', $valor, ' uΩ';
    }
    //conversão MICROHM
    if($entrada == 'MicroE' and $saida == 'MegaS'){
        $valor = $valor / 1000 / 1000 / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' MΩ';
    }
    else if($entrada == 'MicroE' and $saida == 'KiloS'){
        $valor = $valor / 1000 / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' kΩ';
    }
    else if($entrada == 'MicroE' and $saida == 'OhmS'){
        $valor = $valor / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' Ω';
    }
    else if($entrada == 'MicroE' and $saida == 'MiliS'){
        $valor = $valor / 1000;
        echo 'O resultado da conversão é: ', $valor, ' mΩ';
    }
    //nenhuma
    else if($entrada == false or $saida == false){
        echo 'Insira as unidades!';
    }
    }
?>