<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">Bienvenue au Village Pygmée Cameroun</a>
            <button class="navbar-toggler" type="button"
                data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->is('/') || Request::route()->named('home') ? 'active' : '' }}">
                    <a href="/" class="nav-link">
                        {{ __('navigation.home') }}
                    </a>
                </li>
                    <a href="{{ route('presentation') }}" class="nav-link">
                        <li class="nav-item {{ Request::route()->named('presentation') ? 'active' : '' }}">
                        {{ __("navigation.presentation") }}
                    </a>
                </li>
                <li class="nav-item {{ Request::route()->named('problems') ? 'active' : '' }}">
                    <a href="{{ route('problems') }}" class="nav-link">
                        {{ __("navigation.problem") }}
                    </a>
                </li>
                <li class="nav-item {{ Request::route()->named('actions') ? 'active' : '' }}">
                    <a href="{{ route('actions') }}" class="nav-link">
                        {{ __("navigation.action") }}
                    </a>
                </li>

                <!-- <li class="nav-item {{ Request::route()->named('activities') ? 'active' : '' }}">
                    <a href="{{ route('actions') }}" class="nav-link">
                        {{ __("navigation.activities") }}
                    </a>
                </li>

                <li class="nav-item">
                    <a href="donate.html" class="nav-link">
                        {{ __("navigation.project") }}
                    </a>
                </li> -->
                <li class="nav-item {{ Request::route()->named('gallery') ? 'active' : '' }}">
                    <a href="{{ route('gallery') }}" class="nav-link">
                        {{ __("navigation.gallery") }}
                    </a>
                </li>
                <li class="nav-item {{ Request::route()->named('contact') ? 'active' : '' }}">
                    <a href="{{ route('contact') }}" class="nav-link">
                        {{ __("navigation.contact") }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
