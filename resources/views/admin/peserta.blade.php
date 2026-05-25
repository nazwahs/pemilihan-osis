<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Data Peserta</title>

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
color:white;
text-decoration:none;
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

/* Search */

.search-box{

position:relative;
margin-bottom:25px;

}

.search-box input{

width:100%;
padding:15px 20px 15px 50px;

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

padding:7px 14px;
border-radius:999px;
font-size:13px;

}

.lolos{

background:#33c16b;

}

.pending{

background:#ffc04d;
color:black;

}

.tidak{

background:#e04f5f;
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

<h1>Data Peserta</h1>

</div>


<div class="search-box">

<i class="fas fa-search"></i>

<input
type="text"
placeholder="Cari peserta...">

</div>


<div class="table-box">

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
<td>78</td>

<td>

<span class="status pending">

Pending

</span>

</td>

</tr>

<tr>

<td>Budi</td>
<td>Olahraga</td>
<td>60</td>

<td>

<span class="status tidak">

Tidak Lolos

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