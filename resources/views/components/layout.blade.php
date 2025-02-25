<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Progetto Jader</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <link rel="stylesheet" href="\styleFolder\style.css">
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand mt-2 mt-lg-0" href="#">
                <img src="\images\LOGO\fullstack.png" height="100" alt="MDB Logo" loading="lazy" />
            </a>
            <ul class="navbar-nav justify-content-center flex-grow-1">
                <li class="nav-item">
                    <a class="nav-link" href="/">Homepage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/articles">Lista Articoli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contattami</a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <a class="text-reset me-3" href="#">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <a class="navbar-brand mt-2 mt-lg-0" href="#">
                    <img src="\images\LOGO\fullstack.png" height="100" alt="MDB Logo" loading="lazy" />
                </a>
            </div>
        </div>
    </nav>
  
  <div class="container py-2">
  {{$slot}}
  </div>
  

  <footer class="text-center text-lg-start bg-body-tertiary text-muted">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <div class="me-5 d-none d-lg-block">
        <h6 class="w-100 text-center">Sito prova per Corso Aulab creato con laravel</h3>
      </div>
    </section>
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Hackademy 51
            </h6>
            <p>
              Esercizio per allenarsi con layout e controller.
            </p>
          </div>
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              Prodotti
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              Links utili
            </h6>
            <p>
              <a href="#!" class="text-reset">Homepage</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Articoli</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Contattami</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Contatti</h6>
            <p><i class="fas fa-home me-3"></i> Milano-Lombardia-Italy</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              jaderdaniotti.lavoro@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i> +39 351 315 2008</p>
            <p><i class="fas fa-print me-3"></i> +33 07 5444 0118</p>
          </div>
        </div>
      </div>
    </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
  </footer>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>