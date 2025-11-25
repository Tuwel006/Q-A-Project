<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm border-bottom w-100">
  <div class="container-fluid px-3">
    <a class="navbar-brand fw-semibold fs-5 text-dark" href="#">Q&A Hub</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active bg-light text-primary rounded px-2 mx-1 fw-normal small" href="/Q-A-Project">Home</a>
        </li>
        <?php
        $page = $_GET['page'] ?? 'home';
        if ($page === 'login' || $page === 'home' ) {
        ?>
        <li class="nav-item">
          <a class="nav-link text-muted rounded px-2 mx-1 fw-normal small" href="?page=signup">Signup</a>
        </li>
        <?php
        }
        if($page === 'signup' || $page === 'home') {
        ?>
        <li class="nav-item">
          <a class="nav-link text-muted rounded px-2 mx-1 fw-normal small" href="?page=login">Login</a>
        </li>
        <?php
        }
        ?>
        <li class="nav-item">
          <a class="nav-link text-muted rounded px-2 mx-1 fw-normal small" href="#">Ask Question</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-muted rounded px-2 mx-1 fw-normal small" href="#">Categories</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2 rounded border form-control-sm" type="search" placeholder="Search..." aria-label="Search">
        <button class="btn btn-outline-primary rounded btn-sm px-3" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>