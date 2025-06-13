<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manfaat Donor Darah - Edukasi PDONOR</title>
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

        .education-detail {
            max-width: 800px;
            margin: 0 auto;
            background: #F8F2DE;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .back-button:hover {
            opacity: 0.8;
        }

        .back-button svg {
            width: 20px;
            height: 20px;
        }

        .education-detail h1 {
            color: var(--secondary-color);
            font-size: 28px;
            margin-bottom: 30px;
            text-align: center;
        }

        .education-content {
            color: #333;
            line-height: 1.8;
        }

        .education-content h2 {
            color: var(--primary-color);
            font-size: 20px;
            margin: 25px 0 15px;
        }

        .education-content p {
            margin-bottom: 15px;
            font-size: 15px;
        }

        .education-content ul {
            margin: 15px 0;
            padding-left: 20px;
        }

        .education-content li {
            margin-bottom: 10px;
            font-size: 15px;
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

            .education-detail {
                padding: 25px;
            }

            .education-detail h1 {
                font-size: 24px;
                margin-bottom: 20px;
            }

            .education-content h2 {
                font-size: 18px;
                margin: 20px 0 10px;
            }

            .education-content p,
            .education-content li {
                font-size: 14px;
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
            <img src="/PDONOR/assets/img/notification.png" alt="Notifications" class="icon">
            <img src="/PDONOR/assets/img/profile.png" alt="Profile" class="icon">
        </div>
    </header>

    <main class="main-content">
        <div class="education-detail">
            <a href="edukasi.php" class="back-button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Kembali
            </a>
            <h1>Manfaat Donor Darah</h1>
            <div class="education-content">
                <h2>Manfaat Bagi Kesehatan</h2>
                <ul>
                    <li>Membantu memperbarui sel-sel darah dalam tubuh</li>
                    <li>Menurunkan risiko penyakit jantung dan pembuluh darah</li>
                    <li>Membantu menurunkan tekanan darah</li>
                    <li>Membantu menurunkan risiko kanker</li>
                    <li>Membakar kalori dan membantu menurunkan berat badan</li>
                </ul>

                <h2>Manfaat Sosial</h2>
                <ul>
                    <li>Menyelamatkan nyawa orang lain yang membutuhkan transfusi darah</li>
                    <li>Membantu pasien yang menjalani operasi</li>
                    <li>Membantu ibu yang melahirkan</li>
                    <li>Membantu pasien dengan penyakit kronis</li>
                </ul>

                <h2>Manfaat Psikologis</h2>
                <ul>
                    <li>Meningkatkan rasa kepuasan diri karena telah membantu orang lain</li>
                    <li>Menumbuhkan rasa empati dan kepedulian sosial</li>
                    <li>Meningkatkan kesadaran akan pentingnya kesehatan</li>
                </ul>

                <h2>Manfaat Tambahan</h2>
                <ul>
                    <li>Mendapatkan pemeriksaan kesehatan gratis sebelum donor</li>
                    <li>Mengetahui golongan darah dan kondisi kesehatan secara rutin</li>
                    <li>Mendapatkan kartu donor yang bisa digunakan saat membutuhkan darah</li>
                </ul>
            </div>
        </div>
    </main>

    <footer class="footer">
        <img src="/PDONOR/assets/img/PDONOR.png" alt="PDONOR Logo">
        <p>PDONOR - 2025</p>
    </footer>
</body>
</html> 