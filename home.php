<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Pribadi - Muhammad Salman adz Dzaki</title>
    <style>
   body {
    font-family: 'Plus Jakarta Sans', 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #f0f4ff 0%, #e6eeff 100%);
    margin: 0;
    padding: 0;
    color: #1e293b;
    line-height: 1.6;
}

.container {
    width: 92%;
    max-width: 1400px;
    margin: auto;
    position: relative;
}

header {
    background: linear-gradient(90deg, #1e40af 0%, #3b82f6 100%);
    padding: 2rem 0;
    position: sticky;
    top: 0;
    z-index: 1000;
    box-shadow: 0 4px 20px rgba(30, 64, 175, 0.15);
    backdrop-filter: blur(10px);
}

header h1 {
    margin: 0;
    font-size: 2.5rem;
    background: linear-gradient(90deg, #ffffff 0%, #e2e8f0 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-align: center;
}

nav ul {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: center;
    gap: 2rem;
    margin-top: 1.5rem;
}

nav a {
    text-decoration: none;
    color: white;
    font-weight: 500;
    position: relative;
    padding: 0.5rem 1rem;
    border-radius: 8px;
    transition: all 0.3s ease;
}

nav a:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateY(-2px);
}

nav a::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #ffffff, transparent);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

nav a:hover::after {
    transform: scaleX(1);
}

section {
    margin: 3rem 0;
    padding: 2.5rem;
    background: rgba(255, 255, 255, 0.9);
    border-radius: 24px;
    box-shadow: 0 8px 32px rgba(30, 64, 175, 0.1);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

section:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 40px rgba(30, 64, 175, 0.15);
}

/* Previous styles remain the same until bio-content */

.bio-content {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start; /* Changed from center to flex-start */
    gap: 3rem;
    justify-content: space-between;
    position: relative; /* Added position relative */
    padding-top: 2rem; /* Added padding to accommodate shifted photo */
}

.bio-text {
    order: 2; /* Move text to the right */
    flex: 1;
    min-width: 300px;
}

.bio-photo {
    order: 1; /* Move photo to the left */
    position: relative;
    top: -3rem; /* Shift photo upward */
}

.bio-photo img {
    border-radius: 24px;
    width: 200px;
    height: 200px;
    object-fit: cover;
    box-shadow: 0 8px 32px rgba(30, 64, 175, 0.2);
    transition: transform 0.3s ease;
}

.bio-photo img:hover {
    transform: scale(1.05);
}

/* Add media query for responsive layout */
@media (max-width: 768px) {
    .bio-content {
        flex-direction: column;
        align-items: center;
        padding-top: 0;
    }

    .bio-photo {
        top: 0;
        margin-bottom: 2rem;
    }

    .bio-text {
        text-align: center;
    }
}

/* Rest of the previous styles remain the same */

.projects-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    width: 100%;
}

.project {
    background: rgba(255, 255, 255, 0.8);
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(30, 64, 175, 0.1);
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.project:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 30px rgba(30, 64, 175, 0.2);
}

.project img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.project:hover img {
    transform: scale(1.05);
}

.project h3 {
    margin: 1rem;
    font-size: 1.25rem;
    color: #1e40af;
    flex: 1;
}

@media (max-width: 768px) {
    .projects-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    }
}
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Muhammad Salman adz Dzaki</h1>
            <nav>
                <ul>
                    <li><a href="#bio">Tentang Saya</a></li>
                    <li><a href="#projects">Proyek</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section id="bio" class="bio">
            <div class="container bio-content">
                <div class="bio-text">
                    <h2>Tentang Saya</h2>
                    Saya adalah seorang mahasiswa aktif di Institut Teknologi Adhi Tama Surabaya yang saat ini sedang menempuh program S1 di jurusan Sistem Informasi. Saya sedang mencari karir di bidang UI/UX Design. Selain itu, saya juga mulai mendalami pendidikan tentang UI/UX Design di kampus, yang telah membuka wawasan saya tentang pentingnya desain yang fungsional dan estetis dalam pengembangan sistem informasi.                </div>
                <div class="bio-photo">
                    <img src="salman.JPG    " alt="Foto Profil">
                </div>
            </div>
        </section>
        <section id="projects" class="projects">
            <div class="container">
                <h2>Project Saya</h2>
                <div class="projects-grid">
                <?php
$projects = [
    [
        'name' => 'Penjualan Mobil Bekas',
        'image' => 'mobil.png', // Portfolio theme
    ],
    [
        'name' => 'UI/UX Aplikasi les privat',
        'image' => 'lessgo.png', // Corporate office
    ],
    [
        'name' => 'Penjualan Alat Tulis',
        'image' => 'ATK.png', // Blog/writing
    ],
    [
        'name' => 'web nonton film',
        'image' => 'movie.png', // E-commerce
    ],
    [
        'name' => 'Dashboard penjualan',
        'image' => 'dashboard.png', // Event space
    ],
    [
        'name' => 'Tentang Nasi Goreng',
        'image' => 'Nsgrng.png', // Community
    ],
    [
        'name' => 'Situs web pendaftaran',
        'image' => 'PSB.png', // Education
    ],
    [
        'name' => 'UI/UX Grab for smartwatch',
        'image' => 'Grab.png', // Gallery
    ],
    [
        'name' => 'UI/UX penjualan baju',
        'image' => 'maternal.png', // Map/location
    ]
];

echo '<div class="projects-grid">';
foreach ($projects as $project) {
    echo "<div class='project'>";
    echo "<img src='{$project['image']}' alt='{$project['name']}'>";
    echo "<h3>{$project['name']}</h3>";
    echo "</div>";
}
echo '</div>';
?>
                </div>
            </div>
        </section>
        <section id="contact" class="contact">
            <div class="container">
                <h2>Kontak</h2>
                <ul class="contact-list">
                    <li><a href="https://www.instagram.com/salmandzakii7/" target="_blank">Instagram: @salmandzakii7</a></li>
                    <li>Nomor Handphone: <a href="tel:+6281234567890">+62 812-3456-7890</a></li>
                </ul>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2025 Muhammad Salman adz Dzaki. Semua hak cipta dilindungi.</p>
        </div>
    </footer>
</body>
</html>
