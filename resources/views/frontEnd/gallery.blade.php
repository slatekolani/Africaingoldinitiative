@extends('welcome')
@section('canonical', 'https://www.africaingoldinitiative.or.tz/gallery')

@section('title', __('messages.gallery_title') . ' | Africa in Gold Initiative')

@section('content')
<div class="animated-bg">
    <div class="ripple" style="width: 20px; height: 20px; top: 12%; left: 8%;"></div>
    <div class="ripple" style="width: 15px; height: 15px; top: 58%; right: 12%;"></div>
    <div class="ripple" style="width: 25px; height: 25px; bottom: 18%; left: 28%;"></div>
</div>

@include('frontEnd.header')

<!-- Hero Section -->
<section id="gallery-hero" class="gallery-hero">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content animate-on-scroll">
            <h1 class="split-text">
                <span>{{ __('messages.gallery_hero_title1') }}</span>
                <span>{{ __('messages.gallery_hero_title2') }}</span>
            </h1>
            <p>{{ __('messages.gallery_hero_desc') }}</p>
            <a href="#gallery-content" class="btn">{{ __('messages.explore_gallery') }}</a>
        </div>
    </div>
</section>

<!-- Gallery Content -->
<section id="gallery-content" class="gallery-content-section">
    <div class="container">
        <h2 class="section-title animate-on-scroll">{{ __('messages.gallery_section_title') }}</h2>
        
        <!-- Gallery Grid -->
        <div class="gallery-grid animate-on-scroll">
            <!-- Item 1 -->
            <div class="gallery-item animate-on-scroll">
                <div class="gallery-media">
                    <img src="{{ asset('/Web Images/batch2/WhatsApp Image 2025-04-12 at 16.21.49.jpeg') }}" alt="{{ __('messages.gallery_alt1') }}" data-type="image">
                    
                </div>
            </div>
            <!-- Item 2 -->
            <div class="gallery-item animate-on-scroll">
                <div class="gallery-media">
                    <img src="{{ asset('/Web Images/batch2/WhatsApp Image 2025-04-12 at 16.21.51.jpeg') }}" alt="{{ __('messages.gallery_alt2') }}" data-type="image">
                   
                </div>
            </div>
            <!-- Item 3 -->
            <div class="gallery-item animate-on-scroll">
                <div class="gallery-media">
                    <img src="{{ asset('/Web Images/batch2/WhatsApp Image 2025-04-12 at 16.22.32.jpeg') }}" alt="{{ __('messages.gallery_alt3') }}" data-type="image">   
                </div>
            </div>
            <!-- Item 4 -->
            <div class="gallery-item animate-on-scroll">
                <div class="gallery-media">
                    <img src="{{ asset('/Web Images/batch2/WhatsApp Image 2025-04-12 at 16.22.33 (1).jpeg') }}" alt="{{ __('messages.gallery_alt4') }}" data-type="image">
                    
                </div>
            </div>
            <!-- Item 5 (Video) -->
            <div class="gallery-item animate-on-scroll">
                <div class="gallery-media">
                    <img src="{{ asset('/Web Images/batch2/WhatsApp Image 2025-04-12 at 16.22.33 (2).jpeg') }}" alt="{{ __('messages.gallery_alt5') }}" data-type="video" data-src="https://www.youtube.com/embed/dQw4w9WgXcQ">
                    
                </div>
            </div>
            <!-- Item 6 -->
            <div class="gallery-item animate-on-scroll">
                <div class="gallery-media">
                    <img src="{{ asset('/Web Images/batch2/WhatsApp Image 2025-04-12 at 16.22.33.jpeg') }}" alt="{{ __('messages.gallery_alt6') }}" data-type="image">
                   
                </div>
            </div>
            <!-- Item 7 -->
            <div class="gallery-item animate-on-scroll">
                <div class="gallery-media">
                    <img src="{{ asset('/Web Images/batch2/WhatsApp Image 2025-04-12 at 16.33.32.jpeg') }}" alt="{{ __('messages.gallery_alt7') }}" data-type="image">
                    
                </div>
            </div>
            <!-- Item 8 -->
            <div class="gallery-item animate-on-scroll">
                <div class="gallery-media">
                    <img src="{{ asset('/Web Images/Team having fun.jpeg') }}" alt="{{ __('messages.gallery_alt8') }}" data-type="image">   
                </div>
            </div>

            <div class="gallery-item animate-on-scroll">
                <div class="gallery-media">
                    <img src="{{ asset('/Web Images/Team making impact 2.png') }}" alt="{{ __('messages.gallery_alt8') }}" data-type="image">   
                </div>
            </div>
            <div class="gallery-item animate-on-scroll">
                <div class="gallery-media">
                    <img src="{{ asset('/Web Images/Team planting stuff.jpeg') }}" alt="{{ __('messages.gallery_alt8') }}" data-type="image">   
                </div>
            </div>
            <div class="gallery-item animate-on-scroll">
                <div class="gallery-media">
                    <img src="{{ asset('/Web Images/Team showcasing stuff.jpeg') }}" alt="{{ __('messages.gallery_alt8') }}" data-type="image">   
                </div>
            </div>
            <div class="gallery-item animate-on-scroll">
                <div class="gallery-media">
                    <img src="{{ asset('/Web Images/Team with dustbins.jpeg') }}" alt="{{ __('messages.gallery_alt8') }}" data-type="image">   
                </div>
            </div>
            <div class="gallery-item animate-on-scroll">
                <div class="gallery-media">
                    <img src="{{ asset('/Web Images/Together with impact.png') }}" alt="{{ __('messages.gallery_alt8') }}" data-type="image">   
                </div>
            </div>
            <div class="gallery-item animate-on-scroll">
                <div class="gallery-media">
                    <img src="{{ asset('/Web Images/WhatsApp Image 2025-04-11 at 23.33.45.jpeg') }}" alt="{{ __('messages.gallery_alt8') }}" data-type="image">   
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Lightbox -->
<div id="lightbox" class="lightbox">
    <span class="lightbox-close">&times;</span>
    <div class="lightbox-content">
        <img id="lightbox-image" src="" alt="Lightbox image">
        <iframe id="lightbox-video" src="" frameborder="0" allowfullscreen></iframe>
        <p id="lightbox-caption"></p>
    </div>
    <button class="lightbox-nav prev"><i class="fas fa-chevron-left"></i></button>
    <button class="lightbox-nav next"><i class="fas fa-chevron-right"></i></button>
</div>

<!-- CTA Section -->
<section id="gallery-cta" class="gallery-cta">
    <div class="container">
        <div class="cta-content animate-on-scroll">
            <h2>{{ __('messages.gallery_cta_title') }}</h2>
            <p>{{ __('messages.gallery_cta_desc') }}</p>
            <a href="#share" class="btn">{{ __('messages.share_moment') }}</a>
        </div>
    </div>
</section>

@include('frontEnd.footer')

@endsection

<style>
    /* Reset potential overrides */
    img, .gallery-grid, .gallery-item {
        display: grid !important;
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

    .ripple {
        position: absolute;
        background: var(--primary);
        border-radius: 50%;
        opacity: 0.3;
        animation: ripple 15s infinite ease-in-out;
    }

    @keyframes ripple {
        0%, 100% { transform: scale(1); opacity: 0.3; }
        50% { transform: scale(1.5); opacity: 0.5; }
    }

    /* Gallery Hero */
    .gallery-hero {
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

    /* Gallery Content */
    .gallery-content-section {
        padding: 80px 0;
        background-color: var(--light);
    }

    .section-title {
        font-size: 2.5rem;
        color: var(--secondary);
        text-align: center;
        margin-bottom: 40px;
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

    /* Modified Gallery Grid to display in rows */
    .gallery-grid {
        display: flex;
        grid-template-columns: repeat(3, 1fr); /* 3 columns by default */
        gap: 20px;
        padding: 0 10px;
    }

    .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        aspect-ratio: 4 / 3;
        transition: transform 0.3s ease;
    }

    .gallery-media {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .gallery-media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block !important;
        transition: transform 0.5s ease;
    }

    .gallery-item:hover .gallery-media img {
        transform: scale(1.1);
    }

    .gallery-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.7);
        color: var(--light);
        padding: 10px;
        transform: translateY(100%);
        transition: transform 0.3s ease;
        text-align: center;
    }

    .gallery-item:hover .gallery-caption {
        transform: translateY(0);
    }

    .gallery-caption p {
        margin: 0;
        font-size: 0.9rem;
    }

    .play-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: var(--light);
        font-size: 2rem;
        opacity: 0.8;
        transition: opacity 0.3s ease;
    }

    .gallery-item:hover .play-icon {
        opacity: 1;
    }

    /* Lightbox */
    .lightbox {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        z-index: 1000;
        align-items: center;
        justify-content: center;
    }

    .lightbox.active {
        display: flex;
    }

    .lightbox-content {
        position: relative;
        max-width: 90%;
        max-height: 80%;
        text-align: center;
    }

    #lightbox-image, #lightbox-video {
        max-width: 100%;
        max-height: 70vh;
        display: none;
    }

    #lightbox-image.active, #lightbox-video.active {
        display: block;
    }

    #lightbox-caption {
        color: var(--light);
        font-size: 1rem;
        margin-top: 10px;
    }

    .lightbox-close {
        position: absolute;
        top: 20px;
        right: 20px;
        color: var(--light);
        font-size: 2rem;
        cursor: pointer;
        z-index: 1001;
    }

    .lightbox-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0, 0, 0, 0.5);
        color: var(--light);
        border: none;
        padding: 15px;
        cursor: pointer;
        font-size: 1.5rem;
        z-index: 1001;
    }

    .lightbox-nav.prev {
        left: 20px;
    }

    .lightbox-nav.next {
        right: 20px;
    }

    /* CTA Section */
    .gallery-cta {
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
        .gallery-hero {
            height: 50vh;
        }
        .split-text {
            font-size: 2.2rem;
        }
        .hero-content p {
            font-size: 1rem;
        }
        .gallery-grid {
            grid-template-columns: repeat(2, 1fr); /* 2 columns for tablets */
        }
    }

    @media (max-width: 576px) {
        .gallery-hero {
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
        .gallery-grid {
            grid-template-columns: 1fr; /* 1 column for mobile */
        }
        .cta-content h2 {
            font-size: 1.8rem;
        }
        .lightbox-nav {
            padding: 10px;
            font-size: 1.2rem;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        console.log('Gallery page loaded');

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

        // Lightbox
        const lightbox = document.querySelector('#lightbox');
        const lightboxImage = document.querySelector('#lightbox-image');
        const lightboxVideo = document.querySelector('#lightbox-video');
        const lightboxCaption = document.querySelector('#lightbox-caption');
        const lightboxClose = document.querySelector('.lightbox-close');
        const lightboxPrev = document.querySelector('.lightbox-nav.prev');
        const lightboxNext = document.querySelector('.lightbox-nav.next');
        let currentItems = [];
        let currentIndex = 0;

        if (!lightbox || !lightboxImage || !lightboxVideo || !lightboxCaption) {
            console.error('Lightbox elements missing');
            return;
        }

        const galleryItems = document.querySelectorAll('.gallery-item');
        
        galleryItems.forEach((item, index) => {
            item.addEventListener('click', () => {
                console.log('Gallery item clicked:', index);
                const media = item.querySelector('img');
                const type = media.dataset.type;
                const src = type === 'video' ? media.dataset.src : media.src;
                const caption = item.querySelector('.gallery-caption p').textContent;
                const alt = media.alt;

                // Set current items
                currentItems = Array.from(galleryItems);
                currentIndex = currentItems.indexOf(item);

                // Update lightbox content
                lightboxImage.classList.remove('active');
                lightboxVideo.classList.remove('active');
                if (type === 'image') {
                    lightboxImage.src = src;
                    lightboxImage.alt = alt;
                    lightboxImage.classList.add('active');
                    lightboxVideo.src = '';
                } else {
                    lightboxVideo.src = src;
                    lightboxVideo.classList.add('active');
                    lightboxImage.src = '';
                }
                lightboxCaption.textContent = caption;
                lightbox.classList.add('active');
                console.log('Lightbox opened:', { type, src, caption });
            });
        });

        lightboxClose.addEventListener('click', () => {
            lightbox.classList.remove('active');
            lightboxVideo.src = '';
            console.log('Lightbox closed');
        });

        lightboxPrev.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + currentItems.length) % currentItems.length;
            updateLightbox();
            console.log('Lightbox prev:', currentIndex);
        });

        lightboxNext.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % currentItems.length;
            updateLightbox();
            console.log('Lightbox next:', currentIndex);
        });

        function updateLightbox() {
            const item = currentItems[currentIndex];
            const media = item.querySelector('img');
            const type = media.dataset.type;
            const src = type === 'video' ? media.dataset.src : media.src;
            const caption = item.querySelector('.gallery-caption p').textContent;
            const alt = media.alt;

            lightboxImage.classList.remove('active');
            lightboxVideo.classList.remove('active');
            if (type === 'image') {
                lightboxImage.src = src;
                lightboxImage.alt = alt;
                lightboxImage.classList.add('active');
                lightboxVideo.src = '';
            } else {
                lightboxVideo.src = src;
                lightboxVideo.classList.add('active');
                lightboxImage.src = '';
            }
            lightboxCaption.textContent = caption;
        }

        // Close lightbox on outside click
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                lightbox.classList.remove('active');
                lightboxVideo.src = '';
                console.log('Lightbox closed via outside click');
            }
        });
    });
</script>