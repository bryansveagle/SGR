<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                @can('requisicione.index'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('requisiciones.index') }}">{{ __('Requisiciones') }}</a>
                    </li>
                @endcan
                @can('cotizacione.index'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cotizaciones.index') }}">{{ __('Cotizaciones') }}</a>
                    </li>
                @endcan
                @can('proveedore.index'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('proveedores.index') }}">{{ __('Proveedores') }}</a>
                    </li>
                @endcan
                @can('partida.index'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('partidas.index') }}">{{ __('Partidas') }}</a>
                    </li>
                @endcan
                </ul>
            </div>
        </nav>
        <br>
