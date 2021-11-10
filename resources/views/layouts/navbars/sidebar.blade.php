<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('img/sidebar-3.jpg') }}">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('ELECTRONICOS') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item {{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'producto' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('products.index') }}">
          <i><img src="https://img.icons8.com/external-justicon-lineal-justicon/30/000000/external-online-marketing-marketing-and-growth-justicon-lineal-justicon.png"/></i>
          <span class="sidebar-normal"> {{ __('PRODUCTOS y SERVICIOS') }} </span>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample1" aria-expanded="true">
          <i><img src="https://img.icons8.com/ios-glyphs/30/000000/cash-register.png"/></i>
          <p>{{ __('VENTA') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample1">
          <ul class="nav">
            {{-- Cotización --}}
            <li class="nav-item{{ $activePage == 'compras' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('purchases.index') }}">
                <i><img src="https://img.icons8.com/ios/30/000000/sales-performance.png"/></i>
                <span class="sidebar-normal">{{ __('COTIZACION') }} </span>
              </a>
            </li>
            {{-- Clientes --}}
            <li class="nav-item{{ $activePage == 'cliente' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('clients.index') }}">
                <i><img src="https://img.icons8.com/wired/30/000000/businessman.png"/></i>
                <span class="sidebar-normal">{{ __('CLIENTES') }} </span>
              </a>
            </li>
            {{-- Proveedores --}}
            <li class="nav-item{{ $activePage == 'proveedor' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('providers.index') }}">
                <i><img src="https://img.icons8.com/wired/30/000000/selfish.png"/></i>
                <span class="sidebar-normal">{{ __('PROVEEDORES') }} </span>
              </a>
            </li>
          </ul>
        </div>
       </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img src="https://img.icons8.com/dotty/30/000000/person-male.png"/></i>
          <p>
            {{ __('ADMIN') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'moneda' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('coins.index') }}">
                <i><img src="https://img.icons8.com/fluency-systems-regular/30/000000/macbook-money.png"/></i>
                  <p>{{ __('MONEDAS') }}</p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'condicion' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('conditions.index') }}">
                <i class="material-icons">multiline_chart</i>
                <p>{{ __('CONDICIONES') }}</p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'entrega' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('deliveries.index') }}">
                <i class="material-icons">send</i>
                  <p>{{ __('ENTREGAS') }}</p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'expire' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('expires.index') }}">
                <i class="material-icons">assignment_return</i>
                <p>{{ __('EXPIRA') }}</p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'footer' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('footers.index') }}">
                <i class="material-icons">short_text</i>
                <p>{{ __('PIE DE PAGINA') }}</p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'estado' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('stateclients.index') }}">
                <i><img src="https://img.icons8.com/external-konkapp-detailed-outline-konkapp/30/000000/external-report-marketing-and-growth-konkapp-detailed-outline-konkapp.png"/></i>
                <p>{{ __('ESTADO DE CLIENTE') }}</p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'estadocompra' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('statepurchases.index') }}">
                <i><img src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/30/000000/external-money-banking-and-finance-kiranshastry-solid-kiranshastry-2.png"/></i>
                <p>{{ __('ESTADO DE COMPRA') }}</p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'pagos' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('waytopays.index') }}">
                <i><img src="https://img.icons8.com/ios-filled/30/000000/money--v1.png"/></i>
                <p>{{ __('FORMA DE PAGOS') }}</p>
              </a>
            </li>
            
            <li class="nav-item{{ $activePage == 'categoria' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('categorias.index') }}">
                <i class="material-icons">view_list</i>
                <span class="sidebar-normal">{{ __('CATEGORIAS') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'area' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('areas.index') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('AREA') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
