<header>
    <div class="container">
        <nav class="navbar">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('/Logo/Africa_in_Gold_Initiative_Logo2.png') }}" alt="Africa In Gold Logo">
                <span class="logo-text">{{ __('messages.logo_text') }}</span>
            </a>
            <ul class="nav-menu">
                <li class="nav-item"><a href="{{route('home')}}" class="nav-link">{{ __('messages.home') }}</a></li>
                <li class="nav-item"><a href="{{route('aboutUs')}}" class="nav-link">{{ __('messages.about') }}</a></li>
                <li class="nav-item"><a href="{{route('programs')}}" class="nav-link">{{ __('messages.programs') }}</a></li>
                <li class="nav-item"><a href="{{route('team')}}" class="nav-link">{{ __('messages.team') }}</a></li>
                <li class="nav-item"><a href="{{route('impact')}}" class="nav-link">{{ __('messages.impact') }}</a></li>
                <li class="nav-item"><a href="{{route('gallery')}}" class="nav-link">{{ __('messages.gallery') }}</a></li>
                <li class="nav-item"><a href="{{route('contactUs')}}" class="nav-link">{{ __('messages.contact') }}</a></li>
                <li class="nav-item language-selector">
                    <div class="dropdown">
                        <button class="dropdown-toggle">
                            <span class="flag-icon flag-icon-{{ session('locale', 'en') == 'en' ? 'gb' : 'tz' }}"></span>
                            <span class="language-name">{{ session('locale', 'en') == 'en' ? 'English' : 'Kiswahili' }}</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ url('/lang/en') }}" class="dropdown-item">
                                    <span class="flag-icon flag-icon-gb"></span>
                                    <span>English</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/lang/sw') }}" class="dropdown-item">
                                    <span class="flag-icon flag-icon-tz"></span>
                                    <span>Kiswahili</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </div>
</header>