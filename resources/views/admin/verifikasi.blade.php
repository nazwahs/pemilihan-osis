<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Verifikasi Peserta</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Inter',sans-serif;
}

body{
background:#212a44;
color:#eef2ff;
}

.container{
display:flex;
min-height:100vh;
}

/* Sidebar */

.sidebar{
width:250px;
background:#1c2132;
padding:30px 20px;
}

.logo{
font-size:25px;
font-weight:800;
color:#f7b36b;
margin-bottom:40px;
}

.sidebar ul{
list-style:none;
}

.sidebar li{
margin-bottom:15px;
}

.sidebar a{
display:flex;
align-items:center;
gap:12px;
padding:15px;
border-radius:15px;
text-decoration:none;
color:white;
transition:.3s;
}

.sidebar a:hover{
background:#f7b36b;
color:#212a44;
}

/* Main */

.main{
flex:1;
padding:30px;
}

.header{
margin-bottom:30px;
}

.header h1{
font-size:35px;
}

/* Search */

.search-box{
position:relative;
margin-bottom:25px;
}

.search-box input{
width:100%;
padding:15px 15px 15px 50px;
border:none;
outline:none;
border-radius:20px;
background:rgba(255,255,255,.08);
color:white;
}

.search-box i{
position:absolute;
left:18px;
top:16px;
color:#f7b36b;
}

/* Card */

.card{

background:rgba(255,255,255,.05);

border-radius:25px;

padding:25px;

margin-bottom:20px;

border:1px solid rgba(255,255,255,.08);

}

.user-top{

display:flex;
justify-content:space-between;
align-items:center;

margin-bottom:20px;

}

.user-name{
font-size:20px;
font-weight:700;
}

.info{

margin-bottom:15px;
color:rgba(255,255,255,.7);

}

.schedule{

display:flex;
gap:10px;
margin-bottom:20px;
flex-wrap:wrap;
}

.schedule input{

padding:12px;
border:none;
outline:none;

border-radius:10px;

background:rgba(255,255,255,.08);
color:white;
}

.actions{

display:flex;
gap:10px;
}

button{

padding:12px 18px;
border:none;
border-radius:999px;

font-weight:600;

cursor:pointer;
transition:.3s;
}

.accept{

background:#32c36d;
color:white;
}

.reject{

background:#df4454;
color:white;
}

button:hover{

transform:translateY(-3px);

}

@media(max-width:800px){

.sidebar{
display:none;
}

.user-top{
flex-direction:column;
align-items:flex-start;
gap:10px;
}

}

</style>

</head>

<body>

<div class="container">

<div class="sidebar">

<div class="logo">
OSIS
</div>

<ul>

<li>
<a href="/admin/dashboard">
<i class="fas fa-chart-line"></i>
Dashboard
</a>
</li>

<li>
<a href="/admin/peserta">
<i class="fas fa-users"></i>
Peserta
</a>
</li>

<li>
<a href="/admin/verifikasi">
<i class="fas fa-check-circle"></i>
Verifikasi
</a>
</li>

<li>
<a href="#">
<i class="fas fa-sign-out-alt"></i>
Logout
</a>
</li>

</ul>

</div>

<div class="main">

<div class="header">

<h1>Verifikasi Peserta</h1>

</div>

<div class="search-box">

<i class="fas fa-search"></i>

<input
type="text"
placeholder="Cari peserta...">

</div>


<div class="card">

<div class="user-top">

<div class="user-name">
Chelsea
</div>

<div>
Sekbid Keagamaan
</div>

</div>

<div class="info">
Nilai Quiz : 90
</div>

<div class="schedule">

<input type="date">

<input type="time">

</div>

<div class="actions">

<button class="accept">

Terima

</button>

<button class="reject">

Tolak

</button>

</div>

</div>

</div>

</div>

</body>
</html>