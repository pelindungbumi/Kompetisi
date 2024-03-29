<!--<ul class="nav nav-pills card-header-pills justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="/">Beranda</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/login/daftar">Register</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Tentang Kami</a>
  </li>
  <!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div> 
</ul>-->

<nav class="navbar navbar-light bg-faded navbar-expand nav-setting">
  <div class="primary-navigation">
    <nav class="moremenu navigation observed">
      <ul role="menubar" class="nav more-nav navbar-nav">
        <li class="nav-item" role="none">
          <a role="menuitem" class="nav-link {{ Request::is('/') ? 'active' : '' }} " href="/">
            Beranda
          </a>
        </li>
        <li class="nav-item" role="none">
          <a role="menuitem" class="nav-link {{ Request::is('login/daftar*') ? 'active' : '' }} " href="/login/daftar">
            Register
          </a>
        </li>
        <li class="nav-item" role="none">
          <a role="menuitem" class="nav-link" href="#">
            Tentang Kami
          </a>
        </li>
      </ul>
    </nav>
  </div>
</nav>