<header class="bg-dark">
  <nav class="navbar border-bottom border-body">
    <div class="container-fluid">
      <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar" aria-expanded="false" aria-controls="sidebar">
        <i class="fa-solid fa-bars"></i>
      </button>
      <div class="d-flex align-items-center gap-3">
        <form class="d-flex" role="search">
          <div class="input-group">
            <input class="form-control" type="search" placeholder="Pesquisar..." aria-label="Pesquisar...">
            <button type="submit" class="btn btn-outline-success">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </div>
        </form>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="http://via.placeholder.com/100" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
            <li>
              <a class="dropdown-item" href="./perfil.php">Perfil</a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item" href="./php/logout.php">Finalizar sessão</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>