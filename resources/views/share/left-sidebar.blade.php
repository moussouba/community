<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('home')}}" aria-expanded="false">
                        <i class="fa fa-home"></i>
                        <span class="hide-menu">Accueil</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('listS') }}" aria-expanded="false">
                        <i class="fas fa-bullhorn"></i>
                        <span class="hide-menu">Campagnes</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('listMembre')}}" aria-expanded="false">
                        <i class="fa fa-users"></i>
                        <span class="hide-menu">Membres</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('listCommunaute') }}" aria-expanded="false">
                        <i class="fa fa-users"></i>
                        <span class="hide-menu">Communautés</span>
                    </a>
                </li>
                @if(Auth::user()->type != 1 && Auth::user()->type != 3)
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('updateCommunauteView',['id'=>8]) }}" aria-expanded="false">
                        <i class="fa fa-cog"></i>
                        <span class="hide-menu">Paramètre</span>
                    </a>
                </li>
                @endif
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>