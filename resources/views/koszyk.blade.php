<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <meta name="description" content="Portfolio i kreatywność. Dawid 'dejviS' Zając" />
  <meta name="author" content="Dawid Zając" />

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
  <div id="kosz">
    <h2>Lista zamówien</h2>
    <table>
      <thead>
        <tr>
          <th>Imie</th>
          <th>Nazwisko</th>
          <th>Mail</th>
          <th>Adres</th>
          <th>Nr domu</th>
          <th>Kod pocztowy</th>
          <th>Telefon</th>
          <th>Strona WWW</th>
          <th>Opcje</th>
          <th>Data</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <div id="kontenerZakupow">
        @foreach($data as $item)
        <tr>
          <th>{{$item->imie}}</th>
          <th>{{$item->nazwisko}}</th>
          <th>{{$item->mail}}</th>
          <th>{{$item->adres}}</th>
          <th>{{$item->nr_domu}}</th>
          <th>{{$item->kod_pocztowy}}</th>
          <th>{{$item->telefon}}</th>
          <th>{{$item->www}}</th>
          <th>{{$item->opcje}}</th>
          <th>{{$item->data}}</th>
          <th><form action="{{ route('edit', $item->id) }}}"><button click class="przycisk">Edit</button></form></th>
          <th><form action="{{ route('delete', $item->id) }}}"><button class="przycisk">Usuń</button></form></th>
        </tr>
        @endforeach
    </table>
  </div>
  </div>

  <div class="spacer" style="background-color: transparent;"></div>
  <footer>Dawid Zając | Projekt 2k20 Narzędzia Internetowe</footer>
</body>

</html>