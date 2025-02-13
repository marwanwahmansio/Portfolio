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
        <li class="nav-item <?php echo e(request()->routeIs('home.index') ? 'active' : ''); ?>">
          <a class="nav-link" href="<?php echo e(route('home.index')); ?>">Accueil</a>
        </li>
        <li class="nav-item <?php echo e(request()->routeIs('competences.index') ? 'active' : ''); ?>">
          <a class="nav-link" href="<?php echo e(route('competences.index')); ?>">Compétences</a>
        </li>
        <li class="nav-item <?php echo e(request()->routeIs('parcours.index') ? 'active' : ''); ?>">
          <a class="nav-link" href="<?php echo e(route('parcours.index')); ?>">Parcours</a>
        </li>
        <li class="nav-item <?php echo e(request()->routeIs('cv.index') ? 'active' : ''); ?>">
          <a class="nav-link" href="<?php echo e(route('cv.index')); ?>">CV</a>
        </li>
        <li class="nav-item <?php echo e(request()->routeIs('veille.index') ? 'active' : ''); ?>">
          <a class="nav-link" href="<?php echo e(route('veille.index')); ?>">Veille Technologique</a>
        </li>
        <li class="nav-item <?php echo e(request()->routeIs('stage.index') ? 'active' : ''); ?>">
          <a class="nav-link" href="<?php echo e(route('stage.index')); ?>">Stage</a>
        </li>
        <li class="nav-item <?php echo e(request()->routeIs('contact.index') ? 'active' : ''); ?>">
          <a class="nav-link" href="<?php echo e(route('contact.index')); ?>">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
</header>
<?php /**PATH /var/www/html/resources/views/partials/header.blade.php ENDPATH**/ ?>