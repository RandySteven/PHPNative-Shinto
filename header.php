<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Kaushan Script' rel='stylesheet'>
    <style>
      html, body {
        margin: 0px;
        font-family: 'Kaushan Script';font-size: 22px;
      }
      .jumbotron{
        background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("assets/images/golden-pavilion-kinkakuji-temple-kyoto-japan\ 1.png");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        padding: 2rem;
      }
      .text-red{
        color: red;
      }
      .h1{
        font-size: 120px;
      }
    </style>
<title> <?php echo $title?> </title>
</head>
<body>
      <!-- Navbar -->
    <div class="jumbotron">

      <nav class="navbar navbar-expand-lg mt-0">
        <div class="container-fluid">
          <a class="navbar-brand text-red" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link <?php $title=="Shrine" ? print("active") : print("text-red") ?> active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php $title=="Create" ? print("active") : print("text-red") ?>" href="create.php">Create</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link text-red dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <h1 class="text-center py-xl-5 text-red h1">Shrines</h1>
    </div>