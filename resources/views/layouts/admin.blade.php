<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Melody Admin</title>
  <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="css/estilo.css">
  {{-- Bootstrap --}}
  <link rel="shortcut icon" href="http://www.urbanui.com/" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index-2.html"><img src="images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index-2.html"><img src="images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="fas fa-bars"></span>
        </button>
        <ul class="navbar-nav">
          <li class="nav-item nav-search d-none d-md-flex">
            <div class="nav-link">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-search"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Search" aria-label="Search">
              </div>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face5.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="fas fa-cog text-primary"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item">
                <i class="fas fa-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="fas fa-bars"></span>
        </button>
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close fa fa-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="images/faces/face5.jpg" alt="image"/>
              </div>
              <div class="profile-name">
                <p class="name">
                  Welcome Jane
                </p>
                <p class="designation">
                  Super Admin
                </p>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('dashboard') }}">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/widgets.html">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Usuarios</span>
            </a>
          </li>
          <hr style="margin:5px 80px 20px 10px">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('categorias.index') }}">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Categorías</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('products.index') }}">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Productos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('clients.index') }}">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Clientes</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('providers.index') }}">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Proveedores</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
              <i class="fab fa-trello menu-icon"></i>
              <span class="menu-title">Page Layouts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="pages/layout/boxed-layout.html">Boxed</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/layout/rtl-layout.html">RTL</a></li>
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="pages/layout/horizontal-menu.html">Horizontal Menu</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('purchases.index') }}">
              <i class="far fa-file-alt menu-icon"></i>
              <span class="menu-title">Cotización</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('areas.index') }}">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Áreas</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('conditions.index') }}">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Condiciones Generales</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('deliveries.index') }}">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Tiempo de Entrega</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('expires.index') }}">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Expira</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('footers.index') }}">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Pie de Pagina</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('coins.index') }}">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Moneda</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('stateclients.index') }}">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Estado - Cliente / Proveedor</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('statepurchases.index') }}">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Estado - Cliente / Proveedor</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('waytopays.index') }}">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Forma de Pago</span>
            </a>
          </li>




          <hr style="margin:5px 80px 20px 10px">
          <li class="nav-item">
            <a class="nav-link" href="pages/widgets.html">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Roles</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/widgets.html">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Permisos</span>
            </a>
          </li>
        </ul>
      </nav>
			@yield('content')
    </div>
  </div>
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <script src="js/dashboard.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>