@extends('welcome')

@section('canonical', 'https://www.africaingoldinitiative.or.tz/impact')

@section('title', __('messages.impact_title') . ' | Africa in Gold Initiative')

@section('content')
<div class="animated-bg">
    <div class="sparkle" style="width: 15px; height: 15px; top: 10%; left: 5%;"></div>
    <div class="sparkle" style="width: 20px; height: 20px; top: 55%; right: 10%;"></div>
    <div class="sparkle" style="width: 10px; height: 10px; bottom: 15%; left: 25%;"></div>
</div>

@include('frontEnd.header')

<!-- Hero Section -->
<section id="impact-hero" class="impact-hero">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content animate-on-scroll">
            <h1 class="split-text">
                <span>{{ __('messages.impact_hero_title1') }}</span>
                <span>{{ __('messages.impact_hero_title2') }}</span>
            </h1>
            <p>{{ __('messages.impact_hero_desc') }}</p>
            <a href="#impact-content" class="btn">{{ __('messages.explore_impact') }}</a>
        </div>
    </div>
</section>

<!-- Impact Content -->
<section id="impact-content" class="impact-content-section">
    <div class="container">
        <h2 class="section-title animate-on-scroll">{{ __('messages.impact_section_title') }}</h2>
        
        <!-- Youth Empowerment -->
        <div class="impact-block animate-on-scroll">
            <div class="impact-media">
                <div class="media-image parallax">
                    <img src="{{ asset('/Web Images/Together with impact.png') }}" alt="{{ __('messages.youth_impact_alt') }}">
                </div>
            </div>
            <div class="impact-text">
                <h3>{{ __('messages.youth_impact_title') }}</h3>
                <p>{{ __('messages.youth_impact_desc') }}</p>
                <ul class="impact-stats">
                    <li><strong>500+</strong> {{ __('messages.youth_impact_stat1') }}</li>
                    <li><strong>20+</strong> {{ __('messages.youth_impact_stat2') }}</li>
                </ul>
            </div>
        </div>

        <!-- Environmental Sustainability -->
        <div class="impact-block animate-on-scroll reverse">
            <div class="impact-media">
                <div class="media-image parallax">
                    <img src="{{ asset('/Web Images/Team planting stuff.jpeg') }}" alt="{{ __('messages.env_impact_alt') }}">
                </div>
            </div>
            <div class="impact-text">
                <h3>{{ __('messages.env_impact_title') }}</h3>
                <p>{{ __('messages.env_impact_desc') }}</p>
                <ul class="impact-stats">
                    <li><strong>1000+</strong> {{ __('messages.env_impact_stat1') }}</li>
                    <li><strong>50+</strong> {{ __('messages.env_impact_stat2') }}</li>
                </ul>
            </div>
        </div>

        <!-- Tech Innovation -->
        <div class="impact-block animate-on-scroll">
            <div class="impact-media">
                <div class="media-image parallax">
                    <img src="{{ asset('/Web Images/batch2/WhatsApp Image 2025-04-12 at 16.22.32.jpeg') }}" alt="{{ __('messages.tech_impact_alt') }}">
                </div>
            </div>
            <div class="impact-text">
                <h3>{{ __('messages.tech_impact_title') }}</h3>
                <p>{{ __('messages.tech_impact_desc') }}</p>
                <ul class="impact-stats">
                    <li><strong>6</strong> {{ __('messages.tech_impact_stat1') }}</li>
                    <li><strong>22</strong> {{ __('messages.tech_impact_stat2') }}</li>
                </ul>
            </div>
        </div>

        <!-- Community Engagement -->
        <div class="impact-block animate-on-scroll reverse">
            <div class="impact-media">
                <div class="media-image parallax">
                    <img src="{{ asset('/Web Images/Team with dustbins.jpeg') }}" alt="{{ __('messages.comm_impact_alt') }}">
                </div>
            </div>
            <div class="impact-text">
                <h3>{{ __('messages.comm_impact_title') }}</h3>
                <p>{{ __('messages.comm_impact_desc') }}</p>
                <ul class="impact-stats">
                    <li><strong>10+</strong> {{ __('messages.comm_impact_stat1') }}</li>
                    <li><strong>200+</strong> {{ __('messages.comm_impact_stat2') }}</li>
                </ul>
            </div>
        </div>

        <!-- Overall Stats -->
        <div class="impact-stats-grid animate-on-scroll">
            <h2>{{ __('messages.stats_title') }}</h2>
            <div class="stats-grid">
                <div class="stat-item">
                    <span class="stat-number" data-target="500">0</span>
                    <span class="stat-label">{{ __('messages.stat_youth_trained') }}</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-target="1000">0</span>
                    <span class="stat-label">{{ __('messages.stat_trees_planted') }}</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-target="15">0</span>
                    <span class="stat-label">{{ __('messages.stat_projects_launched') }}</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-target="2000">0</span>
                    <span class="stat-label">{{ __('messages.stat_hours_served') }}</span>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="testimonials animate-on-scroll">
            <h2>{{ __('messages.testimonials_title') }}</h2>
            <div class="testimonial-carousel">
                <div class="carousel-track">
                    <div class="testimonial-item">
                        <img src="{{ asset('/Web Images/Team having fun.jpeg') }}" alt="{{ __('messages.testimonial_alt1') }}">
                        <blockquote>
                            <p>{{ __('messages.testimonial_quote1') }}</p>
                            <cite>{{ __('messages.testimonial_author1') }}</cite>
                        </blockquote>
                    </div>
                    <div class="testimonial-item">
                        <img src="{{ asset('/Web Images/Together with impact.png') }}" alt="{{ __('messages.testimonial_alt2') }}">
                        <blockquote>
                            <p>{{ __('messages.testimonial_quote2') }}</p>
                            <cite>{{ __('messages.testimonial_author2') }}</cite>
                        </blockquote>
                    </div>
                    <div class="testimonial-item">
                        <img src="{{ asset('/Web Images/Team with dustbins.jpeg') }}" alt="{{ __('messages.testimonial_alt3') }}">
                        <blockquote>
                            <p>{{ __('messages.testimonial_quote3') }}</p>
                            <cite>{{ __('messages.testimonial_author3') }}</cite>
                        </blockquote>
                    </div>
                </div>
                <button class="carousel-control prev"><i class="fas fa-chevron-left"></i></button>
                <button class="carousel-control next"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section id="impact-cta" class="impact-cta">
    <div class="container">
        <div class="cta-content animate-on-scroll">
            <h2>{{ __('messages.impact_cta_title') }}</h2>
            <p>{{ __('messages.impact_cta_desc') }}</p>
            <a href="#support" class="btn">{{ __('messages.support_impact') }}</a>
        </div>
    </div>
</section>

@include('frontEnd.footer')

@endsection

<style>
    /* Reset potential overrides */
    img, .stats-grid, .stat-item, .carousel-item {
        display: block !important;
        visibility: visible !important;
        opacity: 1 !important;
    }

    /* Animated Background */
    .animated-bg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        overflow: hidden;
    }

    .sparkle {
        position: absolute;
        background: var(--primary);
        border-radius: 50%;
        opacity: 0.4;
        animation: sparkle 12s infinite ease-in-out;
    }

    @keyframes sparkle {
        0%, 100% { transform: translateY(0) scale(1); opacity: 0.4; }
        50% { transform: translateY(-15px) scale(1.2); opacity: 0.6; }
    }

    /* Impact Hero */
    .impact-hero {
        position: relative;
        height: 85vh;
        background: url('{{ asset('/Web Images/Team planting stuff.jpeg') }}') center/cover no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.55);
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
        color: var(--light);
        padding: 20px;
        opacity: 1 !important;
    }

    .split-text {
        display: flex;
        flex-direction: column;
        font-size: 2.8rem;
        font-weight: 700;
        color: var(--primary);
        line-height: 1.3;
    }

    .split-text span:nth-child(2) {
        color: var(--light);
        margin-top: 10px;
    }

    .hero-content p {
        font-size: 1.2rem;
        max-width: 600px;
        margin: 20px auto 30px;
        color: var(--light);
    }

    /* Impact Content */
    .impact-content-section {
        padding: 80px 0;
        background-color: var(--light);
    }

    .section-title {
        font-size: 2.5rem;
        color: var(--secondary);
        text-align: center;
        margin-bottom: 50px;
        position: relative;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 4px;
        background-color: var(--primary);
    }

    .impact-block {
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
        align-items: center;
        margin-bottom: 60px;
        background: #fff;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        padding: 20px;
        transition: transform 0.3s ease;
    }

    .impact-block:hover {
        transform: translateY(-5px);
    }

    .impact-block.reverse {
        flex-direction: row-reverse;
    }

    .impact-media {
        flex: 1;
        min-width: 300px;
        position: relative;
    }

    .media-image {
        overflow: hidden;
        border-radius: 10px;
    }

    .media-image.parallax {
        transform: translateY(0);
        transition: transform 0.5s ease;
    }

    .media-image img {
        width: 100%;
        height: auto;
        display: block !important;
        object-fit: cover;
        min-height: 300px;
    }

    .impact-text {
        flex: 1;
        min-width: 300px;
        padding: 20px;
    }

    .impact-text h3 {
        font-size: 1.8rem;
        color: var(--secondary);
        margin-bottom: 15px;
    }

    .impact-text p {
        font-size: 1rem;
        color: var(--dark);
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .impact-stats {
        list-style: none;
        padding: 0;
    }

    .impact-stats li {
        font-size: 1rem;
        color: var(--dark);
        margin-bottom: 10px;
    }

    .impact-stats strong {
        color: var(--primary);
        font-weight: 600;
    }

    /* Stats Grid */
    .impact-stats-grid {
        text-align: center;
        margin-bottom: 60px;
    }

    .impact-stats-grid h2 {
        font-size: 2rem;
        color: var(--secondary);
        margin-bottom: 40px;
    }

    .stats-grid {
        display: grid !important;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        opacity: 1 !important;
    }

    .stat-item {
        padding: 20px;
        opacity: 1 !important;
    }

    .stat-number {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--primary);
        display: block;
        margin-bottom: 10px;
    }

    .stat-label {
        font-size: 1rem;
        color: var(--dark);
    }

    /* Testimonials */
    .testimonials {
        margin-bottom: 60px;
        text-align: center;
    }

    .testimonials h2 {
        font-size: 2rem;
        color: var(--secondary);
        margin-bottom: 40px;
    }

    .testimonial-carousel {
        position: relative;
        overflow: hidden;
        max-width: 800px;
        margin: 0 auto;
        min-height: 400px;
    }

    .carousel-track {
        display: flex;
        width: 300%;
        transition: transform 0.5s ease;
    }

    .testimonial-item {
        flex: 0 0 33.333%;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        border-radius: 10px;
        background: #fff;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        min-height: 400px;
    }

    .testimonial-item img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 20px;
        display: block !important;
    }

    .testimonial-item blockquote {
        flex: 1;
        text-align: center;
    }

    .testimonial-item p {
        font-size: 1rem;
        color: var(--dark);
        line-height: 1.6;
        margin-bottom: 15px;
    }

    .testimonial-item cite {
        font-size: 0.9rem;
        color: var(--primary);
        font-style: normal;
    }

    .carousel-control {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0, 0, 0, 0.5);
        border: none;
        color: var(--light);
        font-size: 1.5rem;
        padding: 10px 15px;
        cursor: pointer;
        z-index: 10;
    }

    .carousel-control.prev {
        left: 10px;
    }

    .carousel-control.next {
        right: 10px;
    }

    /* CTA Section */
    .impact-cta {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('/Web Images/Team having fun.jpeg') }}') center/cover no-repeat;
        padding: 60px 0;
        color: var(--light);
        text-align: center;
    }

    .cta-content h2 {
        font-size: 2.5rem;
        margin-bottom: 20px;
        color: var(--light);
    }

    .cta-content p {
        font-size: 1.2rem;
        max-width: 600px;
        margin: 0 auto 30px;
        color: var(--light);
    }

    /* Animation */
    .animate-on-scroll {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.6s ease, transform 0.6s ease;
    }

    .animate-on-scroll.show {
        opacity: 1 !important;
        transform: translateY(0);
    }

    .no-js .animate-on-scroll {
        opacity: 1 !important;
        transform: translateY(0);
    }

    /* Parallax Effect */
    .parallax {
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
    }

    /* Responsive Styles */
    @media (max-width: 992px) {
        .impact-hero {
            height: 55vh;
        }
        .split-text {
            font-size: 2.2rem;
        }
        .hero-content p {
            font-size: 1rem;
        }
        .impact-block {
            flex-direction: column;
        }
        .impact-block.reverse {
            flex-direction: column;
        }
        .media-image img {
            min-height: 250px;
        }
        .parallax {
            background-attachment: scroll;
        }
    }

    @media (max-width: 576px) {
        .impact-hero {
            height: 70vh;
        }
        .split-text {
            font-size: 1.6rem;
        }
        .hero-content p {
            font-size: 0.9rem;
        }
        .section-title {
            font-size: 2rem;
        }
        .impact-text h3 {
            font-size: 1.5rem;
        }
        .stat-number {
            font-size: 2rem;
        }
        .cta-content h2 {
            font-size: 1.8rem;
        }
        .testimonial-item img {
            width: 80px;
            height: 80px;
        }
        .testimonial-item {
            min-height: 350px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        console.log('Impact page loaded');

        // Animation Observer
        const elements = document.querySelectorAll('.animate-on-scroll');
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        console.log('Element visible:', entry.target);
                        entry.target.classList.add('show');
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.1 }
        );
        elements.forEach((el) => {
            console.log('Observing:', el);
            observer.observe(el);
        });

        // Stats Animation
        const stats = document.querySelectorAll('.stat-number');
        if (!stats.length) {
            console.error('No stat-number elements found');
        }
        stats.forEach((stat) => {
            console.log('Processing stat:', stat);
            const target = parseInt(stat.getAttribute('data-target'));
            let count = 0;
            const increment = target / 100;
            const updateCount = () => {
                count += increment;
                if (count < target) {
                    stat.textContent = Math.ceil(count);
                    requestAnimationFrame(updateCount);
                } else {
                    stat.textContent = target;
                }
            };
            const onVisible = (entry) => {
                if (entry.isIntersecting) {
                    console.log('Stat visible, starting animation:', stat);
                    updateCount();
                    observer.unobserve(stat);
                }
            };
            observer.observe(stat);
        });

        // Testimonial Carousel
        const track = document.querySelector('.carousel-track');
        const items = document.querySelectorAll('.testimonial-item');
        const prev = document.querySelector('.carousel-control.prev');
        const next = document.querySelector('.carousel-control.next');
        let currentIndex = 0;

        if (!track || !items.length) {
            console.error('Carousel elements missing:', { track, items });
            return;
        }

        console.log('Carousel initialized with', items.length, 'items');

        function updateCarousel() {
            track.style.transform = `translateX(-${currentIndex * 33.333}%)`;
            console.log('Carousel updated to index:', currentIndex);
        }

        prev?.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + items.length) % items.length;
            updateCarousel();
        });

        next?.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % items.length;
            updateCarousel();
        });

        // Auto-slide every 5 seconds
        setInterval(() => {
            currentIndex = (currentIndex + 1) % items.length;
            updateCarousel();
        }, 5000);
    });
</script>