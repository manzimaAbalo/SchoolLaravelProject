
<header class="site-header site-header-transparent">
    <!-- header html start -->
    @include('website.layouts.topheader')

    <div class="bottom-header" id="masthead">
        <div class="container">
            <div class="hb-group d-flex align-items-center justify-content-between">
                <div class="site-identity col-lg-3">
                    <p class="site-title">
                        <a href="/">
                            <img src="/assets/img/schoolrate.png" alt="logo">
                        </a>
                    </p>
                </div>
                <div class="main-navigation col-lg-9 justify-content-between d-flex align-items-center">
                    <nav id="navigation" class="navigation d-none d-lg-inline-block">
                        <ul>
                            <li class="current-menu-item">
                                <a href="{{route('accueil')}}">Accueil</a>
                            </li>
                            <li>
                                <a href="{{route('about')}}">A propos</a>
                            </li>

                            <li>
                                <a href="{{route('schools')}}">Universités</a>
                            </li>

                            <li>
                                <a href="{{route('rate')}}">Classement</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header-btn d-inline-block d-xs-none"><!-- Ajout de la classe d-lg-none pour masquer les boutons sur les grands écrans -->
                        <div class="mobile-menu-btns"><!-- Création d'une div pour les boutons sur les petits écrans -->
                            <a href="{{route('login')}}" class="button-round-secondary">Se connecter</a>
                            <a href="{{route('register')}}" class="button-round-secondary">S'inscrire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu-container"></div>
</header>

