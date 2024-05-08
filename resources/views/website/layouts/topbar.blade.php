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
                                <a href="{{ route('accueil') }}">Accueil</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">A propos</a>
                            </li>

                            <li>
                                <a href="{{ route('schools') }}">Universités</a>
                            </li>
                            <li>
                                <a href="{{ route('rate') }}">Classements</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header-btn d-inline-block d-xs-none">
                        <!-- Ajout de la classe d-lg-none pour masquer les boutons sur les grands écrans -->
                        <div class="mobile-menu-btns"><!-- Création d'une div pour les boutons sur les petits écrans -->
                            @auth
                                {{-- <a href="{{ route('dashboard') }}" class="button-round-secondary">{{ Auth::user()->name }}</a> --}}
                                <nav id="navigation" class="navigation d-none d-lg-inline-block">
                                    <ul>
                                        <li class="menu-item-has-children">
                                            <a href="#" class="button-secondary">{{ Auth::user()->name }}</a>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('espace-user.dashboard') }}">Profile</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('espace-user.notes') }}">Mes notes</a>
                                                </li>
                                                <li>
                                                    <a href="product-cart.html">Commentaires</a>
                                                </li>
                                                <li>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        <button type="submit"  class="button-primary">Déconnexion</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            @else
                                <a href="{{ route('login') }}" class="button-round-secondary">Se connecter</a>
                                <a href="{{ route('register') }}" class="button-round-secondary">S'inscrire</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu-container"></div>
</header>
<style>
    .button-round-secondary {
        /* Ajoutez ici les styles communs pour les deux boutons */
        font-size: 16px;
        /* Par exemple */
        padding: 10px 20px;
        /* Par exemple */
        /* Autres styles communs */
    }
</style>
