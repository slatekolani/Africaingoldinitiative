<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-column">
                <h3>{{ __('messages.footer_about') }}</h3>
                <p>{{ __('messages.footer_about_desc') }}</p>
            </div>
            <div class="footer-column">
                <h3>{{ __('messages.footer_quick_links') }}</h3>
                <ul class="footer-links">
                    <li><a href="{{route('home')}}"><i class="fas fa-home"></i> {{ __('messages.home') }}</a></li>
                    <li><a href="{{ route('aboutUs') }}"><i class="fas fa-info-circle"></i> {{ __('messages.about') }}</a></li>
                    <li><a href="{{route('programs')}}"><i class="fas fa-info-circle"></i> {{ __('messages.programs') }}</a></li>
                    <li><a href="{{route('team')}}"><i class="fas fa-info-circle"></i> {{ __('messages.team') }}</a></li>
                    <li><a href="{{route('impact')}}"><i class="fas fa-info-circle"></i> {{ __('messages.impact') }}</a></li>
                    <li><a href="{{route('gallery')}}"><i class="fas fa-info-circle"></i> {{ __('messages.gallery') }}</a></li>
                    <li><a href="{{route('contactUs')}}"><i class="fas fa-info-circle"></i> {{ __('messages.contact') }}</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>{{ __('messages.footer_connect') }}</h3>
                <div class="social-media">
                    <a href="https://x.com/Africa_inGold" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/africaingoldinitiative?igsh=MThlc282dmV6NWp6aA==" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/africa-in-gold-initiative-39a802403/" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.youtube.com/@africaingoldinitiative/shorts" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>{{ __('messages.footer_copyright') }}</p>
        </div>
    </div>
</footer>