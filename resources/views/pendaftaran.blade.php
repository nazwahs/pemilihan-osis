<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pemilihan OSIS | Pendaftaran Calon Pengurus</title>
    
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
            padding: 1.5rem 2rem;
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
            margin-bottom: 1.25rem;
        }

        .brand {
            font-size: 1.5rem;
            font-weight: 800;
            color: #f6ad55;
            display: inline-flex;
            align-items: center;
            gap: 0.65rem;
        }

        /* Header / Page Title */
        .page-hero {
            display: block;
            margin-bottom: 2rem;
        }

        .page-title {
            font-size: 3.4rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            color: #ffffff;
        }

        .page-subtitle {
            color: rgba(255,255,255,0.75);
            margin-bottom: 1rem;
        }

        .title-underline {
            width: 120px;
            height: 4px;
            background: rgba(255,255,255,0.12);
            border-radius: 4px;
            margin: 1rem 0 1.6rem 0;
        }

        /* Alert Messages */
        .alert {
            padding: 1rem 1.5rem;
            border-radius: 1rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.8rem;
            animation: slideDown 0.3s ease;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            border-left: 5px solid #28a745;
        }

        .alert-error {
            background: #f8d7da;
            color: #721c24;
            border-left: 5px solid #dc3545;
        }

        /* Grid Layout */
        .grid-2col {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
            align-items: start;
        }

        /* Card Style */
        .card {
            background: rgba(15,23,42,0.9);
            border-radius: 1.5rem;
            border: 1px solid rgba(255,255,255,0.03);
            overflow: hidden;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 60px rgba(2,6,23,0.6);
        }

        .card-body {
            padding: 2.2rem;
        }

        .card-body h2 {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 0.8rem;
            color: white;
        }

        /* Form Elements */
        .form-group {
            margin-bottom: 1.2rem;
            position: relative;
        }

        label {
            font-weight: 600;
            display: block;
            margin-bottom: 0.4rem;
            color: rgba(255,255,255,0.9);
            font-size: 0.95rem;
        }

        label .required {
            color: #e53e3e;
            margin-left: 0.2rem;
        }

        input, select, textarea {
            width: 100%;
            border-radius: 999px;
            padding: 1rem 1.25rem 1rem 4.5rem;
            border: none;
            background: #ffffff;
            color: #1f2937;
            font-family: 'Inter', sans-serif;
            font-size: 0.95rem;
            box-shadow: inset 0 -6px 15px rgba(0,0,0,0.03);
            transition: all 0.2s;
            min-height: 3.5rem;
        }

        textarea {
            border-radius: 1.5rem !important;
            padding: 1.25rem !important;
            resize: none;
        }

        input::placeholder, textarea::placeholder {
            color: #9ca3af;
        }

        input:focus, select:focus, textarea:focus {
            outline: none;
            box-shadow: 0 6px 18px rgba(99,102,241,0.12);
            background: #fff;
        }

        .input-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.25rem;
            align-items: start;
            margin-bottom: 1rem;
        }

        .icon-circle {
            position: absolute;
            left: 0.9rem;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6b7280;
            box-shadow: 0 4px 10px rgba(2,6,23,0.12);
            font-size: 0.95rem;
        }

        .btn-primary {
            background: #f59e5b;
            color: #1b1e32;
            padding: 0.9rem 1.6rem;
            border-radius: 999px;
            border: none;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 0 10px 30px rgba(245,158,92,0.18);
            transition: transform 0.15s;
        }

        .btn-primary:hover { transform: translateY(-2px); }

        .form-actions { display: flex; justify-content: flex-end; margin-top: 0.6rem; gap: 1rem; }

        .hidden { display: none; }

        /* Sekbid Selection Cards */
        .sekbid-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 1rem;
            margin: 1.5rem 0;
        }

        .sekbid-option {
            background: #f7fafc;
            border: 2px solid #e2e8f0;
            border-radius: 1rem;
            padding: 1rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.2s;
            position: relative;
        }

        .sekbid-option:hover {
            transform: translateY(-3px);
            border-color: #667eea;
            background: #edf2f7;
        }

        .sekbid-option.selected {
            background: linear-gradient(135deg, #667eea15, #764ba215);
            border-color: #667eea;
            border-width: 2px;
        }

        .sekbid-icon {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .sekbid-name {
            font-weight: 600;
            font-size: 0.9rem;
            color: #2d3748;
        }

        .radio-check {
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: white;
            border: 2px solid #cbd5e0;
        }

        .sekbid-option.selected .radio-check {
            background: #667eea;
            border-color: #667eea;
            box-shadow: inset 0 0 0 3px white;
        }

        /* --- STYLE BARU BAGIAN QUIZ --- */
        .quiz-progress-container {
            background: rgba(255, 255, 255, 0.05);
            padding: 1rem;
            border-radius: 1rem;
            margin-bottom: 1.5rem;
        }
        .quiz-progress-bar-wrapper {
            width: 100%;
            background: rgba(255, 255, 255, 0.1);
            height: 6px;
            border-radius: 10px;
            overflow: hidden;
            margin-top: 0.5rem;
        }
        .quiz-progress-fill {
            background: #f59e5b;
            height: 100%;
            width: 20%;
            transition: width 0.3s ease;
        }
        .quiz-option-item {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            padding: 1.2rem;
            border-radius: 1rem;
            margin-bottom: 0.8rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 1rem;
            transition: all 0.2s;
        }
        .quiz-option-item:hover {
            background: rgba(245, 158, 91, 0.05);
            border-color: #f59e5b;
        }
        .quiz-option-item.selected {
            background: rgba(245, 158, 91, 0.1);
            border-color: #f59e5b;
        }
        .quiz-radio {
            width: 18px;
            height: 18px;
            border: 2px solid rgba(255, 255, 255, 0.4);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: auto;
        }
        .quiz-option-item.selected .quiz-radio {
            border-color: #f59e5b;
            background: #f59e5b;
            box-shadow: inset 0 0 0 3px #151b26;
        }
        footer {
            text-align: center;
            margin-top: 2rem;
            color: rgba(255,255,255,0.7);
            font-size: 0.8rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="main-nav">
            <div class="brand" style="cursor: pointer;" onclick="window.history.back()"><i class="fas fa-arrow-left"></i> OSIS</div>
        </header>

        <div class="page-hero" id="pageHeroHeader">
            <div class="page-title" id="heroTitle">Data Diri</div>
            <div class="page-subtitle" id="heroSubtitle">Lengkapi data dirimu dengan lengkap untuk melanjutkan proses pendaftaran calon OSIS.</div>
            <div class="title-underline"></div>
        </div>

        <div class="grid-2col">
            <div class="card">
                <div class="card-body">
                    <form method="GET" action="/pengumuman" id="osisForm">
                        @csrf
                        <div class="step-1">
                            <div class="input-grid">
                                <div class="form-group">
                                    <label>Nama Lengkap <span class="required">*</span></label>
                                    <span class="icon-circle"><i class="fas fa-user"></i></span>
                                    <input type="text" id="input_nama" name="nama" value="{{ old('nama') }}" required placeholder="Masukkan nama lengkap">
                                </div>

                                <div class="form-group">
                                    <label>NIS <span class="required">*</span></label>
                                    <span class="icon-circle"><i class="fas fa-id-card"></i></span>
                                    <input type="text" id="input_nis" name="nis" value="{{ old('nis') }}" required placeholder="Masukkan NIS">
                                </div>

                                <div class="form-group">
                                    <label>Kelas <span class="required">*</span></label>
                                    <span class="icon-circle"><i class="fas fa-book-open"></i></span>
                                    <input type="text" id="input_kelas" name="kelas" value="{{ old('kelas') }}" required placeholder="Contoh XI PPLG 2">
                                </div>

                                <div class="form-group">
                                    <label>No. Handphone <span class="required">*</span></label>
                                    <span class="icon-circle"><i class="fas fa-phone"></i></span>
                                    <input type="text" id="input_nohp" name="no_hp" value="{{ old('no_hp') }}" required placeholder="08xxxxxxxxxxxx">
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="button" id="nextBtn" class="btn-primary">
                                    Next: Pilih Bidang <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>

        </footer>
    </div>

    <script>
        // DOM Elements Navigator
        const step1 = document.querySelector('.step-1');
        const step2 = document.querySelector('.step-2');
        const step3 = document.querySelector('.step-3');
        
        const nextBtn = document.getElementById('nextBtn');
        const backToStep1 = document.getElementById('backToStep1');
        const goToQuizBtn = document.getElementById('goToQuizBtn');
        
        const heroTitle = document.getElementById('heroTitle');
        const heroSubtitle = document.getElementById('heroSubtitle');
        const sekbidOptions = document.querySelectorAll('.sekbid-option');
        const hiddenInput = document.getElementById('selectedSekbid');
        const hiddenInputNama = document.getElementById('selectedSekbidNama');

        // --- SISTEM BANK SOAL SELEKSI (BERBOBOT NILAI) ---
        const daftarKuis = [
            {
                tanya: "Kenapa kamu memilih sekbid ini?",
                opsi: [
                    { teks: "Ingin berkontribusi nyata mengembangkan minat bakat siswa secara bertanggung jawab.", skor: 25 },
                    { teks: "Diajak oleh teman sebaya dan ingin menambah relasi lingkungan sekolah.", skor: 15 },
                    { teks: "Hanya coba-coba untuk mengisi waktu luang di luar jam kelas belajar.", skor: 5 },
                    { teks: "Ingin mendapatkan prioritas nilai tambah dari guru kepengurusan.", skor: 10 }
                ]
            },
            {
                tanya: "Bagaimana cara kamu membagi waktu antara rapat kegiatan OSIS dan kewajiban utama belajar?",
                opsi: [
                    { teks: "Membuat skala prioritas jadwal mingguan dan meminta izin formal jika bentrok kelas.", skor: 25 },
                    { teks: "Meninggalkan kelas belajar demi loyalitas penuh agenda rapat organisasi.", skor: 10 },
                    { teks: "Mementingkan belajar penuh dan mengabaikan program kerja yang ditugaskan.", skor: 15 },
                    { teks: "Mengikuti mana yang paling seru dan ramai di hari tersebut.", skor: 5 }
                ]
            },
            {
                tanya: "Jika ide program kerja divisi kamu ditolak saat rapat pleno, sikap apa yang kamu ambil?",
                opsi: [
                    { teks: "Menerima dengan lapang dada, mengevaluasi kritik, lalu menyusun alternatif baru.", skor: 25 },
                    { teks: "Marah dan menolak mengikuti program kerja divisi lain.", skor: 0 },
                    { teks: "Pasrah sepenuhnya dan membiarkan ketua mengambil alih urusan rencana.", skor: 10 },
                    { teks: "Tetap memaksakan ide pribadi berjalan tanpa persetujuan komite.", skor: 5 }
                ]
            },
            {
                tanya: "Apa yang kamu lakukan jika melihat sesama rekan pengurus pasif dalam mengelola acara sekolah?",
                opsi: [
                    { teks: "Mengajaknya berdiskusi empat mata untuk mendengarkan kendala dan memberi dorongan semangat.", skor: 25 },
                    { teks: "Melaporkannya langsung ke pembina agar dikeluarkan dari kepengurusan.", skor: 10 },
                    { teks: "Membiarkannya saja dan memilih mengerjakan semua tugas sendirian.", skor: 15 },
                    { teks: "Ikut-ikutan menjadi malas bekerja karena merasa pembagian tugas tidak adil.", skor: 5 }
                ]
            }
        ];

        let kuisIndex = 0;
        let jawabanTerpilih = {}; // Menyimpan indeks opsi yang dipilih per soal

        // Navigator Step 1 ke Step 2
        nextBtn.addEventListener('click', () => {


        // Pilihan Seleksi Sekbid Cards
        sekbidOptions.forEach(option => {
            option.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                const nama = this.getAttribute('data-nama');
                hiddenInput.value = id;
                hiddenInputNama.value = nama;

                sekbidOptions.forEach(opt => opt.classList.remove('selected'));
                this.classList.add('selected');
            });
        });

        // Navigator Step 2 ke Step 3 (Quiz Mulai)
        goToQuizBtn.addEventListener('click', () => {
            if(!hiddenInput.value){
                Swal.fire('Pilih Sekbid', 'Silakan tentukan pilihan Sekbid kamu terlebih dahulu!', 'warning');
                return;
            }
            if(!document.getElementById('input_alasan').value || !document.getElementById('input_kontribusi').value){
                Swal.fire('Esay Kosong', 'Harap berikan alasan ketertarikan dan kontribusi nyata Anda!', 'warning');
                return;
            }

            step2.classList.add('hidden');
            step3.classList.remove('hidden');
            heroTitle.innerText = "Kuis Seleksi";
            heroSubtitle.innerText = "Jawablah pertanyaan kuis berikut untuk mengukur kapabilitas dan kesiapan berorganisasi.";
            
            kuisIndex = 0;
            renderSoalKuis();
        });

        // Rendering Tampilan Soal Kuis
        function renderSoalKuis() {
            const dataSoal = daftarKuis[kuisIndex];
            const totalSoal = daftarKuis.length;

            // Update Teks & Progress Tracker Visual
            document.getElementById('quiz-step-text').innerText = `Pertanyaan ${kuisIndex + 1} dari ${totalSoal}`;
            const persen = Math.round(((kuisIndex + 1) / totalSoal) * 100);
            document.getElementById('quiz-percent-text').innerText = `${persen}% Completed`;
            document.getElementById('quizProgressFill').style.width = `${persen}%`;

            // Render Teks Pertanyaan
            document.getElementById('quizQuestionText').innerText = `${kuisIndex + 1}. ${dataSoal.tanya}`;

            // Render Opsi Jawaban Radio-Style
            const containerOpsi = document.getElementById('quizOptionsContainer');
            containerOpsi.innerHTML = '';

            dataSoal.opsi.forEach((opsi, idx) => {
                const isSelected = jawabanTerpilih[kuisIndex] === idx ? 'selected' : '';
                containerOpsi.innerHTML += `
                    <div class="quiz-option-item ${isSelected}" onclick="pilihOpsiKuis(${idx})">
                        <div class="quiz-radio"></div>
                        <span style="font-size:0.95rem; color:rgba(255,255,255,0.85); line-height:1.4;">${opsi.teks}</span>
                    </div>
                `;
            });

            // Ganti teks tombol jika berada di halaman terakhir kuis
            const nextBtnText = document.getElementById('quizNextBtn');
            if (kuisIndex === totalSoal - 1) {
                nextBtnText.innerHTML = `Kirim Pendaftaran <i class="fas fa-paper-plane"></i>`;
                nextBtnText.style.background = "linear-gradient(135deg, #48bb78, #38a169)";
            } else {
                nextBtnText.innerHTML = `Selanjutnya <i class="fas fa-arrow-right"></i>`;
                nextBtnText.style.background = "#f59e5b";
            }
        }

        // Trigger saat Opsi Radio diklik
        function pilihOpsiKuis(idx) {
            jawabanTerpilih[kuisIndex] = idx;
            renderSoalKuis(); // Refresh class style selected
        }

        // Aksi Tombol Next / Submit Kuis
        document.getElementById('quizNextBtn').addEventListener('click', () => {
            if (jawabanTerpilih[kuisIndex] === undefined) {
                Swal.fire('Jawaban Kosong', 'Pilih salah satu radio jawaban sebelum melanjutkan!', 'warning');
                return;
            }

            if (kuisIndex < daftarKuis.length - 1) {
                kuisIndex++;
                renderSoalKuis();
            } else {
                // Hitung total akumulasi skor kuis sebelum submit form
                let totalSkor = 0;
                daftarKuis.forEach((soal, idx) => {
                    const idxPilihan = jawabanTerpilih[idx];
                    totalSkor += soal.opsi[idxPilihan].skor;
                });

                document.getElementById('totalQuizScore').value = totalSkor;

                // Tampilkan SweetAlert konfirmasi akhir pendaftaran
                Swal.fire({
                    title: 'Submit Form Pendaftaran?',
                    text: "Seluruh jawaban akan dikunci dan diakumulasikan oleh sistem.",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#f59e5b',
                    cancelButtonColor: '#4a5568',
                    confirmButtonText: 'Ya, Kirim Data',
                    cancelButtonText: 'Cek Kembali'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('osisForm').submit();
                    }
                });
            }
        });

        // Aksi Tombol Kembali di dalam Kuis
        document.getElementById('quizBackBtn').addEventListener('click', () => {
            if (kuisIndex > 0) {
                kuisIndex--;
                renderSoalKuis();
            } else {
                // Jika di pertanyaan pertama, balikkan ke Step 2 (Pilih Bidang)
                step3.classList.add('hidden');
                step2.classList.remove('hidden');
                heroTitle.innerText = "PILIH BIDANG";
                heroSubtitle.innerText = "Pilihlah salah satu seksi bidang yang paling sesuai dengan passion dan keahlian tokomu.";
            }
        });
    </script>
</body>
</html>