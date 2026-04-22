@extends('welcome')
@section('canonical', 'https://www.africaingoldinitiative.or.tz/aboutUs')

@section('title', __('messages.about') . ' | Africa in Gold Initiative')

@section('content')
<div class="animated-bg">
    <div class="circle" style="width: 250px; height: 250px; top: 15%; left: 10%;"></div>
    <div class="square" style="width: 180px; height: 180px; top: 60%; right: 15%;"></div>
    <div class="circle" style="width: 120px; height: 120px; bottom: 20%; left: 30%;"></div>
</div>

@include('frontEnd.header')

<!-- Hero Section -->
<section id="about-hero" class="about-hero">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content animate-on-scroll">
            <h1>{{ __('messages.about_hero_title') }}</h1>
            <p>{{ __('messages.about_hero_desc') }}</p>
            <a href="#about-content" class="btn">{{ __('messages.explore_more') }}</a>
        </div>
    </div>
</section>

<!-- About Content -->
<section id="about-content" class="about-content-section">
    <div class="container">
        <!-- Who We Are -->
        <div class="about-block animate-on-scroll">
            <div class="about-text">
                <h2>{{ __('messages.about_who_we_are') }}</h2>
                <p>{{ __('messages.about_who_we_are_desc') }}</p>
            </div>
            <div class="about-media">
                <div class="media-image">
                    <img src="{{ asset('/Web Images/Together with impact.png') }}" alt="{{ __('messages.about_who_we_are_alt') }}">
                    <div class="image-overlay">
                        <span>{{ __('messages.about_who_we_are_caption') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Why -->
        <div class="about-block animate-on-scroll reverse">
            <div class="about-text">
                <h2>{{ __('messages.about_our_why') }}</h2>
                <p>{{ __('messages.about_our_why_desc') }}</p>
            </div>
            <div class="about-media">
                <div class="media-image">
                    <img src="{{ asset('/Web Images/Team having fun.jpeg') }}" alt="{{ __('messages.about_our_why_alt') }}">
                    <div class="image-overlay">
                        <span>{{ __('messages.about_our_why_caption') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why Name -->
        <div class="about-block animate-on-scroll">
            <div class="about-text">
                <h2>{{ __('messages.about_why_name') }}</h2>
                <p>{{ __('messages.about_why_name_desc') }}</p>
            </div>
            <div class="about-media">
                <div class="media-image">
                    <img src="{{ asset('/Web Images/Team planting stuff.jpeg') }}" alt="{{ __('messages.about_why_name_alt') }}">
                    <div class="image-overlay">
                        <span>{{ __('messages.about_why_name_caption') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mission & Vision -->
        <div class="mission-vision animate-on-scroll">
            <div class="card">
                <h3><i class="fas fa-bullseye"></i> {{ __('messages.mission') }}</h3>
                <p>{{ __('messages.mission_desc') }}</p>
            </div>
            <div class="card">
                <h3><i class="fas fa-eye"></i> {{ __('messages.vision') }}</h3>
                <p>{{ __('messages.vision_desc') }}</p>
            </div>
        </div>

        <!-- Focus Areas -->
        <div class="focus-areas animate-on-scroll">
            <h2>{{ __('messages.focus_areas') }}</h2>
            <div class="focus-grid">
                <div class="focus-item">
                    <i class="fas fa-book"></i>
                    <p>{{ __('messages.focus_area_1') }}</p>
                </div>
                <div class="focus-item">
                    <i class="fas fa-users"></i>
                    <p>{{ __('messages.focus_area_2') }}</p>
                </div>
                <div class="focus-item">
                    <i class="fas fa-star"></i>
                    <p>{{ __('messages.focus_area_3') }}</p>
                </div>
                <div class="focus-item">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <p>{{ __('messages.focus_area_4') }}</p>
                </div>
            </div>
        </div>

        <!-- Venture Tech Academy -->
        <div class="venture-tech animate-on-scroll">
            <h2>{{ __('messages.venture_tech_title') }}</h2>
            <div class="venture-content">
                <div class="venture-text">
                    <p>{{ __('messages.venture_tech_desc') }}</p>
                    <p>{!! __('messages.venture_tech_more') !!}</p>
                    <div class="venture-stats">
                        <div class="stat-item">
                            <span class="stat-number">6</span>
                            <span class="stat-label">{{ __('messages.venture_teams') }}</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">22</span>
                            <span class="stat-label">{{ __('messages.venture_innovators') }}</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">24/7</span>
                            <span class="stat-label">{{ __('messages.venture_internet') }}</span>
                        </div>
                    </div>
                </div>
                <div class="venture-media">
                    <div class="media-video">
                        <iframe src="https://www.youtube.com/embed/uteR44ZjYRI" title="{{ __('messages.venture_tech_video_alt') }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Timeline -->
        <div class="timeline animate-on-scroll">
            <h2>{{ __('messages.timeline_title') }}</h2>
            <div class="timeline-container">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3>{{ __('messages.timeline_event1_title') }}</h3>
                        <p>{{ __('messages.timeline_event1_desc') }}</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3>{{ __('messages.timeline_event2_title') }}</h3>
                        <p>{{ __('messages.timeline_event2_desc') }}</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <h3>{{ __('messages.timeline_event3_title') }}</h3>
                        <p>{{ __('messages.timeline_event3_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section id="about-cta" class="about-cta">
    <div class="container">
        <div class="cta-content animate-on-scroll">
            <h2>{{ __('messages.cta_title') }}</h2>
            <p>{{ __('messages.cta_desc') }}</p>
            <a href="#membership" class="btn">{{ __('messages.join_now') }}</a>
        </div>
    </div>
</section>

@include('frontEnd.footer')

@endsection

<style>
    /* Reset potential overrides */
    * {
        color: inherit;
        visibility: visible;
    }

    .about-hero {
        position: relative;
        height: 70vh;
        background: url('{{ asset('/Web Images/batch2/WhatsApp Image 2025-04-12 at 16.33.32.jpeg') }}') top/cover no-repeat;
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
        opacity: 1 !important; /* Ensure visibility */
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

    /* About Content */
    .about-content-section {
        padding: 80px 0;
        background-color: var(--light);
    }

    .about-block {
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
        align-items: center;
        margin-bottom: 60px;
        opacity: 1 !important; /* Ensure visibility */
    }

    .about-block.reverse {
        flex-direction: row-reverse;
    }

    .about-text {
        flex: 1;
        min-width: 300px;
    }

    .about-text h2 {
        font-size: 2rem;
        color: var(--secondary);
        margin-bottom: 20px;
        position: relative;
    }

    .about-text h2::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 50px;
        height: 3px;
        background-color: var(--primary);
    }

    .about-text p {
        font-size: 1rem;
        color: var(--dark);
        line-height: 1.6;
    }

    .about-media {
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

    /* Mission & Vision */
    .mission-vision {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        margin-bottom: 60px;
        opacity: 1 !important;
    }

    .card {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card h3 {
        font-size: 1.5rem;
        margin-bottom: 15px;
        color: var(--secondary);
        display: flex;
        align-items: center;
    }

    .card h3 i {
        margin-right: 10px;
        color: var(--primary);
    }

    .card p {
        font-size: 1rem;
        color: var(--dark);
    }

    /* Focus Areas */
    .focus-areas {
        text-align: center;
        margin-bottom: 60px;
        opacity: 1 !important;
    }

    .focus-areas h2 {
        font-size: 2rem;
        color: var(--secondary);
        margin-bottom: 40px;
    }

    .focus-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
    }

    .focus-item {
        background: var(--light);
        padding: 20px;
        border-radius: 10px;
        transition: background-color 0.3s ease;
    }

    .focus-item:hover {
        background-color: var(--primary);
        color: var(--dark);
    }

    .focus-item i {
        font-size: 2rem;
        color: var(--secondary);
        margin-bottom: 10px;
    }

    .focus-item:hover i {
        color: var(--dark);
    }

    .focus-item p {
        font-size: 1rem;
        color: var(--dark);
    }

    /* Venture Tech */
    .venture-tech {
        background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
        padding: 10px 10px 10px 10px;
        border-radius: 10px;
        color: var(--light);
        margin-bottom: 60px;
        opacity: 1 !important;
    }

    .venture-tech h2 {
        font-size: 2rem;
        margin-bottom: 20px;
        text-align: center;
        color: var(--light);
    }

    .venture-content {
        display: flex;
        flex-wrap: wrap;
        margin-right: 200px;
    }

    .venture-text {
        flex: 1;
        min-width: 300px;
    }

    .venture-text p {
        color: var(--light);
        font-size: 1rem;
        line-height: 1.6;
    }

    .venture-media {
        flex: 1;
        min-width: 300px;
    }

    .media-video {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
        border-radius: 10px;
    }

    .media-video iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .venture-stats {
        display: flex;
        justify-content: space-around;
        margin-top: 20px;
        flex-wrap: wrap;
        gap: 20px;
    }

    .stat-item {
        text-align: center;
    }

    .stat-number {
        font-size: 2rem;
        font-weight: 700;
        color: var(--light);
    }

    .stat-label {
        font-size: 1rem;
        color: var(--light);
    }

    /* Timeline */
    .timeline {
        position: relative;
        margin: 60px 0;
        opacity: 1 !important;
    }

    .timeline h2 {
        font-size: 2rem;
        color: var(--secondary);
        text-align: center;
        margin-bottom: 40px;
    }

    .timeline-container {
        position: relative;
        max-width: 800px;
        margin: 0 auto;
    }

    .timeline-item {
        position: relative;
        margin-bottom: 40px;
        display: flex;
        align-items: center;
    }

    .timeline-dot {
        width: 20px;
        height: 20px;
        background-color: var(--primary);
        border-radius: 50%;
        position: absolute;
        left: -30px;
        transition: transform 0.3s ease;
    }

    .timeline-item:hover .timeline-dot {
        transform: scale(1.5);
    }

    .timeline-content {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        flex: 1;
        margin-left: 20px;
    }

    .timeline-content h3 {
        font-size: 1.3rem;
        color: var(--secondary);
        margin-bottom: 10px;
    }

    .timeline-content p {
        font-size: 1rem;
        color: var(--dark);
    }

    /* CTA Section */
    .about-cta {
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

    /* Animation Fallback */
    .animate-on-scroll {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.6s ease, transform 0.6s ease;
    }

    .animate-on-scroll.show {
        opacity: 1 !important;
        transform: translateY(0);
    }

    /* Fallback for no JS */
    .no-js .animate-on-scroll {
        opacity: 1 !important;
        transform: translateY(0);
    }

    /* Responsive Styles */
    @media (max-width: 992px) {
        .about-hero {
        position: relative;
        height:60vh;
        background: url('{{ asset('/Web Images/batch2/WhatsApp Image 2025-04-12 at 16.33.32.jpeg') }}') top/cover no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

        .hero-content h1 {
            font-size: 2rem;
        }

        .hero-content p {
            font-size: 1rem;
        }

        .about-block {
            flex-direction: column;
        }

        .about-block.reverse {
            flex-direction: column;
        }

        .venture-content {
            flex-direction: column;
        }
    }

    @media (max-width: 576px) {
        .about-hero {
        position: relative;
        height:70vh;
        background: url('{{ asset('/Web Images/batch2/WhatsApp Image 2025-04-12 at 16.33.32.jpeg') }}') top/cover no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

        .hero-content h1 {
            font-size: 1.5rem;
        }

        .cta-content h2 {
            font-size: 1.8rem;
        }

        .timeline-content {
            padding: 15px;
        }

        .timeline-dot {
            left: -25px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const elements = document.querySelectorAll('.animate-on-scroll');
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('show');
                        observer.unobserve(entry.target); // Stop observing once shown
                    }
                });
            },
            { threshold: 0.1 }
        );

        elements.forEach((el) => observer.observe(el));
    });
</script>