<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Role - Winn Jobs</title>
    <link rel="stylesheet" href="{{ asset('css/role.css') }}">
</head>
<body>
    <!-- Logo -->
    <div class="logo-role">
        <img src="{{ asset('images/wnn3.png') }}" alt="Winn Jobs Logo" height="50" width="180">
    </div>

    <div class="title-role">
        Silahkan Pilih !!<br>Anda ingin mencari lowongan atau membuat lowongan
    </div>

    <!-- Konten Utama -->
    <div class="content-role">
        <!-- Pilihan Role -->
        <div class="button-role">
            <div class="pelamar-role" id="pelamarButton" data-url="{{ url('/register') }}">
                <h2>Pelamar</h2>
                <div class="button-description">
                    Buatlah Portofolio dan lamar pekerjaan yang kamu minati.
                </div>
            </div>
            <div class="perusahaan-role" id="perusahaanButton" data-url="{{ url('/register2') }}">
                <h2>Perusahaan</h2>
                <div class="button-description">
                    Buat lowongan dan cari orang untuk bekerja di perusahaanmu.
                </div>
            </div>
        </div>
    </div>

    <!-- Script untuk navigasi -->
    <script>
        document.getElementById('pelamarButton').addEventListener('click', function() {
            window.location.href = this.getAttribute('data-url');
        });

        document.getElementById('perusahaanButton').addEventListener('click', function() {
            window.location.href = this.getAttribute('data-url');
        });
    </script>
</body>
</html>
