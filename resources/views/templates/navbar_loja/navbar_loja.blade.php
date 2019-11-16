<nav class="navbar navbar-expand-lg bg-amazon">
  <div class="nav-bar-img">
    <a href="/"><img class="nav-bar-logo" src="http://pngimg.com/uploads/amazon/amazon_PNG11.png"></a>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse search-group" id="navbarNav">
    <div class="input-group">
      <input type="text" class="form-control">
      <div class="input-group-append">
        <button class="btn btn-warning btn-pesquisar" type="button" id="button-addon2">Pesquisar</button>
      </div>
    </div>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/produtos_por_categoria_select">Produtos por Categoria</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Mais Vendidos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Mais Desejados</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Lançamentos</a>
      </li>
    </ul>
  </div>
  
  <div class="nav-bar-login-text">
    <p>Olá, seja bem-vindo</p>
    @if ($user_cookie = Cookie::get('user'))
      <strong><a href="/dashboard_cliente">{{ $user_cookie }}</a></strong>
      <strong><a href="/loggout">Sair</a></strong>
    @else
      <strong><a href="/login">Entrar</a></strong>
    @endif
  </div>
  <div class="nav-bar-carrinho">
    <strong class="carrinho-contador">0</strong>
    <strong class="carrinho-contador">Carrinho</strong>
  </div>
</nav>

<style>
.btn-produtos {
  margin-right: 10px;
}
.bg-amazon {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #232F3E; 
  color: #FFF;
}
nav .nav-bar-logo {
  width: 150px;
  height: 70px;
  padding: 10px;
}
nav .nav-link {
  color: #FFF;
  transition: all 0.2s;
}
nav .nav-link:hover{
  color: #FF9900;
}
.search-dash-input {
  margin-right: 70px;
  margin-left: 30px;
}
.nav-bar-login-text {
  display: flex;
  align-items: flex-end;
  flex-direction: column;
  margin: 10px;
  margin-left: 25px;  
  padding: 5px;
}
.nav-bar-login-text p {
  margin: 0;
  font-size: 12px;
}
.nav-bar-login-text strong {
  transition: all 0.2s;
  cursor: pointer;
  font-size: 14px;
}
.nav-bar-login-text strong:hover {
  color: #FF9900;
}
.nav-bar-carrinho {
  margin: 10px;
  display: flex;
  flex-direction: column;
  align-items: center;
  transition: all 0.2s;
  cursor: pointer;
}
.nav-bar-carrinho:hover {
  color: #FF9900;
}
.search-group {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}
.search-group li {
  opacity: 0.8;
  font-size: 14px;
  transition: all 0.2s;
}
.search-group li:hover {
  opacity: 1;
}
.search-group .input-group {
  margin: 10px 0px 0px 5px;
}
.material-icons {
  color: #FFF;
}
</style>