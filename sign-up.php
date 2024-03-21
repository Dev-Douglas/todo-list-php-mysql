<?php include 'includes/head.php'; ?>

<div class="bg-light min-vh-100 d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="bg-white shadow rounded p-4 py-md-5 p-lg-5 form">
        <div class="text-center mb-4 mt-md-0">
          <h1 class="mb-0 h3">Crie sua conta</h1>
        </div>
        <form id="form-sign-up">
          <div class="form-group">
            <label for="email" class="form-label fw-semibold">E-mail:</label>
            <div class="input-group mb-3">
              <span class="input-group-text text-dark">
                <i class="fa-solid fa-envelope"></i>
              </span>
              <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu email">
            </div>
          </div>
          <div class="form-group">
            <label for="password" class="form-label fw-semibold">Senha:</label>
            <div class="input-group mb-3">
              <span class="input-group-text text-dark">
                <i class="fa-solid fa-lock"></i>
              </span>
              <input type="password" name="password" id="password" class="form-control" placeholder="••••••••">
            </div>
          </div>
          <div class="form-group">
            <label for="password" class="form-label fw-semibold">Confirmar senha:</label>
            <div class="input-group mb-5">
              <span class="input-group-text text-dark">
                <i class="fa-solid fa-lock"></i>
              </span>
              <input type="password" name="password" id="password" class="form-control" placeholder="••••••••">
            </div>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </form>
        <div class="d-flex justify-content-center align-items-center mt-4">
          <span class="fw-normal">Já possuo cadastro? <a href="./index.php" class="fw-semibold link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Acessar sua conta</a></span>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include './includes/scripts.php'; ?>