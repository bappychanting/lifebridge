
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto nav-fill w-100">
          <li class="nav-item <?php echo route_is('welcome')? 'active' : ''; ?> ">
            <a class="nav-link font-weight-bold" href="<?php echo route('welcome'); ?>"><i class="fas fa-home mr-3"></i>HOME</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>