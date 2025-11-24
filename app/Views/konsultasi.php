<?php
$page = 'konsultasi';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsultasi - HomeYES</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <style>
    /* --- CONFIGURATION --- */
    :root {
        --bg: #050505;
        --surface: #121212;
        --text: #ffffff;
        --mute: #a1a1aa;
        --purple: #c084fc;
        --yellow: #fde047;
        --border: rgba(255, 255, 255, 0.08);
        --glass: rgba(255, 255, 255, 0.03);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Outfit', sans-serif;
    }

    body {
        background: var(--bg);
        color: var(--text);
        overflow-x: hidden;
        line-height: 1.6;
    }

    /* --- BACKGROUND ANIMATION --- */
    .ambient-light {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        pointer-events: none;
        overflow: hidden;
    }

    .blob {
        position: absolute;
        border-radius: 50%;
        filter: blur(80px);
        opacity: 0.5;
    }

    .b-p {
        width: 600px;
        height: 600px;
        background: var(--purple);
        top: -100px;
        left: -100px;
        animation: movePurple 15s infinite alternate ease-in-out;
    }

    .b-y {
        width: 700px;
        height: 700px;
        background: var(--yellow);
        bottom: -100px;
        right: -100px;
        animation: moveYellow 20s infinite alternate ease-in-out;
    }

    @keyframes movePurple {
        0% {
            transform: translate(0, 0) scale(1);
        }

        100% {
            transform: translate(60vw, 50vh) scale(1.1);
        }
    }

    @keyframes moveYellow {
        0% {
            transform: translate(0, 0) scale(1);
        }

        100% {
            transform: translate(-60vw, -50vh) scale(1.2);
        }
    }

    /* --- NAVBAR --- */
    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1.5rem 5%;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
        background: rgba(5, 5, 5, 0.7);
        backdrop-filter: blur(20px);
        border-bottom: 1px solid var(--border);
    }

    .logo {
        font-size: 1.8rem;
        font-weight: 900;
        color: #fff;
        text-decoration: none;
    }

    .nav-links {
        display: flex;
        gap: 2rem;
    }

    .nav-links a {
        text-decoration: none;
        color: var(--mute);
        font-weight: 500;
        transition: 0.3s;
    }

    .nav-links a:hover,
    .nav-links a.active {
        color: #fff;
    }

    .cta-nav {
        padding: 8px 20px;
        border: 1px solid var(--border);
        border-radius: 30px;
        color: #fff !important;
        background: var(--glass);
    }

    .cta-nav:hover {
        background: var(--purple);
        border-color: var(--purple);
    }

    /* --- CONTENT --- */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 8rem 5% 5rem;
    }

    .header-section {
        text-align: center;
        margin-bottom: 4rem;
    }

    .header-section h1 {
        font-size: 3rem;
        font-weight: 800;
        margin-bottom: 1rem;
    }

    .header-section p {
        color: var(--mute);
        max-width: 600px;
        margin: 0 auto;
    }

    /* --- CONTACT LAYOUT --- */
    .contact-wrapper {
        display: flex;
        flex-wrap: wrap;
        gap: 4rem;
        margin-bottom: 6rem;
    }

    /* Left Side: Info Cards */
    .contact-info {
        flex: 1;
        min-width: 300px;
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .info-card {
        background: var(--surface);
        border: 1px solid var(--border);
        padding: 1.5rem;
        border-radius: 20px;
        display: flex;
        align-items: center;
        gap: 1.5rem;
        transition: 0.3s;
    }

    .info-card:hover {
        transform: translateX(10px);
        border-color: var(--purple);
    }

    .ic-icon {
        width: 50px;
        height: 50px;
        background: var(--glass);
        border-radius: 12px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 1.5rem;
        color: var(--yellow);
    }

    .ic-text h4 {
        font-size: 1rem;
        margin-bottom: 2px;
        color: #fff;
    }

    .ic-text p {
        font-size: 0.9rem;
        color: var(--mute);
        margin: 0;
    }

    .ic-text a {
        color: var(--mute);
        text-decoration: none;
        transition: 0.3s;
    }

    .ic-text a:hover {
        color: var(--yellow);
    }

    /* Right Side: Form */
    .contact-form {
        flex: 1.5;
        min-width: 350px;
        background: var(--surface);
        padding: 3rem;
        border-radius: 30px;
        border: 1px solid var(--border);
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        color: var(--mute);
        font-size: 0.9rem;
    }

    .form-control {
        width: 100%;
        padding: 15px;
        background: #0a0a0a;
        border: 1px solid var(--border);
        border-radius: 12px;
        color: #fff;
        outline: none;
        transition: 0.3s;
        font-family: 'Outfit', sans-serif;
    }

    .form-control:focus {
        border-color: var(--purple);
    }

    .btn-submit {
        width: 100%;
        padding: 15px;
        background: linear-gradient(90deg, var(--purple), #a855f7);
        color: #fff;
        font-weight: 700;
        border: none;
        border-radius: 12px;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn-submit:hover {
        opacity: 0.9;
        box-shadow: 0 0 20px rgba(192, 132, 252, 0.4);
    }

    /* --- MAP SECTION --- */
    .map-section {
        border-radius: 30px;
        overflow: hidden;
        border: 1px solid var(--border);
        height: 400px;
        position: relative;
    }

    .map-section iframe {
        width: 100%;
        height: 100%;
        border: none;
        filter: grayscale(100%) invert(92%) contrast(83%);
    }

    /* Dark Mode Map Filter */

    /* Footer */
    footer {
        padding: 4rem 5%;
        border-top: 1px solid var(--border);
        background: #000;
        text-align: center;
    }

    @media (max-width: 900px) {
        .nav-links {
            display: none;
        }

        .contact-wrapper {
            flex-direction: column;
        }
    }
    </style>
</head>

<body>

    <div class="ambient-light">
        <div class="blob b-p"></div>
        <div class="blob b-y"></div>
    </div>

    <body>

        <?php include 'navbar.php'; ?>

    </body>

    <div class="container">

        <div class="header-section">
            <h1>Let's Talk.</h1>
            <p>Punya masalah kebersihan, AC rusak, atau butuh pasang CCTV? <br>Konsultasikan gratis sekarang. Tim kami
                fast response 24/7.</p>
        </div>

        <div class="contact-wrapper">

            <div class="contact-info">
                <div class="info-card">
                    <div class="ic-icon"><i class="ph ph-whatsapp-logo"></i></div>
                    <div class="ic-text">
                        <h4>WhatsApp / Telepon</h4>
                        <p><a href="https://wa.me/6281339134575" target="_blank">0813-3913-4575</a></p>
                    </div>
                </div>

                <div class="info-card">
                    <div class="ic-icon"><i class="ph ph-envelope-simple"></i></div>
                    <div class="ic-text">
                        <h4>Email Resmi</h4>
                        <p><a href="mailto:homeyes.id@gmail.com">homeyes.id@gmail.com</a></p>
                    </div>
                </div>

                <div class="info-card">
                    <div class="ic-icon"><i class="ph ph-map-pin"></i></div>
                    <div class="ic-text">
                        <h4>Alamat Kantor</h4>
                        <p>Jln. Kertapura gg. Segina utara no. 01<br>Denpasar, Bali 80119</p>
                    </div>
                </div>

                <div class="info-card">
                    <div class="ic-icon" style="color:var(--purple)"><i class="ph ph-clock"></i></div>
                    <div class="ic-text">
                        <h4>Jam Operasional</h4>
                        <p>Senin - Minggu: 08.00 - 17.00 WITA<br><span
                                style="color:var(--purple); font-size:0.8rem;">*Layanan CS Online 24 Jam</span></p>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <h3 style="margin-bottom: 2rem; font-size: 1.8rem;">Kirim Pesan</h3>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="Masukan nama kamu" required>
                    </div>
                    <div class="form-group">
                        <label>Nomor WhatsApp</label>
                        <input type="tel" class="form-control" placeholder="08xxxxxxxxxx" required>
                    </div>
                    <div class="form-group">
                        <label>Jenis Layanan</label>
                        <select class="form-control">
                            <option>Cleaning Service</option>
                            <option>Maintenance (AC/Listrik/Pipa)</option>
                            <option>Security System (CCTV/SmartLock)</option>
                            <option>Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pesan / Keluhan</label>
                        <textarea rows="4" class="form-control"
                            placeholder="Ceritakan detail kebutuhanmu..."></textarea>
                    </div>
                    <button type="submit" class="btn-submit">Kirim via WhatsApp <i
                            class="ph ph-paper-plane-right"></i></button>
                </form>
            </div>

        </div>

        <div class="map-section">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.136895268492!2d115.1976!3d-8.6835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240a3b5c5c5c5%3A0x0!2zOMKwNDEnMDAuNiJTIDExNcKwMTEnNTEuNCJF!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>

    <footer>
        <p style="color: var(--mute); font-size: 0.9rem;">&copy; <?php echo date("Y"); ?> HomeYES. Jln. Kertapura gg.
            Segina utara no. 01, Denpasar.</p>
    </footer>

</body>

</html>