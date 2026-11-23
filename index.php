<?php
$projects = [
    [
        "title" => "ELYSIUM GYM",
        "tech" => "PHP / MYSQL / QR",
        "desc" => "Spor salonları için geliştirilmiş; QR kod geçiş sistemi, PT takip modülü ve tam kapsamlı üye yönetim otomasyonu.",
        "img" => "gympro.png",
        "link" => "#"
    ],
    [
        "title" => "FOR EMLAK",
        "tech" => "NEXT.JS / LUXURY UI",
        "desc" => "Premium gayrimenkul sektörü için SEO odaklı, yüksek performanslı ve lüks tasarımlı ilan platformu.",
        "img" => "foremlak.png",
        "link" => "#"
    ],
    [
        "title" => "KRC CARS",
        "tech" => "PHP / OTOMASYON",
        "desc" => "Lüks araç kiralama ve galeri yönetimi için tasarlanmış, dinamik vitrin ve rezervasyon altyapısı.",
        "img" => "krc-cars.png",
        "link" => "#"
    ]
];
?>
<!DOCTYPE html>
<html lang="tr" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaan Aktürk | Full-Stack Developer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Renk Seçici Stil Ayarları */
        .color-picker { display: flex; gap: 12px; margin-left: 20px; align-items: center; border-left: 1px solid var(--border-color); padding-left: 20px; }
        .color-dot { width: 18px; height: 18px; border-radius: 50%; border: 2px solid rgba(255,255,255,0.1); cursor: pointer; transition: 0.3s; position: relative; }
        .color-dot:hover { transform: scale(1.3); border-color: #fff; }
        .color-dot.active { border-color: #fff; transform: scale(1.2); }
    </style>
</head>
<body>

    <nav class="vip-nav">
        <div class="logo">KAAN<span>.DEV</span></div>
        <div class="nav-links">
            <a href="#about">Hakkımda</a>
            <a href="#projects">Projeler</a>
            <a href="cv.pdf" class="cv-btn">CV İNDİR</a>
            
            <button id="theme-toggle" class="theme-btn" title="Temayı Değiştir">
                <i class="fa-solid fa-sun" id="theme-icon"></i>
            </button>

            <div class="color-picker">
                <div class="color-dot" id="dot-cyan" style="background: #06b6d4;" onclick="changeColor('cyan')" title="Tech Cyan"></div>
                <div class="color-dot" id="dot-violet" style="background: #7c3aed;" onclick="changeColor('violet')" title="Elite Violet"></div>
                <div class="color-dot" id="dot-gold" style="background: #d4af37;" onclick="changeColor('gold')" title="Luxury Gold"></div>
            </div>
        </div>
    </nav>

    <section id="about" class="hero-section">
        <div class="hero-text">
            <span class="badge"><i class="fa-solid fa-code"></i> FULL-STACK DEVELOPER</span>
            <h1 class="main-title">
                KAAN <br>AKTÜRK</span>
            </h1>
            <p class="bio">
                Modern web teknolojileriyle yüksek performanslı ve güvenli sistemler inşa ediyorum. Yazılımda uyguladığım mühendislik prensiplerini, fitness disipliniyle harmanlayarak her projede "maksimum verim" odağıyla hareket ediyorum.
            </p>

            <div class="info-grid">
                <div class="info-item">
                    <span class="label">Eğitim</span>
                    <span class="val">Bilgisayar Programcılığı</span>
                </div>
                <div class="info-item">
                    <span class="label">Uzmanlık</span>
                    <span class="val">Backend & Architecture</span>
                </div>
                <div class="info-item">
                    <span class="label">Lokasyon</span>
                    <span class="val">İstanbul</span>
                </div>
            </div>

            <a href="#projects" class="btn-main">Projeleri İncele</a>

            <div class="social-icons">
                <a href="https://github.com/kaanjsx" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="mailto:iletisim@kaanakturk.com"><i class="fa-solid fa-envelope"></i></a>
            </div>
        </div>

        <div class="hero-image-box">
            <div class="profile-frame">
                <img src="profil.png" alt="Kaan Aktürk">
            </div>
        </div>
    </section>

   <section id="projects" class="projects-section">
        <h2 class="section-title">PORTFOLYO <span class="title-slash">/ ÇALIŞMALARIM</span></h2>
        
        <div class="project-grid">
            <?php foreach($projects as $project): ?>
            <div class="project-card" style="background-image: url('<?php echo $project['img']; ?>');">
                <div class="card-overlay"></div>
                <div class="p-content">
                    <div class="p-tech-badge"><?php echo $project['tech']; ?></div>
                    <h3 class="p-title"><?php echo $project['title']; ?></h3>
                    <p class="p-desc"><?php echo $project['desc']; ?></p>
                    <a href="<?php echo $project['link']; ?>" class="p-link">PROJEYİ İNCELE &rarr;</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <footer class="footer">
        © <?php echo date("Y"); ?> KAAN AKTÜRK. Gelişim, Disiplinle Başlar.
    </footer>

    <script>
        const htmlDoc = document.documentElement;
        const themeBtn = document.getElementById('theme-toggle');
        const themeIcon = document.getElementById('theme-icon');

        // Renk Paleti Tanımları
        const colors = {
            cyan: { main: '#06b6d4', hover: '#0891b2' },
            violet: { main: '#7c3aed', hover: '#6d28d9' },
            gold: { main: '#d4af37', hover: '#b8860b' }
        };

        // 1. Tema (Karanlık/Aydınlık) Değiştirici
        if (localStorage.getItem('theme') === 'light') {
            htmlDoc.setAttribute('data-theme', 'light');
            themeIcon.className = 'fa-solid fa-moon';
        }

        themeBtn.addEventListener('click', () => {
            if (htmlDoc.getAttribute('data-theme') === 'dark') {
                htmlDoc.setAttribute('data-theme', 'light');
                themeIcon.className = 'fa-solid fa-moon';
                localStorage.setItem('theme', 'light');
            } else {
                htmlDoc.setAttribute('data-theme', 'dark');
                themeIcon.className = 'fa-solid fa-sun';
                localStorage.setItem('theme', 'dark');
            }
        });

        // 2. Dinamik Renk Değiştirici
        function changeColor(colorKey) {
            htmlDoc.style.setProperty('--accent', colors[colorKey].main);
            htmlDoc.style.setProperty('--accent-hover', colors[colorKey].hover);
            localStorage.setItem('accentColor', colorKey);
            
            // Aktif noktayı görselleştir
            document.querySelectorAll('.color-dot').forEach(dot => dot.classList.remove('active'));
            document.getElementById('dot-' + colorKey).classList.add('active');
        }

        // Sayfa yenilendiğinde tercihleri geri getir
        const savedColor = localStorage.getItem('accentColor') || 'cyan';
        changeColor(savedColor);
    </script>
</body>
</html>