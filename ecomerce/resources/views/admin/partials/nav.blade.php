<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand main-title" href="{{ url('admin/home') }}">E.V.E. TECH</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
    <P class="navbar-text"><i class="fa fa-dashboard"></i>Dashboard</p>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"></a></li>
        <li><a href="{{ route('home')}}">Menu</a></li>
        <li><a href="{{ route('admin.category.index')}}">Categorias</a></li>
        <li><a href="{{ route('admin.product.index')}}">Productos</a></li>
        <li><a href="#">Pedidos</a></li>
        <li><a href="#">Usuarios</a></li>
        
          <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i>{{ Auth::user()->user}} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{ route('logout') }}">Finalizar Sesión</a></li>
            </ul>
          </li>
      </ul>
    </div>
  </div>
</nav>