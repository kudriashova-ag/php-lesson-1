<?php require_once './functions/main.php' ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>PHP Project</title>
</head>

<body class="body">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">PHP project</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="index.php?page=contacts">Contacts</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php?page=about">About Us</a>
          </li>

        </ul>

      </div>
    </div>
  </nav>

  <main class="container">

    <!-- Main Content -->
    <?php

    if (file_exists('./pages/' . $page . '.php')) {
      include './pages/' . $page . '.php';
    } else {
      echo '<h1>Page not found</h1>';
    }
    ?>
  </main>


  <footer class="bg-dark text-secondary text-center mt-auto py-3">
    <p class="m-0">Copyright &copy; <?= date('Y') ?></p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>