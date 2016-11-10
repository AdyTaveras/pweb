<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/home">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Not used yet <span class="sr-only">(current)</span></a></li>
        <li><a href="#"></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menú de administrador <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/users/clients">Ver Clientes</a></li>
            <li><a href="/users/clients/create">Agregar Clientes</a></li>
    <!--    <li><a href="#">Something else here</a></li> !-->
            <li role="separator" class="divider"></li>
            <li><a href="/admin/users">Ver usuarios</a></li>
            <li><a href="/admin/users/create">Agregar usuarios</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/debt/credits/">Historial de pagos</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Prestamos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/debt/credits/create">Agregar Prestamo</a></li>
              
            <!-- Not working yet ! <li><a href="#">Ver pagos</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li> -->
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>