<nav class="navbar navbar-expand-lg fixed-top" id="menu-desktop">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img src="assets/img/logo2.png" width="36" /></a>
    <button class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav gap-4 mx-auto">
      <a class="nav-link" id="home" aria-current="page" href="index.php" id="index">Home</a>
      <a class="nav-link" href="1_biografia.php" id="biografia">Biografia</a>
      <a class="nav-link" href="2_film.php" id="film">Film</a>
      <a class="nav-link" href="3_curiosita.php" id="curiosita">Curiosità</a>
      <a class="nav-link" href="4_musica.php" id="musica">Musica</a>
    </div>
    <div class="navbar-nav gap-4">
      <a class="nav-link" href="https://x.com/quenttarantino" target="_blank" id="social">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-twitter-x" viewBox="0 0 16 16">
          <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
        </svg>
      </a>
    </div>
  </div>
</nav>

<nav class="navbar fixed-top" id="menu-mobile">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="assets/img/logo2.png" width="36" /></a>
    <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
        <a class="navbar-brand" id="logo-mobile" href="index.php"><img src="assets/img/logo1.png" width="36" /></a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" id="home" aria-current="page" href="index.php" id="index">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="1_biografia.php" id="biografia">Biografia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="2_film.php" id="film">Film</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="3_curiosita.php" id="curiosità">Curiosità</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="4_musica.php" id="musica">Musica</a>
          </li>

          <div class="line"></div>

          <li class="nav-item">
            <a class="nav-link" href="https://x.com/quenttarantino" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-twitter-x" viewBox="0 0 16 16">
                <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>