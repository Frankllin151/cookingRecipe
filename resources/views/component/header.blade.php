
<header class="header-main">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Bakery Recipe</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/login">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/todos">Todos</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             
              @if (!isset($name) || empty($name))
                   Usuario
              @else
              {{$name}}  
            
              @endif
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/user-dasboard/{{$id}}">Minha lista</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Assinatura</a></li>
                 
                 
                </ul>
              </li>
             <!----- <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>-->
            </ul>
            <form class="d-flex" role="search">
              <input id="search-input"  class="form-control me-5" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <input id="id-user" type="hidden" value="">
</header>