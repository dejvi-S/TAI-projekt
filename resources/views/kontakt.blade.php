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
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/kontakt.css">
    <!-- Personalizowany kod JavaScript -->
    <script src="js/main.js"></script>
  </head>
  <body onload="animacjaKoszyka()">
  <x-nav />
    <div id="spacer"></div>
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
    @endif
    <form  action="" method="post" action="{{ route('store')  }}">
      <h1>FORMULARZ KONTAKTOWY</h1>
      @csrf
      <div class="formularz">
        <label for="imiek">Imię</label>
          <input
            type="text"
            id="imiek"
            name="imiek"
            placeholder="Imię"
            title="Podaj imię zanczynając od wielkiej litery"
            required
            pattern="[A-ZĄŃĘŚŹŻŁĆÓ]{1}[a-ząśńężźłćó]{1,19}"
          />
          <label for="nazwiskok">Nazwisko</label>
          <input
            type="text"
            id="nazwiskok"
            name="nazwiskok"
            placeholder="Nazwisko"
            title="Podaj nazwisko zanczynając od wielkiej litery, nazwisko dwuczłonowe odziel znakiem '-'"
            required
            pattern="([A-ZĄŃĘŚŹŻŁĆÓ]{1}[a-ząęśżźłńćó]{1,19})(-?[A-ZĄĘŃŚŹŻŁĆÓ]{1}[a-ząńęśżźłćó]{1,19})?"
          />
        <label for="emailk">Email</label>
        <input type="email" id="emailk" name="emailk"  placeholder="Mail" required>
        <label for="numerTelk">Telefon</label>
          <input
            type="tel"
            id="numerTelk"
            name="numerTelk"
            placeholder="Numer telefonu"
            pattern="[0-9]{9}"
            required
          />
        <label for="wiadomosc">Wiadomość</label>
        <textarea id="wiadomosc" name="wiadomosc" rows="4" cols="50" minlength="20" maxlength=250 required></textarea>
        <div class="checkbox">
          <input type="checkbox" id="labelCheckbox" required>
          <label for="labelCheckbox">Potwierdzam 100% nieznajomość regulaminu.</label>
        </div>
        <button onclick="return confirm('Czy na pewno wysłać wiadomość?')" type="submit" name="send" value="Submit" class="przycisk-formularz">Wyślij</button>
        <button type="reset" class="przycisk-formularz">Wyczyść</button>
      </div>
    </form>

    <footer>Dawid Zając | Projekt 2k20 Narzędzia Internetowe</footer>
  </body>
</html>
