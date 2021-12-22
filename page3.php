<!DOCTYPE html>
<meta charset="utf-8"> 
<html>
    <head lang="pt-br">
        <title>Welcome!</title>
        <link href="../ProjetoConversorSenai/style.css" rel="stylesheet">
    </head>
    <body>
        <section>
            <p>Bem vindo!</p>
            <p>Selecione qual fórmula você deseja calcular:</p>
            <div>
                <!--Div para escolher form-->
                <p><strong>Resistor - Calucular resistência em:</strong></p>
                <button onclick="window.location.href='../ProjetoConversorSenai/formulas/serieR.php'">Série</button>
                <button onclick="window.location.href='../ProjetoConversorSenai/formulas/paraleloR.php'">Paralelo</button>
                <button onclick="window.location.href='../ProjetoConversorSenai/formulas/mistaR.php'">Forma Mista</button>
                <p>Resistor - Resistência</p>
                <button onclick="window.location.href='../ProjetoConversorSenai/calcularPotencia.php'">Potencia (Watts - P)</button>
                <button onclick="window.location.href='../ProjetoConversorSenai/calcularCorrente.php'">Corrente (Amperes - A)</button>
            </div>
        </section>
    </body>
</html>
