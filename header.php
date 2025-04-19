<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Amigos Felinos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Chivo:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>

<body class="<?= isset($felino) ? $felino : '' ?>">
  <header id="header">
  <nav class="navbar navbar-expand-md" id="nav">
    <div class="container">
      <a class="navbar-brand" href="inicio.php"><img src="img/logo.svg" class="img-fluid" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="inicio.php">Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Sabana
            </a>
            <ul class="dropdown-menu sabana">
              <li><a class="dropdown-item" href="leon.php">Leon</a></li>
              <li><a class="dropdown-item" href="#">Leopardo</a></li>
              <li><a class="dropdown-item" href="#">Guepardo</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Bosque
            </a>
            <ul class="dropdown-menu bosque">
              <li><a class="dropdown-item" href="puma.php">Puma</a></li>
              <li><a class="dropdown-item" href="#">Lyinx</a></li>
              <li><a class="dropdown-item" href="#">Ocelote</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Selvas
            </a>
            <ul class="dropdown-menu selva">
              <li><a class="dropdown-item" href="#">Pantera Negra</a></li>
              <li><a class="dropdown-item" href="tigre.php">Tigre de Bengala</a></li>
              <li><a class="dropdown-item" href="#">Jaguar</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nuestro Equipo</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>