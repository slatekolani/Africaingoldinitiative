@extends('welcome')

@section('canonical', 'https://www.africaingoldinitiative.or.tz/contactUs')

@section('title', __('messages.contact_title') . ' | Africa in Gold Initiative')

@section('content')
<div class="animated-bg">
    <div class="ripple" style="width: 20px; height: 20px; top: 10%; left: 5%;"></div>
    <div class="ripple" style="width: 15px; height: 15px; top: 60%; right: 10%;"></div>
    <div class="ripple" style="width: 25px; height: 25px; bottom: 20%; left: 20%;"></div>
</div>

@include('frontEnd.header')

<!-- Hero Section -->
<section id="contact-hero" class="contact-hero">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content animate-on-scroll">
            <h1 class="split-text">
                <span>{{ __('messages.contact_hero_title1') }}</span>
                <span>{{ __('messages.contact_hero_title2') }}</span>
            </h1>
            <p>{{ __('messages.contact_hero_desc') }}</p>
            <a href="#contact-content" class="btn">{{ __('messages.contact_cta') }}</a>
        </div>
    </div>
</section>

<!-- Contact Content -->
<section id="contact-content" class="contact-content-section">
    <div class="container">
        <h2 class="section-title animate-on-scroll">{{ __('messages.contact_section_title') }}</h2>
        <p class="section-intro animate-on-scroll">{{ __('messages.contact_intro') }}</p>
        
        <!-- Contact Details -->
        @include('frontEnd.includes.contactForms')


    </div>
</section>

<!-- CTA Section -->
<section id="contact-cta" class="contact-cta">
    <div class="container">
        <div class="cta-content animate-on-scroll">
            <h2>{{ __('messages.contact_cta_title') }}</h2>
            <p>{{ __('messages.contact_cta_desc') }}</p>
            <a href="{{ route('home') }}#join-us" class="btn">{{ __('messages.contact_cta_button') }}</a>
        </div>
    </div>
</section>

@include('frontEnd.footer')

@endsection

<style>
    /* Reset potential overrides */
    img, .contact-details, .contact-item {
        display: block !important;
        visibility: visible !important;
        opacity: 1 !important;
    }

    /* Contact Hero */
    .contact-hero {
        position: relative;
        height: 80vh;
        background: url('{{ asset('/Web Images/Team having fun.jpeg') }}') center/cover no-repeat;
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
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
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

    /* Contact Content */
    .contact-content-section {
        padding: 80px 0;
        background-color: var(--light);
    }

    .section-title {
        font-size: 2.5rem;
        color: var(--secondary);
        text-align: center;
        margin-bottom: 20px;
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

    .section-intro {
        font-size: 1.1rem;
        color: var(--dark);
        text-align: center;
        max-width: 800px;
        margin: 0 auto 40px;
    }

    .contact-details {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
        margin-bottom: 40px;
    }

    .contact-item {
        flex: 1;
        min-width: 250px;
        text-align: center;
        padding: 20px;
        background: var(--primary);
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .contact-item:hover {
        transform: translateY(-5px);
    }

    .contact-item i {
        font-size: 2rem;
        color: var(--light);
        margin-bottom: 10px;
    }

    .contact-item h3 {
        font-size: 1.5rem;
        color: var(--secondary);
        margin-bottom: 10px;
    }

    .contact-item p {
        font-size: 1rem;
        color: var(--dark);
        margin: 0;
    }

    .contact-item a {
        color: var(--primary);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-item a:hover {
        color: var(--secondary);
    }

    .contact-form-reference {
        text-align: center;
        margin-bottom: 40px;
    }

    .contact-form-reference h3 {
        font-size: 1.8rem;
        color: var(--secondary);
        margin-bottom: 10px;
    }

    .contact-form-reference p {
        font-size: 1rem;
        color: var(--dark);
        margin-bottom: 20px;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    .contact-map {
        text-align: center;
    }

    .contact-map h3 {
        font-size: 1.8rem;
        color: var(--secondary);
        margin-bottom: 20px;
    }

    .map-placeholder img {
        width: 100%;
        max-width: 800px;
        height: auto;
        border-radius: 10px;
        display: block !important;
        margin: 0 auto;
    }

    .map-placeholder p {
        font-size: 0.9rem;
        color: var(--dark);
        margin-top: 10px;
    }

    /* CTA Section */
    .contact-cta {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('/Web Images/Together with impact.png') }}') center/cover no-repeat;
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
        .contact-hero {
            height: 50vh;
        }
        .split-text {
            font-size: 2.2rem;
        }
        .hero-content p {
            font-size: 1rem;
        }
        .contact-item {
            min-width: 200px;
        }
    }

    @media (max-width: 576px) {
        .contact-hero {
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
        .contact-item {
            min-width: 100%;
        }
        .contact-item i {
            font-size: 1.5rem;
        }
        .contact-item h3 {
            font-size: 1.3rem;
        }
        .contact-form-reference h3 {
            font-size: 1.5rem;
        }
        .contact-map h3 {
            font-size: 1.5rem;
        }
        .cta-content h2 {
            font-size: 1.8rem;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        console.log('Contact page loaded');

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
    });
</script>