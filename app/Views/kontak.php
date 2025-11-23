<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - HomeYES</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
    /* ============================================
           HOMEYES - CORE STYLES (Diambil dari homeyes.php)
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
        background-color: var(--light-gray);
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* === HEADER & NAVIGATION (Sama persis) === */
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

    /* === FOOTER (Sama persis) === */
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

    /* ============================================
           PAGE SPECIFIC STYLES (CONTACT PAGE)
           ============================================ */

    /* Page Header - Versi mini dari Hero Section */
    .page-header {
        position: relative;
        background: linear-gradient(135deg, rgba(91, 33, 182, 0.95), rgba(124, 58, 237, 0.9)),
            url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%235B21B6" width="1200" height="600"/><path fill="%237C3AED" opacity="0.3" d="M0,300 Q300,150 600,300 T1200,300 L1200,600 L0,600 Z"/></svg>') center/cover;
        padding: 100px 0 60px;
        color: var(--white);
        text-align: center;
        margin-bottom: 60px;
    }

    .page-header h1 {
        font-size: 42px;
        margin-bottom: 10px;
    }

    .page-header p {
        font-size: 18px;
        opacity: 0.9;
        max-width: 600px;
        margin: 0 auto;
    }

    .breadcrumb {
        margin-top: 15px;
        font-size: 14px;
        opacity: 0.8;
    }

    .breadcrumb a {
        color: var(--white);
        text-decoration: none;
    }

    .breadcrumb span {
        margin: 0 5px;
    }

    /* Contact Layout */
    .contact-section {
        padding-bottom: 80px;
    }

    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 2fr;
        gap: 40px;
    }

    /* Info Card Styles */
    .contact-info-card {
        background: var(--white);
        padding: 40px;
        border-radius: 15px;
        box-shadow: var(--shadow);
        height: 100%;
    }

    .info-item {
        display: flex;
        gap: 20px;
        margin-bottom: 30px;
    }

    .info-item:last-child {
        margin-bottom: 0;
    }

    .info-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, var(--primary-purple), var(--secondary-purple));
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--white);
        font-size: 20px;
        flex-shrink: 0;
    }

    .info-content h4 {
        color: var(--primary-purple);
        font-size: 18px;
        margin-bottom: 5px;
    }

    .info-content p {
        color: var(--gray);
        font-size: 15px;
        line-height: 1.6;
    }

    /* Form Styles */
    .contact-form-card {
        background: var(--white);
        padding: 40px;
        border-radius: 15px;
        box-shadow: var(--shadow);
        position: relative;
        overflow: hidden;
    }

    .contact-form-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-purple), var(--primary-orange));
    }

    .form-title {
        margin-bottom: 30px;
    }

    .form-title h3 {
        font-size: 28px;
        margin-bottom: 10px;
    }

    .form-title p {
        color: var(--gray);
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .form-label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: var(--dark);
        font-size: 14px;
    }

    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #E5E7EB;
        border-radius: 8px;
        font-family: inherit;
        transition: var(--transition);
        background: #F9FAFB;
    }

    .form-control:focus {
        outline: none;
        border-color: var(--primary-purple);
        background: var(--white);
        box-shadow: 0 0 0 3px rgba(91, 33, 182, 0.1);
    }

    textarea.form-control {
        resize: vertical;
        min-height: 150px;
    }

    .btn-submit {
        background: linear-gradient(135deg, var(--primary-orange), var(--secondary-orange));
        color: var(--white);
        padding: 15px 35px;
        border: none;
        border-radius: 30px;
        font-weight: 600;
        font-size: 16px;
        cursor: pointer;
        transition: var(--transition);
        box-shadow: var(--shadow);
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }

    .btn-submit:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-lg);
    }

    /* Map Section */
    .map-section {
        margin-top: 50px;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: var(--shadow);
        height: 400px;
    }

    .map-frame {
        width: 100%;
        height: 100%;
        border: 0;
    }

    /* Responsive */
    @media (max-width: 992px) {
        .contact-grid {
            grid-template-columns: 1fr;
        }

        .info-item {
            align-items: center;
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

        .form-row {
            grid-template-columns: 1fr;
        }

        .page-header h1 {
            font-size: 32px;
        }
    }
    </style>
</head>

<body>

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

    <nav class="main-nav">
        <div class="container nav-container">
            <a href="homeyes.php" class="logo">
                <div class="logo-icon"><i class="fas fa-home"></i></div>
                <span>HomeYES</span>
            </a>

            <ul class="nav-menu">
                <li><a href="homeyes.php">Beranda</a></li>
                <li><a href="homeyes.php#about">Tentang</a></li>
                <li><a href="homeyes.php#services">Layanan</a></li>
                <li><a href="homeyes.php#gallery">Galeri</a></li>
                <li><a href="contact.php" style="color: var(--primary-purple);">Kontak</a></li>
                <li><a href="#consultation" class="cta-button">Konsultasi Gratis</a></li>
            </ul>

            <div class="menu-toggle">
                <span></span><span></span><span></span>
            </div>
        </div>
    </nav>

    <header class="page-header">
        <div class="container">
            <h1>Hubungi Kami</h1>
            <p>Kami siap membantu mewujudkan proyek impian Anda. Jangan ragu untuk berdiskusi dengan tim kami.</p>
            <div class="breadcrumb">
                <a href="homeyes.php">Beranda</a> <span>/</span> Kontak
            </div>
        </div>
    </header>

    <section class="contact-section">
        <div class="container">
            <div class="contact-grid">

                <div class="contact-info-card fade-in-up">
                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="info-content">
                            <h4>Lokasi Kantor</h4>
                            <p>Jl. Konstruksi No. 123<br>Jakarta Selatan, DKI Jakarta 12345</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-phone-alt"></i></div>
                        <div class="info-content">
                            <h4>Telepon & WhatsApp</h4>
                            <p>+62 123 456 7890 (Kantor)<br>+62 812 3456 7890 (WhatsApp)</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-envelope"></i></div>
                        <div class="info-content">
                            <h4>Email Kami</h4>
                            <p>info@homeyes.com<br>support@homeyes.com</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-clock"></i></div>
                        <div class="info-content">
                            <h4>Jam Operasional</h4>
                            <p>Senin - Jumat: 08:00 - 16:00<br>Sabtu: 09:00 - 14:00<br>Minggu: Libur</p>
                        </div>
                    </div>

                    <div style="margin-top: 40px; padding-top: 30px; border-top: 1px solid #eee;">
                        <h4 style="color: var(--dark); margin-bottom: 15px;">Ikuti Kami</h4>
                        <div class="social-links">
                            <a href="#" style="background: var(--primary-purple);"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" style="background: var(--primary-purple);"><i class="fab fa-twitter"></i></a>
                            <a href="#" style="background: var(--primary-purple);"><i class="fab fa-instagram"></i></a>
                            <a href="#" style="background: var(--primary-purple);"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <div class="contact-form-card fade-in-up">
                    <div class="form-title">
                        <h3>Kirim Pesan</h3>
                        <p>Silakan isi formulir di bawah ini untuk konsultasi atau pertanyaan.</p>
                    </div>

                    <form action="#">
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" placeholder="Masukkan nama Anda">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="alamat@email.com">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Nomor Telepon</label>
                                <input type="tel" class="form-control" placeholder="+62...">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Subjek</label>
                                <select class="form-control">
                                    <option>Konsultasi Umum</option>
                                    <option>Pembangunan Rumah</option>
                                    <option>Renovasi</option>
                                    <option>Desain Interior</option>
                                    <option>Lainnya</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Pesan Anda</label>
                            <textarea class="form-control" placeholder="Jelaskan kebutuhan proyek Anda..."></textarea>
                        </div>

                        <button type="submit" class="btn-submit">
                            Kirim Pesan <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>

            </div>

            <div class="map-section fade-in-up">
                <iframe class="map-frame"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.299901777274!2d106.820!3d-6.223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTMnMjIuOCJTIDEwNsKwNDknMTIuMCJF!5e0!3m2!1sid!2sid!4v1620000000000!5m2!1sid!2sid"
                    allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3><i class="fas fa-home"></i> HomeYES</h3>
                    <p>Mitra terpercaya untuk mewujudkan rumah impian Anda. Dengan pengalaman puluhan tahun, kami siap
                        memberikan layanan terbaik.</p>
                </div>
                <div class="footer-section">
                    <h3>Layanan Kami</h3>
                    <ul>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Pembangunan Rumah</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Renovasi</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Desain Interior</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Kontak Kami</h3>
                    <ul style="list-style: none;">
                        <li><i class="fas fa-map-marker-alt"></i> Jl. Konstruksi No. 123</li>
                        <li><i class="fas fa-phone"></i> +62 123 456 7890</li>
                        <li><i class="fas fa-envelope"></i> info@homeyes.com</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 HomeYES. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
    // Menu Toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('.nav-menu');
    menuToggle.addEventListener('click', () => {
        navMenu.classList.toggle('active');
    });

    // Simple Fade In Animation (Sama dengan homeyes.php)
    const fadeElements = document.querySelectorAll('.fade-in-up');
    const fadeObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animation = 'fadeInUp 0.6s ease-out forwards';
                fadeObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });

    // Add animation keyframes manually via JS for standalone safety or rely on CSS
    const styleSheet = document.createElement("style");
    styleSheet.innerText = `
            @keyframes fadeInUp {
                from { opacity: 0; transform: translateY(30px); }
                to { opacity: 1; transform: translateY(0); }
            }
            .fade-in-up { opacity: 0; } /* Start hidden */
        `;
    document.head.appendChild(styleSheet);

    fadeElements.forEach(el => fadeObserver.observe(el));
    </script>
</body>

</html>