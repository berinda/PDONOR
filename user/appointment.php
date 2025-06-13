<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment - PDONOR</title>
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
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 40px;
        }

        .appointment-form, .requirements {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--secondary-color);
            font-weight: 500;
            font-size: 14px;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e1e1e1;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            outline: none;
        }

        .row {
            display: flex;
            gap: 20px;
        }

        .col {
            flex: 1;
        }

        .btn-submit {
            width: 100%;
            padding: 12px;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            background: #8B0000;
        }

        .requirements h2 {
            color: var(--secondary-color);
            margin-bottom: 20px;
            font-size: 20px;
        }

        .requirements ul {
            list-style-type: none;
            padding-left: 0;
        }

        .requirements li {
            margin-bottom: 10px;
            font-size: 14px;
            color: #333;
        }

        .requirements .sub-list {
            padding-left: 20px;
            margin-top: 5px;
        }

        .checkbox-group {
            margin-top: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .checkbox-group input[type="checkbox"] {
            width: 16px;
            height: 16px;
        }

        .checkbox-group label {
            font-size: 14px;
            color: #333;
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

        @media (max-width: 992px) {
            .main-content {
                flex-direction: column;
                align-items: center;
                padding: 20px;
            }

            .appointment-form, .requirements {
                max-width: 100%;
            }
        }

        @media (max-width: 576px) {
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

            .row {
                flex-direction: column;
                gap: 15px;
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
            <a href="#" class="nav-link active">Appointment</a>
            <a href="#" class="nav-link">Edukasi</a>
            <a href="#" class="nav-link">Riwayat</a>
        </nav>
        <div class="icons">
            <img src="/PDONOR/assets/img/notification.png" alt="Notifications" class="icon">
            <img src="/PDONOR/assets/img/profile.png" alt="Profile" class="icon">
        </div>
    </header>

    <main class="main-content">
        <form class="appointment-form">
            <div class="form-group">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" id="nama" class="form-control" required>
            </div>
            
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="umur">Umur:</label>
                        <input type="number" id="umur" class="form-control" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="golDarah">Gol. Darah:</label>
                        <select id="golDarah" class="form-control" required>
                            <option value="">Pilih</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="telp">No. Telp:</label>
                <input type="tel" id="telp" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="jadwal">Jadwal:</label>
                <select id="jadwal" class="form-control" required>
                    <option value="">Pilih Jadwal</option>
                    <option value="senin">Senin</option>
                    <option value="selasa">Selasa</option>
                    <option value="rabu">Rabu</option>
                    <option value="kamis">Kamis</option>
                    <option value="jumat">Jumat</option>
                </select>
            </div>

            <div class="form-group">
                <label for="jamOperasional">Jam Operasional:</label>
                <select id="jamOperasional" class="form-control" required>
                    <option value="">Pilih Jam</option>
                    <option value="09:00">09:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                </select>
            </div>

            <button type="submit" class="btn-submit">KIRIM</button>
        </form>

        <div class="requirements">
            <h2>Syarat dan Ketentuan</h2>
            <ul>
                <li>Syarat Umum Donor Darah</li>
                <li>1. Usia 17 - 60</li>
                <li>2. Berat badan minimal 45kg</li>
                <li>3. Sehat jasmani dan rohani</li>
                <li class="sub-list">a. Tidak sedang demam, batuk, pilek atau flu</li>
                <li class="sub-list">b. Tidak dalam masa pemulihan dari operasi, luka berat atau sakit berat</li>
                <li>4. Tidur cukup</li>
                <li class="sub-list">a. Minimal tidur 5 jam di malam sebelumnya</li>
                <li>5. Tidak dalam kondisi berikut:</li>
                <li class="sub-list">a. Hamil atau menyusui</li>
                <li class="sub-list">b. Sedang menstruasi berat</li>
                <li class="sub-list">c. Baru melakukan tato, tindik, atau akupuntur (< 1 tahun)</li>
                <li class="sub-list">d. Mengonsumsi obat-obatan atau antibiotik dalam 7 hari terakhir</li>
                <li class="sub-list">e. Riwayat penyakit (HIV/AIDS, Hepatitis B/C, sifilis, malaria)</li>
            </ul>
            <div class="checkbox-group">
                <input type="checkbox" id="agreement" required>
                <label for="agreement">Telah membaca syarat dan ketentuan</label>
            </div>
        </div>
    </main>

    <footer class="footer">
        <img src="/PDONOR/assets/img/PDONOR.png" alt="PDONOR Logo">
        <p>PDONOR - 2025</p>
    </footer>
</body>
</html> 