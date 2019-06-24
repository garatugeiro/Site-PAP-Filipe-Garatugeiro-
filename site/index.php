<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>smilingdog</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/scnd.css">
</head>

<body>
    <?php include_once 'includes/nav.php' ?>
    <section id="slider">
        <h1 id="cf">Fazemos sorrir <br>o seu cão.</h1>
    </section>
    <section id="sobre_nos">
        <div class="sb-left">
            <h3>Sobre Nós</h3>
            <br>
            <p>Smiling Dog é uma empresa que tem como principal objetivo ser uma creche/atl para cães, isto é, um local onde
                as pessoas que tenham cães possam deixá-los no dia-a-dia(ex:no hórario de trabalho) onde irão existir vários
                tipos de brincadeiras, circuitos para os seus cães libertarem toda a sua energia que têm dentro de si...</p>
            <br>
            <div class="sb-btn">
                <a href="sobrenos.php">
                  <button>Saber Mais</button>
                </a>
            </div>
        </div>
        <div class="sb-right">
            <img src="media/5.png">
        </div>
    </section>
    <section id="servicos">
        <h3>Serviços</h3>
        <br>
        <div class="s-grid">
            <div class="sg-each">
                <img src="media/imagem[1].png">
                <br>
                <h4>Creche Canina</h4>
                <br>
                <p>Um espaço pensado para receber os nossos amigos de quatro patas, em que estão ocupados durante o dia, com
                    imensas brincadeiras e aprendizagem constante.</p>
            </div>
            <div class="sg-each">
                <img src="media/ad.png">
                <br>
                <h4>Passeios para cães</h4>
                <br>
                <p> Os nossos passeios são direcionados a cães de todas as raças, tamanhos, e idades, procurando satisfazer as
                    necessidades físicas e mentais de cada animal.</p>
            </div>
            <div class="sg-each">
                <img src="media/carro.jpg">
                <br>
                <h4>Transporte Canino</h4>
                <br>
                <p> Nós oferecemos uma solução à sua medida. Transportamos o seu amigo para onde quer que seja com toda a segurança
                    e responsabilidade. No final do seu dia de trabalho, não terá que o ir buscar, ele estará em casa à sua
                    espera.</p>
            </div>
        </div>
        <div class="s-btn">
            <a href="servicos.php">Saber mais</a>
        </div>
    </section>
    <section id="precos">
        <h3>Preços</h3>
        <br>
        <h4>Creche canina:</h4>
        <br>
        <table style="width: 100%;">
            <tr>
              <th class="nd">&nbsp;</th>
              <th class="lar">1x/semana</th> 
              <th class="lar">2x/semana</th> 
              <th class="lar">3x/semana</th> 
              <th class="lar">4x/semana</th> 
              <th class="lar">5x/semana</th> 
            </tr>
            <tr>
                <td>Com transportes</td>
                <td>€75/mes</td>
                <td>€150/mes</td>
                <td>€210/mes</td>
                <td>€260/mes</td>
                <td>€300/mes</td>
            </tr>
            <tr>
                <td>Sem trasnportes</td> 
                <td>€45/mes</td>
                <td>€90/mes</td>
                <td>€118/mes</td>
                <td>€140/mes</td>
                <td>€160/mes</td>
            </tr>
          </table>
          <div class="pcc hd">
              <br>
              <a href="precos.php">Saber mais</a>
          </div>
          <br><br>
          <h4>Passeios para cães:</h4>
          <br>
          <br>
          <div class="pcc">
              <a href="precos.php">Saber mais</a>
          </div>
    </section>
    <section id="contatos">
        <div class="co-left">
            <h3>Contatos</h3>
            <br>
            <p>Morada:</p>
            <p>Rua 1º de Maio nº50 1700-027 Lisboa</p>
            <br>
            <p>Telefone:</p>
            <p>(+351) 214 897 634</p>
            <br>
            <p>Email:</p>
            <p>info@smillingdog.pt</p>
        </div>
        <div class="co-right">
            <img src="media/mapa.png">
        </div>
    </section>
    <?php include_once 'includes/footer.php' ?>
</body>

</html>