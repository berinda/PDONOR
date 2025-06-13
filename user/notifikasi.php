<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="container-fluid" style="background-color: #B31312; min-height: 100vh; padding: 20px;">
        <div class="row">
            <div class="col-md-6">
                <!-- Notification Section -->
                <div class="card mb-4" style="border-radius: 15px; background-color: #F8F2DE;">
                    <div class="card-body">
                        <h3 class="card-title mb-4" style="color: #B31312; font-weight: bold;">Notifikasi</h3>
                        
                        <!-- Notification Items -->
                        <div class="notification-list">
                            <!-- Notification Item 1 -->
                            <div class="notification-item mb-3 p-3" style="background-color: white; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                                <h5 style="color: #B31312;">Appointment Disetujui!</h5>
                                <p class="mb-2">Hai, John Doe...</p>
                                <p class="mb-2">Selamat! Jadwal donor darah Anda telah disetujui.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Nomor Undian: <strong>#A12345</strong></span>
                                    <span class="text-muted">20 Feb 2024</span>
                                </div>
                            </div>

                            <!-- Notification Item 2 -->
                            <div class="notification-item mb-3 p-3" style="background-color: white; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                                <h5 style="color: #B31312;">Pengingat Jadwal Donor</h5>
                                <p class="mb-2">Hai, John Doe...</p>
                                <p class="mb-2">Jangan lupa jadwal donor darah Anda besok!</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Nomor Undian: <strong>#A12346</strong></span>
                                    <span class="text-muted">21 Feb 2024</span>
                                </div>
                            </div>

                            <!-- Notification Item 3 -->
                            <div class="notification-item mb-3 p-3" style="background-color: white; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                                <h5 style="color: #B31312;">Terima Kasih!</h5>
                                <p class="mb-2">Hai, John Doe...</p>
                                <p class="mb-2">Terima kasih telah berpartisipasi dalam donor darah.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Nomor Undian: <strong>#A12347</strong></span>
                                    <span class="text-muted">19 Feb 2024</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <!-- Information Card -->
                <div class="card" style="border-radius: 15px; background-color: #F8F2DE;">
                    <div class="card-body">
                        <h3 class="card-title mb-4" style="color: #B31312; font-weight: bold;">Informasi Penting</h3>
                        <div class="info-content">
                            <div class="info-item mb-4">
                                <h5 style="color: #B31312;">Persiapan Donor Darah</h5>
                                <ul class="list-unstyled">
                                    <li>✓ Tidur cukup (minimal 6 jam)</li>
                                    <li>✓ Sarapan/makan sebelum donor</li>
                                    <li>✓ Bawa identitas diri</li>
                                    <li>✓ Gunakan pakaian lengan pendek/mudah dilipat</li>
                                </ul>
                            </div>
                            <div class="info-item">
                                <h5 style="color: #B31312;">Nomor Undian</h5>
                                <p>Nomor undian Anda akan digunakan sebagai nomor antrian saat donor darah. Harap simpan dan tunjukkan saat registrasi di lokasi donor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer text-center py-4" style="background-color: #F8F2DE;">
        <img src="../assets/img/PDONOR.png" alt="PDONOR Logo" style="height: 40px; margin-bottom: 10px;">
        <p style="color: #2B2A4C; margin: 0;">PDONOR - 2025</p>
    </footer>

    <?php include 'includes/script.php'; ?>
</body>
</html> 