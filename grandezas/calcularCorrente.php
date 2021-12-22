<!DOCTYPE html>
<meta charset="utf-8"> 
<html>
    <head>
        <head lang="pt-br">
        <title>Corrente</title>
        <link href="../style.css" rel="stylesheet">
    </head>
    <script type="text/javascript"></script>
    <body>
    <section>
        <div>
            <p>Vamos aos calculos! [Corrente - I]</p>
            <p>Insira os valores respectivamente:</p>
            <form action="" method="post">
            Digite o valor a ser convertido:
                <input type="number" step="any" id="valor1" name="valor1" placeholder="Exemplo: 2,5"><br>
                <br>
                Mega-Ampère (MA)<input type="radio" name="op1" value="MegaEntrada"><br>
                KiloAmpère (KA)<input type="radio" name="op1" value="KiloEntrada"><br>
                Ampère (A)<input type="radio" name="op1" value="WattEntrada"><br>
                MiliAmpère (mA)<input type="radio" name="op1" value="MiliEntrada"><br>
                MicroAmpère (uA)<input type="radio" name="op1" value="MicroEntrada"><br>
                NanoAmpère (nA)<input type="radio" name="op1" value="NanoEntrada"><br> 
                <br><br>
                <label>Para qual unidade você deseja converter?</label>
                <br>
                Mega-Ampère (MA)<input type="radio" name="op2" value="MegaSaida"><br>
                KiloAmpère (KA)<input type="radio" name="op2" value="KiloSaida"><br>
                Ampère (A)<input type="radio" name="op2" value="WattSaida"><br>
                MiliAmpère (mA)<input type="radio" name="op2" value="MiliSaida"><br>
                MicroAmpère (uA)<input type="radio" name="op2" value="MicroSaida"><br>
                NanoAmpère (nA)<input type="radio" name="op2" value="NanoSaida"><br>
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
    else if($_POST['op1'] == "NanoEntrada"){
        $entrada = 'NanoE';
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
    else if($_POST['op2'] == "NanoSaida"){
        $saida = 'NanoS';
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
    else if($entrada == 'NanoE' and $saida == 'NanoS'){
        echo 'Não é possível converter valores de uma mesma unidade!';
    }
    //conversão MEGA AMPERE
    if($entrada == 'MegaE' and $saida == 'KiloS'){
        $valor = $valor * 1000;
        echo 'O resultado da conversão é: ', $valor, ' KA';
    }
    else if($entrada == 'MegaE' and $saida == 'WattS'){
        $valor = $valor * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' A';
    }
    else if($entrada == 'MegaE' and $saida == 'MiliS'){
        $valor = $valor * 1000 * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' mA';
    }
    else if($entrada == 'MegaE' and $saida == 'MicroS'){
        $valor = $valor * 1000 * 1000 * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' uA';
    }
    else if($entrada == 'MegaE' and $saida == 'NanoS'){
        $valor = $valor * 1000 * 1000 * 1000 * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' nA';
    }
    //conversão QUILOAMPERE
    if($entrada == 'KiloE' and $saida == 'MegaS'){
        $valor = $valor / 1000;
        echo 'O resultado da conversão é: ', $valor, ' MA';
    }
    else if($entrada == 'KiloE' and $saida == 'WattS'){
        $valor = $valor * 1000;
        echo 'O resultado da conversão é: ', $valor, ' A';
    }
    else if($entrada == 'KiloE' and $saida == 'MiliS'){
        $valor = $valor * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' mA';
    }
    else if($entrada == 'KiloE' and $saida == 'MicroS'){
        $valor = $valor * 1000 * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' uA';
    }
    else if($entrada == 'KiloE' and $saida == 'NanoS'){
        $valor = $valor * 1000 * 1000 * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' nA';
    }
    //conversão AMPERE
    if($entrada == 'WattE' and $saida == 'MegaS'){
        $valor = $valor / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' MA';
    }
    else if($entrada == 'WattE' and $saida == 'KiloS'){
        $valor = $valor / 1000;
        echo 'O resultado da conversão é: ', $valor, ' kA';
    }
    else if($entrada == 'WattE' and $saida == 'MiliS'){
        $valor = $valor * 1000;
        echo 'O resultado da conversão é: ', $valor, ' mA';
    }
    else if($entrada == 'WattE' and $saida == 'MicroS'){
        $valor = $valor * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' uA';
    }else if($entrada == 'WattE' and $saida == 'NanoS'){
        $valor = $valor * 1000 * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' nA';
    }
    //conversão MILI AMPERE
    if($entrada == 'MiliE' and $saida == 'MegaS'){
        $valor = $valor / 1000 / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' MA';
    }
    else if($entrada == 'MiliE' and $saida == 'KiloS'){
        $valor = $valor / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' kA';
    }
    else if($entrada == 'MiliE' and $saida == 'WattS'){
        $valor = $valor / 1000;
        echo 'O resultado da conversão é: ', $valor, ' A';
    }
    else if($entrada == 'MiliE' and $saida == 'MicroS'){
        $valor = $valor * 1000;
        echo 'O resultado da conversão é: ', $valor, ' uA';
    }
    else if($entrada == 'MiliE' and $saida == 'NanoS'){
        $valor = $valor * 1000 * 1000;
        echo 'O resultado da conversão é: ', $valor, ' nA';
    }
    //conversão MICRO AMPERE
    if($entrada == 'MicroE' and $saida == 'MegaS'){
        $valor = $valor / 1000 / 1000 / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' MA';
    }
    else if($entrada == 'MicroE' and $saida == 'KiloS'){
        $valor = $valor / 1000 / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' kA';
    }
    else if($entrada == 'MicroE' and $saida == 'WattS'){
        $valor = $valor / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' A';
    }
    else if($entrada == 'MicroE' and $saida == 'MiliS'){
        $valor = $valor / 1000;
        echo 'O resultado da conversão é: ', $valor, ' mA';
    }
    else if($entrada == 'MicroE' and $saida == 'NanoS'){
        $valor = $valor * 1000;
        echo 'O resultado da conversão é: ', $valor, ' nA';
    }
    //conversão NANO AMPERE
    if($entrada == 'NanoE' and $saida == 'MegaS'){
        $valor = $valor / 1000 / 1000 / 1000 / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' MA';
    }
    else if($entrada == 'NanoE' and $saida == 'KiloS'){
        $valor = $valor / 1000 / 1000 / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' kA';
    }
    else if($entrada == 'NanoE' and $saida == 'WattS'){
        $valor = $valor / 1000 / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' A';
    }
    else if($entrada == 'NanoE' and $saida == 'MiliS'){
        $valor = $valor / 1000 / 1000;
        echo 'O resultado da conversão é: ', $valor, ' mA';
    }
    else if($entrada == 'NanoE' and $saida == 'MicroS'){
        $valor = $valor / 1000;
        echo 'O resultado da conversão é: ', $valor, ' uA';
    }
    //nenhuma
    else if($entrada == false or $saida == false){
        echo 'Insira as unidades!';
    }
    }
?>