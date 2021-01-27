<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="Portfolio i kreatywność. Dawid 'dejviS' Zając"
    />
    <meta name="author" content="Dawid Zając" />

    <!-- Bootstrap -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <title>dejviS</title>
    <link rel='shortcut icon' type='image/x-icon' href='../../public/favicon.ico' />
    <!-- Personalizowany kod CSS -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" >

    <!-- Personalizowany kod JavaScript -->
    <script src="js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body onload="animacjaKoszyka()">
    <x-nav />
    <div id="spacer"></div>
    <div class="wizytowka">
      <h1>dejviS</h1>
      <h3>WEBDESIGN | GRAFIKA 3D | SEO</h3>
      <button type="button" class="przycisk" onclick="getElementById('scrollView').scrollIntoView({behavior: 'smooth'})">WIĘCEJ!</button>
    </div>
    <div class="spacer" id="scrollView"></div>
    <div id="omnie">
      <div class="container">
        <h2>O mnie #</h2>
        <p>
          Jestem studentem 2 roku Informatyki. Zajmuję się tworzeniem stron od portfolio po duże aplikacje internetowe.
          Zajmuję się także pozycjonowaniem i optymalizacją stron. Hobbystycznie zajmuję się grafiką 3D, przyjmuję małe zlecenia.
          Każde zlecenie traktuję poważnie oraz wkładam cały swój zasób wiedzy i umiejętności, żeby osiągnąć zamierzony efekt.
        </p>
      </div>
    </div>
    <div class="spacer"></div>
    <div id="wizytowka-projekty">
      <div class="projekty"><h3>Projekty<br>7</h3></div>
      <div class="projekty"><h3>Godzin pracy<br>45</h3></div>
    </div>
    <div class="spacer"><h3>#Technologie</h3></div>

      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-150" src="../img/vuejs.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-150" src="../img/typescript.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-150" src="../img/css.png" alt="Third slide">
          </div>
        </div>
      </div>

    <div class="spacer">$Polecenia</div>
    <div id="polecenia">
      <div class="komentarze">Szybko, sprawnie i profesjonalnie. Dobry kontakt i współpraca. Efekty mnie zadowoliły - Ania <img src="img/rating.png" alt="gwiazdki"></div>
      <div class="komentarze">Dobry Allegrowicz, oby więcej takich ludzi do współprac. Bezproblemowa współpraca - Mateusz <img src="img/rating.png" alt="gwiazdki"></div>
    </div>
    <footer>Dawid Zając | Projekt 2k20 Narzędzia Internetowe</footer>
  </body>
</html>
