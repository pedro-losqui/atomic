<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('record') }}">
                            <i class="mdi mdi-clipboard-multiple-outline me-2"></i>Solicitações
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">
                            <i class="mdi mdi-message-text-outline me-2"></i>Mensagens
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">
                            |
                        </a>
                    </li>
                    &nbsp;&nbsp;
                    <li style="" class="nav-item">
                        <a class="nav-link" href="{{ route('company') }}">
                            <i class="mdi mdi-office-building-outline me-2"></i>Empresas
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="javascript:void(0);" id="topnav-apps" role="button">
                            <i class="mdi mdi-chart-bar me-2"></i>Relatório <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-apps">
                            <a href="{{ route('reportEsocial') }}" class="dropdown-item">Inconsistência eSocial</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user') }}">
                            <i class="mdi mdi-account-details me-2"></i>Usuários
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="javascript:void(0);" id="topnav-apps" role="button">
                            <i class="mdi mdi-tools me-2"></i>Ferramentas <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-apps">
                            <a href="#" class="dropdown-item">Envio de e-mail</a>
                            <a href="#" class="dropdown-item">Sessões</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
