<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'includes/head.php';?>
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