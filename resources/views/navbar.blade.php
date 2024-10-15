<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <!-- Logo di kiri -->
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" width="120" class="d-inline-block align-text-top">
        </a>

        <!-- Button untuk toggle navbar pada ukuran kecil -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigasi menu di kanan -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active me-4" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-4" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-4" href="#">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-4" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-4" href="#">Location</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
