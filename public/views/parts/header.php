<?php
    $currentUrl = $_SERVER['REQUEST_URI'];

    $imgURL;

    if (strpos($currentUrl, 'index.php') !== false) {
        $imgURL = 'public/views/assets/img/logo-bellus.svg';
    } else {
        $imgURL = 'http://localhost/APP/public/views/assets/img/logo-bellus.svg';
    }

    
define('IMG_URL', $imgURL);

$navURL = 'http://localhost/APP/';

?>

<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo $navURL . 'index.php'; ?>">
        <img
          src="<?php echo IMG_URL; ?>"
          alt="skincare ecommerce"
          width="150"
          height="100"
        />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo $navURL . 'index.php'; ?>">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $navURL . 'public/views/template/catalogo.php'; ?>">Catalogo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $navURL . 'public/views/template/consejos.php'; ?>">Consejos</a>
          </li>
        </ul>
        <form class="d-flex ms-auto">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Lo mejor para tu piel"
            aria-label="Search"
          />
          <button class="btn btn-main" type="submit">Buscar</button>
        </form>
        <!-- <i class="fas fa-shopping-cart fa-lg mt-5 ms-3 me-5"></i> -->
      </div>
    </div>
  </nav>
</header>
