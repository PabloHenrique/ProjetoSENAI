<!DOCTYPE html>
<meta charset="utf-8"> 
<html>
    <head>
        <head lang="pt-br">
        <title>Tensão</title>
        <link href="../ProjetoConversorSenai/style.css" rel="stylesheet">
    </head>
    <script type="text/javascript"></script>
    <body>
    <section>
        <div>
            <p>Vamos aos calculos! [Tensão - V]</p>
            <p>Insira os valores respectivamente:</p>
            <form action="" method="post">
            Digite o valor a ser convertido:
                <input type="number" step="any" id="valor1" name="valor1" placeholder="Exemplo: 2,5"><br>
                <br>
                Megavolt (MV)<input type="radio" name="op1" value="MegaEntrada"><br>
                Kilovolt (KV)<input type="radio" name="op1" value="KiloEntrada"><br>
                Volt (V)<input type="radio" name="op1" value="VoltEntrada"><br>
                Milivolt (mV)<input type="radio" name="op1" value="MiliEntrada"><br>
                Microvolt (uV)<input type="radio" name="op1" value="MicroEntrada"><br> 
                <br><br>
                <label>Para qual unidade você deseja converter?</label>
                <br>
                Megavolt (MV)<input type="radio" name="op2" value="MegaSaida"><br>
                Kilovolt (KV)<input type="radio" name="op2" value="KiloSaida"><br>
                Volt (V)<input type="radio" name="op2" value="VoltSaida"><br>
                Milivolt (mV)<input type="radio" name="op2" value="MiliSaida"><br>
                Microvolt (uV)<input type="radio" name="op2" value="MicroSaida"><br>
                <br><br>
                <button type="submit" onclick='document.write("<?php calculo(); ?>")'>Calcular</button>
                <button onclick="window.location.href='../ProjetoConversorSenai/page1.php'">Retornar</button>
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
    else if($_POST['op1'] == "VoltEntrada"){
        $entrada = 'VoltE';
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
    else if($_POST['op2'] == "VoltSaida"){
        $saida = 'VoltS';
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
    else if($entrada == 'VoltE' and $saida == 'VoltS'){
        echo 'Não é possível converter valores de uma mesma unidade!';
    }
    else if($entrada == 'MiliE' and $saida == 'MiliS'){
        echo 'Não é possível converter valores de uma mesma unidade!';
    }
    else if($entrada == 'MicroE' and $saida == 'MicroS'){
        echo 'Não é possível converter valores de uma mesma unidade!';
    }
    //conversão MEGAVOLT
    if($entrada == 'MegaE' and $saida == 'KiloS'){
        $valor = $valor * 1000;
        echo 'O resultado da conversão é: ', $valor, ' KV';
    }
    else if($entrada == 'MegaE' and $saida == 'VoltS'){
        $valor = $valor * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' V';
    }
    else if($entrada == 'MegaE' and $saida == 'MiliS'){
        $valor = $valor * 1000 * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' mV';
    }
    else if($entrada == 'MegaE' and $saida == 'MicroS'){
        $valor = $valor * 1000 * 1000 * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' uV';
    }
    //conversão QUILOVOLT
    if($entrada == 'KiloE' and $saida == 'MegaS'){
        $valor = $valor / 1000;
        echo 'O resultado da conversão é: ', $valor, ' MV';
    }
    else if($entrada == 'KiloE' and $saida == 'VoltS'){
        $valor = $valor * 1000;
        echo 'O resultado da conversão é: ', $valor, ' V';
    }
    else if($entrada == 'KiloE' and $saida == 'MiliS'){
        $valor = $valor * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' mV';
    }
    else if($entrada == 'KiloE' and $saida == 'MicroS'){
        $valor = $valor * 1000 * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' uV';
    }
    //conversão VOLT
    if($entrada == 'VoltE' and $saida == 'MegaS'){
        $valor = $valor / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' MV';
    }
    else if($entrada == 'VoltE' and $saida == 'KiloS'){
        $valor = $valor / 1000;
        echo 'O resultado da conversão é: ', $valor, ' kV';
    }
    else if($entrada == 'VoltE' and $saida == 'MiliS'){
        $valor = $valor * 1000;
        echo 'O resultado da conversão é: ', $valor, ' mV';
    }
    else if($entrada == 'VoltE' and $saida == 'MicroS'){
        $valor = $valor * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' uV';
    }
    //conversão MILIVOLT
    if($entrada == 'MiliE' and $saida == 'MegaS'){
        $valor = $valor / 1000 / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' MV';
    }
    else if($entrada == 'MiliE' and $saida == 'KiloS'){
        $valor = $valor / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' kV';
    }
    else if($entrada == 'MiliE' and $saida == 'VoltS'){
        $valor = $valor / 1000;
        echo 'O resultado da conversão é: ', $valor, ' V';
    }
    else if($entrada == 'MiliE' and $saida == 'MicroS'){
        $valor = $valor * 1000;
        echo 'O resultado da conversão é: ', $valor, ' uV';
    }
    //conversão MICROVOLT
    if($entrada == 'MicroE' and $saida == 'MegaS'){
        $valor = $valor / 1000 / 1000 / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' MV';
    }
    else if($entrada == 'MicroE' and $saida == 'KiloS'){
        $valor = $valor / 1000 / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' kV';
    }
    else if($entrada == 'MicroE' and $saida == 'VoltS'){
        $valor = $valor / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' V';
    }
    else if($entrada == 'MicroE' and $saida == 'MiliS'){
        $valor = $valor / 1000;
        echo 'O resultado da conversão é: ', $valor, ' mV';
    }
    //nenhuma
    else if($entrada == false or $saida == false){
        echo 'Insira as unidades!';
    }
    }
?>