<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeYES - Yes to Better Home</title>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* ============================================
           HOMEYES - COMPLETE STYLESHEET
           ============================================ */
        
        /* === RESET & BASE === */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary-purple: #5B21B6;
            --secondary-purple: #7C3AED;
            --primary-orange: #F59E0B;
            --secondary-orange: #FB923C;
            --dark: #1F2937;
            --gray: #6B7280;
            --light-gray: #F3F4F6;
            --white: #FFFFFF;
            --shadow: 0 4px 6px rgba(91, 33, 182, 0.1);
            --shadow-lg: 0 10px 25px rgba(91, 33, 182, 0.15);
            --transition: all 0.3s ease;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--dark);
            overflow-x: hidden;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* === HEADER & NAVIGATION === */
        .header-top {
            background: linear-gradient(135deg, var(--primary-purple), var(--secondary-purple));
            color: var(--white);
            padding: 10px 0;
            font-size: 14px;
        }
        
        .header-top .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
        
        .contact-info {
            display: flex;
            gap: 25px;
            flex-wrap: wrap;
        }
        
        .contact-info span {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .social-links {
            display: flex;
            gap: 10px;
        }
        
        .social-links a {
            width: 30px;
            height: 30px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            transition: var(--transition);
            text-decoration: none;
        }
        
        .social-links a:hover {
            background: var(--primary-orange);
            transform: translateY(-2px);
        }
        
        /* Main Navigation */
        .main-nav {
            background: var(--white);
            box-shadow: var(--shadow);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 24px;
            font-weight: bold;
            color: var(--primary-purple);
            text-decoration: none;
        }
        
        .logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary-purple), var(--secondary-purple));
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
        }
        
        .nav-menu {
            display: flex;
            list-style: none;
            gap: 30px;
            align-items: center;
        }
        
        .nav-menu a {
            color: var(--dark);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            position: relative;
        }
        
        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-orange);
            transition: var(--transition);
        }
        
        .nav-menu a:hover::after {
            width: 100%;
        }
        
        .nav-menu a:hover {
            color: var(--primary-purple);
        }
        
        .cta-button {
            background: linear-gradient(135deg, var(--primary-orange), var(--secondary-orange));
            color: var(--white);
            padding: 10px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            box-shadow: var(--shadow);
        }
        
        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }
        
        .menu-toggle {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
        }
        
        .menu-toggle span {
            width: 25px;
            height: 3px;
            background: var(--primary-purple);
            transition: var(--transition);
        }
        
        /* === HERO SECTION === */
        .hero {
            position: relative;
            min-height: 600px;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, rgba(91, 33, 182, 0.95), rgba(124, 58, 237, 0.9)),
                        url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%235B21B6" width="1200" height="600"/><path fill="%237C3AED" opacity="0.3" d="M0,300 Q300,150 600,300 T1200,300 L1200,600 L0,600 Z"/></svg>') center/cover;
            color: var(--white);
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, 
                transparent 30%, 
                rgba(245, 158, 11, 0.1) 50%, 
                transparent 70%);
            animation: shimmer 3s infinite;
        }
        
        @keyframes shimmer {
            0%, 100% { transform: translateX(-100%); }
            50% { transform: translateX(100%); }
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 600px;
        }
        
        .hero-badge {
            display: inline-block;
            background: rgba(245, 158, 11, 0.2);
            color: var(--primary-orange);
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 20px;
            border: 2px solid var(--primary-orange);
        }
        
        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .hero h1 .highlight {
            color: var(--primary-orange);
            position: relative;
            display: inline-block;
        }
        
        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
            opacity: 0.95;
        }
        
        .hero-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary-orange), var(--secondary-orange));
            color: var(--white);
            padding: 15px 35px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            box-shadow: var(--shadow-lg);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .btn-secondary {
            background: var(--white);
            color: var(--primary-purple);
            padding: 15px 35px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .btn-primary:hover,
        .btn-secondary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .hero-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
            backdrop-filter: blur(5px);
        }
        
        .hero-nav:hover {
            background: var(--primary-orange);
        }
        
        .hero-nav.prev { left: 30px; }
        .hero-nav.next { right: 30px; }
        
        /* === FEATURES SECTION === */
        .features {
            padding: 80px 0;
            background: var(--light-gray);
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .section-badge {
            display: inline-block;
            background: var(--primary-purple);
            color: var(--white);
            padding: 6px 15px;
            border-radius: 15px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        .section-title h2 {
            font-size: 36px;
            color: var(--dark);
            margin-bottom: 10px;
        }
        
        .section-title h2 .highlight {
            color: var(--primary-orange);
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .feature-card {
            background: var(--white);
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }
        
        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-purple), var(--primary-orange));
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }
        
        .feature-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary-purple), var(--secondary-purple));
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            color: var(--white);
            font-size: 30px;
        }
        
        .feature-card h3 {
            font-size: 22px;
            margin-bottom: 15px;
            color: var(--primary-purple);
        }
        
        .feature-card p {
            color: var(--gray);
            line-height: 1.7;
        }
        
        /* === ABOUT SECTION === */
        .about {
            padding: 80px 0;
        }
        
        .about-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }
        
        .about-images {
            position: relative;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        .about-image {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow);
            height: 250px;
            background: linear-gradient(135deg, var(--primary-purple), var(--secondary-purple));
        }
        
        .about-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .about-image:hover img {
            transform: scale(1.05);
        }
        
        .about-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            background: linear-gradient(135deg, var(--primary-orange), var(--secondary-orange));
            color: var(--white);
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            box-shadow: var(--shadow-lg);
        }
        
        .about-badge .number {
            font-size: 36px;
            font-weight: bold;
            display: block;
        }
        
        .about-badge .text {
            font-size: 14px;
            display: block;
        }
        
        .about-content h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: var(--dark);
        }
        
        .about-content h2 .highlight {
            color: var(--primary-orange);
        }
        
        .about-content > p {
            color: var(--gray);
            margin-bottom: 30px;
            line-height: 1.8;
        }
        
        .about-features {
            margin-bottom: 30px;
        }
        
        .about-feature {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }
        
        .about-feature-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary-purple), var(--secondary-purple));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            flex-shrink: 0;
        }
        
        .about-feature-content h4 {
            font-size: 18px;
            margin-bottom: 5px;
            color: var(--primary-purple);
        }
        
        .about-feature-content p {
            color: var(--gray);
            font-size: 14px;
        }
        
        /* === SERVICES SECTION === */
        .services {
            padding: 80px 0;
            background: var(--light-gray);
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .service-card {
            background: var(--white);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }
        
        .service-image {
            height: 200px;
            overflow: hidden;
            position: relative;
            background: linear-gradient(135deg, var(--primary-purple), var(--secondary-purple));
        }
        
        .service-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .service-card:hover .service-image img {
            transform: scale(1.1);
        }
        
        .service-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(91, 33, 182, 0.8), rgba(124, 58, 237, 0.8));
            opacity: 0;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 48px;
        }
        
        .service-card:hover .service-overlay {
            opacity: 1;
        }
        
        .service-content {
            padding: 30px;
        }
        
        .service-content h3 {
            font-size: 22px;
            margin-bottom: 15px;
            color: var(--primary-purple);
        }
        
        .service-content p {
            color: var(--gray);
            margin-bottom: 20px;
            line-height: 1.7;
        }
        
        .service-link {
            color: var(--primary-orange);
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: var(--transition);
        }
        
        .service-link:hover {
            gap: 10px;
        }
        
        /* === FOOTER === */
        .footer {
            background: linear-gradient(135deg, var(--primary-purple), var(--secondary-purple));
            color: var(--white);
            padding: 60px 0 20px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-section h3 {
            margin-bottom: 20px;
            font-size: 20px;
        }
        
        .footer-section p,
        .footer-section ul {
            opacity: 0.9;
            line-height: 1.8;
        }
        
        .footer-section ul {
            list-style: none;
        }
        
        .footer-section ul li {
            margin-bottom: 10px;
        }
        
        .footer-section ul li a {
            color: var(--white);
            text-decoration: none;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .footer-section ul li a:hover {
            color: var(--primary-orange);
            padding-left: 5px;
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding-top: 20px;
            text-align: center;
            opacity: 0.8;
        }
        
        /* === BACK TO TOP === */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary-orange), var(--secondary-orange));
            color: white;
            border: none;
            border-radius: 50%;
            font-size: 24px;
            cursor: pointer;
            display: none;
            box-shadow: var(--shadow);
            z-index: 999;
            transition: var(--transition);
        }
        
        .back-to-top:hover {
            transform: translateY(-5px);
        }
        
        /* === UTILITY === */
        .mt-20 { margin-top: 20px; }
        .fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* === RESPONSIVE === */
        @media (max-width: 768px) {
            .header-top .container {
                flex-direction: column;
                gap: 10px;
            }
            
            .menu-toggle {
                display: flex;
            }
            
            .nav-menu {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: var(--white);
                flex-direction: column;
                padding: 20px;
                box-shadow: var(--shadow);
                display: none;
            }
            
            .nav-menu.active {
                display: flex;
            }
            
            .hero h1 {
                font-size: 32px;
            }
            
            .about-container {
                grid-template-columns: 1fr;
            }
            
            .about-images {
                order: 2;
            }
            
            .section-title h2 {
                font-size: 28px;
            }
            
            .hero-nav {
                display: none;
            }
        }
    </style>
</head>
<body>
    
    <!-- HEADER TOP -->
    <div class="header-top">
        <div class="container">
            <div class="contact-info">
                <span><i class="fas fa-phone"></i> +62 123 456 7890</span>
                <span><i class="fas fa-envelope"></i> info@homeyes.com</span>
                <span><i class="fas fa-clock"></i> Senin - Jumat (08:00 - 16:00)</span>
            </div>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
    
    <!-- MAIN NAVIGATION -->
    <nav class="main-nav">
        <div class="container nav-container">
            <a href="#" class="logo">
                <div class="logo-icon">
                    <i class="fas fa-home"></i>
                </div>
                <span>HomeYES</span>
            </a>
            
            <ul class="nav-menu">
                <li><a href="#">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#services">Layanan</a></li>
                <li><a href="#gallery">Galeri</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Kontak</a></li>
                <li><a href="#consultation" class="cta-button">Konsultasi Gratis</a></li>
            </ul>
            
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
    
    <!-- HERO SECTION -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <span class="hero-badge">MITRA TERPERCAYA ANDA</span>
                <h1>
                    Rumah Impian & <br>
                    <span class="highlight">Renovasi</span> Profesional
                </h1>
                <p>
                    Wujudkan rumah impian Anda bersama tim profesional kami. 
                    Kami menyediakan layanan lengkap dari konsultasi, desain, hingga pembangunan.
                </p>
                <div class="hero-buttons">
                    <a href="#services" class="btn-primary">
                        Lihat Layanan <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="#about" class="btn-secondary">
                        Tentang Kami <i class="fas fa-info-circle"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="hero-nav prev">
            <i class="fas fa-chevron-left"></i>
        </div>
        <div class="hero-nav next">
            <i class="fas fa-chevron-right"></i>
        </div>
    </section>
    
    <!-- FEATURES SECTION -->
    <section class="features">
        <div class="container">
            <div class="section-title">
                <span class="section-badge">KEUNGGULAN KAMI</span>
                <h2>Kenapa Memilih <span class="highlight">HomeYES</span>?</h2>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Tim Profesional Berpengalaman</h3>
                    <p>
                        Didukung oleh tim ahli dengan pengalaman lebih dari 10 tahun 
                        di bidang konstruksi dan renovasi rumah.
                    </p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Layanan Lengkap & Terpadu</h3>
                    <p>
                        Dari konsultasi, desain, pembangunan, hingga finishing. 
                        Semua kebutuhan rumah Anda dalam satu tempat.
                    </p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Garansi 100% Kepuasan</h3>
                    <p>
                        Kami menjamin kualitas pekerjaan terbaik dengan garansi 
                        kepuasan pelanggan dan after-sales service.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ABOUT SECTION -->
    <section class="about" id="about">
        <div class="container">
            <div class="about-container">
                <div class="about-images">
                    <div class="about-badge">
                        <span class="number" data-target="25">0+</span>
                        <span class="text">Tahun Pengalaman</span>
                    </div>
                    <div class="about-image">
                        <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;color:white;font-size:60px;">
                            <i class="fas fa-building"></i>
                        </div>
                    </div>
                    <div class="about-image">
                        <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;color:white;font-size:60px;">
                            <i class="fas fa-hammer"></i>
                        </div>
                    </div>
                </div>
                
                <div class="about-content">
                    <span class="section-badge">TENTANG KAMI</span>
                    <h2>Kami Menyediakan <span class="highlight">Layanan Berkualitas</span></h2>
                    <p>
                        HomeYES adalah perusahaan konstruksi dan renovasi rumah terpercaya 
                        yang telah melayani ribuan klien di seluruh Indonesia. Dengan komitmen 
                        pada kualitas dan kepuasan pelanggan, kami siap mewujudkan rumah impian Anda.
                    </p>
                    
                    <div class="about-features">
                        <div class="about-feature">
                            <div class="about-feature-icon">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <div class="about-feature-content">
                                <h4>Harga Terjangkau</h4>
                                <p>Paket layanan dengan harga kompetitif dan transparan tanpa biaya tersembunyi.</p>
                            </div>
                        </div>
                        
                        <div class="about-feature">
                            <div class="about-feature-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div class="about-feature-content">
                                <h4>Konsultasi Gratis</h4>
                                <p>Dapatkan konsultasi gratis dari ahli kami untuk menentukan solusi terbaik.</p>
                            </div>
                        </div>
                    </div>
                    
                    <a href="#contact" class="btn-primary mt-20">
                        Selengkapnya <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- SERVICES SECTION -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-title">
                <span class="section-badge">LAYANAN KAMI</span>
                <h2>Layanan <span class="highlight">Terbaik</span> untuk Anda</h2>
            </div>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-image">
                        <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;color:white;font-size:60px;">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="service-overlay">
                            <i class="fas fa-home"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Pembangunan Rumah</h3>
                        <p>Jasa pembangunan rumah baru dari nol dengan desain custom sesuai keinginan dan budget Anda.</p>
                        <a href="#" class="service-link">
                            Pelajari Lebih Lanjut <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <div class="service-card">
                    <div class="service-image">
                        <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;color:white;font-size:60px;">
                            <i class="fas fa-paint-roller"></i>
                        </div>
                        <div class="service-overlay">
                            <i class="fas fa-paint-roller"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Renovasi & Remodeling</h3>
                        <p>Ubah tampilan rumah lama Anda menjadi lebih modern dan fungsional dengan layanan renovasi profesional.</p>
                        <a href="#" class="service-link">
                            Pelajari Lebih Lanjut <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <div class="service-card">
                    <div class="service-image">
                        <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;color:white;font-size:60px;">
                            <i class="fas fa-pencil-ruler"></i>
                        </div>
                        <div class="service-overlay">
                            <i class="fas fa-pencil-ruler"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Desain Interior</h3>
                        <p>Ciptakan ruangan impian dengan desain interior yang elegan, nyaman, dan sesuai dengan gaya hidup Anda.</p>
                        <a href="#" class="service-link">
                            Pelajari Lebih Lanjut <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <div class="service-card">
                    <div class="service-image">
                        <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;color:white;font-size:60px;">
                            <i class="fas fa-hard-hat"></i>
                        </div>
                        <div class="service-overlay">
                            <i class="fas fa-hard-hat"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Konsultan Konstruksi</h3>
                        <p>Dapatkan saran ahli mengenai perencanaan, estimasi biaya, dan manajemen proyek konstruksi Anda.</p>
                        <a href="#" class="service-link">
                            Pelajari Lebih Lanjut <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <div class="service-card">
                    <div class="service-image">
                        <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;color:white;font-size:60px;">
                            <i class="fas fa-wrench"></i>
                        </div>
                        <div class="service-overlay">
                            <i class="fas fa-wrench"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Perbaikan & Maintenance</h3>
                        <p>Layanan perbaikan dan perawatan rutin untuk menjaga rumah Anda tetap dalam kondisi prima.</p>
                        <a href="#" class="service-link">
                            Pelajari Lebih Lanjut <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <div class="service-card">
                    <div class="service-image">
                        <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;color:white;font-size:60px;">
                            <i class="fas fa-tree"></i>
                        </div>
                        <div class="service-overlay">
                            <i class="fas fa-tree"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3>Landscaping</h3>
                        <p>Desain dan pembuatan taman yang indah untuk mempercantik halaman rumah Anda.</p>
                        <a href="#" class="service-link">
                            Pelajari Lebih Lanjut <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>
                        <i class="fas fa-home"></i> HomeYES
                    </h3>
                    <p>
                        Mitra terpercaya untuk mewujudkan rumah impian Anda. 
                        Dengan pengalaman puluhan tahun, kami siap memberikan 
                        layanan terbaik untuk kebutuhan konstruksi dan renovasi.
                    </p>
                    <div class="social-links" style="margin-top: 20px;">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h3>Layanan Kami</h3>
                    <ul>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Pembangunan Rumah</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Renovasi & Remodeling</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Desain Interior</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Konsultan Konstruksi</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Perbaikan & Maintenance</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Link Cepat</h3>
                    <ul>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Tentang Kami</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Portfolio</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Blog & Artikel</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Testimoni</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Hubungi Kami</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Kontak Kami</h3>
                    <ul style="list-style: none;">
                        <li style="margin-bottom: 15px;">
                            <i class="fas fa-map-marker-alt"></i> 
                            Jl. Konstruksi No. 123<br>Jakarta Selatan 12345
                        </li>
                        <li style="margin-bottom: 15px;">
                            <i class="fas fa-phone"></i> 
                            +62 123 456 7890
                        </li>
                        <li style="margin-bottom: 15px;">
                            <i class="fas fa-envelope"></i> 
                            info@homeyes.com
                        </li>
                        <li>
                            <i class="fas fa-clock"></i> 
                            Senin - Jumat: 08:00 - 16:00
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2024 HomeYES. All Rights Reserved. | Designed with <i class="fas fa-heart" style="color: var(--primary-orange);"></i> by HomeYES Team</p>
            </div>
        </div>
    </footer>
    
    <!-- BACK TO TOP BUTTON -->
    <button class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </button>
    
    <script>
        // Menu Toggle
        const menuToggle = document.querySelector('.menu-toggle');
        const navMenu = document.querySelector('.nav-menu');
        
        menuToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
        
        // Back to Top Button
        const backToTop = document.getElementById('backToTop');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTop.style.display = 'flex';
            } else {
                backToTop.style.display = 'none';
            }
        });
        
        backToTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Counter Animation
        const aboutBadgeNumber = document.querySelector('.about-badge .number');
        const target = parseInt(aboutBadgeNumber.getAttribute('data-target'));
        let count = 0;
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const interval = setInterval(() => {
                        count++;
                        aboutBadgeNumber.textContent = count + '+';
                        if (count >= target) {
                            clearInterval(interval);
                        }
                    }, 50);
                    observer.unobserve(entry.target);
                }
            });
        });
        
        observer.observe(aboutBadgeNumber);
        
        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    navMenu.classList.remove('active');
                }
            });
        });
        
        // Fade in animation on scroll
        const fadeElements = document.querySelectorAll('.feature-card, .service-card, .about-feature');
        
        const fadeObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in-up');
                    fadeObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        fadeElements.forEach(el => fadeObserver.observe(el));
    </script>
    
</body>
</html>