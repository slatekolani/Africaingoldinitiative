@extends('welcome')

@section('canonical', 'https://www.africaingoldinitiative.or.tz/team')

@section('title', __('messages.team_title') . ' | Africa in Gold Initiative')

@section('content')
<div class="animated-bg">
    <div class="particle" style="width: 20px; height: 20px; top: 15%; left: 10%;"></div>
    <div class="particle" style="width: 15px; height: 15px; top: 60%; right: 15%;"></div>
    <div class="particle" style="width: 25px; height: 25px; bottom: 20%; left: 30%;"></div>
</div>

@include('frontEnd.header')

<!-- Hero Section -->
<section id="team-hero" class="team-hero">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content animate-on-scroll">
            <h1 class="split-text">
                <span>{{ __('messages.team_hero_title1') }}</span>
                <span>{{ __('messages.team_hero_title2') }}</span>
            </h1>
            <p>{{ __('messages.team_hero_desc') }}</p>
            <a href="#team-content" class="btn">{{ __('messages.meet_team') }}</a>
        </div>
    </div>
</section>

<!-- Team Content -->
<section id="team-content" class="team-content-section">
    <div class="container">
        <h2 class="section-title animate-on-scroll">{{ __('messages.team_section_title') }}</h2>
        <div class="team-grid">
            <!-- Team Member 1: Mathew Augustino Mwalongo -->
            <div class="team-member animate-on-scroll">
                <div class="hexagon">
                    <img src="{{ asset('img/Team/Mathew Mwalongo.jpeg') }}" alt="{{ __('messages.team_member1_alt') }}">
                </div>
                <h3>{{ __('messages.team_member1_name') }}</h3>
                <p class="role">{{ __('messages.team_member1_role') }}</p>
                <div class="social-links">
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <!-- Team Member 2: Kelvin Chami -->
            <div class="team-member animate-on-scroll">
                <div class="hexagon">
                    <img src="{{ asset('img/Team/Kelvin Chami.jpeg') }}" alt="{{ __('messages.team_member2_alt') }}">
                </div>
                <h3>{{ __('messages.team_member2_name') }}</h3>
                <p class="role">{{ __('messages.team_member2_role') }}</p>
                <div class="social-links">
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <!-- Team Member 3: Augustino Armando -->
            <div class="team-member animate-on-scroll">
                <div class="hexagon">
                    <img src="{{ asset('img/Team/Augustino Armando.jpeg') }}" alt="{{ __('messages.team_member3_alt') }}">
                </div>
                <h3>{{ __('messages.team_member3_name') }}</h3>
                <p class="role">{{ __('messages.team_member3_role') }}</p>
                <div class="social-links">
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <!-- Team Member 4: Brayson Nziku -->
            <div class="team-member animate-on-scroll">
                <div class="hexagon">
                    <img src="{{ asset('img/Team/Brayson Nziku.jpeg') }}" alt="{{ __('messages.team_member4_alt') }}">
                </div>
                <h3>{{ __('messages.team_member4_name') }}</h3>
                <p class="role">{{ __('messages.team_member4_role') }}</p>
                <div class="social-links">
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <!-- Team Member 5: Athuman Salmin -->
            <div class="team-member animate-on-scroll">
                <div class="hexagon">
                    <img src="{{ asset('img/Team/Athuman Salmin.jpeg') }}" alt="{{ __('messages.team_member5_alt') }}">
                </div>
                <h3>{{ __('messages.team_member5_name') }}</h3>
                <p class="role">{{ __('messages.team_member5_role') }}</p>
                <div class="social-links">
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <!-- Team Member 6: Emmanuel Ntandu -->
            <div class="team-member animate-on-scroll">
                <div class="hexagon">
                    <img src="{{ asset('img/Team/Emmanuel Ntandu.svg') }}" alt="{{ __('messages.team_member6_alt') }}">
                </div>
                <h3>{{ __('messages.team_member6_name') }}</h3>
                <p class="role">{{ __('messages.team_member6_role') }}</p>
                <div class="social-links">
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <!-- Team Member 7: Agness Mangi -->
            <div class="team-member animate-on-scroll">
                <div class="hexagon">
                    <img src="{{ asset('img/Team/Agnes Mangi.jpeg') }}" alt="{{ __('messages.team_member7_alt') }}">
                </div>
                <h3>{{ __('messages.team_member7_name') }}</h3>
                <p class="role">{{ __('messages.team_member7_role') }}</p>
                <div class="social-links">
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <!-- Team Member 8: Michael Sita -->
            <div class="team-member animate-on-scroll">
                <div class="hexagon">
                    <img src="{{ asset('img/Team/Michael Sita.svg') }}" alt="{{ __('messages.team_member8_alt') }}">
                </div>
                <h3>{{ __('messages.team_member8_name') }}</h3>
                <p class="role">{{ __('messages.team_member8_role') }}</p>
                <div class="social-links">
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <!-- Team Member 9: Pauline Tete -->
            <div class="team-member animate-on-scroll">
                <div class="hexagon">
                    <img src="{{ asset('img/Team/Pauline Tete.svg') }}" alt="{{ __('messages.team_member9_alt') }}">
                </div>
                <h3>{{ __('messages.team_member9_name') }}</h3>
                <p class="role">{{ __('messages.team_member9_role') }}</p>
                <div class="social-links">
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Impact Snapshot -->
<section id="team-impact" class="team-impact">
    <div class="container">
        <h2 class="section-title2 animate-on-scroll">{{ __('messages.team_impact_title') }}</h2>
        <div class="stats-grid animate-on-scroll">
            <div class="stat-item">
                <span class="stat-number" data-target="50">10+</span>
                <span class="stat-label">{{ __('messages.stat_volunteers') }}</span>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-target="10">20+</span>
                <span class="stat-label">{{ __('messages.stat_projects_led') }}</span>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-target="2000">100+</span>
                <span class="stat-label">{{ __('messages.stat_hours_served') }}</span>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section id="team-cta" class="team-cta">
    <div class="container">
        <div class="cta-content animate-on-scroll">
            <h2>{{ __('messages.team_cta_title') }}</h2>
            <p>{{ __('messages.team_cta_desc') }}</p>
            <a href="#join" class="btn">{{ __('messages.join_team') }}</a>
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

    .particle {
        position: absolute;
        background: var(--primary);
        border-radius: 50%;
        opacity: 0.3;
        animation: float 10s infinite ease-in-out;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-20px); }
    }

    /* Team Hero */
    .team-hero {
        position: relative;
        height: 85vh;
        background: url('{{ asset('/Web Images/Team with dustbins.jpeg') }}') center/cover no-repeat;
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
        background: rgba(0, 0, 0, 0.6);
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
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--primary);
        line-height: 1.2;
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

    /* Team Content */
    .team-content-section {
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
    .section-title2 {
        font-size: 2.5rem;
        color: white;
        text-align: center;
        margin-bottom: 50px;
        position: relative;
    }

    .section-title2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 4px;
        background-color: var(--primary);
    }

    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
        padding: 20px;
    }

    .team-member {
        text-align: center;
        position: relative;
        transition: transform 0.3s ease;
    }

    .team-member:hover {
        transform: translateY(-5px);
    }

    .hexagon {
        position: relative;
        width: 150px;
        height: 173.21px; /* Height for hexagon (width * 1.1547) */
        margin: 0 auto 20px;
        clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
        overflow: hidden;
        background-color: var(--primary);
    }

    .hexagon img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block !important;
        transition: transform 0.5s ease;
    }

    .team-member:hover .hexagon img {
        transform: scale(1.1);
    }

    .team-member h3 {
        font-size: 1.5rem;
        color: var(--secondary);
        margin-bottom: 5px;
    }

    .role {
        font-size: 1rem;
        color: var(--primary);
        font-weight: 500;
        margin-bottom: 10px;
    }

    .bio {
        font-size: 0.9rem;
        color: var(--dark);
        max-width: 200px;
        margin: 0 auto 10px;
        line-height: 1.5;
    }

    .social-links {
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .team-member:hover .social-links {
        opacity: 1;
    }

    .social-links a {
        color: var(--primary);
        font-size: 1.2rem;
        margin: 0 10px;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .social-links a:hover {
        color: var(--secondary);
    }

    /* Team Impact */
    .team-impact {
        padding: 60px 0;
        background-color: var(--secondary);
        color: var(--light);
        text-align: center;
    }

    .stats-grid {
        display: grid !important;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-top: 30px;
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
        color: var(--light);
    }

    /* CTA Section */
    .team-cta {
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
        .team-hero {
            height: 50vh;
        }
        .split-text {
            font-size: 2rem;
        }
        .hero-content p {
            font-size: 1rem;
        }
        .team-grid {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        }
    }

    @media (max-width: 576px) {
        .team-hero {
            height: 70vh;
        }
        .split-text {
            font-size: 1.5rem;
        }
        .hero-content p {
            font-size: 0.9rem;
        }
        .section-title {
            font-size: 2rem;
        }
        .hexagon {
            width: 120px;
            height: 138.56px;
        }
        .stat-number {
            font-size: 2rem;
        }
        .cta-content h2 {
            font-size: 1.8rem;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        console.log('Team page loaded');

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
    });
</script>