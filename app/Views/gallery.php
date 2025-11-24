<?php
$page = 'portfolio';

// --- 1. LOGIKA PENYIMPANAN DATA (JSON) ---
$file_json = 'testimoni.json';
$folder_upload = 'uploads/';

// Cek apakah form disubmit
if (isset($_POST['kirim_testimoni'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $role = htmlspecialchars($_POST['role']);
    $pesan = htmlspecialchars($_POST['pesan']);
    $rating = $_POST['rating'];
    $foto_path = '';

    // Proses Upload Foto
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $ijin_ekstensi = ['jpg', 'jpeg', 'png', 'webp'];
        $nama_file = $_FILES['foto']['name'];
        $tmp_file = $_FILES['foto']['tmp_name'];
        $ekstensi = strtolower(pathinfo($nama_file, PATHINFO_EXTENSION));

        if (in_array($ekstensi, $ijin_ekstensi)) {
            $nama_baru = time() . '_' . rand(100, 999) . '.' . $ekstensi;
            if (move_uploaded_file($tmp_file, $folder_upload . $nama_baru)) {
                $foto_path = $folder_upload . $nama_baru;
            }
        }
    }

    $data_baru = [
        'name' => $nama,
        'role' => $role,
        'text' => $pesan,
        'rating' => $rating,
        'photo' => $foto_path,
        'avatar' => strtoupper(substr($nama, 0, 2)),
        'color' => '#ffffff'
    ];

    $data_lama = file_exists($file_json) ? json_decode(file_get_contents($file_json), true) : [];
    if (!is_array($data_lama)) $data_lama = [];
    
    array_unshift($data_lama, $data_baru);
    file_put_contents($file_json, json_encode($data_lama, JSON_PRETTY_PRINT));

    header("Location: gallery.php");
    exit();
}

// --- 2. DATA TESTIMONI BAWAAN ---
$testimonials_default = [
    [
        'name' => 'Ibu Budiarti',
        'role' => 'Rumah Tangga, Denpasar',
        'avatar' => 'IB',
        'text' => 'Awalnya ragu mau panggil jasa cleaning online, tapi HomeYES beda. Staffnya sopan, berseragam, dan kerjanya detail banget.',
        'color' => 'var(--yellow)', 'photo' => '', 'rating' => 5
    ],
    [
        'name' => 'Pak Adrian',
        'role' => 'Pemilik UMKM, Badung',
        'avatar' => 'AD',
        'text' => 'Sangat terbantu dengan layanan maintenance AC-nya. Teknisi datang tepat waktu. AC kantor jadi dingin lagi.',
        'color' => 'var(--purple)', 'photo' => '', 'rating' => 5
    ],
    [
        'name' => 'Sinta T.',
        'role' => 'Karyawan Swasta, Gianyar',
        'avatar' => 'ST',
        'text' => 'Pasang CCTV lewat HomeYES prosesnya cepet. Hasil gambarnya jernih dan diajarin cara pantau lewat HP.',
        'color' => '#ffffff', 'photo' => '', 'rating' => 5
    ],
    [
        'name' => 'Bli Komang',
        'role' => 'Pemilik Villa, Ubud',
        'avatar' => 'BK',
        'text' => 'Saya pakai paket cleaning mingguan untuk villa. Tamu senang karena bersih dan wangi. HomeYES mantap!',
        'color' => 'var(--yellow)', 'photo' => '', 'rating' => 5
    ],
    [
        'name' => 'Sarah J.',
        'role' => 'Digital Nomad, Canggu',
        'avatar' => 'SJ',
        'text' => 'Fast response! Listrik kosan mati total, teknisi HomeYES dateng jam 8 malem dan langsung beres.',
        'color' => '#ff0055', 'photo' => '', 'rating' => 4
    ],
    [
        'name' => 'CV. Maju Jaya',
        'role' => 'Partner Bisnis',
        'avatar' => 'MJ',
        'text' => 'Kerjasama maintenance gedung kantor sudah jalan 1 tahun. Laporan digitalnya sangat membantu monitoring.',
        'color' => '#00aaff', 'photo' => '', 'rating' => 5
    ]
];

$testimonials_user = file_exists($file_json) ? json_decode(file_get_contents($file_json), true) : [];
if (!is_array($testimonials_user)) $testimonials_user = [];

$all_testimonials = array_merge($testimonials_user, $testimonials_default);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio & Testimoni - HomeYES</title>
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

    /* --- LAYOUT --- */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 8rem 5% 5rem;
    }

    .header-section {
        text-align: center;
        margin-bottom: 3rem;
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

    /* --- PROJECT GRID --- */
    .filter-menu {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin-bottom: 3rem;
        flex-wrap: wrap;
    }

    .filter-btn {
        background: transparent;
        border: 1px solid var(--border);
        color: var(--mute);
        padding: 8px 20px;
        border-radius: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    .filter-btn:hover,
    .filter-btn.active {
        background: var(--glass);
        color: #fff;
        border-color: var(--yellow);
    }

    .project-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 2rem;
        margin-bottom: 6rem;
    }

    .project-card {
        background: var(--surface);
        border: 1px solid var(--border);
        border-radius: 20px;
        overflow: hidden;
        transition: 0.3s;
        position: relative;
    }

    .project-card:hover {
        transform: translateY(-5px);
        border-color: var(--purple);
    }

    .p-img-box {
        height: 250px;
        background: #222;
        position: relative;
        overflow: hidden;
        background: linear-gradient(45deg, #1a1a1a, #333);
    }

    .p-content {
        padding: 2rem;
    }

    .p-tag {
        font-size: 0.75rem;
        text-transform: uppercase;
        padding: 4px 10px;
        border-radius: 5px;
        display: inline-block;
        margin-bottom: 10px;
        font-weight: 700;
        letter-spacing: 1px;
    }

    .tag-clean {
        background: rgba(255, 255, 255, 0.1);
        color: #fff;
    }

    .tag-maint {
        background: rgba(253, 224, 71, 0.1);
        color: var(--yellow);
    }

    .tag-sec {
        background: rgba(192, 132, 252, 0.1);
        color: var(--purple);
    }

    .project-card h3 {
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
    }

    .project-card p {
        color: var(--mute);
        font-size: 0.9rem;
    }

    /* --- SLIDER TESTIMONI --- */
    .testi-wrapper {
        position: relative;
        margin-bottom: 6rem;
        padding: 0 2rem;
    }

    .testi-slider {
        display: flex;
        gap: 2rem;
        overflow-x: auto;
        padding-bottom: 2rem;
        scroll-behavior: smooth;
        scroll-snap-type: x mandatory;
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .testi-slider::-webkit-scrollbar {
        display: none;
    }

    .testi-card {
        min-width: 350px;
        max-width: 350px;
        background: var(--glass);
        border: 1px solid var(--border);
        padding: 2.5rem;
        border-radius: 20px;
        position: relative;
        transition: 0.3s;
        display: flex;
        flex-direction: column;
        scroll-snap-align: center;
    }

    .testi-card:hover {
        background: rgba(255, 255, 255, 0.05);
        border-color: var(--yellow);
    }

    .quote-icon {
        font-size: 3rem;
        color: var(--border);
        position: absolute;
        top: 20px;
        right: 20px;
        opacity: 0.5;
    }

    .testi-text {
        font-style: italic;
        color: #ddd;
        margin-bottom: 1.5rem;
        position: relative;
        z-index: 2;
        flex-grow: 1;
    }

    .user-info {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: bold;
        color: #000;
        background: #fff;
        overflow: hidden;
        object-fit: cover;
        border: 2px solid var(--border);
        flex-shrink: 0;
    }

    .avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .user-details h4 {
        font-size: 1rem;
        margin-bottom: 2px;
    }

    .user-details span {
        font-size: 0.8rem;
        color: var(--mute);
    }

    .stars-display {
        color: var(--yellow);
        font-size: 0.8rem;
        margin-bottom: 5px;
    }

    /* Navigation Buttons */
    .slider-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: var(--surface);
        border: 1px solid var(--border);
        color: #fff;
        font-size: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 10;
        transition: 0.3s;
    }

    .slider-btn:hover {
        background: var(--purple);
        border-color: var(--purple);
    }

    .prev-btn {
        left: -10px;
    }

    .next-btn {
        right: -10px;
    }

    /* --- FORM ADD REVIEW --- */
    .add-review-section {
        background: linear-gradient(145deg, rgba(20, 20, 20, 0.9), rgba(5, 5, 5, 0.95));
        border: 1px solid var(--purple);
        border-radius: 30px;
        padding: 3rem;
        max-width: 800px;
        margin: 0 auto;
        position: relative;
        overflow: hidden;
    }

    .add-review-section::before {
        content: '';
        position: absolute;
        top: -50px;
        left: -50px;
        width: 150px;
        height: 150px;
        background: var(--purple);
        filter: blur(80px);
        opacity: 0.4;
        pointer-events: none;
    }

    .form-title {
        text-align: center;
        margin-bottom: 2rem;
    }

    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .input-group label {
        display: block;
        color: var(--mute);
        margin-bottom: 0.5rem;
        font-size: 0.9rem;
    }

    .input-field {
        width: 100%;
        padding: 12px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid var(--border);
        border-radius: 10px;
        color: #fff;
        outline: none;
        transition: 0.3s;
    }

    .input-field:focus {
        border-color: var(--yellow);
        background: rgba(255, 255, 255, 0.1);
    }

    .full-width {
        grid-column: span 2;
    }

    input[type="file"]::file-selector-button {
        margin-right: 10px;
        border: none;
        background: var(--purple);
        padding: 8px 15px;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        font-family: inherit;
        font-weight: 600;
    }

    .star-rating {
        display: flex;
        flex-direction: row-reverse;
        justify-content: flex-end;
        gap: 5px;
    }

    .star-rating input {
        display: none;
    }

    .star-rating label {
        font-size: 1.5rem;
        color: #444;
        cursor: pointer;
        transition: 0.2s;
    }

    .star-rating input:checked~label,
    .star-rating label:hover,
    .star-rating label:hover~label {
        color: var(--yellow);
    }

    .btn-submit {
        width: 100%;
        padding: 15px;
        background: var(--purple);
        color: #fff;
        border: none;
        border-radius: 12px;
        font-weight: 700;
        cursor: pointer;
        transition: 0.3s;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
    }

    .btn-submit:hover {
        background: #fff;
        color: var(--purple);
        box-shadow: 0 0 20px rgba(192, 132, 252, 0.5);
    }

    footer {
        padding: 4rem 5%;
        border-top: 1px solid var(--border);
        background: #000;
        text-align: center;
    }

    @media (max-width: 768px) {

        .project-grid,
        .form-grid {
            grid-template-columns: 1fr;
        }

        .full-width {
            grid-column: span 1;
        }

        .slider-btn {
            display: none;
        }

        .testi-wrapper {
            padding: 0;
        }

        .testi-card {
            min-width: 300px;
            max-width: 300px;
        }
    }
    </style>
</head>

<body>

    <div class="ambient-light">
        <div class="blob b-p"></div>
        <div class="blob b-y"></div>
    </div>

    <?php include 'navbar.php'; ?>

    <div class="container">

        <div class="header-section">
            <h1>Our Recent Works.</h1>
            <p>Dokumentasi nyata dari layanan kebersihan, perawatan, dan keamanan.</p>
        </div>

        <div class="filter-menu">
            <button class="filter-btn active">All Projects</button>
            <button class="filter-btn">Cleaning</button>
            <button class="filter-btn">Maintenance</button>
            <button class="filter-btn">Security</button>
        </div>

        <div class="project-grid">
            <div class="project-card">
                <div class="p-img-box" style="background: linear-gradient(135deg, #222, #1a3a3a);"></div>
                <div class="p-content">
                    <span class="p-tag tag-clean">Cleaning</span>
                    <h3>Deep Clean Kos</h3>
                    <p>Pembersihan total 10 kamar kos.</p>
                </div>
            </div>
            <div class="project-card">
                <div class="p-img-box" style="background: linear-gradient(135deg, #222, #3a2a1a);"></div>
                <div class="p-content">
                    <span class="p-tag tag-maint">Maintenance</span>
                    <h3>Service AC Kantor</h3>
                    <p>Perawatan rutin 5 unit AC Split.</p>
                </div>
            </div>
            <div class="project-card">
                <div class="p-img-box" style="background: linear-gradient(135deg, #222, #2a1a3a);"></div>
                <div class="p-content">
                    <span class="p-tag tag-sec">Security</span>
                    <h3>CCTV Smart Home</h3>
                    <p>Pemasangan 4 titik kamera IP.</p>
                </div>
            </div>
        </div>

        <div class="header-section" style="margin-bottom: 3rem; margin-top:6rem;">
            <h2>Apa Kata Mereka?</h2>
            <p style="color:var(--mute);">Ulasan asli dari pelanggan HomeYES.</p>
        </div>

        <div class="testi-wrapper">
            <div class="slider-btn prev-btn" onclick="manualSlide('left')"><i class="ph ph-caret-left"></i></div>
            <div class="slider-btn next-btn" onclick="manualSlide('right')"><i class="ph ph-caret-right"></i></div>

            <div class="testi-slider" id="slider">
                <?php foreach($all_testimonials as $testi): ?>
                <div class="testi-card">
                    <i class="ph ph-quotes quote-icon"></i>
                    <div class="stars-display">
                        <?php 
                        $r = isset($testi['rating']) ? $testi['rating'] : 5;
                        for($i=0; $i<$r; $i++) echo "★"; 
                        ?>
                    </div>
                    <p class="testi-text">"<?= $testi['text']; ?>"</p>
                    <div class="user-info">
                        <div class="avatar" style="background: #fff; color: #000;">
                            <?php if(!empty($testi['photo'])): ?>
                            <img src="<?= $testi['photo']; ?>" alt="User">
                            <?php else: ?>
                            <?= isset($testi['avatar']) ? $testi['avatar'] : substr($testi['name'],0,2); ?>
                            <?php endif; ?>
                        </div>
                        <div class="user-details">
                            <h4><?= $testi['name']; ?></h4>
                            <span><?= $testi['role']; ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="add-review-section">
            <div class="form-title">
                <h2 style="margin-bottom: 0.5rem;">Puas dengan Layanan Kami?</h2>
                <p style="color:var(--mute);">Bagikan pengalamanmu dan tampilkan fotomu di website kami!</p>
            </div>

            <form action="gallery.php" method="POST" enctype="multipart/form-data">
                <div class="form-grid">
                    <div class="input-group">
                        <label>Nama Kamu</label>
                        <input type="text" name="nama" class="input-field" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="input-group">
                        <label>Status / Lokasi</label>
                        <input type="text" name="role" class="input-field" placeholder="Cth: Pemilik Kos, Denpasar"
                            required>
                    </div>

                    <div class="input-group full-width">
                        <label>Rating Kepuasan</label>
                        <div class="star-rating">
                            <input type="radio" id="star5" name="rating" value="5" checked><label for="star5">★</label>
                            <input type="radio" id="star4" name="rating" value="4"><label for="star4">★</label>
                            <input type="radio" id="star3" name="rating" value="3"><label for="star3">★</label>
                            <input type="radio" id="star2" name="rating" value="2"><label for="star2">★</label>
                            <input type="radio" id="star1" name="rating" value="1"><label for="star1">★</label>
                        </div>
                    </div>

                    <div class="input-group full-width">
                        <label>Ceritakan Pengalamanmu</label>
                        <textarea name="pesan" class="input-field" rows="3"
                            placeholder="Gimana hasil kerja tim HomeYES?" required></textarea>
                    </div>

                    <div class="input-group full-width">
                        <label>Upload Foto Profile (Opsional)</label>
                        <input type="file" name="foto" class="input-field" accept="image/*">
                        <p style="font-size:0.8rem; color:var(--mute); margin-top:5px;">*Format: JPG, PNG. Maksimal 2MB.
                        </p>
                    </div>
                </div>
                <button type="submit" name="kirim_testimoni" class="btn-submit">
                    Kirim & Tampilkan <i class="ph ph-paper-plane-right" style="font-size: 1.2rem;"></i>
                </button>
            </form>
        </div>

    </div>

    <footer>
        <p style="color: var(--mute); font-size: 0.9rem;">&copy; <?php echo date("Y"); ?> HomeYES. Denpasar, Bali.</p>
    </footer>

    <script>
    const container = document.getElementById('slider');
    const scrollAmount = 370; // Lebar kartu + gap
    let autoScroll;

    // Fungsi Geser
    function slide(direction) {
        if (direction === 'left') {
            container.scrollLeft -= scrollAmount;
        } else {
            // Cek apakah sudah mentok kanan
            if (container.scrollLeft + container.clientWidth >= container.scrollWidth - 10) {
                container.scrollLeft = 0; // Kembali ke awal
            } else {
                container.scrollLeft += scrollAmount;
            }
        }
    }

    // Geser Manual (Reset Timer)
    function manualSlide(direction) {
        clearInterval(autoScroll);
        slide(direction);
        startAutoScroll();
    }

    // Geser Otomatis
    function startAutoScroll() {
        autoScroll = setInterval(() => {
            slide('right');
        }, 3000); // Geser setiap 3 detik
    }

    // Stop saat mouse di atas slider
    container.addEventListener('mouseenter', () => clearInterval(autoScroll));
    container.addEventListener('mouseleave', startAutoScroll);

    // Jalankan
    startAutoScroll();
    </script>

</body>

</html>