@extends('welcome')

@section('canonical', 'https://www.africaingoldinitiative.or.tz/programs')

@section('title', __('messages.programs') . ' | Africa in Gold Initiative')
@section('content')
<div class="animated-bg">
    <div class="circle" style="width: 200px; height: 200px; top: 10%; left: 5%;"></div>
    <div class="square" style="width: 150px; height: 150px; top: 50%; right: 10%;"></div>
    <div class="circle" style="width: 100px; height: 100px; bottom: 15%; left: 25%;"></div>
</div>

@include('frontEnd.header')

<!-- Hero Section -->
<section id="programs-hero" class="programs-hero">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content animate-on-scroll">
            <h1>{{ __('messages.programs_hero_title') }}</h1>
            <p>{{ __('messages.programs_hero_desc') }}</p>
            <a href="#programs-content" class="btn">{{ __('messages.explore_programs') }}</a>
        </div>
    </div>
</section>

<!-- Programs Content -->
<section id="programs-content" class="programs-content-section">
    <div class="container">
        <!-- Venture Tech Academy -->
        <div class="program-block animate-on-scroll">
            <div class="program-text">
                <h2>{{ __('messages.venture_tech_title') }}</h2>
                <p>{{ __('messages.venture_tech_desc') }}</p>
                <p>{!! __('messages.venture_tech_more') !!}</p>
            </div>
            <div class="program-media">
                <div class="media-image">
                    <img src="{{ asset('/Web Images/batch2/WhatsApp Image 2025-04-12 at 16.22.32.jpeg') }}" alt="{{ __('messages.venture_tech_alt') }}">
                    <div class="image-overlay">
                        <span>{{ __('messages.venture_tech_caption') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Youth Empowerment -->
        <div class="program-block animate-on-scroll reverse">
            <div class="program-text">
                <h2>{{ __('messages.youth_empowerment_title') }}</h2>
                <p>{{ __('messages.youth_empowerment_desc') }}</p>
            </div>
            <div class="program-media">
                <div class="media-image">
                    <img src="{{ asset('/Web Images/WhatsApp Image 2025-04-11 at 23.33.45.jpeg') }}" alt="{{ __('messages.youth_empowerment_alt') }}">
                    <div class="image-overlay">
                        <span>{{ __('messages.youth_empowerment_caption') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Environmental Initiatives -->
        <div class="program-block animate-on-scroll">
            <div class="program-text">
                <h2>{{ __('messages.environmental_initiatives_title') }}</h2>
                <p>{{ __('messages.environmental_initiatives_desc') }}</p>
            </div>
            <div class="program-media">
                <div class="media-image">
                    <img src="{{ asset('/Web Images/Team planting stuff.jpeg') }}" alt="{{ __('messages.environmental_initiatives_alt') }}">
                    <div class="image-overlay">
                        <span>{{ __('messages.environmental_initiatives_caption') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Leadership Training -->
        <div class="program-block animate-on-scroll reverse">
            <div class="program-text">
                <h2>{{ __('messages.leadership_training_title') }}</h2>
                <p>{{ __('messages.leadership_training_desc') }}</p>
            </div>
            <div class="program-media">
                <div class="media-image">
                    <img src="{{ asset('/Web Images/batch2/WhatsApp Image 2025-04-12 at 16.22.33.jpeg') }}" alt="{{ __('messages.leadership_training_alt') }}">
                    <div class="image-overlay">
                        <span>{{ __('messages.leadership_training_caption') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Community Cleanups -->
        <div class="program-block animate-on-scroll">
            <div class="program-text">
                <h2>{{ __('messages.community_cleanups_title') }}</h2>
                <p>{{ __('messages.community_cleanups_desc') }}</p>
            </div>
            <div class="program-media">
                <div class="media-image">
                    <img src="{{ asset('/Web Images/Team with dustbins.jpeg') }}" alt="{{ __('messages.community_cleanups_alt') }}">
                    <div class="image-overlay">
                        <span>{{ __('messages.community_cleanups_caption') }}</span>
                    </div>
                </div>
            </div>
        </div>
<!-- Entrepreneurship Bootcamp -->

        <!-- Tech Workshops -->
        <div class="program-block animate-on-scroll reverse">
            <div class="program-text">
                <h2>{{ __('messages.tech_workshops_title') }}</h2>
                <p>{{ __('messages.tech_workshops_desc') }}</p>
            </div>
            <div class="program-media">
                <div class="media-image">
                    <img src="{{ asset('/Web Images/batch2/WhatsApp Image 2025-04-12 at 16.33.32.jpeg') }}" alt="{{ __('messages.tech_workshops_alt') }}">
                    <div class="image-overlay">
                        <span>{{ __('messages.tech_workshops_caption') }}</span>
                    </div>
                </div>
            </div>
        </div>

        

        <div class="program-block animate-on-scroll">
            <div class="program-text">
                <h2>{{ __('messages.entrepreneurship_bootcamp_title') }}</h2>
                <p>{{ __('messages.entrepreneurship_bootcamp_desc') }}</p>
            </div>
            <div class="program-media">
                <div class="media-image">
                    <img src="{{ asset('/Web Images/batch2/WhatsApp Image 2025-04-12 at 16.22.33 (1).jpeg') }}" alt="{{ __('messages.entrepreneurship_bootcamp_alt') }}">
                    <div class="image-overlay">
                        <span>{{ __('messages.entrepreneurship_bootcamp_caption') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="program-block animate-on-scroll reverse">
            <div class="program-text">
                <h2>{{ __('messages.entrepreneurship_bootcamp_title2') }}</h2>
                <p>{{ __('messages.entrepreneurship_bootcamp_desc2') }}</p>
            </div>
            <div class="program-media">
                <div class="media-image">
                    <img src="{{ asset('/Web Images/batch2/WhatsApp Image 2025-04-12 at 16.21.51.jpeg') }}" alt="{{ __('messages.entrepreneurship_bootcamp_alt') }}">
                    <div class="image-overlay">
                        <span>{{ __('messages.entrepreneurship_bootcamp_caption2') }}</span>
                    </div>
                </div>
            </div>
        </div>


        
    </div>
</section>

<!-- CTA Section -->
<section id="programs-cta" class="programs-cta">
    <div class="container">
        <div class="cta-content animate-on-scroll">
            <h2>{{ __('messages.programs_cta_title') }}</h2>
            <p>{{ __('messages.programs_cta_desc') }}</p>
            <a href="#membership" class="btn">{{ __('messages.join_now') }}</a>
        </div>
    </div>
</section>

@include('frontEnd.footer')

@endsection

<style>
    /* Reset potential overrides */
    img, .stats-grid, .stat-item {
        display: block !important;
        visibility: visible !important;
        opacity: 1 !important;
    }

    /* Programs Hero */
    .programs-hero {
        position: relative;
        height: 70vh;
        background: url('{{ asset('/Web Images/WhatsApp Image 2025-04-11 at 23.33.45.jpeg') }}') center/cover no-repeat;
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
        background: rgba(0, 0, 0, 0.5);
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

    .hero-content h1 {
        font-size: 3rem;
        font-weight: 700;
        color: var(--primary);
        margin-bottom: 15px;
    }

    .hero-content p {
        font-size: 1.2rem;
        max-width: 600px;
        margin: 0 auto 30px;
        color: var(--light);
    }

    /* Programs Content */
    .programs-content-section {
        padding: 80px 0;
        background-color: var(--light);
    }

    .program-block {
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
        align-items: center;
        margin-bottom: 60px;
        opacity: 1 !important;
        transition: transform 0.3s ease;
    }

    .program-block:hover {
        transform: translateY(-5px);
    }

    .program-block.reverse {
        flex-direction: row-reverse;
    }

    .program-text {
        flex: 1;
        min-width: 300px;
    }

    .program-text h2 {
        font-size: 2rem;
        color: var(--secondary);
        margin-bottom: 20px;
        position: relative;
    }

    .program-text h2::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 50px;
        height: 3px;
        background-color: var(--primary);
    }

    .program-text p {
        font-size: 1rem;
        color: var(--dark);
        line-height: 1.6;
    }

    .program-media {
        flex: 1;
        min-width: 300px;
    }

    .media-image {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .media-image img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.5s ease;
    }

    .media-image:hover img {
        transform: scale(1.05);
    }

    .image-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.7);
        color: var(--light);
        padding: 10px;
        text-align: center;
        transform: translateY(100%);
        transition: transform 0.3s ease;
    }

    .media-image:hover .image-overlay {
        transform: translateY(0);
    }

    .image-overlay span {
        font-size: 1rem;
        font-weight: 500;
    }

    /* Program Spotlight Carousel */
    .program-spotlight {
        margin-bottom: 60px;
        text-align: center;
        opacity: 1 !important;
    }

    .program-spotlight h2 {
        font-size: 2rem;
        color: var(--secondary);
        margin-bottom: 40px;
    }

    .spotlight-carousel {
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

    .carousel-item {
        flex: 0 0 33.333%;
        position: relative;
        border-radius: 10px;
        overflow: hidden;
        min-height: 400px;
    }

    .carousel-item img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        display: block !important;
        background-color: #eee;
    }

    .carousel-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
        color: var(--light);
        padding: 20px;
        opacity: 1;
    }

    .carousel-caption h3 {
        font-size: 1.5rem;
        margin-bottom: 10px;
    }

    .carousel-caption p {
        font-size: 1rem;
        color: var(--light);
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

    /* Impact Highlights */
    .impact-highlights {
        text-align: center;
        margin-bottom: 60px;
        opacity: 1 !important;
    }

    .impact-highlights h2 {
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

    /* CTA Section */
    .programs-cta {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('/Web Images/Team with dustbins.jpeg') }}') center/cover no-repeat;
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

    /* Responsive Styles */
    @media (max-width: 992px) {
        .programs-hero {
            height: 60vh;
        }
        .hero-content h1 {
            font-size: 2rem;
        }
        .hero-content p {
            font-size: 1rem;
        }
        .program-block {
            flex-direction: column;
        }
        .program-block.reverse {
            flex-direction: column;
        }
        .carousel-item img {
            height: 300px;
        }
        .carousel-item {
            min-height: 300px;
        }
    }

    @media (max-width: 576px) {
        .programs-hero {
            height: 70vh;
        }
        .hero-content h1 {
            font-size: 1.5rem;
        }
        .cta-content h2 {
            font-size: 1.8rem;
        }
        .carousel-item img {
            height: 200px;
        }
        .carousel-item {
            min-height: 200px;
        }
        .stat-number {
            font-size: 2rem;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        console.log('Programs page loaded');

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

        // Carousel
        const track = document.querySelector('.carousel-track');
        const items = document.querySelectorAll('.carousel-item');
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
    });
</script>