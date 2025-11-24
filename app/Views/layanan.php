<?php
$page = 'layanan';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan - HomeYES</title>
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

    /* --- BACKGROUND ANIMATION (Turbo Mode) --- */
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

    /* --- 2 MAIN SERVICES LAYOUT --- */
    .big-services {
        display: flex;
        flex-direction: column;
        gap: 4rem;
        margin-bottom: 6rem;
    }

    .service-block {
        background: var(--surface);
        border: 1px solid var(--border);
        border-radius: 30px;
        padding: 3rem;
        position: relative;
        overflow: hidden;
        display: grid;
        grid-template-columns: 1fr 1.2fr;
        gap: 3rem;
        align-items: start;
    }


    /* Visual styling per kategori */
    .block-sec {
        border-top: 4px solid var(--purple);
    }

    .block-maint {
        border-top: 4px solid var(--yellow);
    }

    .sb-info h2 {
        font-size: 2.2rem;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .sb-desc {
        color: var(--mute);
        margin-bottom: 2rem;
        font-size: 1.1rem;
    }

    /* Table Harga */
    .price-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 1rem;
    }

    .price-table th {
        text-align: left;
        color: #fff;
        padding: 10px 0;
        border-bottom: 1px solid var(--border);
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .price-table td {
        padding: 15px 0;
        border-bottom: 1px solid var(--border);
        color: var(--mute);
        font-size: 0.95rem;
    }

    .price-table td strong {
        color: #fff;
        display: block;
        margin-bottom: 2px;
    }

    .price-highlight {
        font-weight: 700;
        color: var(--yellow);
    }

    /* List Capabilities */
    .cap-list {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
        margin-bottom: 2rem;
    }

    .cap-item {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #ddd;
        font-weight: 500;
    }

    .cap-item i {
        font-size: 1.2rem;
    }

    .icon-sec i {
        color: var(--purple);
    }

    .icon-maint i {
        color: var(--yellow);
    }

    /* --- BENEFITS SECTION --- */
    .benefits-section {
        margin-top: 6rem;
        text-align: center;
    }

    .ben-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }

    .ben-item {
        background: var(--glass);
        padding: 2rem;
        border-radius: 20px;
        border: 1px solid var(--border);
        transition: 0.3s;
    }

    .ben-item:hover {
        transform: translateY(-5px);
        border-color: #fff;
    }

    .ben-icon {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        display: block;
        color: var(--yellow);
    }

    .ben-item h4 {
        color: #fff;
        margin-bottom: 0.5rem;
    }

    .ben-item p {
        color: var(--mute);
        font-size: 0.9rem;
    }

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

        .service-block {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .price-table {
            font-size: 0.85rem;
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
            <h1>Two Core Solutions.</h1>
            <p>Kami menyederhanakan layanan rumah menjadi dua fokus utama: Keamanan Digital dan Perawatan Fisik. Simpel,
                Jelas, dan Profesional.</p>
        </div>

        <div class="big-services">

            <div class="service-block block-sec">
                <div class="sb-info">
                    <h2 style="color:var(--purple)"><i class="ph ph-shield-check"></i> HomeYES Security</h2>
                    <p class="sb-desc">
                        Layanan keamanan modern berbasis teknologi. Kami memastikan rumah dan aset digital Anda
                        terlindungi 24 jam dengan perangkat canggih dan teknisi ahli jaringan.
                    </p>

                    <div class="cap-list icon-sec">
                        <div class="cap-item"><i class="ph ph-video-camera"></i> Servis & Pasang CCTV</div>
                        <div class="cap-item"><i class="ph ph-wifi-high"></i> Jaringan Komputer/WiFi</div>
                        <div class="cap-item"><i class="ph ph-lock-key"></i> Smart Door Lock</div>
                        <div class="cap-item"><i class="ph ph-siren"></i> Alarm System</div>
                    </div>
                </div>

                <div class="sb-pricing">
                    <h4 style="color:#fff; margin-bottom:15px; border-bottom:1px solid #333; padding-bottom:10px;">
                        Contoh Harga & Paket</h4>
                    <table class="price-table">
                        <thead>
                            <tr>
                                <th>Layanan</th>
                                <th>Estimasi Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Instalasi CCTV (Per Titik)</strong><span style="font-size:0.8rem">Include
                                        setting online ke HP</span></td>
                                <td class="price-highlight">Rp 150.000 / titik</td>
                            </tr>
                            <tr>
                                <td><strong>Paket CCTV 4 Channel</strong><span style="font-size:0.8rem">Unit, HDD,
                                        Kabel, Instalasi</span></td>
                                <td class="price-highlight">Mulai Rp 3.500.000</td>
                            </tr>
                            <tr>
                                <td><strong>Setup Jaringan / WiFi</strong><span style="font-size:0.8rem">Setting Router
                                        & LAN kantor/rumah</span></td>
                                <td class="price-highlight">Rp 250.000 / visit</td>
                            </tr>
                            <tr>
                                <td><strong>Smart Lock Installation</strong><span style="font-size:0.8rem">Jasa pasang &
                                        setting biometric</span></td>
                                <td class="price-highlight">Rp 350.000 / unit</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="service-block block-maint">
                <div class="sb-info">
                    <h2 style="color:var(--yellow)"><i class="ph ph-wrench"></i> HomeYES Maintenance</h2>
                    <p class="sb-desc">
                        Solusi perawatan fisik bangunan dan peralatan elektronik. Menjaga fungsi rumah tetap optimal,
                        nyaman, dan estetik tanpa kerusakan mendadak.
                    </p>

                    <div class="cap-list icon-maint">
                        <div class="cap-item"><i class="ph ph-fan"></i> Maintenance AC</div>
                        <div class="cap-item"><i class="ph ph-lightning"></i> Instalasi Listrik</div>
                        <div class="cap-item"><i class="ph ph-paint-roller"></i> Pengecatan Gedung</div>
                        <div class="cap-item"><i class="ph ph-wrench"></i> Perbaikan Umum</div>
                    </div>
                </div>

                <div class="sb-pricing">
                    <h4 style="color:#fff; margin-bottom:15px; border-bottom:1px solid #333; padding-bottom:10px;">
                        Contoh Harga & Paket</h4>
                    <table class="price-table">
                        <thead>
                            <tr>
                                <th>Layanan</th>
                                <th>Estimasi Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Cuci AC (Split 0.5 - 1 PK)</strong><span style="font-size:0.8rem">Deep clean
                                        evaporator & filter</span></td>
                                <td class="price-highlight">Rp 75.000 / unit</td>
                            </tr>
                            <tr>
                                <td><strong>Perbaikan Listrik (Minor)</strong><span style="font-size:0.8rem">Ganti
                                        saklar/stopkontak/lampu</span></td>
                                <td class="price-highlight">Rp 50.000 / titik</td>
                            </tr>
                            <tr>
                                <td><strong>Pengecatan Dinding</strong><span style="font-size:0.8rem">Jasa tukang (belum
                                        bahan)</span></td>
                                <td class="price-highlight">Rp 35.000 / m²</td>
                            </tr>
                            <tr>
                                <td><strong>General Repair Visit</strong><span style="font-size:0.8rem">Pengecekan
                                        kerusakan umum</span></td>
                                <td class="price-highlight">Rp 100.000 / visit</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <div class="benefits-section">
            <h2 style="font-size:2rem; font-weight:800;">Kenapa Memilih HomeYES?</h2>
            <div class="ben-grid">
                <div class="ben-item">
                    <i class="ph ph-certificate ben-icon"></i>
                    <h4>Teknisi Berpengalaman</h4>
                    <p>Tim kami telah melalui pelatihan dan sertifikasi di bidangnya.</p>
                </div>
                <div class="ben-item">
                    <i class="ph ph-shield-check ben-icon" style="color:var(--purple)"></i>
                    <h4>Garansi Pengerjaan</h4>
                    <p>Komplain gratis jika hasil kerja tidak sesuai standar dalam 7 hari.</p>
                </div>
                <div class="ben-item">
                    <i class="ph ph-clock-countdown ben-icon"></i>
                    <h4>Respon Cepat</h4>
                    <p>Admin standby dan teknisi datang tepat waktu sesuai jadwal.</p>
                </div>
                <div class="ben-item">
                    <i class="ph ph-receipt ben-icon" style="color:#fff"></i>
                    <h4>Harga Transparan</h4>
                    <p>Biaya disepakati di awal. Tidak ada biaya siluman atau pungli.</p>
                </div>
            </div>
        </div>

    </div>

    <footer>
        <p style="color: var(--mute); font-size: 0.9rem;">&copy; <?php echo date("Y"); ?> HomeYES. Jln. Kertapura gg.
            Segina utara no. 01, Denpasar.</p>
    </footer>

</body>

</html>