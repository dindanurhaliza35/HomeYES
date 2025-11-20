<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - HomeYES</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        /* ============================================
           HOMEYES - COMPLETE STYLESHEET (DARI INPUT & MODIFIKASI)
           ============================================ */
        
        /* === RESET & BASE === */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary-purple: #5B21B6; /* Ungu Primer */
            --secondary-purple: #7C3AED; /* Ungu Sekunder */
            --primary-orange: #F59E0B; /* Oranye Primer */
            --secondary-orange: #FB923C; /* Oranye Sekunder */
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
        
        .nav-menu a:hover::after,
        .nav-menu .active-link::after { /* Tambahan untuk link aktif */
            width: 100%;
        }
        
        .nav-menu a:hover,
        .nav-menu .active-link { /* Tambahan untuk link aktif */
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
            z-index: 1001; 
        }
        
        .menu-toggle span {
            width: 25px;
            height: 3px;
            background: var(--primary-purple);
            transition: var(--transition);
        }
        
        /* Menu Toggle animation */
        .menu-toggle.active span:nth-child(1) { transform: rotate(45deg) translate(5px, 5px); }
        .menu-toggle.active span:nth-child(2) { opacity: 0; }
        .menu-toggle.active span:nth-child(3) { transform: rotate(-45deg) translate(5px, -5px); }

        /* === HERO (PAGE TITLE) SECTION === */
        .page-title-hero {
            background: linear-gradient(135deg, rgba(91, 33, 182, 0.95), rgba(124, 58, 237, 0.9));
            padding: 100px 0 50px; /* Padding atas lebih besar agar tidak tertutup nav sticky */
            color: var(--white);
            text-align: center;
        }

        .page-title-hero h1 {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .page-title-hero .breadcrumb {
            font-size: 16px;
            opacity: 0.8;
        }

        .page-title-hero .breadcrumb a {
            color: var(--primary-orange);
            text-decoration: none;
        }
        
        /* === ABOUT SECTION (Sudah ada di CSS Anda) === */
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
            grid-template-rows: auto auto; 
            gap: 20px;
            padding-top: 40px; 
        }

        .about-image:nth-child(1) {
            grid-column: 1 / 2;
            grid-row: 1 / 3;
            height: 450px; 
        }

        .about-image:nth-child(2) {
            grid-column: 2 / 3;
            grid-row: 1 / 2;
            height: 215px; 
        }

        .about-image:nth-child(3) {
            grid-column: 2 / 3;
            grid-row: 2 / 3;
            height: 215px; 
        }
        
        .about-image {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2); 
            background: var(--light-gray);
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
            top: -10px; 
            left: -10px; 
            background: linear-gradient(135deg, var(--primary-orange), var(--secondary-orange));
            color: var(--white);
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            box-shadow: var(--shadow-lg);
            width: 140px; 
            height: 140px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 4px solid var(--white); 
            z-index: 10;
        }
        
        .about-badge .number {
            font-size: 36px;
            font-weight: bold;
            display: block;
        }
        
        .about-badge .text {
            font-size: 14px;
            display: block;
            line-height: 1.2;
        }
        
        .about-content .section-badge {
            margin-left: 0;
            background: var(--primary-orange);
        }

        .about-content h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: var(--dark);
            font-weight: 800;
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
            font-size: 24px;
        }
        
        .about-feature-content h4 {
            font-size: 18px;
            margin-bottom: 5px;
            color: var(--primary-purple);
            font-weight: 600;
        }
        
        .about-feature-content p {
            color: var(--gray);
            font-size: 14px;
        }

        /* === NEW: Visi Misi Section === */
        .vision-mission {
            padding: 60px 0;
            background: var(--white);
        }
        .vm-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }
        .vm-card {
            padding: 30px;
            border-radius: 15px;
            border: 1px solid var(--light-gray);
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        .vm-card:hover {
            box-shadow: var(--shadow-lg);
            border-color: var(--primary-purple);
        }
        .vm-card h3 {
            font-size: 24px;
            color: var(--primary-purple);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 700;
        }
        .vm-card i {
            color: var(--primary-orange);
        }

        /* === NEW: Trust Metrics Section === */
        .trust-metrics {
            padding: 60px 0;
            background: var(--primary-purple);
            color: var(--white);
            text-align: center;
        }
        .metrics-grid {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 30px;
        }
        .metric-item {
            padding: 20px;
            text-align: center;
        }
        .metric-item .number {
            font-size: 48px;
            font-weight: 800;
            color: var(--primary-orange);
            line-height: 1;
            margin-bottom: 5px;
        }
        .metric-item .text {
            font-size: 18px;
            opacity: 0.9;
        }

        /* === NEW: Team Section === */
        .team {
            padding: 80px 0;
            background: var(--light-gray);
        }
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        .team-member-card {
            background: var(--white);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow);
            text-align: center;
            transition: var(--transition);
        }
        .team-member-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }
        .team-photo {
            height: 250px;
            background: var(--secondary-purple);
            overflow: hidden;
        }
        .team-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        .team-member-card:hover .team-photo img {
             transform: scale(1.05);
        }
        .team-info {
            padding: 20px;
        }
        .team-info h4 {
            font-size: 20px;
            color: var(--primary-purple);
            margin-bottom: 5px;
        }
        .team-info p {
            color: var(--primary-orange);
            font-weight: 600;
            margin-bottom: 15px;
        }
        .team-social a {
            color: var(--gray);
            margin: 0 5px;
            transition: var(--transition);
        }
        .team-social a:hover {
            color: var(--primary-purple);
        }
        
        /* === FOOTER (Sudah ada di CSS Anda) === */
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
        
        /* === BACK TO TOP (Sudah ada di CSS Anda) === */
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
            line-height: 50px;
            text-align: center;
        }
        
        .back-to-top:hover {
            transform: translateY(-5px);
        }
        
        /* === UTILITY & RESPONSIVE (Sudah ada di CSS Anda) === */
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
        
        @media (max-width: 992px) {
            .about-container {
                grid-template-columns: 1fr;
            }
            
            .about-images {
                order: 2;
                padding-top: 80px; 
            }

            .about-image:nth-child(1) {
                height: 350px;
            }

            .about-image:nth-child(2),
            .about-image:nth-child(3) {
                height: 160px;
            }

            .about-badge {
                top: 20px;
                left: 50%;
                transform: translateX(-50%); 
            }
        }

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
            
            .page-title-hero h1 {
                font-size: 32px;
            }

            .section-title h2 {
                font-size: 28px;
            }

            .about-images {
                grid-template-columns: 1fr; 
            }

            .about-image:nth-child(1),
            .about-image:nth-child(2),
            .about-image:nth-child(3) {
                grid-column: 1 / 2;
                grid-row: auto;
                height: 200px;
            }
            
            .about-content h2 {
                font-size: 30px;
            }
            
            .metrics-grid {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

    <header class="header-top">
        <div class="container">
            <div class="contact-info">
                <span><i class="fas fa-phone-alt"></i> +123 456 7890</span>
                <span><i class="fas fa-envelope"></i> info@homeyes.com</span>
                <span><i class="fas fa-clock"></i> Sen - Jum (09AM - 06PM)</span>
            </div>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </header>

    <nav class="main-nav">
        <div class="container nav-container">
            <a href="index.html" class="logo">
                <div class="logo-icon"><i class="fas fa-home"></i></div>
                Home<span style="color: var(--primary-orange);">YES</span>
            </a>
            
            <ul class="nav-menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="#" class="active-link">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#" class="cta-button">Get A Quote</a></li>
            </ul>

            <div class="menu-toggle" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
    
    <section class="page-title-hero">
        <div class="container fade-in-up">
            <h1>Tentang Kami</h1>
            <div class="breadcrumb">
                <a href="index.html">Home</a> / <span>About Us</span>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="container about-container">
            
            <div class="about-content fade-in-up">
                <span class="section-badge">ABOUT HOMEYES</span>
                <h2>
                    We Provide Quality <span class="highlight">Home Services</span>
                </h2>
                
                <p>
                    Kami hadir untuk mengubah rumah Anda menjadi rumah yang lebih baik. Dengan fokus pada profesionalisme dan kepuasan pelanggan, **HomeYES** siap menjadi mitra terpercaya Anda untuk semua kebutuhan perawatan rumah. Kami memastikan setiap pekerjaan dilakukan dengan standar tertinggi.
                </p>

                <div class="about-features">
                    <div class="about-feature">
                        <div class="about-feature-icon">
                            <i class="fas fa-wallet"></i> 
                        </div>
                        <div class="about-feature-content">
                            <h4>Our Affordable Price</h4>
                            <p>Layanan berkualitas tinggi dengan harga yang kompetitif dan transparan tanpa biaya tersembunyi.</p>
                        </div>
                    </div>

                    <div class="about-feature">
                        <div class="about-feature-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="about-feature-content">
                            <h4>Trusted Service Team</h4>
                            <p>Didukung oleh tim profesional dan berpengalaman, kami memastikan hasil kerja yang aman dan memuaskan.</p>
                        </div>
                    </div>
                </div>

                <a href="services.html" class="btn-primary" style="padding: 12px 30px;">
                    Cek Layanan Kami <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="about-images">
                <div class="about-image fade-in-up" style="animation-delay: 0.1s;">
                    <img src="https://images.unsplash.com/photo-1596541221715-e2ff01c238b9?q=80&w=1934&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Teknisi Bekerja" />
                </div>
                
                <div class="about-image fade-in-up" style="animation-delay: 0.2s;">
                    <img src="https://images.unsplash.com/photo-1627798367980-0cc3c5d8093d?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Perbaikan Listrik" />
                </div>

                <div class="about-image fade-in-up" style="animation-delay: 0.3s;">
                    <img src="https://images.unsplash.com/photo-1582268611958-ab50592be629?q=80&w=1980&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Perbaikan Pipa" />
                </div>
                
                <div class="about-badge fade-in-up" style="animation-delay: 0.4s;">
                    <span class="number">10+</span>
                    <span class="text">Years of Experience</span>
                </div>
            </div>

        </div>
    </section>

    <section class="vision-mission">
        <div class="container">
            <div class="section-title fade-in-up">
                <span class="section-badge" style="background: var(--primary-orange);">COMPANY VALUES</span>
                <h2>
                    Visi, Misi, dan <span class="highlight">Nilai Inti</span> Kami
                </h2>
                <p style="color: var(--gray);">Panduan kami dalam melayani dan membangun kepercayaan Anda.</p>
            </div>
            
            <div class="vm-grid">
                <div class="vm-card fade-in-up" style="animation-delay: 0.1s;">
                    <h3><i class="fas fa-eye"></i> Visi Kami</h3>
                    <p style="color: var(--gray);">Menjadi penyedia solusi layanan rumah terbaik dan terpercaya di seluruh Indonesia, yang dikenal karena kualitas, inovasi, dan komitmen total terhadap kepuasan pelanggan.</p>
                </div>
                
                <div class="vm-card fade-in-up" style="animation-delay: 0.2s;">
                    <h3><i class="fas fa-bullseye"></i> Misi Kami</h3>
                    <p style="color: var(--gray);">Menyediakan layanan perbaikan dan pemeliharaan rumah yang cepat, efisien, transparan, dan selalu didukung oleh teknisi yang terlatih dan teknologi terkini.</p>
                </div>

                <div class="vm-card fade-in-up" style="animation-delay: 0.3s;">
                    <h3><i class="fas fa-heart"></i> Nilai Inti</h3>
                    <p style="color: var(--gray);">**Integritas** (Bertindak jujur), **Profesionalisme** (Kualitas kerja terbaik), dan **Berorientasi Pelanggan** (Mengutamakan kebutuhan Anda).</p>
                </div>
            </div>
        </div>
    </section>

    <section class="trust-metrics">
        <div class="container">
            <div class="metrics-grid">
                <div class="metric-item fade-in-up" style="animation-delay: 0.1s;">
                    <span class="number">98%</span>
                    <span class="text">Tingkat Kepuasan Pelanggan</span>
                </div>
                <div class="metric-item fade-in-up" style="animation-delay: 0.2s;">
                    <span class="number">2.5K+</span>
                    <span class="text">Proyek Berhasil Diselesaikan</span>
                </div>
                <div class="metric-item fade-in-up" style="animation-delay: 0.3s;">
                    <span class="number">50+</span>
                    <span class="text">Teknisi Tersertifikasi Penuh</span>
                </div>
                <div class="metric-item fade-in-up" style="animation-delay: 0.4s;">
                    <span class="number">5</span>
                    <span class="text">Kota Layanan Utama</span>
                </div>
            </div>
        </div>
    </section>

    <section class="team">
        <div class="container">
            <div class="section-title fade-in-up">
                <span class="section-badge">OUR TEAM</span>
                <h2>
                    Kenalan dengan <span class="highlight">Tim Ahli</span> Kami
                </h2>
                <p style="color: var(--gray);">Profesional di balik setiap layanan rumah terbaik yang Anda terima.</p>
            </div>
            
            <div class="team-grid">
                <div class="team-member-card fade-in-up" style="animation-delay: 0.1s;">
                    <div class="team-photo">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=1976&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="CEO Photo">
                    </div>
                    <div class="team-info">
                        <h4>Ahmad Rizky</h4>
                        <p>CEO & Founder</p>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-member-card fade-in-up" style="animation-delay: 0.2s;">
                    <div class="team-photo">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734b584?q=80&w=1976&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="COO Photo">
                    </div>
                    <div class="team-info">
                        <h4>Sari Dewi</h4>
                        <p>Chief Operating Officer</p>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-member-card fade-in-up" style="animation-delay: 0.3s;">
                    <div class="team-photo">
                        <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Lead Technician Photo">
                    </div>
                    <div class="team-info">
                        <h4>Bambang Sutrisno</h4>
                        <p>Lead Technician</p>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-member-card fade-in-up" style="animation-delay: 0.4s;">
                    <div class="team-photo">
                        <img src="https://images.unsplash.com/photo-1542157152-4464c6146051?q=80&w=1976&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Customer Service Manager Photo">
                    </div>
                    <div class="team-info">
                        <h4>Maya Anggraini</h4>
                        <p>Customer Service Manager</p>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                
                <div class="footer-section">
                    <a href="#" class="logo" style="color: var(--white); margin-bottom: 20px;">
                        <div class="logo-icon"><i class="fas fa-home"></i></div>
                        Home<span style="color: var(--primary-orange);">YES</span>
                    </a>
                    <p>Meningkatkan kualitas hidup Anda melalui layanan perbaikan rumah yang andal dan profesional.</p>
                    <div class="social-links mt-20" style="gap: 15px;">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#about"><i class="fas fa-angle-right"></i> About Us</a></li>
                        <li><a href="services.html"><i class="fas fa-angle-right"></i> Our Services</a></li>
                        <li><a href="#"><i class="fas fa-angle-right"></i> Careers</a></li>
                        <li><a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3>Contact Info</h3>
                    <p><i class="fas fa-map-marker-alt" style="color: var(--primary-orange);"></i> Jl. Contoh No. 123, Jakarta, Indonesia</p>
                    <p><i class="fas fa-phone-alt" style="color: var(--primary-orange);"></i> +123 456 7890</p>
                    <p><i class="fas fa-envelope" style="color: var(--primary-orange);"></i> info@homeyes.com</p>
                </div>

            </div>
            
            <div class="footer-bottom">
                &copy; 2025 HomeYES. All Rights Reserved.
            </div>
        </div>
    </footer>

    <button class="back-to-top" id="backToTopBtn">
        <i class="fas fa-arrow-up"></i>
    </button>


    <script>
        // JS untuk Toggle Menu Mobile
        document.getElementById('menuToggle').addEventListener('click', function() {
            const navMenu = document.querySelector('.nav-menu');
            this.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // JS untuk Back to Top Button
        const backToTopBtn = document.getElementById('backToTopBtn');

        // Tampilkan tombol ketika user scroll ke bawah 100px
        window.onscroll = function() {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                backToTopBtn.style.display = "block";
            } else {
                backToTopBtn.style.display = "none";
            }
        };

        // Scroll ke atas saat tombol diklik
        backToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // JS untuk menghilangkan menu setelah klik di mode mobile
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                const navMenu = document.querySelector('.nav-menu');
                const menuToggle = document.getElementById('menuToggle');
                if (window.innerWidth <= 768 && navMenu.classList.contains('active')) {
                    navMenu.classList.remove('active');
                    menuToggle.classList.remove('active');
                }
            });
        });

    </script>
</body>
</html>