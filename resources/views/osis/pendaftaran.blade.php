<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Seleksi OSIS | Aturan Keputusan SPK</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background: #23293a; min-height: 100vh; padding: 1.5rem 2rem; color: rgba(255,255,255,0.95); }
        .container { max-width: 1400px; margin: 0 auto; }
        .main-nav { display: flex; align-items: center; gap: 1rem; margin-bottom: 1.25rem; }
        .brand { font-size: 1.5rem; font-weight: 800; color: #f59e5b; display: inline-flex; align-items: center; gap: 0.65rem; }
        .page-hero { display: block; margin-bottom: 2rem; }
        .page-title { font-size: 3rem; font-weight: 800; margin-bottom: 0.5rem; color: #ffffff; }
        .page-subtitle { color: rgba(255,255,255,0.75); margin-bottom: 1rem; }
        .title-underline { width: 120px; height: 4px; background: rgba(255,255,255,0.12); border-radius: 4px; margin: 1rem 0 1.6rem 0; }
        .grid-2col { display: grid; grid-template-columns: 1fr; gap: 2rem; align-items: start; }
        .card { background: rgba(15,23,42,0.9); border-radius: 1.5rem; border: 1px solid rgba(255,255,255,0.03); overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.3); }
        .card-body { padding: 2.2rem; }
        .form-group { margin-bottom: 1.2rem; position: relative; }
        label { font-weight: 600; display: block; margin-bottom: 0.4rem; color: rgba(255,255,255,0.9); font-size: 0.95rem; }
        label .required { color: #e53e3e; margin-left: 0.2rem; }
        input, textarea { width: 100%; border-radius: 999px; padding: 1rem 1.25rem 1rem 4.5rem; border: none; background: #ffffff; color: #1f2937; font-family: 'Inter', sans-serif; font-size: 0.95rem; transition: all 0.2s; min-height: 3.5rem; }
        textarea { border-radius: 1.5rem !important; padding: 1.25rem !important; resize: none; }
        input:focus, textarea:focus { outline: none; box-shadow: 0 6px 18px rgba(245,158,91,0.2); background: #fff; }
        .input-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem; margin-bottom: 1rem; }
        .icon-circle { position: absolute; left: 0.9rem; top: 50%; transform: translateY(-50%); width: 40px; height: 40px; border-radius: 50%; background: #ffffff; display: flex; align-items: center; justify-content: center; color: #6b7280; box-shadow: 0 4px 10px rgba(2,6,23,0.12); font-size: 0.95rem; }
        .btn-primary { background: #f59e5b; color: #1b1e32; padding: 0.9rem 1.6rem; border-radius: 999px; border: none; font-weight: 700; cursor: pointer; transition: all 0.15s; }
        .btn-primary:hover { transform: translateY(-2px); filter: brightness(1.1); }
        .form-actions { display: flex; justify-content: flex-end; margin-top: 1.5rem; gap: 1rem; }
        .hidden { display: none; }
        .sekbid-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 1rem; margin: 1.5rem 0; }
        .sekbid-option { background: #1e293b; border: 2px solid rgba(255,255,255,0.05); border-radius: 1rem; padding: 1.2rem; text-align: center; cursor: pointer; transition: all 0.2s; position: relative; }
        .sekbid-option:hover { transform: translateY(-3px); border-color: #f59e5b; }
        .sekbid-option.selected { background: rgba(245, 158, 91, 0.1); border-color: #f59e5b; }
        .sekbid-icon { font-size: 2rem; margin-bottom: 0.5rem; }
        .sekbid-name { font-weight: 600; font-size: 0.9rem; color: #ffffff; }
        .radio-check { position: absolute; top: 0.5rem; right: 0.5rem; width: 20px; height: 20px; border-radius: 50%; background: rgba(255,255,255,0.1); border: 2px solid rgba(255,255,255,0.2); }
        .sekbid-option.selected .radio-check { background: #f59e5b; border-color: #f59e5b; box-shadow: inset 0 0 0 3px #1e293b; }
        
        /* Quiz Layout Styles */
        .quiz-progress-container { background: rgba(255, 255, 255, 0.05); padding: 1rem; border-radius: 1rem; margin-bottom: 1.5rem; }
        .quiz-progress-bar-wrapper { width: 100%; background: rgba(255, 255, 255, 0.1); height: 6px; border-radius: 10px; overflow: hidden; margin-top: 0.5rem; }
        .quiz-progress-fill { background: #f59e5b; height: 100%; width: 20%; transition: width 0.3s ease; }
        .quiz-option-item { background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.08); padding: 1.2rem; border-radius: 1rem; margin-bottom: 0.8rem; cursor: pointer; display: flex; align-items: center; gap: 1rem; transition: all 0.2s; }
        .quiz-option-item:hover { background: rgba(245, 158, 91, 0.05); border-color: #f59e5b; }
        .quiz-option-item.selected { background: rgba(245, 158, 91, 0.1); border-color: #f59e5b; }
        .quiz-radio { width: 18px; height: 18px; border: 2px solid rgba(255, 255, 255, 0.4); border-radius: 50%; display: flex; align-items: center; justify-content: center; }
        .quiz-option-item.selected .quiz-radio { border-color: #f59e5b; background: #f59e5b; box-shadow: inset 0 0 0 3px #151b26; }
        
        /* --- STYLE BARU UNTUK KELURUSAN SEPERTI DI GAMBAR --- */
        .result-container {
            text-align: center;
            padding: 1.5rem 0;
        }
        .result-icon-wrapper {
            margin-bottom: 1.5rem;
        }
        .result-icon-wrapper i {
            font-size: 4.5rem;
        }
        .result-icon-success {
            color: #ffffff;
            background: #23293a;
            width: 90px;
            height: 90px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 4px solid #ffffff;
        }
        .result-icon-failed {
            color: #ef4444;
            font-size: 5rem !important;
            gap: 0.65rem;
            cursor: pointer;
        }

        .brand:hover {
            color: #f59e5b;
        }

        /* Header / Page Title */
        .page-hero {
            display: block;
            margin-bottom: 2rem;
            text-align: left;
        }

        .result-title-status {
            font-size: 1.6rem;
            font-weight: 800;
            letter-spacing: 1px;
            margin-bottom: 0.5rem;
            color: #ffffff;
        }

        .result-message {
            color: rgba(255, 255, 255, 0.7);
        }

        .page-subtitle {
            color: rgba(255,255,255,0.75);
            margin-bottom: 1rem;
            font-size: 1rem;
        }

        .title-underline {
            width: 120px;
            height: 4px;
            background: rgba(255,255,255,0.12);
            border-radius: 4px;
            margin: 1rem 0 1.6rem;
        }

        /* Card Style */
        .card {
            background: rgba(15,23,42,0.9);
            border-radius: 1.5rem;
            border: 1px solid rgba(255,255,255,0.03);
            overflow: hidden;
            transition: transform 0.2s, box-shadow 0.2s;
            width: 100%;
        }

        .card-body {
            padding: 2.2rem;
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
            max-width: 500px;
            margin: 0 auto 2rem auto;
            line-height: 1.5;
        }
        .badge-info-container 
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
            flex-wrap: wrap;
            justify-content: center;
            gap: 0.65rem;
            margin-bottom: 2.5rem;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }
        .pill-badge {
            background: #23293a;
            padding: 0.6rem 1.2rem;
            border-radius: 999px;
            font-size: 0.85rem;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .pill-badge strong {
            color: #ffffff;
            font-weight: 700;
        }
        .btn-dashboard {
            background: #f59e5b;
            color: #1b1e32;
            padding: 0.9rem 2.5rem;
            border-radius: 999px;
            border: none;
            font-weight: 700;
            font-size: 0.95rem;
            cursor: pointer;
            transition: all 0.2s;
            box-shadow: 0 4px 15px rgba(245, 158, 91, 0.2);
        }
        .btn-dashboard:hover {
            transform: translateY(-2px);
            filter: brightness(1.1);
        }
        footer { text-align: center; margin-top: 2rem; color: rgba(255,255,255,0.4); font-size: 0.8rem; }
            padding: 0.9rem 2rem;
            border-radius: 999px;
            border: none;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 0 10px 30px rgba(245,158,92,0.18);
            transition: transform 0.15s, box-shadow 0.15s;
            font-size: 1rem;
        }

        .btn-primary:hover { 
            transform: translateY(-2px);
            box-shadow: 0 12px 35px rgba(245,158,92,0.25);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        .form-actions { 
            display: flex; 
            justify-content: flex-end; 
            margin-top: 2rem; 
            gap: 1rem; 
        }

        footer {
            text-align: center;
            margin-top: 3rem;
            color: rgba(255,255,255,0.5);
            font-size: 0.8rem;
        }

        @media (max-width: 768px) {
            .input-grid {
                grid-template-columns: 1fr;
            }

            .page-title {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="main-nav">
            <div class="brand" onclick="window.location.href='/'"><i class="fas fa-arrow-left"></i> OSIS</div>
        </header>

        <div class="page-hero" id="pageHeroHeader">
            <div class="page-title" id="heroTitle">Data Diri</div>
            <div class="page-subtitle" id="heroSubtitle">Lengkapi data dirimu dengan lengkap untuk melanjutkan proses pendaftaran calon pengurus OSIS.</div>
            <div class="title-underline"></div>
        </div>

        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('osis.pendaftaran.store') }}" id="osisForm">
                    @csrf
                    <div class="input-grid">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <span class="icon-circle"><i class="fas fa-user"></i></span>
                            <input type="text" id="input_nama" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required placeholder="Masukkan nama lengkap">
                        </div>

                        <div class="form-group">
                            <label>NIS</label>
                            <span class="icon-circle"><i class="fas fa-id-card"></i></span>
                            <input type="text" id="input_nis" name="nis" value="{{ old('nis') }}" required placeholder="Masukkan NIS">
                        </div>

                        <div class="form-group">
                            <label>Kelas</label>
                            <span class="icon-circle"><i class="fas fa-book-open"></i></span>
                            <input type="text" id="input_kelas" name="kelas" value="{{ old('kelas') }}" required placeholder="Contoh XI PRL 2">
                        </div>

                        <div class="form-group">
                            <label>No Handphone</label>
                            <span class="icon-circle"><i class="fas fa-phone"></i></span>
                            <input type="text" id="input_nohp" name="no_hp" value="{{ old('no_hp') }}" required placeholder="08xxxxxxxxxxxx">
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn-primary">
                            Selanjutnya
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <footer>
            <i class="fas fa-copyright"></i> 2026 - Panitia Seleksi Pengurus OSIS Berbasis Aturan Keputusan SPK
            © 2026 Pemilihan OSIS
        </footer>
</div>
</body>
</html>
