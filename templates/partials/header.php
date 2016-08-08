<nav class="navbar nav-primarynavbar-light bg-faded">
  <div class="container fluid">
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
      &#9776;
    </button>
    <a class="navbar-brand" href="#">Responsive navbar</a>
    <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
       <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar navbar-nav']);
        endif;
        ?>
    </div>
  </div>
</nav>