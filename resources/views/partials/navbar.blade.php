<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="/">Disport</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Beranda") ? 'active' : '' }}" 
              href="/">Beranda</a>
            </li>            
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Pendataan") ? 'active' : '' }}" 
              href="/pendataan">Pendataan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Login") ? 'active' : '' }}" 
              href="/login">Login</a>
            </li>             
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Tentang") ? 'active' : '' }}" 
              href="/tentang">Tentang</a>
            </li>
          </ul>
        </div>
        
    </div>
</nav>