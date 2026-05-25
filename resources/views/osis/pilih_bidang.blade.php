<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pemilihan OSIS | Pilih Bidang</title>
    
    <!-- Google Fonts & Font Awesome -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
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
            padding: 0.8rem 1.2rem;
            color: rgba(255,255,255,0.95);
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .main-nav {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 0.8rem;
        }

        .brand {
            font-size: 1.5rem;
            font-weight: 800;
            color: #f6ad55;
            display: inline-flex;
            align-items: center;
            gap: 0.65rem;
            cursor: pointer;
        }

        /* Header / Page Title */
        .page-hero {
            display: block;
            margin-bottom: 0.8rem;
        }

        .page-title {
            font-size: 2.4rem;
            font-weight: 800;
            margin-bottom: 0.2rem;
            color: #ffffff;
        }

        .page-subtitle {
            color: rgba(255,255,255,0.75);
            margin-bottom: 0.4rem;
            font-size: 0.85rem;
        }

        .title-underline {
            width: 120px;
            height: 4px;
            background: rgba(255,255,255,0.12);
            border-radius: 4px;
            margin: 0.4rem 0 0.7rem 0;
        }

        /* Bidang Cards Grid */
        .bidang-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0.7rem;
            margin-bottom: 0.8rem;
        }

        .bidang-card {
            background: rgba(255,255,255,0.95);
            border-radius: 1.5rem;
            padding: 0.9rem 0.8rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            position: relative;
        }

        .bidang-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(246,173,85,0.2);
            border-color: #f6ad55;
        }

        .bidang-card.selected {
            background: linear-gradient(135deg, #f6ad55, #f59e5b);
            color: white;
            border-color: #f6ad55;
        }

        .bidang-card.selected .bidang-icon {
            background: rgba(255,255,255,0.2);
        }

        .bidang-card.selected .bidang-name,
        .bidang-card.selected .bidang-description {
            color: white;
        }

        .bidang-icon {
            width: 50px;
            height: 50px;
            margin: 0 auto 0.4rem;
            background: #f0f4f8;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            transition: all 0.3s;
        }

        .bidang-name {
            font-size: 0.85rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 0.25rem;
        }

        .bidang-description {
            font-size: 0.75rem;
            color: #718096;
            line-height: 1.3;
            min-height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Action Buttons */
        .action-buttons {
            text-align: right;
            margin-top: 1rem;
        }

        .btn-primary {
            background: #f59e5b;
            color: #1b1e32;
            padding: 0.9rem 1.6rem;
            border-radius: 999px;
            border: none;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            box-shadow: 0 10px 30px rgba(245, 158, 91, 0.4);
            transition: all 0.2s;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 40px rgba(245, 158, 91, 0.5);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        .btn-secondary {
            background: transparent;
            color: #f59e5b;
            padding: 1rem 2rem;
            border-radius: 999px;
            border: 2px solid #f59e5b;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-secondary:hover {
            background: #f59e5b;
            color: #1b1e32;
        }

        /* Responsive */
        @media (max-width: 900px) {
            .bidang-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 1.2rem;
            }

            .page-title {
                font-size: 2.5rem;
            }

            body {
                padding: 1rem;
            }

            .bidang-card {
                padding: 1.5rem 1rem;
            }
        }

        @media (max-width: 600px) {
            .bidang-grid {
                grid-template-columns: 1fr;
            }

            .page-title {
                font-size: 2rem;
            }

            .action-buttons {
                flex-direction: column;
            }

            .btn-primary, .btn-secondary {
                width: 100%;
                justify-content: center;
            }
        }

        footer {
            text-align: center;
            margin-top: 0.5rem;
            color: rgba(255,255,255,0.7);
            font-size: 0.7rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="main-nav">
            <div class="brand" onclick="window.history.back()"><i class="fas fa-arrow-left"></i> OSIS</div>
        </header>

        <!-- Page Hero -->
        <div class="page-hero">
            <div class="page-title">PILIH BIDANG</div>
            <div class="page-subtitle">Pilih bidang yang kamu minati</div>
            <div class="title-underline"></div>
        </div>

        <!-- Bidang Selection -->
        <div class="bidang-grid">
            <!-- SEKSI BIDANG 1 -->
            <div class="bidang-card" data-id="1" onclick="selectBidang(this)">
                <div class="bidang-icon">
                    <i class="fas fa-hands-praying"></i>
                </div>
                <div class="bidang-name">SEKSI BIDANG 1</div>
                <div style="font-size: 0.8rem; font-weight: 600; color: #2d3748; margin-bottom: 0.3rem;">Keagamaan</div>
                <div class="bidang-description">
                    Mengelola kegiatan yang membangun iman, ketakwaan, dan relevansi siswa dalam kehidupan sehari-hari.
                </div>
            </div>

            <!-- SEKSI BIDANG 2 -->
            <div class="bidang-card" data-id="2" onclick="selectBidang(this)">
                <div class="bidang-icon">
                    <i class="fas fa-book"></i>
                </div>
                <div class="bidang-name">SEKSI BIDANG 2</div>
                <div style="font-size: 0.8rem; font-weight: 600; color: #2d3748; margin-bottom: 0.3rem;">Pendidikan & Penalaran</div>
                <div class="bidang-description">
                    bertugas meningkatkan wawasan dan kemampuan berpikir siswa melalui diskusi, dan lomba akademik.
                </div>
            </div>

            <!-- SEKSI BIDANG 3 -->
            <div class="bidang-card" data-id="3" onclick="selectBidang(this)">
                <div class="bidang-icon">
                    <i class="fas fa-landmark"></i>
                </div>
                <div class="bidang-name">SEKSI BIDANG 3</div>
                <div style="font-size: 0.8rem; font-weight: 600; color: #2d3748; margin-bottom: 0.3rem;">Wawasan Kebangsaan</div>
                <div class="bidang-description">
                    Membentuk karakter siswa yang disiplin, bertanggung jawab jawab, serta menumbuhkan rasa cinta tanah air dan semangat kebangsaan.
                </div>
            </div>

            <!-- SEKSI BIDANG 4 -->
            <div class="bidang-card" data-id="4" onclick="selectBidang(this)">
                <div class="bidang-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <div class="bidang-name">SEKSI BIDANG 4</div>
                <div style="font-size: 0.8rem; font-weight: 600; color: #2d3748; margin-bottom: 0.3rem;">Olahraga & Kesenian</div>
                <div class="bidang-description">
                    bertugas mengembangkan bakat siswa melalui kegiatan olahraga dan seni serta mengadakan lomba akademik atau pentas.
                </div>
            </div>

            <!-- SEKSI BIDANG 5 -->
            <div class="bidang-card" data-id="5" onclick="selectBidang(this)">
                <div class="bidang-icon">
                    <i class="fas fa-share-alt"></i>
                </div>
                <div class="bidang-name">SEKSI BIDANG 5</div>
                <div style="font-size: 0.8rem; font-weight: 600; color: #2d3748; margin-bottom: 0.3rem;">Komunikasi & Informasi</div>
                <div class="bidang-description">
                    bertugas menyebarkan informasi kegiatan sekolah serta mengadakan media komunikasi seperti majalah atau media sosial sekolah.
                </div>
            </div>

            <!-- SEKSI BIDANG 6 -->
            <div class="bidang-card" data-id="6" onclick="selectBidang(this)">
                <div class="bidang-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <div class="bidang-name">SEKSI BIDANG 6</div>
                <div style="font-size: 0.8rem; font-weight: 600; color: #2d3748; margin-bottom: 0.3rem;">Keterampilan & Wirausaha</div>
                <div class="bidang-description">
                    melaksanakan pemberdayaan kreativitas siswa melalui pelatihan dan kegiatan usaha seperti bazar atau market day.
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="action-buttons">
            <button id="submitBidang" type="button" class="btn-primary" onclick="goToQuiz()">
                            Selanjutnya
                        </button>
        </div>
        <input type="hidden" name="bidang_id" id="bidangInput">

        <footer>
            <i class="fas fa-copyright"></i> 2026 - Sistem Pemilihan OSIS
        </footer>
    </div>

    <script>
        const userNama = @json(session('pendaftaran_nama', ''));
        const userKelas = @json(session('pendaftaran_kelas', ''));
        let selectedBidang = null;

        function selectBidang(element) {
            // Remove selection from all cards
            document.querySelectorAll('.bidang-card').forEach(card => {
                card.classList.remove('selected');
            });

            // Add selection to clicked card
            element.classList.add('selected');
            selectedBidang = element.getAttribute('data-id');

            // Set the hidden input value
            document.getElementById('bidangInput').value = selectedBidang;
        }

        function goToQuiz() {
            if (!selectedBidang) {
                alert('Silakan pilih bidang terlebih dahulu!');
                return;
            }

            const query = new URLSearchParams({
                selectedBidang: selectedBidang,
                nama: userNama,
                kelas: userKelas
            });

            window.location.href = '{{ route('osis.quiz') }}?' + query.toString();
        }
    </script>
</body>
</html>
