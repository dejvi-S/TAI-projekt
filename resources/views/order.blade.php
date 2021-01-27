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
    <link rel="stylesheet" href="css/kontakt.css" />
    <link rel="stylesheet" href="css/koszyk.css" />

    <!-- Personalizowany kod JavaScript -->
    <script src="js/main.js"></script>
  </head>
  <body>
  <x-nav />
    <div id="spacer"></div>
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
    @endif
    <div id="formularzZamowienia">
      <form action="" method="post" action="{{ route('store')  }}">
      @csrf
        <h1>FORMULARZ ZAMÓWIENIA</h1>
        <div class="formularz">
          <label for="imie">Imię</label>
          <input
            type="text"
            id="imie"
            name="imie"
            placeholder="Imię"
            title="Podaj imię zanczynając od wielkiej litery"
            required
            pattern="[A-ZĄŃĘŚŹŻŁĆÓ]{1}[a-ząśęńżźłćó]{1,19}"
          />
          <label for="nazwisko">Nazwisko</label>
          <input
            type="text"
            id="nazwisko"
            name="nazwisko"
            placeholder="Nazwisko"
            title="Podaj nazwisko zanczynając od wielkiej litery, nazwisko dwuczłonowe odziel znakiem '-'"
            required
            pattern="([A-ZĄŚŹĘŃŻŁĆÓ]{1}[a-ząśńężźłćó]{1,19})(-?[A-ZĄŚŹŃĘŻŁĆÓ]{1}[a-ząśńężźłćó]{1,19})?"
          />
          <label for="email">Email</label>
          <input
            type="email"
            name="email"
            id="email"
            placeholder="Mail"
          />
          <label for="adres">Adres</label>
          <input
            type="text"
            id="adres"
            name="adres"
            placeholder="Adres"
            required
            pattern="([A-ZĄĘŚŹŻŁĆÓ]{1}[a-ząęśżźłćó]{1,19}[\s]{0,})+"
            title="Każdy człon nazwy zaczynaj od wielkiej litery "
          />
          <div class="groupout">
            <div class="groupin">
              <label for="dom">Numer domu</label>
              <input
                type="text"
                id="dom"
                name="nr_domu"
                placeholder="Numer domu"
                pattern="[1-9]{1}([0-9])+"
              />
            </div>
            <div class="groupin">
              <label for="kod">Kod pocztowy</label>
              <input
                type="text"
                id="kod"
                name="kod_pocztowy"
                placeholder="Kod - pocztowy"
                pattern="\d{2}-\d{3}"
              />
            </div>
          </div>
          <label for="numerTel">Telefon</label>
          <input
            type="tel"
            id="numerTel"
            name="telefon"
            placeholder="Numer telefonu"
            pattern="[0-9]{9}"
          />
          <label for="strona">Strona WWW</label>
          <input type="text" name="www" id="strona" required placeholder="">
          <div class="groupout checkout">
            <div class="checkin">
              <input type="checkbox" name="check[]" value="SEO" id="seo"><img src="img/google.png" alt="google"><p>SEO</p>
            </div>
            <div class="checkin">
              <input type="checkbox" name="check[]" value="ANALITYKA" id="analityka"><img src="img/analysis.png" alt="analityka"><p>Analityka</p>
            </div>
          </div>
          <div class="checkbox">
            <input type="checkbox" id="labelCheckbox" required />
            <label for="labelCheckbox">Nie znam regulaminu</label>
          </div>
          <button type="submit" id="przyciskGlowny" class="przycisk-formularz">Zamów</button>
          <button type="reset" class="przycisk-formularz">Wyczyść</button>
        </div>
      </form>
    </div>
    <div class="spacer" style="background-color: transparent;"></div>
    <footer>Dawid Zając | Projekt 2k20 Narzędzia Internetowe</footer>
  </body>
</html>
