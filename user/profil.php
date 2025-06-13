<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'includes/head.php';?>
  <style>
    .profile-container {
      background-color: #B31312;
      min-height: 100vh;
      padding: 40px 20px;
    }

    .profile-card {
      background-color: #F8F2DE;
      border-radius: 15px;
      padding: 30px;
      max-width: 800px;
      margin: 0 auto;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .profile-header {
      display: flex;
      align-items: flex-start;
      gap: 30px;
      margin-bottom: 30px;
    }

    .profile-image-container {
      background-color: #F8F2DE;
      border-radius: 15px;
      padding: 20px;
      text-align: center;
    }

    .profile-image {
      width: 150px;
      height: 150px;
      background-color: #B31312;
      border-radius: 50%;
      margin-bottom: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 16px;
    }

    .edit-btn {
      background-color: #B31312;
      color: white;
      border: none;
      padding: 8px 30px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .edit-btn:hover {
      background-color: #8B0000;
    }

    .profile-info {
      flex-grow: 1;
    }

    .profile-info h2 {
      color: #B31312;
      margin-bottom: 20px;
      font-size: 28px;
    }

    .info-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
    }

    .info-item {
      margin-bottom: 15px;
    }

    .info-label {
      color: #B31312;
      font-weight: 500;
      margin-bottom: 5px;
    }

    .info-value {
      color: #2B2A4C;
      font-size: 16px;
    }

    .logout-btn {
      background-color: #F8F2DE;
      color: #B31312;
      border: 2px solid #B31312;
      padding: 8px 30px;
      border-radius: 5px;
      cursor: pointer;
      transition: all 0.3s;
      float: right;
      margin-top: 20px;
    }

    .logout-btn:hover {
      background-color: #B31312;
      color: #F8F2DE;
    }

    @media (max-width: 768px) {
      .profile-header {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }

      .info-grid {
        grid-template-columns: 1fr;
      }

      .profile-info h2 {
        text-align: center;
      }
    }
  </style>
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
          <button class="edit-btn">edit</button>
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