<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'includes/head.php';?>
  <style>
    .edit-profile-container {
      background-color: #B31312;
      min-height: 100vh;
      padding: 40px 20px;
    }

    .edit-profile-card {
      background-color: #F8F2DE;
      border-radius: 15px;
      padding: 30px;
      max-width: 1000px;
      margin: 0 auto;
      display: flex;
      gap: 30px;
    }

    .form-section {
      flex: 1;
    }

    .photo-section {
      width: 300px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      color: #2B2A4C;
      margin-bottom: 8px;
      font-weight: 500;
    }

    .form-control {
      width: 100%;
      padding: 10px 15px;
      border: 2px solid #B31312;
      border-radius: 25px;
      background-color: #F8F2DE;
      color: #2B2A4C;
      font-size: 16px;
    }

    .form-control:focus {
      outline: none;
      border-color: #8B0000;
      box-shadow: 0 0 0 2px rgba(179, 19, 18, 0.1);
    }

    .form-row {
      display: flex;
      gap: 20px;
      margin-bottom: 20px;
    }

    .form-row > div {
      flex: 1;
    }

    select.form-control {
      appearance: none;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23B31312' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 15px center;
      padding-right: 40px;
    }

    .photo-container {
      background-color: #F8F2DE;
      border-radius: 15px;
      padding: 20px;
      text-align: center;
    }

    .photo-preview {
      width: 200px;
      height: 200px;
      background-color: #B31312;
      border-radius: 50%;
      margin: 0 auto 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 16px;
      position: relative;
      overflow: hidden;
    }

    .photo-preview img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .photo-edit-icon {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 24px;
      color: white;
    }

    .selesai-btn {
      background-color: #B31312;
      color: white;
      border: none;
      padding: 12px 40px;
      border-radius: 25px;
      cursor: pointer;
      transition: background-color 0.3s;
      font-size: 16px;
      width: 100%;
      margin-top: 20px;
    }

    .selesai-btn:hover {
      background-color: #8B0000;
    }

    @media (max-width: 768px) {
      .edit-profile-card {
        flex-direction: column-reverse;
      }

      .photo-section {
        width: 100%;
      }

      .form-row {
        flex-direction: column;
        gap: 10px;
      }
    }
  </style>
</head>
<body>
  <?php include 'includes/header.php';?>

  <div class="edit-profile-container">
    <form class="edit-profile-card" method="POST" action="update-profile.php" enctype="multipart/form-data">
      <div class="form-section">
        <div class="form-group">
          <label for="nama">Nama:</label>
          <input type="text" id="nama" name="nama" class="form-control" required>
        </div>

        <div class="form-group">
          <label for="tanggal_lahir">Tanggal Lahir:</label>
          <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" required>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="umur">Umur:</label>
            <input type="number" id="umur" name="umur" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
              <option value="">Jenis Kelamin</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="gol_darah">Gol. Darah:</label>
          <select id="gol_darah" name="gol_darah" class="form-control" required>
            <option value="">Gol Darah</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
          </select>
        </div>

        <div class="form-group">
          <label for="no_telp">No.Telp:</label>
          <input type="tel" id="no_telp" name="no_telp" class="form-control" required>
        </div>

        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" class="form-control" required>
        </div>
      </div>

      <div class="photo-section">
        <div class="photo-container">
          <div class="photo-preview">
            <input type="file" id="photo" name="photo" style="display: none;" accept="image/*">
            <label for="photo" style="width: 100%; height: 100%; cursor: pointer; margin: 0;">
              <div class="photo-edit-icon">
                <i class="bi bi-pencil-square"></i>
              </div>
              foto<br>profil
            </label>
          </div>
          <button type="submit" class="selesai-btn">Selesai</button>
        </div>
      </div>
    </form>
  </div>

  <?php include 'includes/script.php';?>
  
  <script>
    // Preview uploaded image
    document.getElementById('photo').addEventListener('change', function(e) {
      if (e.target.files && e.target.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
          const preview = document.querySelector('.photo-preview');
          preview.innerHTML = `
            <img src="${e.target.result}" alt="Profile Preview">
            <label for="photo" style="position: absolute; width: 100%; height: 100%; cursor: pointer; margin: 0;">
              <div class="photo-edit-icon">
                <i class="bi bi-pencil-square"></i>
              </div>
            </label>
            <input type="file" id="photo" name="photo" style="display: none;" accept="image/*">
          `;
        }
        reader.readAsDataURL(e.target.files[0]);
      }
    });

    // Auto-calculate age based on birth date
    document.getElementById('tanggal_lahir').addEventListener('change', function(e) {
      const birthDate = new Date(e.target.value);
      const today = new Date();
      let age = today.getFullYear() - birthDate.getFullYear();
      const monthDiff = today.getMonth() - birthDate.getMonth();
      
      if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
        age--;
      }
      
      document.getElementById('umur').value = age;
    });
  </script>
</body>
</html> 