<nav class="navbar navbar-expand-lg bg-darks text-light py-md-5 py-4 fixed-top">
    <div class="container">
        <a href="{{ route('home') }}" class="logo text-light text-decoration-none text-capitalize fs-4">wilhelmus ole</a>

        <!-- Toggle button for small devices -->
        <button class="navbar-toggler d-flex align-items-center justify-content-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon d-flex justify-content-center align-items-center"><i class="fa fa-bars text-light"></i></span>
        </button>

        <!-- Navbar content -->
        <div class="collapse navbar-collapse" id="navbarNav">
            @if (Request::is('about'))
                <ul class="navbar-nav ms-auto d-flex align-items-center gap-3">
                    <li class="nav-item"><a class="nav-link text-light-light text-decoration-none fs-4" href="#about-section">About</a></li>
                    <li class="nav-item"><a class="nav-link text-light-light text-decoration-none fs-4" href="#work-section">Work</a></li>
                    <li class="nav-item"><a class="nav-link text-light-light text-decoration-none fs-4" href="#project-section">Project</a></li>
                </ul>

                <div class="d-flex justify-content-center align-items-center gap-3 ms-auto resume-parent">
                    <a href="{{ asset('file/cv.pdf') }}" class="btn btn-primary" download="cv.pdf">Download CV</a>
                </div>
            @else
                <ul class="navbar-nav ms-auto d-flex align-items-center gap-3">
                    <li class="nav-item"><a class="nav-link text-light text-decoration-none fs-4 p-0" href="{{ route('about') }}">About</a></li>
                </ul>
            @endif
        </div>
    </div>
</nav>
