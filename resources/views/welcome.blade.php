<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Africa in Gold Initiative, AIGI">
    <meta name="description" content="Gold symbolizes wealth and resources. Our name reflects our commitment to building an African society that protects and leverages its resources for the benefit of all. We focus on leadership, environmental protection, entrepreneurship, and technology, especially in government schools, to nurture the next generation.">
    <meta name="google-site-verification" content="G9ur_C7LKVEuoHzWjYhrMklpWmPtfI86n7mrccF65MY" />
    <title>@yield('title', 'Home | Africa in Gold Initiative')</title>
    <link rel="canonical" href="@yield('canonical')"/> 

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Favicons -->
     
   <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/public/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/public/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/public/favicon-16x16.png')}}">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Styles -->
    <style>
        :root {
            --primary: #e4b84d;
            --secondary: #252525;
            --accent: #d69614;
            --light: #f9f5ea;
            --dark: #1a1a1a;
            --success: #28a745;
        }
        .team-icon {
            font-size: 2.5rem;
            color: #2c5282;
            margin-bottom: 1rem;
            background: #e6f3ff;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
        }

        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-decoration: none;
        }

        body {
            background-color: var(--light);
            color: var(--dark);
            margin: 0;
            overflow-x: hidden;
        }

        /* Header and Navigation */
        header {
            position: fixed;
            width: 100%;
            z-index: 1000;
            transition: background-color 0.4s ease;
            background-color: rgba(37, 37, 37, 1);
        }

        .header-scrolled {
            background-color: rgba(37, 37, 37, 0.95);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .logo img {
            width: 90px;
            height: 90px;
            margin-right: 10px;
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
        }

        .nav-menu {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-item {
            margin-left: 30px;
        }

        .nav-link {
            color: var(--light);
            font-size: 1rem;
            font-weight: 500;
            transition: color 0.3s;
            padding: 8px 0;
            position: relative;
            text-decoration: none;
        }

        .nav-link:hover {
            color: var(--primary);
        }

        .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--primary);
            transform: translateX(-50%);
            transition: width 0.3s ease;
        }

        .nav-link:hover::before {
            width: 100%;
        }

        .hamburger {
            display: none;
            cursor: pointer;
        }

        .bar {
            display: block;
            width: 25px;
            height: 3px;
            margin: 5px auto;
            background-color: var(--primary);
            transition: all 0.3s ease;
        }

        .hero {
            position: relative;
            height: 120vh;
            overflow: hidden;
        }
        
    

        .carousel {
            width: 100%;
            height: 100%;
            position: relative;
            margin-top: 50px;
        }

        .carousel-item {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                opacity: 0;
                transition: opacity 1s ease;
                background-size: cover;
                background-position: center;
                display: flex;
                align-items: center;
                justify-content: center;
        }

        .carousel-item.active {
            opacity: 1;
            /* z-index: 2; */
        }

        .overlay {
            position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.6);
        }

        .carousel-content {
            text-align: center;
                max-width: 800px;
                margin: 0 auto;
                padding: 0 20px;
                position: relative;
                z-index: 1;
                color: var(--light);
        }

        .carousel-content h1 {
                font-size: 3rem;
                margin-bottom: 20px;
                font-weight: 700;
                color: var(--primary);
            }
    
            .carousel-content p {
                font-size: 1.2rem;
                margin-bottom: 30px;
            }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: var(--primary);
            color: var(--dark);
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            border: 2px solid var(--primary);
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: transparent;
            color: var(--primary);
        }

        .carousel-indicators {
            position: absolute;
            bottom: 50px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 4;
        }

        .indicator {
            width: 12px;
            height: 12px;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .indicator.active {
            background-color: var(--primary);
        }

        /* About Section */
        section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--secondary);
            position: relative;
            padding-bottom: 10px;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 70px;
            height: 3px;
            background-color: var(--primary);
        }

        .about-content {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            align-items: stretch;
        }

        .about-text {
            flex: 1;
            min-width: 300px;
        }

        .content-layer {
            background: rgba(255, 255, 255, 0.95);
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .content-layer:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .layer-title {
            font-size: 1.6rem;
            color: var(--secondary);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .layer-title::before {
            content: '';
            width: 40px;
            height: 3px;
            background-color: var(--primary);
            margin-right: 10px;
        }

        .about-media {
            flex: 1;
            min-width: 300px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .media-image {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }

        .media-img {
            width: 100%;
            height: auto;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .media-image:hover .media-img {
            transform: scale(1.05);
        }

        .image-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 15px;
            background: rgba(0, 0, 0, 0.7);
            color: var(--light);
            display: flex;
            align-items: center;
            gap: 10px;
            transition: opacity 0.3s ease;
        }

        .media-image:hover .image-overlay {
            opacity: 1;
        }

        .image-overlay i {
            color: var(--primary);
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

        .mission-vision {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .card {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
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

        .recent-projects {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            padding: 40px;
            border-radius: 10px;
            color: var(--light);
            text-align: center;
        }

        .projects-title {
            font-size: 2rem;
            margin-bottom: 20px;
            color: var(--light);
        }

        .projects-content p {
            margin-bottom: 15px;
            color: rgba(255, 255, 255, 0.9);
        }

        .project-link {
            color: var(--light);
            text-decoration: underline;
            transition: color 0.3s ease;
        }

        .project-link:hover {
            color: var(--secondary);
        }

        .project-stats {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 20px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            display: block;
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--light);
        }

        .stat-label {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.8);
        }

        /* Programs Section */
        .programs {
            background-color: var(--secondary);
            color: var(--light);
        }

        .programs .section-title h2 {
            color: var(--light);
        }

        .programs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .program-card {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .program-card:hover {
            transform: translateY(-10px);
        }

        .program-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background-color: var(--primary);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }

        .program-card:hover::before {
            transform: scaleX(1);
        }

        .program-icon {
            font-size: 3rem;
            color: var(--primary);
            text-align: center;
            margin: 20px 0;
        }

        .program-content {
            padding: 20px;
        }

        .program-content h3 {
            margin-bottom: 15px;
            font-size: 1.4rem;
        }

        .program-content p {
            color: rgba(255, 255, 255, 0.8);
        }

        /* Team Section */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .team-member {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .team-member:hover {
            transform: translateY(-5px);
        }

        .member-photo {
            height: 250px;
            overflow: hidden;
        }

        .member-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .team-member:hover .member-photo img {
            transform: scale(1.05);
        }

        .member-info {
            padding: 20px;
            text-align: center;
        }

        .member-info h3 {
            font-size: 1.3rem;
            margin-bottom: 5px;
            color: var(--secondary);
        }

        .member-info p {
            color: var(--accent);
            font-style: italic;
            margin-bottom: 10px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .social-link {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: var(--light);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--secondary);
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background-color: var(--primary);
            color: var(--light);
        }

        /* Impact Section */
        .impact {
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('/api/placeholder/1600/800') center/cover no-repeat fixed;
            color: var(--light);
        }

        .impact .section-title h2 {
            color: var(--light);
        }

        .impact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .impact-card {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .impact-card.show {
            opacity: 1;
            transform: translateY(0);
        }

        .impact-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .impact-text {
            font-size: 1.1rem;
        }

        /* Membership & Donation Section */
        .membership-donation {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
        }

        .membership, .donation {
            flex: 1;
            min-width: 300px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary);
            outline: none;
        }

        .radio-group {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .radio-option {
            display: flex;
            align-items: center;
        }

        .radio-option input {
            margin-right: 8px;
        }

        .bank-details {
            background-color: var(--light);
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
            border-left: 4px solid var(--primary);
        }

        .bank-details p {
            margin-bottom: 10px;
        }

        .bank-details strong {
            color: var(--secondary);
        }

        /* Contact Section */
        .contact {
            background-color: var(--secondary);
            color: var(--light);
        }

        .contact .section-title h2 {
            color: var(--light);
        }

        .contact-info {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-bottom: 40px;
        }

        .contact-item {
            flex: 1;
            min-width: 200px;
            display: flex;
            align-items: flex-start;
        }

        .contact-icon {
            font-size: 2rem;
            color: var(--primary);
            margin-right: 15px;
        }

        .contact-details h3 {
            margin-bottom: 10px;
            font-size: 1.2rem;
        }

        .contact-details p, .contact-details a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-details a:hover {
            color: var(--primary);
        }

        .contact-form {
            background-color: rgba(255, 255, 255, 0.05);
            padding: 30px;
            border-radius: 10px;
        }

        .contact-form .form-control {
            background-color: rgba(255, 255, 255, 0.1);
            color: var(--light);
            border: none;
        }

        .contact-form .form-control::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            color: rgba(255, 255, 255, 0.7);
            padding: 60px 0 20px;
        }

        .footer-content {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-column {
            flex: 1;
            min-width: 200px;
        }

        .footer-column h3 {
            color: var(--primary);
            margin-bottom: 20px;
            font-size: 1.3rem;
        }

        .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            display: flex;
            align-items: center;
            transition: color 0.3s ease;
        }

        .footer-links a i {
            margin-right: 10px;
            color: var(--primary);
        }

        .footer-links a:hover {
            color: var(--primary);
        }

        .social-media {
            display: flex;
            gap: 15px;
        }

        .social-media a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--light);
            transition: all 0.3s ease;
        }

        .social-media a:hover {
            background-color: var(--primary);
            transform: translateY(-5px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Scroll to Top Button */
        .scroll-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background-color: var(--primary);
            color: var(--dark);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            cursor: pointer;
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 99;
        }

        .scroll-top.show {
            opacity: 1;
        }

        /* Dynamic Elements */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .animate-on-scroll.show {
            opacity: 1;
            transform: translateY(0);
        }

        /* Animated Background */
        .animated-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .circle {
            border-radius: 50%;
            background-color: var(--primary);
            opacity: 0.1;
            position: absolute;
        }

        .square {
            background-color: var(--primary);
            opacity: 0.05;
            position: absolute;
            transform: rotate(45deg);
        }

        /* Alerts */
        .alert-success, .alert-danger {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }

       

        /* Responsive Styles */
        @media (max-width: 992px) {
            .hero {
                height: 80vh;
            }
            

            .nav-menu {
                position: fixed;
                left: -100%;
                top: 80px;
                flex-direction: column;
                background-color: rgba(37, 37, 37, 0.95);
                width: 100%;
                text-align: center;
                transition: left 0.3s ease;
                padding: 20px 0;
                box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
            }

            .nav-menu.active {
                left: 0;
            }

            .nav-item {
                margin: 20px 0;
            }

            .hamburger {
                display: block;
            }

            .hamburger.active .bar:nth-child(2) {
                opacity: 0;
            }

            .hamburger.active .bar:nth-child(1) {
                transform: translateY(8px) rotate(45deg);
            }

            .hamburger.active .bar:nth-child(3) {
                transform: translateY(-8px) rotate(-45deg);
            }

            .carousel {
            width: 100%;
            height: 100%;
            position: relative;
            margin-top: 30px;
        }

            .carousel-content h1 {
                font-size: 2.2rem;
            }

            .carousel-content p {
                font-size: 1rem;
            }

            .about-content {
                flex-direction: column;
                align-items: center;
            }

            .about-media {
                max-width: 600px;
            }
        }

        .language-selector {
        position: relative;
    }

    .dropdown {
        position: relative;
    }

    .dropdown-toggle {
        display: flex;
        align-items: center;
        background-color: transparent;
        color: var(--light);
        border: 1px solid var(--primary);
        padding: 8px 12px;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        gap: 8px;
    }

    .dropdown-toggle:hover {
        background-color: var(--primary);
        color: var(--dark);
    }

    .dropdown-toggle .flag-icon {
        width: 24px;
        height: 16px;
        background-size: cover;
    }

    .flag-icon-gb {
        background-image: url('https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.5/flags/4x3/gb.svg');
    }

    .flag-icon-tz {
        background-image: url('https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.5/flags/4x3/tz.svg');
    }

    .dropdown-toggle .language-name {
        font-weight: 500;
    }

    .dropdown-toggle i {
        font-size: 0.8rem;
        transition: transform 0.3s ease;
    }

    .dropdown-toggle.active i {
        transform: rotate(180deg);
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        right: 0;
        background-color: var(--dark);
        border: 1px solid var(--primary);
        border-radius: 5px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        min-width: 160px;
        z-index: 1001;
        margin-top: 5px;
        opacity: 0;
        transform: translateY(-10px);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .dropdown-menu.show {
        display: block;
        opacity: 1;
        transform: translateY(0);
    }

    .dropdown-menu li {
        list-style: none;
    }

    .dropdown-item {
        display: flex;
        align-items: center;
        padding: 10px 15px;
        color: var(--light);
        text-decoration: none;
        font-size: 0.95rem;
        gap: 10px;
        transition: background-color 0.2s ease;
    }

    .dropdown-item:hover {
        background-color: var(--primary);
        color: var(--dark);
    }

    .dropdown-item .flag-icon {
        width: 24px;
        height: 16px;
        background-size: cover;
    }

    /* Responsive Styles */
    @media (max-width: 992px) {
        .nav-menu {
            position: fixed;
            left: -100%;
            top: 80px;
            flex-direction: column;
            background-color: rgba(37, 37, 37, 0.95);
            width: 100%;
            text-align: center;
            transition: left 0.3s ease;
            padding: 20px 0;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
        }

        .nav-menu.active {
            left: 0;
        }

        .nav-item {
            margin: 15px 0;
        }

        .language-selector {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .dropdown-toggle {
            width: 180px;
            justify-content: space-between;
            background-color: var(--dark);
            border-color: var(--primary);
            padding: 10px 15px;
        }

        .dropdown-menu {
            width: 180px;
            right: 50%;
            transform: translateX(50%) translateY(0);
        }

        .dropdown-menu.show {
            transform: translateX(50%) translateY(0);
        }

        .hamburger {
            display: block;
        }

        .hamburger.active .bar:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active .bar:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }

        .hamburger.active .bar:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }
    }

    @media (max-width: 576px) {
        .logo img {
            width: 70px;
            height: 70px;
            margin-right: 10px;
        }
        
        .logo-text {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--primary);
        }

        footer {
            background-color: var(--dark);
            color: rgba(255, 255, 255, 0.7);
            padding: 60px 0 20px;
            min-height: 125vh;
        }

        .dropdown-toggle {
            width: 150px;
            font-size: 0.9rem;
            padding: 8px 12px;
        }

        .dropdown-menu {
            width: 150px;
        }

        .dropdown-item {
            font-size: 0.9rem;
            padding: 8px 12px;
        }
    }

        @media (max-width: 768px) {
            section {
                padding: 60px 0;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .carousel-content h1 {
                font-size: 1.8rem;
            }

            .content-layer {
                padding: 20px;
            }

            .layer-title {
                font-size: 1.4rem;
            }

            .recent-projects {
                padding: 30px;
            }
        }

        @media (max-width: 576px) {
            .carousel-content h1 {
                font-size: 1.5rem;
            }

            .carousel-content p {
                font-size: 0.9rem;
            }

            .btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }

            .project-stats {
                flex-direction: column;
                gap: 20px;
            }
        }

        .gallery {
        position: relative;
        background-color: var(--light);
        overflow: hidden;
        padding: 80px 0;
    }

    .gallery-wrapper {
        overflow: hidden;
        position: relative;
    }

    .gallery-track {
        display: flex;
        animation: slide 30s linear infinite;
        width: max-content;
        will-change: transform;
    }

    .gallery-track:hover {
        animation-play-state: paused;
    }

    .gallery-item {
        flex: 0 0 auto;
        width: 350px;
        margin-right: 20px;
        opacity: 0;
        transform: translateY(50px);
        transition: opacity 0.6s ease, transform 0.6s ease;
    }

    .gallery-item.show {
        opacity: 1;
        transform: translateY(0);
    }

    .gallery-image {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        height: 250px;
        transition: transform 0.3s ease;
    }

    .gallery-image:hover {
        transform: scale(1.05);
    }

    .gallery-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .gallery-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
        color: var(--light);
        padding: 15px;
        transform: translateY(100%);
        transition: transform 0.3s ease;
    }

    .gallery-image:hover .gallery-overlay {
        transform: translateY(0);
    }

    .gallery-overlay h3 {
        font-size: 1.2rem;
        margin-bottom: 5px;
        color: var(--primary);
    }

    .gallery-overlay p {
        font-size: 0.9rem;
        line-height: 1.4;
    }

    .gallery-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: -1;
    }

    .bg-circle {
        border-radius: 50%;
        background-color: var(--primary);
        opacity: 0.1;
        position: absolute;
        animation: float 20s ease-in-out infinite;
    }

    @keyframes slide {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-30px);
        }
    }

    /* Responsive Styles */
    @media (max-width: 992px) {
        .gallery-track {
            animation: none;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .gallery-item {
            width: 300px;
            margin-right: 0;
        }

        .gallery-image {
            height: 200px;
        }
    }

    @media (max-width: 576px) {
        .gallery {
            padding: 60px 0;
        }

        .gallery-item {
            width: 100%;
            max-width: 280px;
        }

        .gallery-overlay h3 {
            font-size: 1rem;
        }

        .gallery-overlay p {
            font-size: 0.85rem;
        }
    }

    </style>
</head>
<body>
    @yield('content')
</body>


<script>
    // Navigation
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.nav-menu');

    hamburger?.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navMenu.classList.toggle('active');
    });

    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            hamburger.classList.remove('active');
            navMenu.classList.remove('active');
        });
    });

    // Header Scroll Effect
    const header = document.querySelector('header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('header-scrolled');
        } else {
            header.classList.remove('header-scrolled');
        }
    });

    // Carousel
    const carouselItems = document.querySelectorAll('.carousel-item');
    const indicators = document.querySelectorAll('.carousel-indicators .indicator');
    let currentIndex = 0;

    function showSlide(index) {
        if (index >= carouselItems.length) index = 0;
        if (index < 0) index = carouselItems.length - 1;
        carouselItems.forEach(item => item.classList.remove('active'));
        indicators.forEach(ind => ind.classList.remove('active'));
        carouselItems[index].classList.add('active');
        indicators[index].classList.add('active');
        currentIndex = index;
    }

    function nextSlide() {
        showSlide(currentIndex + 1);
    }

    indicators.forEach((indicator, i) => {
        indicator.addEventListener('click', () => {
            showSlide(i);
        });
    });

    let carouselInterval = setInterval(nextSlide, 5000);

    const carousel = document.querySelector('.carousel');
    carousel.addEventListener('mouseenter', () => clearInterval(carouselInterval));
    carousel.addEventListener('mouseleave', () => {
        carouselInterval = setInterval(nextSlide, 5000);
    });

    // Scroll Animations
    const animateElements = document.querySelectorAll('.animate-on-scroll');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            }
        });
    }, { threshold: 0.2 });

    animateElements.forEach(element => observer.observe(element));

    // Scroll to Top
    const scrollTopBtn = document.querySelector('.scroll-top');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            scrollTopBtn.classList.add('show');
        } else {
            scrollTopBtn.classList.remove('show');
        }
    });

    scrollTopBtn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // Dynamic Background Animation
    const animatedBg = document.querySelector('.animated-bg');
    const circles = animatedBg.querySelectorAll('.circle');
    const squares = animatedBg.querySelectorAll('.square');

    function animateBackground() {
        circles.forEach((circle, index) => {
            circle.style.transform = `translateY(${Math.sin(Date.now() / 1000 + index) * 50}px)`;
        });
        squares.forEach((square, index) => {
            square.style.transform = `translateX(${Math.cos(Date.now() / 1200 + index) * 30}px) rotate(45deg)`;
        });
        requestAnimationFrame(animateBackground);
    }

    animateBackground();
</script>
<script>
    // Dropdown Toggle
    document.addEventListener('DOMContentLoaded', () => {
        const dropdownToggle = document.querySelector('.dropdown-toggle');
        const dropdownMenu = document.querySelector('.dropdown-menu');

        dropdownToggle?.addEventListener('click', () => {
            dropdownMenu.classList.toggle('show');
            dropdownToggle.classList.toggle('active');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!dropdownToggle.contains(e.target) && !dropdownMenu.contains(e.target)) {
                dropdownMenu.classList.remove('show');
                dropdownToggle.classList.remove('active');
            }
        });
        const galleryItems = document.querySelectorAll('.gallery-item');
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('show');
                    }
                });
            },
            { threshold: 0.2 }
        );

        galleryItems.forEach((item) => observer.observe(item));

        // Touch support for mobile
        let startX = 0;
        let currentTranslate = 0;
        let isDragging = false;

        const galleryTrack = document.querySelector('.gallery-track');
        if (window.innerWidth <= 992) {
            galleryTrack.addEventListener('touchstart', (e) => {
                startX = e.touches[0].clientX;
                isDragging = true;
                galleryTrack.style.transition = 'none';
            });

            galleryTrack.addEventListener('touchmove', (e) => {
                if (!isDragging) return;
                const currentX = e.touches[0].clientX;
                const diffX = currentX - startX;
                galleryTrack.style.transform = `translateX(${currentTranslate + diffX}px)`;
            });

            galleryTrack.addEventListener('touchend', () => {
                isDragging = false;
                currentTranslate = parseFloat(getComputedStyle(galleryTrack).transform.split(',')[4]) || 0;
                galleryTrack.style.transition = 'transform 0.3s ease';
            });
        }
    });
</script>

     <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Non Government Organization",
      "name": "Gold symbolizes wealth and resources. Our name reflects our commitment to building an African society that protects and leverages its resources for the benefit of all",
      
      "url": "https://www.africaingoldinitiative.or.tz",
      "logo": "https://https://www.africaingoldinitiative.or.tz/Logo/Africa_in_Gold_Initiative_Logo2.png",
      "description": "Gold symbolizes wealth and resources. Our name reflects our commitment to building an African society that protects and leverages its resources for the benefit of all.",
      "sameAs": [
       "https://x.com/Africa_inGold",
        "https://www.instagram.com/africaingoldinitiative?igsh=MThlc282dmV6NWp6aA==",
        "https://www.linkedin.com/company/africa-in-gold-initiative/",
        "https://youtube.com/@aig7187?si=MxIYgeqKsfqPFUAg"
      ]
    }
    </script>

</html>