@include('templates.header.header')
<div class="dashboard-nav">
  @include('templates.navbar.navbar')
</div>
<br>
<div class="container usu-cadastro-conteudo">
  <form action="/criar_usuario" enctype="multipart/form-data" method="POST">
    {{ csrf_field() }}
    <div class="usu-cadastro-inputs">
      <div class="form-group">
        <label>Nome do Usuário:</label>
        <input type="text" class="form-control" name="usu_login">
        <small class="form-text text-muted">Nome completo do Usuário.</small>
      </div>
      <div class="form-group">
        <label>E-mail do Usuário:</label>
        <input type="email" class="form-control" name="usu_email">
        <small class="form-text text-muted">E-mail completo do Usuário.</small>
      </div>
      <div class="form-group">
        <label>Senha do Usuário:</label>
        <input type="password" class="form-control" name="usu_senha">
        <small class="form-text text-muted">Senha do Usuário.</small>
      </div>
    </div>
    <hr>
    <div class="usu-cadastro-btn-cadastrar">
      <a class="cancel-buttton btn btn-secondary" href="/usuarios">Cancelar</a>
      <button class="btn submit-button btn-primary" type="submit">Cadastrar</button>
    </div>
  </form>
</div>
<style>
  .cancel-buttton {
    margin-right: 10px;
  }
  .option-display-none {
    visibility:hidden;
  }
  .usu-cadastro-btn-cadastrar {
    display: flex;
    justify-content: flex-end;
    margin-bottom: 20px;
  }
  @media screen and (max-width: 768px) {
    .usu-cadastro-btn-cadastrar .btn {
      display: block;
    }
    .submit-button, .cancel-buttton {
      width: 100%;
    }
    .btn-cadastrar-usuario {
      display: flex;
      justify-content: flex-end;
      margin-bottom: 20px;
      margin-top: 20px;
    }
  }
</style>

@include('templates.footer.footer')