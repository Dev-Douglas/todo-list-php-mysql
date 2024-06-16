<header class="pt-2 px-2 mb-4 border-bottom bg-body">
  <nav class="navbar border-bottom border-body">
    <button type="button" class="btn" id="sidebar-toggle">
      <i class="fa-solid fa-bars fs-3"></i>
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
  </nav>

  <div class="container-fluid py-2">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </nav>
  </div>

</header>