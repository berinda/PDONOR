<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'includes/head.php';?>
</head>
<body>
  <?php include 'includes/header.php';?>

  <div class="profile-container">
    <div class="profile-card">
      <div class="profile-header">
        <div class="profile-image-container">
          <div class="profile-image">
            foto<br>profil
          </div>
          <button class="edit-btn" onclick="window.location.href='edit-profile.php'">edit</button>
        </div>
        
        <div class="profile-info">
          <h2>Hai, Nama Pengguna</h2>
          <div class="info-grid">
            <div class="info-item">
              <div class="info-label">tanggal lahir</div>
              <div class="info-value">01 Januari 2000</div>
            </div>
            <div class="info-item">
              <div class="info-label">usia</div>
              <div class="info-value">24 tahun</div>
            </div>
            <div class="info-item">
              <div class="info-label">jenis kelamin</div>
              <div class="info-value">Laki-laki</div>
            </div>
            <div class="info-item">
              <div class="info-label">golongan darah</div>
              <div class="info-value">O+</div>
            </div>
            <div class="info-item">
              <div class="info-label">no telp</div>
              <div class="info-value">081234567890</div>
            </div>
            <div class="info-item">
              <div class="info-label">email pengguna</div>
              <div class="info-value">user@example.com</div>
            </div>
          </div>
          <button class="logout-btn" onclick="window.location.href='/PDONOR/logout.php'">Log Out</button>
        </div>
      </div>
    </div>
  </div>

  <?php include 'includes/script.php';?>
</body>
</html> 