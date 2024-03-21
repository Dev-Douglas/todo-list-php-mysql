<?php include 'includes/head.php'; ?>

<div class="bg-light min-vh-100 d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="bg-white shadow rounded p-4 py-md-5 p-lg-5 form">
        <div class="text-center mb-4 mt-md-0">
          <h1 class="mb-0 h3">Faça login em sua conta</h1>
        </div>
        <form id="form-login">
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

            <div class="d-flex justify-content-between align-items-top mb-4">
              <div class="form-check">
                <input type="checkbox" name="remember" id="remember" class="form-check-input">
                <label class="form-check-label" for="remember">
                  Lembrar-me
                </label>
              </div>

              <div>
                <a href="#" class="small text-right link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Esqueci minha senha</a>
              </div>
            </div>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </form>
        <div class="d-flex justify-content-center align-items-center mt-4">
          <span class="fw-normal">Ainda não é cadastrado? <a href="./sign-up.php" class="fw-semibold link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Crie sua conta</a></span>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/scripts.php'; ?>