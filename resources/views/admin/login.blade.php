<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | OSIS</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:'Inter',sans-serif;
            min-height:100vh;
            background:#212a44;
            color:#eef2ff;

            display:flex;
            justify-content:center;
            align-items:center;
            padding:20px;
        }

        .login-container{
            width:100%;
            max-width:1000px;

            display:grid;
            grid-template-columns:1fr 1fr;
            gap:40px;
            align-items:center;
        }

        /* LEFT */

        .left-content h1{
            font-size:3rem;
            line-height:1;
            margin-bottom:20px;
        }

        .left-content p{
            color:rgba(255,255,255,.7);
            line-height:1.8;
        }

        .left-content span{
            color:#f7b36b;
        }

        /* RIGHT */

        .login-card{

            background:rgba(255,255,255,.05);

            border:1px solid rgba(255,255,255,.1);

            backdrop-filter:blur(20px);

            padding:40px;
            border-radius:30px;

            box-shadow:
            0 10px 30px rgba(0,0,0,.25);
        }

        .login-card h2{
            text-align:center;
            margin-bottom:30px;
            color:#f7b36b;
        }

        .input-group{
            margin-bottom:20px;
        }

        .input-group label{
            display:block;
            margin-bottom:8px;
            font-weight:600;
        }

        .input-group input{

            width:100%;
            padding:15px;

            border:none;
            border-radius:15px;

            background:rgba(255,255,255,.08);

            color:white;
            outline:none;
        }

        .input-group input::placeholder{
            color:rgba(255,255,255,.5);
        }

        .btn-login{

            width:100%;
            padding:15px;

            border:none;
            border-radius:999px;

            background:#f7b36b;
            color:#1c2132;

            font-size:16px;
            font-weight:700;

            cursor:pointer;

            transition:.3s;
        }

        .btn-login:hover{
            transform:translateY(-3px);
        }

        .admin-icon{

            text-align:center;
            font-size:50px;

            margin-bottom:20px;
            color:#f7b36b;
        }

        @media(max-width:768px){

            .login-container{
                grid-template-columns:1fr;
            }

            .left-content{
                text-align:center;
            }

        }

    </style>

</head>
<body>

<div class="login-container">

    <div class="left-content">

        <h1>
            Admin <br>
            <span>Dashboard OSIS</span>
        </h1>

        <p>
            Kelola peserta, verifikasi pendaftaran,
            dan atur jadwal wawancara calon anggota
            OSIS dengan sistem yang terintegrasi.
        </p>

    </div>

    <div class="login-card">

        <div class="admin-icon">
            <i class="fas fa-user-shield"></i>
        </div>

        <h2>Login Admin</h2>

        <form action="/admin/dashboard">

            <div class="input-group">

                <label>Email</label>

                <input type="email"
                placeholder="Masukkan email">

            </div>

            <div class="input-group">

                <label>Password</label>

                <input type="password"
                placeholder="Masukkan password">

            </div>

            <button class="btn-login">
                Login
            </button>

        </form>

    </div>

</div>

</body>
</html>