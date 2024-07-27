<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div id="user">
        <img src="{{asset('storage/imagens/logo.png')}}" id="logo" alt="logo">
    </div>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('inicio')}}">Início</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Autores</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="{{route('novoAutor')}}">Cadastrar</a>
            <a class="dropdown-item" href="{{route('exibeAutores')}}">Listar</a>
            <a class="dropdown-item" href="{{route('pesquisaAutor')}}">Pesquisar</a>
          </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Livros</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="{{route('novoLivro')}}">Cadastrar</a>
              <a class="dropdown-item" href="{{route('exibeLivros')}}">Listar</a>
              <a class="dropdown-item" href="{{route('pesquisaLivro')}}">Pesquisar</a>
            </div>
          </li>
      </ul>
      
    </div>
  </nav>