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
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
    <!-- Personalizowany kod CSS -->
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/oferta.css" />
    <!-- Personalizowany kod JavaScript -->
    <script src="js/main.js"></script>
  </head>
  <body onload="animacjaKoszyka()">
  <x-nav />
    <div id="spacer"></div>
    <div class="box">
      <h1>Oferta</h1>
      <div id="kartaOferty">
        <div class="oferta">
          <div
            class="zdjecieOferta"
            style="background-image: url('img/google.png');"
          ></div>
          <div class="tekstOferta">
            <h3>Optymalizacja SEO</h3>
            <p>
              Profesjonalnie zajmiemy się pozycjonowaniem Twojej strony TAK, aby każdy mógł ją zobaczyć!
            </p>
            <p>
              Cena<br>150zł/strona
            </p>
          </div>
          <div class="przyciskOferta">
            <button onclick="window.location = 'zamowienie'">Zamów</button>
          </div>
        </div>
        <div class="oferta">
          <div
            class="zdjecieOferta"
            style="background-image: url('img/coding.png');"
          ></div>
          <div class="tekstOferta">
            <h3>Zaprojektowanie i stworzenie aplikacji WWW</h3>
            <p>
              Od zera zaprojektujemy dla Ciebie stronę dopasowaną do Twoich potrzeb!
            </p>
            <p>
              Cena<br>Do uzgodnienia
            </p>
          </div>
          <div class="przyciskOferta">
            <button onclick="window.location = 'kontakt'">Kontakt</button>
          </div>
        </div>
        <div class="oferta">
          <div
            class="zdjecieOferta"
            style="background-image: url('img/analysis.png');"
          ></div>
          <div class="tekstOferta">
            <h3>Analiza strony</h3>
            <p>
              Zajmiemy się marketingiem Twojej strony i uczynimy ją bardziej atrakcyjną dla klientów!
            </p>
            <p>
              Cena<br>400zł/strona
            </p>
          </div>
          <div class="przyciskOferta">
            <button onclick="window.location = 'zamowienie'">Zamów</button>
          </div>
        </div>
      </div>
    </div>
    <footer>Dawid Zając | Projekt 2k20 Narzędzia Internetowe</footer>
  </body>
</html>
