<?php
// Logika untuk menentukan halaman aktif
$current_page = basename($_SERVER['PHP_SELF']);
// Jika di root (misal folder/), anggap index.php
if ($current_page == '' || $current_page == 'homeyes') { $current_page = 'index.php'; }
?>

<style>
/* --- VARS LOKAL (Biar aman jika CSS utama belum load) --- */
:root {
    --nav-bg: rgba(5, 5, 5, 0.85);
    --nav-border: rgba(255, 255, 255, 0.08);
    --purple: #c084fc;
    --yellow: #fde047;
    --text-idle: #a1a1aa;
    --text-hover: #ffffff;
}

/* --- CONTAINER --- */
.navbar-custom {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 1rem 5%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 9999;
    background: var(--nav-bg);
    backdrop-filter: blur(20px);
    /* Efek Blur Kuat */
    border-bottom: 1px solid var(--nav-border);
    transition: all 0.4s ease;
}

/* --- LOGO --- */
.nav-logo {
    font-family: 'Outfit', sans-serif;
    font-size: 1.6rem;
    font-weight: 800;
    color: #fff;
    text-decoration: none;
    letter-spacing: -0.5px;
}

.nav-logo span {
    color: var(--yellow);
}

/* --- LINKS WRAPPER --- */
.nav-menu-wrapper {
    display: flex;
    align-items: center;
    gap: 2.5rem;
}

/* --- STANDARD LINKS --- */
.nav-item {
    list-style: none;
}

.nav-link {
    text-decoration: none;
    color: var(--text-idle);
    font-family: 'Outfit', sans-serif;
    font-weight: 500;
    font-size: 0.95rem;
    position: relative;
    transition: color 0.3s ease;
    padding: 5px 0;
}

.nav-link:hover,
.nav-link.active {
    color: var(--text-hover);
    text-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
}

/* Animasi Garis Bawah (Center Out) */
.nav-link::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 2px;
    background: var(--yellow);
    transition: all 0.3s ease;
    transform: translateX(-50%);
}

.nav-link:hover::after,
.nav-link.active::after {
    width: 100%;
}

/* --- TOMBOL KONSULTASI (The Star!) --- */
.btn-konsultasi {
    padding: 10px 25px;
    border-radius: 50px;
    text-decoration: none;
    font-family: 'Outfit', sans-serif;
    font-weight: 700;
    font-size: 0.9rem;
    color: #000;
    /* Teks Hitam biar kontras */

    /* Gradient Background Keren */
    background: linear-gradient(135deg, var(--purple), #a855f7);
    color: #fff;
    border: 1px solid transparent;
    box-shadow: 0 4px 15px rgba(192, 132, 252, 0.3);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

/* Efek Shine saat Hover */
.btn-konsultasi:hover {
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 10px 25px rgba(192, 132, 252, 0.5);
    background: linear-gradient(135deg, #d8b4fe, var(--purple));
}

/* --- HAMBURGER (Mobile) --- */
.mobile-toggle {
    display: none;
    cursor: pointer;
    flex-direction: column;
    gap: 6px;
}

.bar {
    width: 28px;
    height: 3px;
    background: #fff;
    border-radius: 4px;
    transition: 0.3s;
}

/* --- RESPONSIVE --- */
@media (max-width: 768px) {
    .mobile-toggle {
        display: flex;
    }

    .nav-menu-wrapper {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: #000;
        flex-direction: column;
        padding: 2rem;
        border-bottom: 1px solid var(--nav-border);
        gap: 1.5rem;

        /* Hidden by default */
        opacity: 0;
        transform: translateY(-20px);
        pointer-events: none;
        transition: 0.4s ease;
    }

    .nav-menu-wrapper.active {
        opacity: 1;
        transform: translateY(0);
        pointer-events: all;
    }

    .btn-konsultasi {
        width: 100%;
        text-align: center;
    }
}
</style>

<nav class="navbar-custom">
    <a href="index.php" class="nav-logo">Hom<span>eYES</span></a>

    <div class="mobile-toggle" onclick="toggleNav()">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>

    <ul class="nav-menu-wrapper" id="navMenu">
        <li class="nav-item">
            <a href="/" class="nav-link <?= ($current_page == 'index.php') ? 'active' : '' ?>">Beranda</a>
        </li>
        <li class="nav-item">
            <a href="about" class="nav-link <?= ($current_page == 'about.php') ? 'active' : '' ?>">Tentang Kami</a>
        </li>
        <li class="nav-item">
            <a href="layanan" class="nav-link <?= ($current_page == 'layanan.php') ? 'active' : '' ?>">Layanan</a>
        </li>
        <li class="nav-item">
            <a href="gallery" class="nav-link <?= ($current_page == 'gallery.php') ? 'active' : '' ?>">Gallery</a>
        </li>


        <li class="nav-item" style="margin-left: 10px;">
            <a href="konsultasi" class="btn-konsultasi">
                Konsultasi <i class="ph ph-arrow-right" style="vertical-align: middle; margin-left:5px;"></i>
            </a>
        </li>
    </ul>
</nav>

<script>
function toggleNav() {
    const menu = document.getElementById('navMenu');
    menu.classList.toggle('active');
}
</script>