<?php
        include "config/connection.php";
        include "nav.php";

        $stmt = $connect-> prepare("SELECT*FROM blog ORDER BY id DESC");
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
      ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- style.css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font aw -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagens/maior.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagens/daniis.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagens/drogo.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <!-- Cards -->
<div class="">
        <h1>Pessoas Importantes</h1>
<div class="row row-cols-1 row-cols-md-2 g-4">
  <?php foreach($results as $post): ?>
    <div class="col gy-5">
      <div class="card">
        <img src="<?=$post["image"]?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">
            <?=$post["title"]?>
          </h5>
          <p class="card-text">
            <?=$post["description"]?>
          </p>
          <a href="viewPost.php?id=<?=$post["id"]?>">
            <i class="fas fa-eye check-icon">Ver</i>
            </a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  <div class="col gy-5">
    <div class="card">
      <img src="imagens/missi.webp" class="card-img-top" alt="...">
      <div class="card-body">
          <h3>Missandei</h3>
          <p class="card-text">Missandei era originalmente uma escrava poliglótica de Naath que serviu como intérprete para Kraznys mo Nakloz de Astapor , até ser libertada por Daenerys Targaryen , servindo como sua conselheira de confiança e serva desde então. Ela estava entre os subordinados mais leais de Daenerys.</p>
      </div>
    </div>
  </div>
  <div class="col gy-5">
    <div class="card">
      <img src="imagens/ty.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 >Teyrion</h3>
        <p class="card-text">Tyrion Lannister foi o filho mais novo de Tywin e Joanna Lannister, nascido com nanismo. Devido a morte de Joanna no parto dele, Tyrion foi julgado e pressionado por sua família a vida inteira. Após ser acusado falsamente do assassinato do Rei Joffrey I Baratheon, ele matou seu próprio pai que havia dado a sentença de morte a Tyrion. Forçando um autoexílio em Essos, ele tentou forjar alianças com a Rainha Daenerys em sua restauração Targaryen.
           Tyrion aconselhou Daenerys a evitar violência e priorizar diplomacia, mas seus conselhos levaram a várias derrotas da Rainha Dragão. Tudo isso culminou na Batalha de Porto Real, em que Tyrion testemunhou Daenerys cometer um genocídio contra a cidade matando diversos inocentes. Desacreditado, ele abandonou o cargo de Mão da Rainha e foi preso. Após o assassinato de Daenerys pelas mãos de Jon Snow, Tyrion foi convocado como prisioneiro dos Imaculados no Grande Conselho de 305 d.C., onde discursou a favor do Rei Brandon I Stark. Como punição por seus crimes, o novo rei decidiu que Tyrion seria sua Mão, passando o resto da vida compensando os seus erros e servindo Westeros.</p>
      </div>
    </div>
  </div>
  <div class="col gy-5">
    <div class="card">
      <img src="imagens/Jorah.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h3>Jorah Mormont</h3>
        <p class="card-text">Originalmente, Jorah estava trabalhando como espião para Varys, um Mestre de Sussurros (do inglês, Master of Whipers) do Rei Robert Baratheon, em Porto Real, ele enviava para Varys informações sobre os exilados Targaryen. Mas ele cresce a respeitar e admirar Daenerys e a servi-la com seriedade. Ele a salva de uma tentativa de assassinato, para de enviar relatórios para Varys e ignora um perdão oficial real que lhe permitiria voltar para casa em Westeros. Ele se envolve em sentimentos fortes e sem contrapartida para ela. Quando Daenerys aprende de sua espionagem passada, ele é demitido de seu serviço e leva ordens de deixar a sua presença, mas recentemente Tyrion Lannister o deu uma esperança de ganhar a confiança dela mais uma vez.</p>
      </div>
    </div>
  </div>
  <div class="col gy-5">
    <div class="card">
      <img src="imagens/verme.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h3>Verme-Cizento</h3>
        <p class="card-text">Verme Cinzento tornou-se um dos principais conselheiros de Daenerys Targaryen depois de adquirir os Imaculados dos Sábios Mestres de Astapor. Ele participa do saque de Astapor, infligiu Yunkai e liderou a libertação de Meereen. Durante o subseqüente movimento de resistência dos Filhos da Harpia, Verme Cinzento fica gravemente ferido em uma emboscada. Depois que Daenerys deixa Meereen na parte de trás do seu dragão, Drogon, Verme Cinzento permanece em Meereen para apoiar o governo de Tyrion Lannister, enquanto Jorah Mormont e Daario Naharis rastreiam a rainha desaparecida. Ele depois se apaixona pela conselheira de Daenery, Missandei. Mais tarde, Verme Cinzento navega com Daenerys para recuperar o Trono de Ferro. Como parte da invasão de Daenerys, Verme Cinzento e os Imaculados tomam Rochedo Casterly.</p>
      </div>
    </div>
  </div>
</div>
</div>
    <?php include('footer.php')?>
</body>
</html>