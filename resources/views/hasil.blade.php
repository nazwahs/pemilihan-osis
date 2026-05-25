<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Seleksi Kuis OSIS</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #23293a; /* dark navy */
            min-height: 100vh;
            padding: 3rem 2rem;
            color: rgba(255,255,255,0.95);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            width: 100%;
            max-width: 650px;
            margin: 0 auto;
        }

        .card {
            background: rgba(15,23,42,0.9);
            border-radius: 2rem;
            border: 1px solid rgba(255,255,255,0.03);
            overflow: hidden;
            box-shadow: 0 25px 60px rgba(2,6,23,0.6);
            padding: 2.5rem;
            text-align: center;
        }

        /* Status Badge & Colors */
        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 2rem;
            border-radius: 999px;
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 2rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Kondisi Lolos (Hijau) */
        .status-success {
            background: rgba(72, 187, 120, 0.15);
            color: #48bb78;
            border: 1px solid rgba(72, 187, 120, 0.3);
        }

        /* Kondisi Gagal (Merah) */
        .status-danger {
            background: rgba(229, 62, 62, 0.15);
            color: #e53e3e;
            border: 1px solid rgba(229, 62, 62, 0.3);
        }

        .user-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            margin: 0 auto 1.5rem auto;
            color: #f59e5b;
        }

        .welcome-text {
            font-size: 1.8rem;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 0.5rem;
        }

        .sub-text {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.95rem;
            margin-bottom: 2rem;
        }

        /* Result Data Table */
        .result-table {
            background: rgba(255, 255, 255, 0.02);
            border-radius: 1.25rem;
            padding: 1.5rem;
            margin-bottom: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.05);
            text-align: left;
        }

        .table-row {
            display: flex;
            justify-content: space-between;
            padding: 0.8rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .table-row:last-child {
            border-bottom: none;
        }

        .label {
            color: rgba(255, 255, 255, 0.5);
            font-weight: 500;
            font-size: 0.95rem;
        }

        .value {
            color: #ffffff;
            font-weight: 600;
            font-size: 0.95rem;
        }

        /* Score Progress Bar */
        .score-section {
            margin-bottom: 2rem;
            text-align: left;
        }

        .score-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0.5rem;
        }

        .progress-bar-wrapper {
            width: 100%;
            background: rgba(255, 255, 255, 0.08);
            height: 10px;
            border-radius: 10px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            border-radius: 10px;
            transition: width 1s ease-in-out;
            width: 0; /* Diatur via JS untuk animasi */
        }

        .btn-back {
            background: #f59e5b;
            color: #1b1e32;
            padding: 1rem 2rem;
            border-radius: 999px;
            border: none;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: 0 10px 30px rgba(245,158,92,0.18);
            transition: transform 0.15s;
        }

        .btn-back:hover {
            transform: translateY(-2px);
        }

        footer {
            text-align: center;
            margin-top: 1.5rem;
            color: rgba(255,255,255,0.4);
            font-size: 0.8rem;
        }
    </style>
</head>
<body>

    @php
        // Mengambil data kiriman dari form kuis (Request POST)
        // Jika data tidak ditemukan, kita beri nilai default agar tidak error
        $nama = request()->input('nama', 'Calon Pengurus');
        $sekbid = request()->input('sekbid_nama', 'Belum Memilih');
        $score = (int) request()->input('score', 0);
        
        // Parameter kelulusan: misalnya minimal nilai adalah 60
        $isLolos = $score >= 60;
    @endphp

    <div class="container">
        <div class="card">
            
            <!-- Status Badge (Warna Status Dinamis) -->
            @if($isLolos)
                <div class="status-badge status-success">
                    <i class="fas fa-check-circle"></i> Direkomendasikan
                </div>
            @else
                <div class="status-badge status-danger">
                    <i class="fas fa-times-circle"></i> Dipertimbangkan
                </div>
            @endif

            <div class="user-avatar">
                <i class="fas fa-user-gradient"></i>
            </div>

            <h1 class="welcome-text">{{ $nama }}</h1>
            <p class="sub-text">Proses pengisian kuis penilaian komite seleksi telah selesai</p>

            <!-- Tabel Hasil Data -->
            <div class="result-table">
                <div class="table-row">
                    <span class="label">Pilihan Divisi / Sekbid</span>
                    <span class="value" style="color: #f59e5b;"><i class="fas fa-layer-group"></i> {{ $sekbid }}</span>
                </div>
                <div class="table-row">
                    <span class="label">Kelas</span>
                    <span class="value">{{ request()->input('kelas', '-') }}</span>
                </div>
                <div class="table-row">
                    <span class="label">Nomor NIS</span>
                    <span class="value">{{ request()->input('nis', '-') }}</span>
                </div>
            </div>

            <!-- Score Progress Bar -->
            <div class="score-section">
                <div class="score-header">
                    <span class="label" style="font-weight: 600;">Akumulasi Skor Kuis</span>
                    <span class="value" style="font-size: 1.2rem; color: {{ $isLolos ? '#48bb78' : '#e53e3e' }}">
                        {{ $score }} <span style="font-size: 0.85rem; color: rgba(255,255,255,0.4);">/ 100</span>
                    </span>
                </div>
                <div class="progress-bar-wrapper">
                    <!-- Progress fill disiapkan warnanya berdasarkan status kelulusan -->
                    <div id="scoreBar" class="progress-fill" style="background: {{ $isLolos ? '#48bb78' : '#e53e3e' }}"></div>
                </div>
            </div>

            <div style="margin-top: 2.5rem;">
                <a href="/" class="btn-back">
                    <i class="fas fa-home"></i> Kembali ke Beranda
                </a>
            </div>

        </div>

        <footer>
            <i class="fas fa-copyright"></i> 2026 - Sistem Pemilihan OSIS | SMK Plus Pelita Nusantara
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // 1. Animasi Progress Bar Skor perlahan saat halaman dibuka
            setTimeout(() => {
                const scoreFill = document.getElementById('scoreBar');
                scoreFill.style.width = "{{ $score }}%";
            }, 300);

            // 2. SweetAlert Pop-up Trigger berdasarkan hasil kelulusan skor kuis
            const isLolos = "{{ $isLolos }}";
            
            if (isLolos) {
                Swal.fire({
                    title: 'Selamat & Sukses!',
                    text: 'Nilai kuis kamu memenuhi standar kualifikasi komite OSIS.',
                    icon: 'success',
                    confirmButtonColor: '#48bb78',
                    background: '#1a202c',
                    color: '#ffffff'
                });
            } else {
                Swal.fire({
                    title: 'Formulir Diterima',
                    text: 'Skor kompetensi kuis kamu saat ini masuk dalam tahap peninjauan lanjut.',
                    icon: 'info',
                    confirmButtonColor: '#f59e5b',
                    background: '#1a202c',
                    color: '#ffffff'
                });
            }
        });
    </script>
</body>
</html>