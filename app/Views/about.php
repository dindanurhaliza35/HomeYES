<?php
// --- PHP Logic ---
$page = 'about';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - HomeYES</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <style>
    /* --- CONFIGURATION (Sama dengan Index) --- */
    :root {
        --bg: #050505;
        --surface: #121212;
        --surface-2: #1e1e1e;
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

    /* --- LAYOUT --- */
    .container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 8rem 5% 5rem;
    }

    .hero-text {
        text-align: center;
        margin-bottom: 6rem;
    }

    .badge {
        background: rgba(253, 224, 71, 0.1);
        color: var(--yellow);
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 700;
        text-transform: uppercase;
        border: 1px solid rgba(253, 224, 71, 0.3);
        margin-bottom: 1rem;
        display: inline-block;
    }

    .title {
        font-size: 3.5rem;
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 1.5rem;
    }

    .subtitle {
        color: var(--mute);
        font-size: 1.1rem;
        max-width: 700px;
        margin: 0 auto;
    }

    /* --- PHILOSOPHY CARDS --- */
    .philosophy-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin-bottom: 6rem;
    }

    .p-card {
        background: var(--surface);
        border: 1px solid var(--border);
        padding: 2.5rem;
        border-radius: 24px;
        transition: 0.3s;
        position: relative;
        overflow: hidden;
    }

    .p-card:hover {
        transform: translateY(-10px);
        border-color: var(--purple);
    }

    .p-card h3 {
        font-size: 1.8rem;
        margin-bottom: 1rem;
        color: #fff;
    }

    .p-card p {
        color: var(--mute);
        line-height: 1.7;
    }

    .p-icon {
        font-size: 3rem;
        margin-bottom: 1rem;
        display: block;
    }

    /* --- FOUNDER & TEAM --- */
    .team-section {
        margin-bottom: 6rem;
    }

    .team-header {
        text-align: center;
        margin-bottom: 3rem;
    }

    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
    }

    .member-card {
        background: var(--glass);
        border: 1px solid var(--border);
        padding: 2rem;
        border-radius: 20px;
        text-align: center;
        transition: 0.3s;
    }

    .member-card:hover {
        background: var(--surface-2);
    }

    .avatar {
        width: 100px;
        height: 100px;
        background: #333;
        border-radius: 50%;
        margin: 0 auto 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        font-weight: 700;
        color: var(--yellow);
        border: 2px solid var(--border);
    }

    .role {
        color: var(--purple);
        font-size: 0.9rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 5px;
        display: block;
    }

    .name {
        font-size: 1.3rem;
        font-weight: 700;
        color: #fff;
    }

    /* --- STATS / DATA --- */
    .data-box {
        background: linear-gradient(180deg, var(--surface), #000);
        border: 1px solid var(--border);
        border-radius: 30px;
        padding: 3rem;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        gap: 2rem;
        text-align: center;
    }

    .stat-item h2 {
        font-size: 3rem;
        color: var(--yellow);
        margin-bottom: 0.5rem;
        font-weight: 800;
    }

    .stat-item p {
        color: var(--mute);
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* --- FOOTER --- */
    footer {
        padding: 4rem 5%;
        border-top: 1px solid var(--border);
        background: #000;
        text-align: center;
        margin-top: 4rem;
    }

    @media (max-width: 768px) {
        .nav-links {
            display: none;
        }

        .title {
            font-size: 2.5rem;
        }

        .data-box {
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

        <div class="hero-text">
            <span class="badge">Est. 2021 • Denpasar, Bali</span>
            <h1 class="title">More Than Just Cleaning.<br>We Are <span style="color:var(--purple)">HomeYES.</span></h1>
            <p class="subtitle">
                Lahir dari ide sederhana: membantu masyarakat agar rumah selalu bersih, aman, dan terawat
                tanpa repot.
                Kami hadir sebagai solusi modern yang menggabungkan Cleaning, Maintenance, dan Security
                dalam satu platform.
            </p>
        </div>

        <div class="philosophy-grid">
            <div class="p-card">
                <i class="ph ph-thumbs-up p-icon" style="color:var(--yellow)"></i>
                <h3>Home YES</h3>
                <p>
                    Bermakna <strong>"Ya, untuk rumahmu"</strong>
                    Melambangkan semangat kami yang selalu siap melayani dengan respon cepat, praktis, dan penuh
                    tanggung jawab untuk segala kebutuhan hunian Anda.
                </p>
            </div>

            <div class="p-card">
                <i class="ph ph-eye p-icon" style="color:var(--purple)"></i>
                <h3>Hom EYES</h3>
                <p>
                    Bermakna <strong>"Mata Rumah"</strong>
                    Menggambarkan perhatian detail dan kepedulian kami dalam menjaga, mengawasi, dan merawat setiap
                    sudut rumah pelanggan layaknya rumah kami sendiri.
                </p>
            </div>
        </div>

        <div class="team-section">
            <div class="team-header">
                <h2 style="font-size:2.5rem; margin-bottom:1rem;">The People Behind</h2>
                <p style="color:var(--mute);">Tim manajemen solid yang menjalankan operasional HomeYES.</p>
            </div>

            <div class="team-grid">
                <div class="member-card">
                    <div class="avatar">TH</div> <span class="role">Founder & Ketua Umum</span>
                    <h3 class="name">Taufik Hidayatulloh</h3>
                    <p style="color:var(--mute); font-size:0.9rem; margin-top:10px;">
                        Berpengalaman di bidang cleaning service & security sejak 2017.
                    </p>
                </div>

                <div class="member-card">
                    <div class="avatar" style="border-color:var(--purple); color:var(--purple)">DN</div> <span
                        class="role">Sekretaris</span>
                    <h3 class="name">Dinda Nur Haliza</h3>
                    <p style="color:var(--mute); font-size:0.9rem; margin-top:10px;">
                        Mengelola administrasi dan tata kelola operasional.
                    </p>
                </div>

                <div class="member-card">
                    <div class="avatar" style="border-color:var(--yellow); color:var(--yellow)">GH</div> <span
                        class="role">Bendahara</span>
                    <h3 class="name">Ganisyar Herjatmiko</h3>
                    <p style="color:var(--mute); font-size:0.9rem; margin-top:10px;">
                        Manajemen keuangan dan strategi investasi.
                    </p>
                </div>
            </div>
        </div>

        <div class="data-box">
            <div class="stat-item">
                <h2>2021</h2>
                <p>Tahun Berdiri</p>
            </div>
            <div class="stat-item">
                <h2>100%</h2>
                <p>Lokal Bali</p>
            </div>
            <div class="stat-item"
                style="flex-basis: 100%; margin-top: 2rem; border-top: 1px solid #222; padding-top: 2rem;">
                <h3 style="color:#fff; margin-bottom: 0.5rem; font-size: 1.5rem;">"Yes to Better Home"</h3>
                <p style="max-width: 600px; margin: 0 auto; color: var(--mute);">
                    Komitmen kami menjadi mitra terpercaya dalam menjaga kebersihan, kenyamanan, dan
                    keamanan hunian Anda.
                </p>
            </div>
            <div class="stat-item" style="flex-basis: 100%; margin-top: 2rem;">
                <p style="color:var(--mute); font-size: 0.9rem;">
                    📍 Jln. Kertapura gg. Segina utara no. 01, Denpasar<br>
                    📧 homeyes.id@gmail.com
                </p>
            </div>
        </div>

    </div>

    <footer>
        <p style="color: var(--mute); font-size: 0.9rem;">&copy; <?php echo date("Y"); ?> HomeYES. Built for
            Professional Home Care.</p>
    </footer>

</body>

</html>