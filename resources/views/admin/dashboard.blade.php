<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard Admin</title>

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

text-decoration:none;
color:white;

border-radius:15px;

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

display:flex;
justify-content:space-between;
align-items:center;

margin-bottom:30px;

}

.header h1{

font-size:35px;

}

.admin-profile{

display:flex;
align-items:center;
gap:10px;

}

.profile{

width:45px;
height:45px;

border-radius:50%;

background:#f7b36b;
color:#212a44;

display:flex;
align-items:center;
justify-content:center;
font-weight:bold;

}

/* Cards */

.cards{

display:grid;

grid-template-columns:
repeat(auto-fit,minmax(220px,1fr));

gap:20px;

margin-bottom:35px;

}

.card{

background:rgba(255,255,255,.05);

padding:25px;

border-radius:25px;

border:1px solid rgba(255,255,255,.08);

transition:.3s;

}

.card:hover{

transform:translateY(-8px);

}

.card i{

font-size:30px;

color:#f7b36b;

margin-bottom:15px;

}

.card h2{

font-size:28px;
margin-bottom:5px;

}

/* Table */

.table-box{

background:rgba(255,255,255,.05);

padding:25px;

border-radius:25px;

overflow:auto;

}

table{

width:100%;
border-collapse:collapse;

}

th,td{

padding:15px;
text-align:left;

}

th{

color:#f7b36b;

}

tr{

border-bottom:1px solid rgba(255,255,255,.08);

}

.status{

padding:8px 14px;
border-radius:999px;
font-size:13px;

}

.lolos{

background:#36c275;
}

.pending{

background:#ffb84d;
color:black;
}

@media(max-width:800px){

.sidebar{
display:none;
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
<a href="#">
<i class="fas fa-chart-line"></i>
Dashboard
</a>
</li>

<li>
<a href="#">
<i class="fas fa-users"></i>
Peserta
</a>
</li>

<li>
<a href="#">
<i class="fas fa-check-circle"></i>
Verifikasi
</a>
</li>

<li>
<a href="#">
<i class="fas fa-calendar"></i>
Wawancara
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

<h1>Dashboard Admin</h1>

<div class="admin-profile">

<div class="profile">
A
</div>

Admin

</div>

</div>


<div class="cards">

<div class="card">

<i class="fas fa-users"></i>

<h2>120</h2>

<p>Total Peserta</p>

</div>


<div class="card">

<i class="fas fa-user-check"></i>

<h2>85</h2>

<p>Diverifikasi</p>

</div>


<div class="card">

<i class="fas fa-user-clock"></i>

<h2>35</h2>

<p>Pending</p>

</div>

</div>


<div class="table-box">

<h2 style="margin-bottom:20px;">
Peserta Terbaru
</h2>

<table>

<thead>

<tr>

<th>Nama</th>
<th>Sekbid</th>
<th>Nilai</th>
<th>Status</th>

</tr>

</thead>

<tbody>

<tr>

<td>Chelsea</td>
<td>Keagamaan</td>
<td>90</td>

<td>

<span class="status lolos">

Lolos

</span>

</td>

</tr>

<tr>

<td>Andi</td>
<td>Pendidikan</td>
<td>70</td>

<td>

<span class="status pending">

Pending

</span>

</td>

</tr>

</tbody>

</table>

</div>

</div>

</div>

</body>
</html>