<!DOCTYPE html>
<meta charset="utf-8"> 
<html>
    <head>
        <head lang="pt-br">
        <title>Welcome!</title>
        <link href="./css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="./js/script.js" type="text/javascript"></script> 
        <script src="https://kit.fontawesome.com/d1fdd19268.js" crossorigin="anonymous"></script>
    </head>
    <body background="blue">
        <div class="container main">
            <p class="p-title">Bem vindo!</h1>
            <p class="p-subtitle">O que você deseja fazer?</p>
            <ul>
                <div class="container grid">
                    <div class="row">
                        <div class="col">
                            <a class="link-pages" onclick="goCalcular()">
                                <i class="fas fa-calculator"></i>
                                <li class="option-link-pages">
                                    <p>Ir para SenaiEAD</p>
                                </li>
                            </a>
                        </div>
                        <div class="col">
                            <a class="link-pages" onclick="goCalcular()">
                                <i class="fas fa-calculator"></i>
                                <li class="option-link-pages">
                                    <p>Conceitos Importantes</p>
                                </li>
                            </a> 
                        </div>
                        <div class="col">
                            <a class="link-pages" onclick="goCalcular()">
                                <i class="fas fa-calculator"></i>
                                <li class="option-link-pages">
                                    <p>Realizar Cálculos</p>
                                </li>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">   
                            <a class="link-pages" onclick="goCalcular()">
                                <i class="fas fa-calculator"></i>
                                <li class="option-link-pages">
                                    <p>Converter grandezas elétricas</p>
                                </li>
                            </a> 
                        </div>
                        <div class="col">
                            <a class="link-pages" onclick="goFormulas()">
                                <i class="fas fa-book"></i>
                                <li class="option-link-pages">
                                    <p>Fórmulas</p>
                                </li>
                            </a>
                        </div>
                        <div class="col">
                            <a class="link-pages" onclick="goAbout()">
                                <i class="far fa-address-card"></i>
                                <li class="option-link-pages">
                                    <p>Sobre o site</p>
                                </li>
                            </a>
                        </div>
                    </div>
                    </div>
            </ul>
            <footer>
                <p>&copy; PabloHenrique - 2022</p>
            </footer>
        </div>
        <script></script>
    </body>
</html>
