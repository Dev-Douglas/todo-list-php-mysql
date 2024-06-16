<?php include './includes/head.php'; ?>

<div class="wrapper">
  <?php include './includes/sidebar.php'; ?>

  <div class="main">
    <?php include './includes/header.php'; ?>

    <main class="content">
      <div class="container-lg">
        <!-- Cards -->
        <div class="row mb-4">
          <div class="col-sm-6 col-lg-3">
            <div class="card border-primary bg-primary bg-opacity-50">
              <div class="card-header">
                <p class="fs-5 fw-semibold mb-0">Usuários cadastrados</p>
              </div>
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between px-3">
                  <h2>
                    12
                  </h2>
                  <i class="fa-solid fa-users fs-1"></i>
                </div>
              </div>
              <div class="card-footer">
                <a href="" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Mais detalhes</a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-3">
            <div class="card border-warning bg-warning bg-opacity-50">
              <div class="card-header">
                <p class="fs-5 fw-semibold mb-0">Total de tarefas</p>
              </div>
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between px-3">
                  <h2>
                    31
                  </h2>
                  <i class="fa-solid fa-list fs-1"></i>
                </div>
              </div>
              <div class="card-footer">
                <a href="" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Mais detalhes</a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-3">
            <div class="card border-success bg-success bg-opacity-50">
              <div class="card-header">
                <p class="fs-5 fw-semibold mb-0">Tarefas concluídas</p>
              </div>
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between px-3">
                  <h2>
                    9
                  </h2>
                  <i class="fa-solid fa-list-check fs-1"></i>
                </div>
              </div>
              <div class="card-footer">
                <a href="" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Mais detalhes</a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-3">
            <div class="card border-danger bg-danger bg-opacity-50">
              <div class="card-header">
                <p class="fs-5 fw-semibold mb-0">Tarefas vencidas</p>
              </div>
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between px-3">
                  <h2>
                    4
                  </h2>
                  <i class="fa-regular fa-calendar-xmark fs-1"></i>
                </div>
              </div>
              <div class="card-footer">
                <a href="" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Mais detalhes</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Resumo -->
        <div class="row mb-2 mb-xl-3">
          <div class="col-auto d-none d-sm-block">
            <h3>Resumo</h3>
          </div>
          <div class="col-auto ms-auto text-end">
            <button class="btn btn-primary">Adicionar usuário</button>
            <button class="btn btn-success">Atribuir tarefa</button>
            <button class="btn btn-warning">Editar tarefa</button>
          </div>
        </div>

        <!-- Tables & Chart -->
        <div class="row">
          <div class="col-12 col-lg-8">
            <div class="card">
              <div class="card-header">Usuários</div>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Status</th>
                        <th scope="col">Ações</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $data = "";
                      for ($i = 0; $i < 6; $i++) {
                        $data .= "<tr>
                                  <th scope='row'>1</th>
                                  <td>Douglas Ribeiro</td>
                                  <td>douglas18.76.80@gmail.com</td>
                                  <td>Ativo</td>
                                  <td>
                                    <div class='dropdown'>
                                      <a href='#' class='link-secondary p-2' data-bs-toggle='dropdown' aria-expanded='false'>
                                        <i class='fa-solid fa-ellipsis-vertical'></i>
                                      </a>
                                      <ul class='dropdown-menu'>
                                        <li>
                                          <a href='#' class='dropdown-item'>Detalhes</a>
                                        </li>
                                        <li>
                                          <a href='#' class='dropdown-item'>Editar</a>
                                        </li>
                                        <li>
                                          <a href='#' class='dropdown-item text-danger'>Deletar</a>
                                        </li>
                                      </ul>
                                    </div>
                                  </td>
                                </tr>";
                      }
                      echo $data;
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-4">
            <div class="card">
              <div class="card-header">Resumo das tarefas</div>
              <div class="card-body">
                <div class="py-3">
                  <div class="chart">
                    <canvas id="chart"></canvas>
                  </div>
                </div>
                <table class="table mb-0">
                  <tbody>
                    <tr>
                      <td>
                        <i class="fa-solid fa-circle text-success"></i>
                        Tarefas concluídas
                      </td>
                      <td class="text-end">9</td>
                    </tr>
                    <tr>
                      <td>
                        <i class="fa-solid fa-circle text-warning"></i>
                        Tarefas pendentes
                      </td>
                      <td class="text-end">22</td>
                    </tr>
                    <tr>
                      <td>
                        <i class="fa-solid fa-circle text-danger"></i>
                        Tarefas vencidas
                      </td>
                      <td class="text-end">0</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
    </main>
  </div>
</div>

<?php
include './includes/footer.php';
include './includes/scripts.php';
?>