<?php
$portfolio_data = [
    'name' => 'Adelia Khoirun Nisa',
    'nickname' => 'Adelia',
    'age' => 18,
    'birthday' => '20 November 2005',
    'npm' => '2414372007',
    'kelas' => 'II TIF REGULAR 1A',
    'alamat' => 'Medan Baru, Jln K.H. Wahid Hasyim, Rumah Dinas No. 3D',
    'jurusan' => 'Teknologi Informasi',
    'background' => 'Saya tamatan dari SMK DR CIPTO MANGUNKUSUMO, saya suka art dan suka menggambar, dan ingin menambah kemampuan saya dalam IT dan desain grafis.',
    'hobby' => 'Bermain game dan membaca novel.',
    'profile_image' => 'image.png'
];

// Fungsi untuk mengecek apakah file gambar ada
function checkImageExists($imagePath) {
    return file_exists($imagePath);
}

$imageExists = checkImageExists($portfolio_data['profile_image']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $portfolio_data['name']; ?> - Portfolio</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .hero-section {
            display: flex;
            align-items: center;
            min-height: 100vh;
            gap: 40px;
            flex-wrap: wrap;
        }

        .intro-text {
            flex: 1;
            min-width: 300px;
        }

        .intro-banner {
            background: rgba(255, 255, 255, 0.95);
            padding: 20px 30px;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transform: rotate(-2deg);
            animation: float 3s ease-in-out infinite;
        }

        .intro-banner h1 {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .intro-banner p {
            font-size: 1.2em;
            color: #666;
        }

        .main-title {
            font-size: 4em;
            font-weight: bold;
            color: #ffd700;
            text-shadow: 3px 3px 0px #333;
            margin-bottom: 20px;
            transform: rotate(-1deg);
        }

        .profile-section {
            flex: 1;
            min-width: 400px;
            position: relative;
        }

        .profile-image {
            width: 100%;
            max-width: 400px;
            height: 500px;
            border-radius: 20px;
            position: relative;
            z-index: 2;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px;
        }

        .profile-placeholder {
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5em;
            text-align: center;
            height: 100%;
            flex-direction: column;
        }

        .profile-placeholder .icon {
            font-size: 4em;
            margin-bottom: 20px;
            opacity: 0.7;
        }

        .image-status {
            background: rgba(255, 255, 255, 0.9);
            padding: 10px;
            border-radius: 10px;
            margin-top: 10px;
            text-align: center;
            font-size: 0.9em;
        }

        .status-error {
            background: rgba(255, 0, 0, 0.1);
            color: #d32f2f;
        }

        .status-success {
            background: rgba(0, 255, 0, 0.1);
            color: #388e3c;
        }

        .torn-paper {
            position: relative;
            background: white;
            padding: 20px;
            margin: 20px 0;
            border-radius: 10px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            transform: rotate(1deg);
            transition: transform 0.3s ease;
        }

        .torn-paper:hover {
            transform: rotate(0deg) scale(1.02);
        }

        .torn-paper::before {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            border-radius: 15px;
            z-index: -1;
        }

        .info-card {
            background: rgba(255, 255, 255, 0.95);
            padding: 15px;
            margin: 10px 0;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px);
        }

        .info-card h3 {
            font-size: 1.3em;
            color: #333;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .info-card p {
            color: #666;
            line-height: 1.6;
        }

        .name-tag {
            background: #333;
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.9em;
            position: absolute;
            top: -10px;
            right: 20px;
            z-index: 3;
        }

        .about-section {
            margin-top: 80px;
            padding: 40px 0;
        }

        .about-content {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            margin-bottom: 30px;
        }

        .about-content h3 {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 15px;
        }

        .about-content p {
            color: #666;
            line-height: 1.8;
            margin-bottom: 15px;
        }

        .personal-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .personal-info .info-item {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 10px;
            border-left: 4px solid #667eea;
        }

        .personal-info .info-item strong {
            color: #333;
            display: block;
            margin-bottom: 5px;
        }

        .debug-info {
            background: rgba(255, 255, 255, 0.95);
            padding: 15px;
            border-radius: 10px;
            margin-top: 20px;
            font-family: monospace;
            font-size: 0.9em;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(-2deg); }
            50% { transform: translateY(-10px) rotate(-2deg); }
        }

        @media (max-width: 768px) {
            .hero-section {
                flex-direction: column;
                text-align: center;
            }
            
            .main-title {
                font-size: 2.5em;
            }
            
            .intro-banner h1 {
                font-size: 2em;
            }
            
            .profile-section {
                min-width: 300px;
            }
        }

        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            animation: particleFloat 20s linear infinite;
        }

        @keyframes particleFloat {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100vh) rotate(360deg);
                opacity: 0;
            }
        }

    </style>
</head>
<body>
    <div class="particles" id="particles"></div>
    
    <div class="container">
        <div class="hero-section">
            <div class="intro-text">
                <div class="intro-banner">
                    <h1>Let me introduce myself?!?!</h1>
                    <p>Welcome to my creative world</p>
                </div>
                
                <h2 class="main-title">Who's this?</h2>
                
                <div class="info-card">
                    <h3>Name</h3>
                    <p><?php echo $portfolio_data['name']; ?> (<?php echo $portfolio_data['nickname']; ?>)</p>
                    <p>Sometimes people can call me simply "<?php echo strtolower($portfolio_data['nickname']); ?>"</p>
                    <p>Do you have a special name for me?</p>
                </div>
                
                <div class="info-card">
                    <h3>Age</h3>
                    <p><?php echo $portfolio_data['age']; ?> y.o hahahahahaha huh...</p>
                </div>
                
                <div class="info-card">
                    <h3>Your Birthday</h3>
                    <p><?php echo $portfolio_data['birthday']; ?> (omg... this month?!)</p>
                </div>
                
                <div class="info-card">
                    <h3>Hobby</h3>
                    <p><?php echo $portfolio_data['hobby']; ?></p>
                </div>
            </div>
            
            <div class="profile-section">
                <div class="name-tag"><?php echo $portfolio_data['name']; ?>, <?php echo $portfolio_data['nickname']; ?></div>
                
                <div class="profile-image">
                    <?php if ($imageExists): ?>
                        <img src="<?php echo $portfolio_data['profile_image']; ?>" 
                             alt="Profile Photo of <?php echo $portfolio_data['name']; ?>"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="profile-placeholder" style="display: none;">
                            <div class="icon">📷</div>
                            <div>Image failed to load</div>
                            <small>(<?php echo $portfolio_data['profile_image']; ?>)</small>
                        </div>
                    <?php else: ?>
                        <div class="profile-placeholder">
                            <div class="icon">👤</div>
                            <div>Profile Photo</div>
                            <small>(<?php echo $portfolio_data['profile_image']; ?>)</small>
                        </div>
                    <?php endif; ?>
                </div>
                
                <div class="image-status <?php echo $imageExists ? 'status-success' : 'status-error'; ?>">
                    <?php if ($imageExists): ?>
                        ✓ Image file found: <?php echo $portfolio_data['profile_image']; ?>
                    <?php else: ?>
                        ⚠ Image file not found: <?php echo $portfolio_data['profile_image']; ?>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="about-content">
                <h3>Background</h3>
                <p><?php echo $portfolio_data['background']; ?></p>
                
                <div class="personal-info">
                    <div class="info-item">
                        <strong>NPM:</strong>
                        <?php echo $portfolio_data['npm']; ?>
                    </div>
                    <div class="info-item">
                        <strong>Class:</strong>
                        <?php echo $portfolio_data['kelas']; ?>
                    </div>
                    <div class="info-item">
                        <strong>Major:</strong>
                        <?php echo $portfolio_data['jurusan']; ?>
                    </div>
                    <div class="info-item">
                        <strong>Address:</strong>
                        <?php echo $portfolio_data['alamat']; ?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <script>
        // Create floating particles
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            
            for (let i = 0; i < 50; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 20 + 's';
                particle.style.animationDuration = (Math.random() * 10 + 15) + 's';
                particlesContainer.appendChild(particle);
            }
        }

        createParticles();

        // Image error handling
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('img');
            images.forEach(img => {
                img.addEventListener('error', function() {
                    console.log('Image failed to load:', this.src);
                    this.style.display = 'none';
                    const placeholder = this.nextElementSibling;
                    if (placeholder) {
                        placeholder.style.display = 'flex';
                    }
                });
            });
        });
    </script>
</body>
</html>