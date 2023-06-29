<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Registrasi DiscoverZ</title>
</head>
<body>


<div style="font-family: poppins;" class=" container-fluid d-flex justify-content-center align-items-center bg-primary vh-100 border">
    <div class="d-flex flex-column p-4 w-25 bg-light rounded-3 shadow-lg text-primary fw-semibold">
        <img src="logo.png" alt="discoverz" class="w-50 align-self-center m-3">
        <form>
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" placeholder="Masukkan nama lengkap">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan email">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Masukkan password">
          </div>
          <div class="mb-3">
            <label for="confirm-password" class="form-label">Konfirmasi Password</label>
            <input type="password" class="form-control" id="confirm-password" placeholder="Konfirmasi password">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="privacy">
            <label style="font-size:10pt;" class="form-check-label fw-light text-secondary fst-italic" for="privacy">Saya setuju dengan syarat dan ketentuan</label>
          </div>
          <button  type="submit" class="btn btn-warning px-5">Daftar</button>
        </form>
    </div>
</div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>