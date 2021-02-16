<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="/">Anugerah Web</a>
  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-collapse collapse" id="navbarColor02" style="">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <?php if (Auth::check()): ?>
        <li class="nav-item">
          <a class="nav-link" href="/DataSiswa">Data Siswa</a>
        </li>
      <?php endif; ?>
    </ul>
    <?php if (Auth::check()): ?>
      <a href="/Logout"><button class="btn btn-outline-danger my-2 my-sm-0">Logout</button></a>
      <?php else: ?>
    <a href="/Login"><button class="btn btn-outline-light my-2 my-sm-0">Login</button></a>
    <?php endif; ?>
  </div>
</nav>