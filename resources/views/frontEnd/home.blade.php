@extends('welcome')
@section('canonical', 'https://www.africaingoldinitiative.or.tz/home')

@section('title', __('messages.home') . ' | Africa in Gold Initiative')
@section('content')
<div class="animated-bg">
    <div class="circle" style="width: 300px; height: 300px; top: 20%; left: 5%;"></div>
    <div class="square" style="width: 200px; height: 200px; top: 60%; right: 10%;"></div>
    <div class="circle" style="width: 150px; height: 150px; top: 40%; right: 30%;"></div>
    <div class="square" style="width: 100px; height: 100px; top: 80%; left: 20%;"></div>
</div>

@include('frontEnd.header')

<section id="home" class="hero">
    <div class="carousel">
        <div class="carousel-item active" style="background-image: url('{{ asset('/Web Images/Together with impact.png') }}')">
            <div class="overlay"></div>
            <div class="carousel-content">
                <h1>{{ __('messages.empowering_youth') }}</h1>
                <p>{{ __('messages.empowering_youth_desc') }}</p>
                <a href="#about" class="btn">{{ __('messages.learn_more') }}</a>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('{{ asset('/Web Images/Team with dustbins.jpeg') }}')">
            <div class="overlay"></div>
            <div class="carousel-content">
                <h1>{{ __('messages.environmental_conservation') }}</h1>
                <p>{{ __('messages.environmental_conservation_desc') }}</p>
                <a href="#about" class="btn">{{ __('messages.learn_more') }}</a>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('{{ asset('/Web Images/WhatsApp Image 2025-04-11 at 23.33.45.jpeg') }}')">
            <div class="overlay"></div>
            <div class="carousel-content">
                <h1>{{ __('messages.building_leaders') }}</h1>
                <p>{{ __('messages.building_leaders_desc') }}</p>
                <a href="#programs" class="btn">{{ __('messages.our_programs') }}</a>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('{{ asset('/Web Images/Team having fun.jpeg') }}')">
            <div class="overlay"></div>
            <div class="carousel-content">
                <h1>{{ __('messages.join_initiative') }}</h1>
                <p>{{ __('messages.join_initiative_desc') }}</p>
                <a href="#membership" class="btn">{{ __('messages.join_now') }}</a>
            </div>
        </div>
    </div>
    <div class="carousel-indicators">
        <span class="indicator active"></span>
        <span class="indicator"></span>
        <span class="indicator"></span>
        <span class="indicator"></span>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <h2>{{ __('messages.about') }}</h2>
        </div>
        <div class="about-content">
            <div class="about-text animate-on-scroll">
                <div class="content-layer">
                    <h3 class="layer-title">{{ __('messages.about_who_we_are') }}</h3>
                    <p>{{ __('messages.about_who_we_are_desc') }}</p>
                </div>
                <div class="content-layer">
                    <h3 class="layer-title">{{ __('messages.about_our_why') }}</h3>
                    <p>{{ __('messages.about_our_why_desc') }}</p>
                </div>
                <div class="content-layer">
                    <h3 class="layer-title">{{ __('messages.about_why_name') }}</h3>
                    <p>{{ __('messages.about_why_name_desc') }}</p>
                </div>
                <div class="content-layer">
                    <div class="project-stats">
                        <a href="https://drive.google.com/file/d/1XvFXEpQmUs-ZSvfLnoDbGzYllo6drsje/view?usp=sharing" class="btn" target="_blank">{{ __('messages.business_guide_link_button') }}</a>
                    </div>
                </div>
            </div>
            <div class="about-media animate-on-scroll">
                <div class="media-image">
                    <img src="{{ asset('/Web Images/Team planting stuff.jpeg') }}" alt="Youth Empowerment Initiative" class="media-img">
                    <div class="image-overlay">
                        <i class="fas fa-users"></i>
                        <span>{{ __('messages.environmental_conservation') }}</span>
                    </div>
                </div>
                <div class="media-video">
                    <iframe src="https://www.youtube.com/embed/uteR44ZjYRI" title="Africa In Gold Initiative Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <br>
        <div class="mission-vision animate-on-scroll">
            <div class="card">
                <h3><i class="fas fa-bullseye"></i> {{ __('messages.mission') }}</h3>
                <p>{{ __('messages.mission_desc') }}</p>
            </div>
            <div class="card">
                <h3><i class="fas fa-eye"></i> {{ __('messages.vision') }}</h3>
                <p>{{ __('messages.vision_desc') }}</p>
            </div>
            
            <div class="card">
                <h3><i class="fas fa-dot-circle"></i> {{ __('messages.focus_areas') }}</h3>
                <ul>
                    <li>{{ __('messages.focus_area_1') }}</li>
                    <li>{{ __('messages.focus_area_2') }}</li>
                    <li>{{ __('messages.focus_area_3') }}</li>
                    <li>{{ __('messages.focus_area_4') }}</li>
                </ul>
            </div>
            
        </div>
       
        
        <div class="recent-projects animate-on-scroll">
            <h3 class="projects-title">{{ __('messages.venture_tech_title') }}</h3>
            <div class="projects-content">
                <p>{{ __('messages.venture_tech_desc') }}</p>
                <p>{!! __('messages.venture_tech_more') !!}</p>
                <div class="project-stats">
                    <a href="https://chat.whatsapp.com/D84D8A5QJNSEdXOPDSiN8i" target="_blank" class="btn "><i class="fab fa-whatsapp contact-icon" style="color: white"></i>{{ __('messages.join_group_venture') }}</a>
                </div>
            </div>
        </div>
        <div class="project-stats">
            <a href="{{route('programs')}}" class="btn "><i class="fas fa-chart-line" style="color: white"></i> {{ __('messages.see_about_us') }}</a>
        </div>
    </div>
</section>

<!-- Programs Section -->
<section id="programs" class="programs">
    <div class="container">
        <div class="section-title">
            <h2>{{ __('messages.programs') }}</h2>
        </div>
        <div class="programs-grid">
            <div class="program-card animate-on-scroll">
                <div class="program-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="program-content">
                    <h3>{{ __('messages.entrepreneurship') }}</h3>
                    <p>{{ __('messages.entrepreneurship_desc') }}</p>
                </div>
            </div>
            <div class="program-card animate-on-scroll">
                <div class="program-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="program-content">
                    <h3>{{ __('messages.leadership') }}</h3>
                    <p>{{ __('messages.leadership_desc') }}</p>
                </div>
            </div>
            <div class="program-card animate-on-scroll">
                <div class="program-icon">
                    <i class="fas fa-leaf"></i>
                </div>
                <div class="program-content">
                    <h3>{{ __('messages.environmental_conservation') }}</h3>
                    <p>{{ __('messages.environmental_conservation_desc') }}</p>
                </div>
            </div>
            <div class="program-card animate-on-scroll">
                <div class="program-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <div class="program-content">
                    <h3>{{ __('messages.digital_innovation') }}</h3>
                    <p>{{ __('messages.digital_innovation_desc') }}</p>
                </div>
            </div>
            <div class="program-card animate-on-scroll">
                <div class="program-icon">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <div class="program-content">
                    <h3>{{ __('messages.community_engagement') }}</h3>
                    <p>{{ __('messages.community_engagement_desc') }}</p>
                </div>
            </div>
            <div class="program-card animate-on-scroll">
                <div class="program-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="program-content">
                    <h3>{{ __('messages.scholarship') }}</h3>
                    <p>{{ __('messages.scholarship_desc') }}</p>
                </div>
            </div>
        </div>
        <div class="project-stats">
            <a href="{{route('programs')}}" class="btn "><i class="fas fa-briefcase" style="color: white"></i> {{ __('messages.see_all_programs') }}</a>
        </div>
    </div>
</section>

<!-- Team Section -->
<section id="team" class="team">
    <div class="container">
        <div class="section-title">
            <h2>{{ __('messages.team') }}</h2>
        </div>
        <div class="team-grid">
            <div class="team-member animate-on-scroll">
                <div class="team-icon">
                    <img src="{{ asset('img/Team/Mathew Mwalongo.jpeg') }}" alt="Mathew Augustino Mwalongo">
                </div>
                <div class="member-info">
                    <h3>Mathew Augustino Mwalongo</h3>
                    <p>Executive Director</p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-x-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-member animate-on-scroll">
                <div class="team-icon">
                    <img src="{{ asset('img/Team/Kelvin Chami.jpeg') }}" alt="Kelvin Chami">
                </div>
                <div class="member-info">
                    <h3>Kelvin Chami</h3>
                    <p>Head of Strategy &amp; Policy</p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-x-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-member animate-on-scroll">
                <div class="team-icon">
                    <img src="{{ asset('img/Team/Augustino Armando.jpeg') }}" alt="Augustino Armando">
                </div>
                <div class="member-info">
                    <h3>Augustino Armando</h3>
                    <p>Head of Innovation &amp; Enterprise</p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-x-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-member animate-on-scroll">
                <div class="team-icon">
                    <img src="{{ asset('img/Team/Agnes Mangi.jpeg') }}" alt="Agness Mangi">
                </div>
                <div class="member-info">
                    <h3>Agness Mangi</h3>
                    <p>Head of Finance &amp; Administration</p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-x-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-stats">
            <a href="{{route('team')}}" class="btn "><i class="fas fa-user-tie" style="color: white"></i> {{ __('messages.see_all_team') }}</a>
        </div>
    </div>
</section>

<!-- Impact Section -->
<section id="impact" class="impact">
    <div class="container">
        <div class="section-title">
            <h2>{{ __('messages.impact') }}</h2>
        </div>
        <div class="impact-grid">
            <div class="impact-card animate-on-scroll">
                <div class="impact-number">500+</div>
                <div class="impact-text">{{ __('messages.impact_leadership') }}</div>
            </div>
            <div class="impact-card animate-on-scroll">
                <div class="impact-number">200+</div>
                <div class="impact-text">{{ __('messages.impact_ventures') }}</div>
            </div>
            <div class="impact-card animate-on-scroll">
                <div class="impact-number">1000+</div>
                <div class="impact-text">{{ __('messages.impact_trees') }}</div>
            </div>
            <div class="impact-card animate-on-scroll">
                <div class="impact-number">300+</div>
                <div class="impact-text">{{ __('messages.impact_scholarships') }}</div>
            </div>
        </div>
        <div class="project-stats">
            <a href="{{route('impact')}}" class="btn "><i class="fas fa-briefcase" style="color: white"></i> {{ __('messages.see_impacts') }}</a>
        </div>
    </div>
</section>


<section id="gallery" class="gallery">
    <div class="container">
        <div class="section-title">
            <h2>{{ __('messages.gallery_title') }}</h2>
        </div>
        <div class="gallery-wrapper">
            <div class="gallery-track">
                <div class="gallery-item animate-on-scroll">
                    <div class="gallery-image">
                        <img src="{{ asset('/Web Images/batch2/WhatsApp Image 2025-04-12 at 16.22.33.jpeg') }}" alt="{{ __('messages.gallery_image3_alt') }}">
                        <div class="gallery-overlay">
                            <h3>{{ __('messages.gallery_image6_title') }}</h3>
                            <p>{{ __('messages.gallery_image6_desc') }}</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item animate-on-scroll">
                    <div class="gallery-image">
                        <img src="{{ asset('/Web Images/batch2/WhatsApp Image 2025-04-12 at 16.22.33 (2).jpeg') }}" alt="{{ __('messages.gallery_image3_alt') }}">
                        <div class="gallery-overlay">
                            <h3>{{ __('messages.gallery_image6_title') }}</h3>
                            <p>{{ __('messages.gallery_image6_desc') }}</p>
                        </div>
                    </div>
                </div>
                <div class="gallery-item animate-on-scroll">
                    <div class="gallery-image">
                        <img src="{{ asset('/Web Images/batch2/WhatsApp Image 2025-04-12 at 16.21.49.jpeg') }}" alt="{{ __('messages.gallery_image3_alt') }}">
                        <div class="gallery-overlay">
                            <h3>{{ __('messages.gallery_image7_title') }}</h3>
                            <p>{{ __('messages.gallery_image7_desc') }}</p>
                        </div>
                    </div>
                </div>
                <div class="gallery-item animate-on-scroll">
                    <div class="gallery-image">
                        <img src="{{ asset('/Web Images/batch2/WhatsApp Image 2025-04-12 at 16.21.51.jpeg') }}" alt="{{ __('messages.gallery_image3_alt') }}">
                        <div class="gallery-overlay">
                            <h3>{{ __('messages.gallery_image7_title') }}</h3>
                            <p>{{ __('messages.gallery_image7_desc') }}</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item animate-on-scroll">
                    <div class="gallery-image">
                        <img src="{{ asset('/Web Images/batch2/WhatsApp Image 2025-04-12 at 16.22.33 (1).jpeg') }}" alt="{{ __('messages.gallery_image3_alt') }}">
                        <div class="gallery-overlay">
                            <h3>{{ __('messages.gallery_image8_title') }}</h3>
                            <p>{{ __('messages.gallery_image8_desc') }}</p>
                        </div>
                    </div>
                </div>

                
                <div class="gallery-item animate-on-scroll">
                    <div class="gallery-image">
                        <img src="{{ asset('/Web Images/Together with impact.png') }}" alt="{{ __('messages.gallery_image1_alt') }}">
                        <div class="gallery-overlay">
                            <h3>{{ __('messages.gallery_image1_title') }}</h3>
                            <p>{{ __('messages.gallery_image1_desc') }}</p>
                        </div>
                    </div>
                </div>
                <div class="gallery-item animate-on-scroll">
                    <div class="gallery-image">
                        <img src="{{ asset('/Web Images/Team with dustbins.jpeg') }}" alt="{{ __('messages.gallery_image2_alt') }}">
                        <div class="gallery-overlay">
                            <h3>{{ __('messages.gallery_image2_title') }}</h3>
                            <p>{{ __('messages.gallery_image2_desc') }}</p>
                        </div>
                    </div>
                </div>
                <div class="gallery-item animate-on-scroll">
                    <div class="gallery-image">
                        <img src="{{ asset('/Web Images/WhatsApp Image 2025-04-11 at 23.33.45.jpeg') }}" alt="{{ __('messages.gallery_image3_alt') }}">
                        <div class="gallery-overlay">
                            <h3>{{ __('messages.gallery_image3_title') }}</h3>
                            <p>{{ __('messages.gallery_image3_desc') }}</p>
                        </div>
                    </div>
                </div>
                <div class="gallery-item animate-on-scroll">
                    <div class="gallery-image">
                        <img src="{{ asset('/Web Images/Team having fun.jpeg') }}" alt="{{ __('messages.gallery_image4_alt') }}">
                        <div class="gallery-overlay">
                            <h3>{{ __('messages.gallery_image4_title') }}</h3>
                            <p>{{ __('messages.gallery_image4_desc') }}</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item animate-on-scroll">
                    <div class="gallery-image">
                        <img src="{{ asset('/Web Images/batch2/WhatsApp Image 2025-04-12 at 16.33.32.jpeg') }}" alt="{{ __('messages.gallery_image4_alt') }}">
                        <div class="gallery-overlay">
                            <h3>{{ __('messages.gallery_image4_title') }}</h3>
                            <p>{{ __('messages.gallery_image4_desc') }}</p>
                        </div>
                    </div>
                </div>
                <div class="gallery-item animate-on-scroll">
                    <div class="gallery-image">
                        <img src="{{ asset('/Web Images/Team planting stuff.jpeg') }}" alt="{{ __('messages.gallery_image5_alt') }}">
                        <div class="gallery-overlay">
                            <h3>{{ __('messages.gallery_image5_title') }}</h3>
                            <p>{{ __('messages.gallery_image5_desc') }}</p>
                        </div>
                    </div>
                </div>
                <!-- Duplicate items for seamless looping -->
                <div class="gallery-item animate-on-scroll">
                    <div class="gallery-image">
                        <img src="{{ asset('/Web Images/Together with impact.png') }}" alt="{{ __('messages.gallery_image1_alt') }}">
                        <div class="gallery-overlay">
                            <h3>{{ __('messages.gallery_image1_title') }}</h3>
                            <p>{{ __('messages.gallery_image1_desc') }}</p>
                        </div>
                    </div>
                </div>
                <div class="gallery-item animate-on-scroll">
                    <div class="gallery-image">
                        <img src="{{ asset('/Web Images/Team with dustbins.jpeg') }}" alt="{{ __('messages.gallery_image2_alt') }}">
                        <div class="gallery-overlay">
                            <h3>{{ __('messages.gallery_image2_title') }}</h3>
                            <p>{{ __('messages.gallery_image2_desc') }}</p>
                        </div>
                    </div>
                </div>
                <div class="gallery-item animate-on-scroll">
                    <div class="gallery-image">
                        <img src="{{ asset('/Web Images/WhatsApp Image 2025-04-11 at 23.33.45.jpeg') }}" alt="{{ __('messages.gallery_image3_alt') }}">
                        <div class="gallery-overlay">
                            <h3>{{ __('messages.gallery_image3_title') }}</h3>
                            <p>{{ __('messages.gallery_image3_desc') }}</p>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
        <div class="project-stats">
            <a href="{{route('gallery')}}" class="btn "><i class="fas fa-chart-line" style="color: white"></i> {{ __('messages.see_all_pictures') }}</a>
        </div>
    </div>
    <div class="gallery-bg">
        <div class="bg-circle" style="width: 200px; height: 200px; top: 10%; left: 5%;"></div>
        <div class="bg-circle" style="width: 150px; height: 150px; bottom: 15%; right: 10%;"></div>
    </div>
</section>


@include('frontEnd.includes.contactForms')


@include('frontEnd.footer')

<!-- Scroll to Top Button -->
<div class="scroll-top">
    <i class="fas fa-arrow-up"></i>
</div>

@endsection