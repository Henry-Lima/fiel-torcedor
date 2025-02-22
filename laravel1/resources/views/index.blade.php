<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        .cabecalho {
            background-color: black;
            margin-top: -1%;
            margin-right: -2%;
            margin-left: -2%;
            margin-bottom: -3%;
        }

        ul {
            display: flex;
            justify-content: space-evenly;
            margin-left: -3%;     
            margin-right: 4%;  
        }

        a {
            text-decoration: none;
            color: goldenrod;
            font-weight: bold;
            position: absolute;
            margin-top: 7%
        }

        a:hover {
            color: white;
            border: goldenrod 1px solid; 
            border-radius: 5px;
            padding: 5px;
        }

        .saudacoes {
            background-image: url("https://get.wallhere.com/photo/Corinthians-Torcida-soccer-fans-1220600.jpg");
            background-size: cover;
            margin-right: -1%;
            margin-left:-1%;
            margin-top: -3%;
            background-repeat: no-repeat;
        }

        #titulo {
            text-align: center;
            margin-top: 3%;
            font-weight: bold;
            color: goldenrod;
            font-size: 200px;
        }

        .planos {
            background-color: gray;
            margin-left: -1%;
            margin-right: -1%;
            margin-top: -7%;
            margin-bottom: 10%
        }

        #fiel {
            align-items: center;
            margin-left: 20%;
        }

        #titulo-fiel {
            text-align: center;
            font-size: 40px;
        }

        #text {
            text-align: center;
            font-size: 20px;
        }

        #preco {
            text-align: center;
            color: goldenrod;
            font-size: 40px;
        }

        #meu-fiel {
            border: 2px solid black;
            border-radius: 10px;
            margin-right: 15%;
            margin-left: 15%;
            margin-bottom: 10%;
            margin-top: 3%;
            background-color: white;
        }

        


    </style>

<body>
    <div class="cabecalho">
        <ul class="header">
        <img id="fiel-img" src="https://seeklogo.com/images/F/fiel-torcedor-logo-9A56976C1A-seeklogo.com.png" alt="">
            <li><a id="header-link" href="#">PLANOS</a></li>
            <li><a id="header-link" href="#">INGRESSOS</a></li>
            <li><a id="header-link" href="#">AJUDA</a></li>
            <li><a id="header-link" href="#">CONHEÇA</a></li>
            
        </ul>
    </div>
    <div class="saudacoes">
        <h1 id="titulo">Saudações Alvinegras!<br/>
            Aqui você compra ingressos!<br/>
            e planos do Fiel Torcedor.!<br/>
            Aproveite!</h1>
    </div>
    <div class="planos">
        <div id="meu-fiel">
            <img id="fiel" src="https://www.fieltorcedor.com.br/static/fieltorcedor/img/logo_digital.png" alt="">
            <h3 id="titulo-fiel">MINHA VIDA</h3>
            <p id="text">Esse é pra quem gosta de sentir o tremor das arquibancadas.</p>
            <p id="preco">R$ 24,50</p><br/>
            <p id="text">por mês</p>
        </div>

        <div id="meu-fiel">
            <img id="fiel" src="https://www.fieltorcedor.com.br/static/fieltorcedor/img/logo_digital.png" alt="">
            <h3 id="titulo-fiel">MINHA HISTÓRIA</h3>
            <p id="text">O plano perfeito pra quem quer ter uma vista do centro do campo.</p>
            <p id="preco">R$ 60,00</p>
            <p id="text">por mês</p>
            
        </div>

        <div id="meu-fiel">
            <img id="fiel" src="https://www.fieltorcedor.com.br/static/fieltorcedor/img/logo_digital.png" alt="">
            <h3 id="titulo-fiel">MEU AMOR</h3>
            <p id="text">Prioridade 1 na compra dos ingressos e acessos as melhores localizações do estádio</p>
            <p id="text">Plano anual</p>
            <p id="preco">RS 300,00</p>
            <p id="text">em 12x</p>
            
        </div>
    </div>
</body>
</html>