<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edukasi - PDONOR</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #B31312;
            --secondary-color: #2B2A4C;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Lexend', sans-serif;
        }

        body {
            min-height: 100vh;
            background: #fff;
        }

        .header {
            padding: 8px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #eee;
            background: #F8F2DE;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-icon {
            width: 35px;
            height: 35px;
            object-fit: contain;
        }

        .logo-text {
            color: var(--primary-color);
            font-size: 22px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .nav-link {
            text-decoration: none;
            color: var(--secondary-color);
            font-weight: 500;
            font-size: 14px;
            padding: 5px 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .nav-link.active {
            background: var(--primary-color);
            color: white;
        }

        .nav-link:hover:not(.active) {
            background: rgba(179, 19, 18, 0.1);
        }

        .icons {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .icon {
            cursor: pointer;
            width: 24px;
            height: 24px;
        }

        .main-content {
            padding: 40px;
            background-color: var(--primary-color);
            min-height: calc(100vh - 57px);
        }

        .education-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .education-card {
            background: #F8F2DE;
            border-radius: 15px;
            padding: 30px;
            text-decoration: none;
            color: var(--secondary-color);
            transition: all 0.3s ease;
            min-height: 200px;
            display: flex;
            flex-direction: column;
            cursor: pointer;
        }

        .education-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        }

        .education-card h2 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 15px;
            text-align: center;
        }

        .education-card p {
            font-size: 14px;
            line-height: 1.6;
            flex-grow: 1;
        }

        .footer {
            text-align: center;
            padding: 20px;
            background: #F8F2DE;
        }

        .footer img {
            height: 40px;
            margin-bottom: 10px;
        }

        .footer p {
            color: var(--secondary-color);
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .header {
                padding: 8px 20px;
            }

            .nav-links {
                gap: 15px;
            }

            .nav-link {
                font-size: 13px;
                padding: 5px 10px;
            }

            .main-content {
                padding: 20px;
            }

            .education-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .education-card {
                padding: 20px;
            }

            .education-card h2 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo-container">
            <img src="/PDONOR/assets/img/PDONOR.png" alt="PDONOR Logo" class="logo-icon">
            <span class="logo-text">PDONOR</span>
        </div>
        <nav class="nav-links">
            <a href="#" class="nav-link">Beranda</a>
            <a href="#" class="nav-link">Appointment</a>
            <a href="#" class="nav-link active">Edukasi</a>
            <a href="#" class="nav-link">Riwayat</a>
        </nav>
        <div class="icons">
            <img src="/PDONOR/assets/img/notif.png" alt="Notifications" class="icon">
            <img src="/PDONOR/assets/img/profil.png" alt="Profile" class="icon">
        </div>
    </header>

    <main class="main-content">
        <div class="education-grid">
            <a href="edukasi-manfaat.php" class="education-card">
                <h2>Manfaat</h2>
                <p>Pelajari berbagai manfaat donor darah bagi kesehatan dan kehidupan.</p>
            </a>
            <a href="edukasi-syarat.php" class="education-card">
                <h2>Syarat</h2>
                <p>Ketahui persyaratan yang harus dipenuhi untuk menjadi pendonor darah.</p>
            </a>
            <a href="edukasi-mitos.php" class="education-card">
                <h2>Mitos VS Fakta</h2>
                <p>Temukan kebenaran di balik mitos-mitos seputar donor darah.</p>
            </a>
            <a href="edukasi-efek.php" class="education-card">
                <h2>Efek Samping</h2>
                <p>Pahami efek samping yang mungkin terjadi setelah donor darah.</p>
            </a>
        </div>
    </main>

    <footer class="footer">
        <img src="/PDONOR/assets/img/PDONOR.png" alt="PDONOR Logo">
        <p>PDONOR - 2025</p>
    </footer>
</body>
</html> 