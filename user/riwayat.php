<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat - PDONOR</title>
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

        .history-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .history-title {
            color: white;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .history-table {
            width: 100%;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .history-table table {
            width: 100%;
            border-collapse: collapse;
        }

        .history-table th {
            background: #F8F2DE;
            padding: 15px;
            text-align: left;
            font-weight: 600;
            color: var(--secondary-color);
            font-size: 14px;
        }

        .history-table td {
            padding: 15px;
            border-bottom: 1px solid #eee;
            color: #333;
            font-size: 14px;
        }

        .history-table tr:last-child td {
            border-bottom: none;
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

            .history-title {
                font-size: 20px;
                margin-bottom: 15px;
            }

            .history-table {
                overflow-x: auto;
            }

            .history-table table {
                min-width: 600px;
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
            <a href="#" class="nav-link">Edukasi</a>
            <a href="#" class="nav-link active">Riwayat</a>
        </nav>
        <div class="icons">
            <img src="/PDONOR/assets/img/notification.png" alt="Notifications" class="icon">
            <img src="/PDONOR/assets/img/profile.png" alt="Profile" class="icon">
        </div>
    </header>

    <main class="main-content">
        <div class="history-container">
            <h1 class="history-title">Hasil Riwayat</h1>
            <div class="history-table">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Pendonor</th>
                            <th>Gol.Darah</th>
                            <th>Jadwal</th>
                            <th>Jam Operasional</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Berinda</td>
                            <td>AB</td>
                            <td>Senin, 19-2-25</td>
                            <td>09.00-12.00</td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Berinda</td>
                            <td>AB</td>
                            <td>Senin, 19-2-25</td>
                            <td>09.00-12.00</td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Berinda</td>
                            <td>AB</td>
                            <td>Senin, 19-2-25</td>
                            <td>09.00-12.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <footer class="footer">
        <img src="/PDONOR/assets/img/PDONOR.png" alt="PDONOR Logo">
        <p>PDONOR - 2025</p>
    </footer>
</body>
</html> 