<header>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #233DFF;">
    <!-- Logo / Marque -->
    <img src="/assets/logoMW.png" alt="Logo">

    <!-- Bouton pour mobile (affiche le menu sur les petits écrans) -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Contenu du menu -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <!-- Liens de navigation -->
        <li class="nav-item {{ request()->routeIs('home.index') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('home.index') }}">Accueil</a>
        </li>
        <li class="nav-item {{ request()->routeIs('competences.index') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('competences.index') }}">Compétences</a>
        </li>
        <li class="nav-item {{ request()->routeIs('parcours.index') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('parcours.index') }}">Parcours</a>
        </li>
        <li class="nav-item {{ request()->routeIs('cv.index') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('cv.index') }}">CV</a>
        </li>
        <li class="nav-item {{ request()->routeIs('veille.index') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('veille.index') }}">Veille Technologique</a>
        </li>
        <li class="nav-item {{ request()->routeIs('stage.index') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('stage.index') }}">Stage</a>
        </li>
        <li class="nav-item {{ request()->routeIs('contact.index') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('contact.index') }}">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
</header>
