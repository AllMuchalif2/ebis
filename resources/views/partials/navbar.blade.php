<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">arnama</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "home" ? 'active' : '') }}" href="/">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "mahasiswa" ? 'active' : '') }}" href="mahasiswa">mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "about" ? 'active' : '') }}" href="about">about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "data mahasiswa" ? 'active' : '') }}" href="data-mahasiswa">data mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "data dosen" ? 'active' : '') }}" href="data-dosen">data dosen</a>
                </li>
            </ul>
        </div>
    </div>
</nav>