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
      </div>
    </div>
  </header>

  <!-- Main -->
  <main>
    <!-- Loader -->
    <?php if (count($discs) !== 6) : ?>
    <div class="loader">
      <strong>Discs List is loading...</strong>
    </div>
    <!-- Discs List -->
    <?php else : ?>
    <div id="discs-list">
      <div class="container">
        <div class="row py-3">
          <?php foreach($discs as $disc) : ?>
          <div class="col py-3">
            <div class="disc-card">
              <img src="<?php echo $disc['poster']?>" alt="<?php echo $disc['title']?>" />
              <h6 class="disc-name"><?php echo $disc['title']?></h6>
              <div class="artist"><?php echo $disc['author']?></div>
              <div class="date"><?php echo $disc['year']?></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>
  </main>
</body>
</html>