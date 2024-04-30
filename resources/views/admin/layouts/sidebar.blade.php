 <!-- Sidebar Start -->
 <aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="#" class="text-nowrap logo-img">
          <img src="../admin/assets/images/logos/dark-logo.svg" width="180" alt="" />
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8"></i>
        </div>
      </div>
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">ACCUEIL</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{route('home')}}" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Tableau de bord</span>
            </a>
          </li>
          
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">COMPOSANTS</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{route('school')}}" aria-expanded="false">
              <span>
                <i class="ti ti-article"></i>
              </span>
              <span class="hide-menu">Universites</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{route('rule')}}" aria-expanded="false">
              <span>
                <i class="ti ti-alert-circle"></i>
              </span>
              <span class="hide-menu">Criteres de notation</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{route('note')}}" aria-expanded="false">
              <span>
                <i class="ti ti-cards"></i>
              </span>
              <span class="hide-menu">Notations</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{route('comment')}}" aria-expanded="false">
              <span>
                <i class="ti ti-file-description"></i>
              </span>
              <span class="hide-menu">Commentaires</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{route('user')}}" aria-expanded="false">
              <span>
                <i class="ti ti-typography"></i>
              </span>
              <span class="hide-menu">Utilisateurs</span>
            </a>
          </li>

          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">AUTHENTIFICATION</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('logindash') }}" aria-expanded="false">
              <span>
                <i class="ti ti-login"></i>
              </span>
              <span class="hide-menu">S'enregistrer</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{route('registerdash')}}" aria-expanded="false">
              <span>
                <i class="ti ti-user-plus"></i>
              </span>
              <span class="hide-menu">S'inscrire</span>
            </a>
          </li>
        </ul>

            <div class="unlimited-access-img">
              <img src="../admin/assets/images/backgrounds/rocket.png" alt="" class="img-fluid">
            </div>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>
  <!--  Sidebar End -->