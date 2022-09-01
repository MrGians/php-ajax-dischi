<?php 
include __DIR__ . '/../api/discs/index.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="./../assets/css/style.css">
  <title>php dischi v-1</title>
</head>
<body>
  <!-- Header -->
  <header>
    <div class="container-lg">
      <div id="navbar">
        <img src="./../assets/img/logo.svg" alt="Spotify Logo" />
        <div class="search-filters">
          <!-- Disc Genre Select -->
          <!-- TODO DINAMIC OPTION -->
          <select>
            <option value="" selected>Seleziona un artista</option>
            <option value="pop">Pop</option>
            <option value="rock">Rock</option>
            <option value="jazz">Jazz</option>
          </select>
        </div>
      </div>
    </div>
  </header>

  <!-- Main -->
  <main>
    <!-- Loader -->
    <!-- TODO Se la lunghezza dell'array dei dischi è diverso da 10 mostra il loader -->
    <div class="loader">
      <strong>Discs List is loading...</strong>
    </div>
    <!-- Discs List -->
    <!-- TODO Altrimenti mostra la lista dei dischi -->
    <div v-else id="discs-list">
      <div class="container">
        <!-- TODO Se l'array risultante dal filtro di ricerca è >= 1 mostra i risultati -->
        <div class="row py-3">
          <!-- TODO DINAMIC CARDS -->
          <div class="col py-3">
            <div class="disc-card">
              <img src="disc.poster" alt="disc.title" />
              <h6 class="disc-name">disc.title</h6>
              <div class="artist">disc.author</div>
              <div class="date">disc.year</div>
            </div>
          </div>
        </div>
        <!-- TODO Altrimenti mostra un avviso di "Nessun risultato trovato" -->
        <div>
          <h2 class="text-center text-light py-5">Non è stato trovato nessun risultato..</h2>
        </div>
      </div>
    </div>
  </main>
</body>
</html>