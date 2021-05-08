<div class="container-fluid">
  <div class="row">
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="/secret">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only"></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('pasien.index') }}">
              <span data-feather="users"></span>
              Pasien
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('status-pasien.index')}}">
              <span data-feather="bar-chart-2"></span>
              Status Pasien
            </a>
          </li>
      </div>
    </nav>