<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">DIGITAL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'about' ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'projects' ? 'active' : '' }}" href="{{ route('projects') }}">projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
            <div class="social-media d-flex align-items-center">
                <a href="#" class="d-flex align-items-center justify-content-center ml-3"><span class="fa fa-facebook"></span></a>
                <a href="#" class="d-flex align-items-center justify-content-center ml-3"><span class="fa fa-twitter"></span></a>
                <a href="#" class="d-flex align-items-center justify-content-center ml-3"><span class="fa fa-instagram"></span></a>
                <a href="#" class="d-flex align-items-center justify-content-center ml-3"><span class="fa fa-dribbble"></span></a>
            </div>
        </div>
    </div>
</nav>
