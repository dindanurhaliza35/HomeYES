<?php
// --- PHP Logic ---
$page = 'index'; // Penanda untuk Navbar
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeYES - Yes to Better Home</title>
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
        --purple-glow: rgba(192, 132, 252, 0.5);
        --yellow: #fde047;
        --yellow-glow: rgba(253, 224, 71, 0.5);
        --border: rgba(255, 255, 255, 0.08);
        --glass: rgba(255, 255, 255, 0.03);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Outfit', sans-serif;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        background: var(--bg);
        color: var(--text);
        overflow-x: hidden;
        line-height: 1.6;
    }

    /* --- BACKGROUND ANIMATION (TURBO BLOB) --- */
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
        filter: blur(90px);
        opacity: 0.6;
    }

    .b-p {
        width: 500px;
        height: 500px;
        background: var(--purple);
        top: -10%;
        left: -10%;
        animation: flyPurple 20s infinite alternate ease-in-out;
    }

    .b-y {
        width: 600px;
        height: 600px;
        background: var(--yellow);
        bottom: -10%;
        right: -10%;
        animation: flyYellow 25s infinite alternate ease-in-out;
    }

    @keyframes flyPurple {
        0% {
            transform: translate(0, 0);
        }

        100% {
            transform: translate(50vw, 40vh) scale(1.2);
        }
    }

    @keyframes flyYellow {
        0% {
            transform: translate(0, 0);
        }

        100% {
            transform: translate(-50vw, -40vh) scale(1.1);
        }
    }

    /* --- SCROLL REVEAL CLASS --- */
    .reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s ease-out;
    }

    .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }

    /* --- HERO SECTION --- */
    #hero {
        min-height: 100vh;
        padding: 0 5%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        position: relative;
    }

    .status-badge {
        background: rgba(34, 197, 94, 0.1);
        border: 1px solid rgba(34, 197, 94, 0.3);
        color: #22c55e;
        padding: 8px 20px;
        border-radius: 30px;
        font-size: 0.85rem;
        font-weight: 600;
        margin-bottom: 2rem;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        box-shadow: 0 0 20px rgba(34, 197, 94, 0.2);
    }

    .dot {
        width: 8px;
        height: 8px;
        background: #22c55e;
        border-radius: 50%;
        box-shadow: 0 0 10px #22c55e;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 0.5;
        }

        100% {
            opacity: 1;
        }
    }

    .hero-h1 {
        font-size: 5rem;
        font-weight: 900;
        line-height: 1;
        margin-bottom: 1.5rem;
        letter-spacing: -2px;
    }

    .text-gradient {
        background: linear-gradient(90deg, var(--purple), var(--yellow));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .hero-p {
        font-size: 1.2rem;
        color: white(--mute);
        max-width: 600px;
        margin-bottom: 3rem;
    }

    .btn-group {
        display: flex;
        gap: 1rem;
    }

    .btn {
        padding: 15px 35px;
        border-radius: 50px;
        font-weight: 700;
        text-decoration: none;
        transition: 0.3s;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .btn-primary {
        background: #fff;
        color: #000;
    }

    .btn-primary:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 30px rgba(255, 255, 255, 0.5);
    }

    .btn-outline {
        border: 1px solid var(--border);
        color: #fff;
        backdrop-filter: blur(10px);
    }

    .btn-outline:hover {
        border-color: #fff;
        background: rgba(255, 255, 255, 0.1);
    }

    /* --- MARQUEE (RUNNING TEXT) --- */
    .marquee-wrap {
        background: var(--yellow);
        padding: 15px 0;
        transform: rotate(-2deg);
        width: 105%;
        margin-left: -2.5%;
        margin-bottom: 6rem;
        overflow: hidden;
        border: 2px solid #000;
    }

    .marquee-content {
        display: flex;
        gap: 2rem;
        animation: scroll 15s linear infinite;
        white-space: nowrap;
    }

    .marquee-item {
        font-weight: 900;
        font-size: 1.5rem;
        color: #000;
        text-transform: uppercase;
    }

    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    /* --- SERVICES CARDS --- */
    .section-header {
        text-align: center;
        margin-bottom: 4rem;
    }

    .section-label {
        color: var(--purple);
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 700;
        font-size: 0.9rem;
        display: block;
        margin-bottom: 10px;
    }

    .section-title {
        font-size: 3rem;
        font-weight: 800;
        margin-bottom: 1rem;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        padding: 0 5%;
        margin-bottom: 8rem;
    }

    .srv-card {
        background: var(--surface);
        border: 1px solid var(--border);
        padding: 3rem;
        border-radius: 30px;
        position: relative;
        overflow: hidden;
        transition: 0.4s;
        group;
    }

    /* Hover Effect: Glow & Lift */
    .srv-card:hover {
        transform: translateY(-15px);
        border-color: var(--purple);
        background: rgba(255, 255, 255, 0.03);
    }

    .srv-card::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, var(--purple-glow) 0%, transparent 60%);
        opacity: 0;
        transition: 0.4s;
        pointer-events: none;
        transform: translate(-50%, -50%);
    }

    .srv-card:hover::before {
        opacity: 0.1;
    }

    .srv-icon {
        font-size: 3.5rem;
        margin-bottom: 1.5rem;
        color: #fff;
        transition: 0.3s;
    }

    .srv-card:hover .srv-icon {
        transform: scale(1.1);
        color: var(--yellow);
    }

    .srv-card h3 {
        font-size: 1.8rem;
        margin-bottom: 1rem;
    }

    .srv-card p {
        color: var(--mute);
        line-height: 1.7;
    }

    /* --- STATS (Trust) --- */
    .stats-container {
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.02), transparent);
        padding: 6rem 5%;
        text-align: center;
        border-top: 1px solid var(--border);
    }

    .stats-grid {
        display: flex;
        justify-content: center;
        gap: 4rem;
        flex-wrap: wrap;
        margin-top: 3rem;
    }

    .stat-item h2 {
        font-size: 4rem;
        font-weight: 900;
        color: var(--yellow);
        line-height: 1;
        margin-bottom: 5px;
    }

    .stat-item p {
        color: var(--mute);
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 0.9rem;
    }

    /* --- CTA --- */
    .cta-box {
        margin: 6rem 5%;
        background: linear-gradient(45deg, #1a1a1a, #000);
        padding: 5rem;
        border-radius: 40px;
        text-align: center;
        border: 1px solid var(--border);
        position: relative;
        overflow: hidden;
    }

    .cta-box::after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 300px;
        height: 300px;
        background: var(--purple);
        filter: blur(100px);
        opacity: 0.3;
        border-radius: 50%;
    }

    /* Footer */
    footer {
        padding: 3rem 5%;
        text-align: center;
        border-top: 1px solid var(--border);
        color: var(--mute);
        font-size: 0.9rem;
        background: #000;
    }

    @media (max-width: 768px) {
        .hero-h1 {
            font-size: 3.5rem;
        }

        .stats-grid {
            gap: 2rem;
        }

        .marquee-wrap {
            margin-bottom: 4rem;
        }
    }
    </style>
</head>

<body>

    <?php include 'navbar.php'; ?>

    <div class="ambient-light">
        <div class="blob b-p"></div>
        <div class="blob b-y"></div>
    </div>

    <section id="hero">
        <div class="status-badge reveal">
            <div class="dot"></div> System Online • Denpasar, Bali
        </div>

        <h1 class="hero-h1 reveal">
            Smart Living,<br>
            <span class="text-gradient">Zero Worries.</span>
        </h1>

        <p class="hero-p reveal">
            Layanan terpadu <b>Cleaning, Maintenance, & Security</b> sejak 2021.
            Solusi modern untuk hunian yang bersih, aman, dan terawat tanpa ribet.
        </p>

        <div class="btn-group reveal">
            <a href="layanan" class="btn btn-primary">Lihat Layanan <i class="ph ph-arrow-right"></i></a>
            <a href="about" class="btn btn-outline">Tentang Kami</a>
        </div>
    </section>

    <div class="marquee-wrap">
        <div class="marquee-content">
            <span class="marquee-item">★ HOME CLEANING ★ AC MAINTENANCE ★ CCTV SECURITY ★ SMART LOCK ★ ELECTRICAL ★
                PLUMBING ★</span>
            <span class="marquee-item">★ HOME CLEANING ★ AC MAINTENANCE ★ CCTV SECURITY ★ SMART LOCK ★ ELECTRICAL ★
                PLUMBING ★</span>
            <span class="marquee-item">★ HOME CLEANING ★ AC MAINTENANCE ★ CCTV SECURITY ★ SMART LOCK ★ ELECTRICAL ★
                PLUMBING ★</span>
        </div>
    </div>

    <div class="container">
        <div class="section-header reveal">
            <span class="section-label">Our Core Solutions</span>
            <h2 class="section-title">Everything Your Home Needs.</h2>
            <p style="color:var(--mute);">Tiga pilar utama layanan kami untuk kenyamanan maksimal.
            </p>
        </div>

        <div class="services-grid">
            <div class="srv-card reveal">
                <i class="ph ph-sparkle srv-icon"></i>
                <h3>Deep Cleaning</h3>
                <p>Layanan kebersihan menyeluruh untuk rumah & kantor menggunakan peralatan profesional.</p>
            </div>

            <div class="srv-card reveal">
                <i class="ph ph-wrench srv-icon"></i>
                <h3>Maintenance</h3>
                <p>Perawatan teknis (AC, Listrik, Pipa) dengan garansi pengerjaan dan teknisi ahli.</p>
            </div>

            <div class="srv-card reveal">
                <i class="ph ph-shield-check srv-icon"></i>
                <h3>Security Check</h3>
                <p>Pemeriksaan keamanan fisik & digital (CCTV) untuk ketenangan pikiran saat bepergian.</p>
            </div>
        </div>
    </div>

    <div class="stats-container">
        <div class="section-header reveal">
            <h2 class="section-title">Trusted by Locals.</h2>
        </div>
        <div class="stats-grid">
            <div class="stat-item reveal">
                <h2>3+</h2>
                <p>Tahun Pengalaman</p>
            </div>
            <div class="stat-item reveal">
                <h2>18%</h2>
                <p>Pertumbuhan / Kuartal</p>
            </div>
            <div class="stat-item reveal">
                <h2>100%</h2>
                <p>Lokal Bali</p>
            </div>
        </div>
    </div>

    <div class="cta-box reveal">
        <h2 class="section-title" style="font-size: 2.5rem;">Ready to Upgrade Your Home?</h2>
        <p style="color:var(--mute); margin-bottom: 2rem;">Konsultasi gratis via WhatsApp. Tim kami siap membantu 24/7.
        </p>
        <a href="konsultasi" class="btn btn-primary" style="display:inline-flex;">Hubungi Kami Sekarang</a>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> HomeYES. Jln. Kertapura gg. Segina utara no. 01, Denpasar.</p>
    </footer>

    <script>
    function reveal() {
        var reveals = document.querySelectorAll(".reveal");
        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 150;
            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            }
        }
    }
    window.addEventListener("scroll", reveal);
    reveal(); // Trigger sekali saat load
    </script>

</body>

</html>