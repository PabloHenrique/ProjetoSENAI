<!DOCTYPE html>
<meta charset="utf-8"> 
<html>
    <head>
        <head lang="pt-br">
        <title>Potência</title>
        <link href="../ProjetoConversorSenai/style.css" rel="stylesheet">
    </head>
    <script type="text/javascript"></script>
    <body>
    <section>
        <div>
            <p>Vamos aos calculos! [Potência - W]</p>
            <p>Insira os valores respectivamente:</p>
            <form action="" method="post">
            Digite o valor a ser convertido:
                <input type="number" step="any" id="valor1" name="valor1" placeholder="Exemplo: 2,5"><br>
                <br>
                MegaWatt (MW)<input type="radio" name="op1" value="MegaEntrada"><br>
                KiloWatt (KW)<input type="radio" name="op1" value="KiloEntrada"><br>
                Watt (W)<input type="radio" name="op1" value="WattEntrada"><br>
                MiliWatt (mW)<input type="radio" name="op1" value="MiliEntrada"><br>
                MicroWatt (uW)<input type="radio" name="op1" value="MicroEntrada"><br> 
                <br><br>
                <label>Para qual unidade você deseja converter?</label>
                <br>
                MegaWatt (MW)<input type="radio" name="op2" value="MegaSaida"><br>
                KiloWatt (KW)<input type="radio" name="op2" value="KiloSaida"><br>
                Watt (W)<input type="radio" name="op2" value="WattSaida"><br>
                MiliWatt (mW)<input type="radio" name="op2" value="MiliSaida"><br>
                MicroWatt (uW)<input type="radio" name="op2" value="MicroSaida"><br>
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
    else if($_POST['op1'] == "WattEntrada"){
        $entrada = 'WattE';
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
    else if($_POST['op2'] == "WattSaida"){
        $saida = 'WattS';
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
    else if($entrada == 'WattE' and $saida == 'WattS'){
        echo 'Não é possível converter valores de uma mesma unidade!';
    }
    else if($entrada == 'MiliE' and $saida == 'MiliS'){
        echo 'Não é possível converter valores de uma mesma unidade!';
    }
    else if($entrada == 'MicroE' and $saida == 'MicroS'){
        echo 'Não é possível converter valores de uma mesma unidade!';
    }
    //conversão MEGAWATT
    if($entrada == 'MegaE' and $saida == 'KiloS'){
        $valor = $valor * 1000;
        echo 'O resultado da conversão é: ', $valor, ' KW';
    }
    else if($entrada == 'MegaE' and $saida == 'WattS'){
        $valor = $valor * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' W';
    }
    else if($entrada == 'MegaE' and $saida == 'MiliS'){
        $valor = $valor * 1000 * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' mW';
    }
    else if($entrada == 'MegaE' and $saida == 'MicroS'){
        $valor = $valor * 1000 * 1000 * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' uW';
    }
    //conversão QUILOWATT
    if($entrada == 'KiloE' and $saida == 'MegaS'){
        $valor = $valor / 1000;
        echo 'O resultado da conversão é: ', $valor, ' MW';
    }
    else if($entrada == 'KiloE' and $saida == 'WattS'){
        $valor = $valor * 1000;
        echo 'O resultado da conversão é: ', $valor, ' W';
    }
    else if($entrada == 'KiloE' and $saida == 'MiliS'){
        $valor = $valor * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' mW';
    }
    else if($entrada == 'KiloE' and $saida == 'MicroS'){
        $valor = $valor * 1000 * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' uW';
    }
    //conversão WATT
    if($entrada == 'WattE' and $saida == 'MegaS'){
        $valor = $valor / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' MW';
    }
    else if($entrada == 'WattE' and $saida == 'KiloS'){
        $valor = $valor / 1000;
        echo 'O resultado da conversão é: ', $valor, ' kW';
    }
    else if($entrada == 'WattE' and $saida == 'MiliS'){
        $valor = $valor * 1000;
        echo 'O resultado da conversão é: ', $valor, ' mW';
    }
    else if($entrada == 'WattE' and $saida == 'MicroS'){
        $valor = $valor * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' uW';
    }
    //conversão MILIWATT
    if($entrada == 'MiliE' and $saida == 'MegaS'){
        $valor = $valor / 1000 / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' MW';
    }
    else if($entrada == 'MiliE' and $saida == 'KiloS'){
        $valor = $valor / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' kW';
    }
    else if($entrada == 'MiliE' and $saida == 'WattS'){
        $valor = $valor / 1000;
        echo 'O resultado da conversão é: ', $valor, ' W';
    }
    else if($entrada == 'MiliE' and $saida == 'MicroS'){
        $valor = $valor * 1000;
        echo 'O resultado da conversão é: ', $valor, ' uW';
    }
    //conversão MICROHM
    if($entrada == 'MicroE' and $saida == 'MegaS'){
        $valor = $valor / 1000 / 1000 / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' MW';
    }
    else if($entrada == 'MicroE' and $saida == 'KiloS'){
        $valor = $valor / 1000 / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' kW';
    }
    else if($entrada == 'MicroE' and $saida == 'WattS'){
        $valor = $valor / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' W';
    }
    else if($entrada == 'MicroE' and $saida == 'MiliS'){
        $valor = $valor / 1000;
        echo 'O resultado da conversão é: ', $valor, ' mW';
    }
    //nenhuma
    else if($entrada == false or $saida == false){
        echo 'Insira as unidades!';
    }
    }
?>