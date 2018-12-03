<!DOCTYPE html>
<html>
<head>
<body>
<div class="col-xs-12 col-md-offset-3  col-md-6 col-xl-6">
  <section class="mbr-section article mbr-section__container" id="content1-j" style="background-color: rgb(46, 139, 87); padding-top: 20px; padding-bottom: 20px;">
      <div class="container">
          <div class="row"></div>
            <center>
                <h2>ANGKET PENELUSURAN MINAT DAN BAKAT</h2>
                <h2>CALON MAHASISWA BARU STAI YAPATA AL-JAWAMI BANDUNG</h2>
                <h2>TAHUN AKADMIK 2018/1019</h2>
            </center>
        </div>
    </section>
</div>
</body>

<style>
* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}


label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 50%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>

<form method="post" action="minat_bakat.php?isi=konten1" enctype="multipart/form-data">

<input type="hidden" required name="user" value=<?php echo $_GET['user']; ?> >
    <div class="row">
      <div class="col-25">
        <label for="jurusan">Jurusan/Prodi Pilihan 1</label>
      </div>
      <div class="col-75">
        <select id="jurusan" name="jurusan" required>
        <option></option>
          <option  value="pai">Pendidikan Agama Islam</option>
          <option  value="hukumekonomi">Hukum Ekonomi Syariah</option>
          <option  value="paud">Pendidikan anak Usia Dini</option>
          <option  value="kpi">Komunikasi Penyiaran Islam</option>
          <option  value="psi">Psikologi Islam</option>
          <option  value="manajemenhu">Manajemen Haji dan Umrah</option>   
        </select>
      </div>
      <br>
      &nbsp; Kelas: <input required type="radio" name="jenis" value="Reguler" /> Reguler
      &nbsp;<input required type="radio" name="jenis" value="Karyawan" /> Karyawan
      </div>

    </div>
      <div class="row">
      <div class="col-25">
        <label for="jurusan">Jurusan/Prodi Pilihan 2</label>
      </div>
      <div class="col-75">
        <select id="jurusan1" name="jurusan1">
         <option></option>
          <option value="pai">Pendidikan Agama Islam</option>
          <option value="hukumekonomi">Hukum Ekonomi Syariah</option>
          <option value="paud">Pendidikan anak Usia Dini</option>
          <option value="kpi">Komunikasi Penyiaran Islam</option>
          <option value="psi">Psikologi Islam</option>
          <option value="manajemenhu">Manajemen Haji dan Umrah</option>   
        </select>
      </div>
      <br>
      &nbsp; Kelas: <input required type="radio" name="jenis1" value="Reguler" /> Reguler
      &nbsp; <input required type="radio" name="jenis1" value="Karyawan"  /> Karyawan
      </br>
    </div>
</div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Alasan memilih</label>
      </div>
      <div class="col-75">
        <textarea  required id="subject" name="alasan" placeholder="1. " style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Alasan memilih</label>
      </div>
      <div class="col-75">
        <textarea required id="subject" name="alasan1" placeholder="2. " style="height:200px"></textarea>
      </div>
    </div>
</body>
    <center><h3> A. MINAT (dapat diisi lebih dari satu, beri tanda "-" bila tidak memiliki jawaban)</h3></center>
       

       <input name="daftar" type="submit" value="Daftar">

</form>





































    <div class="container">

<hr>
  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="bkeilmuan">Bidang Keilmuan</label>
      </div>
      <div class="col-75">
        <input type="text" id="bkeilmuan" name="bidangkeilmuan">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="profesi">Profesi/Pekerjaan</label>
      </div>
      <div class="col-75">
        <input type="text" id="profesi" name="profesi">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="profesi">Bahasa</label>
      </div>
      <div class="col-75">
        <input type="text" id="profesi" name="profesi">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="profesi">Keahlian/Keterampilan</label>
      </div>
      <div class="col-75">
        <input type="text" id="profesi" name="profesi">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="profesi">Bidang Agama</label>
      </div>
      <div class="col-75">
        <input type="text" id="profesi" name="profesi">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="profesi">Bidang Seni</label>
      </div>
      <div class="col-75">
        <input type="text" id="profesi" name="profesi">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="profesi">Bidang Olahraga</label>
      </div>
      <div class="col-75">
        <input type="text" id="profesi" name="profesi">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="profesi">Bidang Lainnya</label>
      </div>
      <div class="col-75">
        <input type="text" id="profesi" name="profesi">
      </div>
    </div>
</form>
</div>

<center><h3> B. BAKAT (dapat diisi lebih dari satu, beri tanda "-" bila tidak memiliki jawaban)</h3></center>
    <div class="container">
  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="bkeilmuan">Bidang Keilmuan</label>
      </div>
      <div class="col-75">
        <input type="text" id="bkeilmuan" name="bidangkeilmuan">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="profesi">Bidang Keagamaan</label>
      </div>
      <div class="col-75">
        <input type="text" id="profesi" name="profesi">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="profesi">Bidang Bahasa</label>
      </div>
      <div class="col-75">
        <input type="text" id="profesi" name="profesi">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="profesi">Bidang Keterampilan</label>
      </div>
      <div class="col-75">
        <input type="text" id="profesi" name="profesi">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="profesi">Bidang Seni</label>
      </div>
      <div class="col-75">
        <input type="text" id="profesi" name="profesi">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="profesi">Bidang Olahraga</label>
      </div>
      <div class="col-75">
        <input type="text" id="profesi" name="profesi">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="profesi">Bidang Lainnya</label>
      </div>
      <div class="col-75">
        <input type="text" id="profesi" name="profesi">
      </div>
    </div>

   <input name="daftar" type="submit" value="Daftar">
</form>
</div>

    <center><h3> C. JEJAK PRESTASI</h3></center>
        <h4> 1. Bidang Keilmuan/Sains</h4>
            <body>

<table id="customers">
  <tr>
    <th><center>No</center></th>
    <th><center>Jenis Prestasi</center></th>
    <th><center>Juara Ke</center></th>
    <th><center>Tingkat</center></th>
    <th><center>Tahun</center></th>
  </tr>
  <tr>
    <td><center>1</center></td>
    <td>Juara Kelas/Juara Umum/Sekolah</td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>2</center></td>
    <td>Lomba Sains dan Matematika</td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>3</center></td>
    <td>Lomba Keagamaan (MTQ)</td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>4</center></td>
    <td>Lomba Bahasa Asing</td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>5</center></td>
    <td>Lomba Karya Tulis Ilmiah</td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>6</center></td>
    <td><input type="text" id="profesi" name="profesi" placeholder="Lainnya......"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>7</center></td>
    <td><input type="text" id="profesi" name="profesi" placeholder="Lainnya......"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  
</table>

</body>

<h4> 2. Bidang Seni dan Olahraga</h4>
            <body>

<table id="customers">
  <tr>
    <th><center>No</center></th>
    <th><center>Jenis Prestasi</center></th>
    <th><center>Juara Ke</center></th>
    <th><center>Tingkat</center></th>
    <th><center>Tahun</center></th>
  </tr>
  <tr>
    <td><center>1</center></td>
    <td>Lomba Seni Suara</td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>2</center></td>
    <td>Lomba Seni Tari</td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>3</center></td>
    <td>Lomba Seni Lukis/Rupa</td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>4</center></td>
    <td>Lomba Seni Peran/Drama</td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>5</center></td>
    <td>Lomba Sepak Bola/Futsal</td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>6</center></td>
    <td>Lomba Volley Ball</td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>7</center></td>
    <td>Lomba Bulu Tangkis/Badminton</td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>8</center></td>
    <td>Lomba Sepak Tenis Meja</td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>9</center></td>
    <td>Lomba Tenis Lantai</td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>10</center></td>
    <td>Lomba Bela Diri</td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>11</center></td>
    <td>Lomba Paduan Suara</td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>12</center></td>
    <td><input type="text" id="profesi" name="profesi" placeholder="Lainnya......"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>13</center></td>
    <td><input type="text" id="profesi" name="profesi" placeholder="Lainnya......"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
   <tr>
    <td><center>14</center></td>
    <td><input type="text" id="profesi" name="profesi" placeholder="Lainnya......"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>13</center></td>
    <td><input type="text" id="profesi" name="profesi" placeholder="Lainnya......"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr> 
</table>

</body>
 <h4> 3. Pengalaman Organisasi Intra Dan Ekstra Kurikuler</h4>
 <body>
 <table id="customers">
  <tr>
    <th><center>No</center></th>
    <th><center>Jenis Organisasi</center></th>
    <th><center>Jabatan</center></th>
    <th><center>Tahun/Kelas</center></th>
  </tr>
  <tr>
    <td><center>1</center></td>
    <td>OSIS</td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>2</center></td>
    <td>Pramuka</td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>3</center></td>
    <td>Paskibra</td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>4</center></td>
    <td>PMR</td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>5</center></td>
    <td>Paduan Suara</td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>6</center></td>
    <td>Marchine Band</td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>7</center></td>
    <td>Karawitan/Degung/Seni Sunda</td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>8</center></td>
    <td><input type="text" id="profesi" name="profesi"placeholder="Lainnya......"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>9</center></td>
    <td><input type="text" id="profesi" name="profesi"placeholder="Lainnya......"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
  <tr>
    <td><center>10</center></td>
    <td><input type="text" id="profesi" name="profesi"placeholder="Lainnya......"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
    <td><input type="text" id="profesi" name="profesi"></td>
  </tr>
</table>
</body>
<br>
<center><h3> D. PENGALAMAN RELIGIUS/KEAGAMAAN (pilih salah satu jawaban yang cocok)</h3></center>
<form id="form1" name="form1" method="post" action="">
 <ol start="1" type="1">
<li>Tempat Belajar Agama Islam...</li>
<br>
   <ol start="1" type="a">
    <i>
        <li><input type="radio" name="NO1" value="a">rumah/sekolah</li>
        <li><input type="radio" name="NO1" value="b">mushola</li>
        <li><input type="radio" name="NO1" value="c">pesantren</li>
        <li><input type="radio" name="NO1" value="d">tidak ada</li>
        </i>  
    </ol>
<br>
<li>Biasa Membaca al-Quran?</li>
<br>
    <ol start="1" type="a">
     <i>
        <li><input type="radio" name="NO2" value="a">Selalu</li>
        <li><input type="radio" name="NO2" value="b">Jarang</li>
        <li><input type="radio" name="NO2" value="c">Kondisional</li>
        <li><input type="radio" name="NO2" value="d">Tidak Pernah</li>
        </i>
   </ol>
<br>
<li>Mengikuti kegiatan Peringatan Hari Besar Islam</li>
<br>
 <ol start="1" type="a">
     <i>
<li><input type="radio" name="NO2" value="a">Selalu</li>
<li><input type="radio" name="NO2" value="b">Jarang</li>
<li><input type="radio" name="NO2" value="c">Kondisional</li>
<li><input type="radio" name="NO2" value="d">Tidak Pernah</li>
  </i>
   </ol>
<br>
<li>Mengikuti kegiatan keagamaan di media</li>
<br>
 <ol start="1" type="a">
     <i>
<li><input type="radio" name="NO4" value="a">Internet</li>
<li><input type="radio" name="NO4" value="b">TV</li>
<li><input type="radio" name="NO4" value="c">Radio</li>
<li><input type="radio" name="NO4" value="d">Tidak Pernah</li>
</i>
   </ol>
<br>
<li>Menghafal Al-Qur'an</li>
<br>
 <ol start="1" type="a">
     <i>
<li><input type="radio" name="NO5" value="a">16-30 Juz</li>
<li><input type="radio" name="NO5" value="b">6-15 Juz</li>
<li><input type="radio" name="NO5" value="c">1-5 Juz</li>
<li><input type="radio" name="NO5" value="d">1 Juz</li>
</i>
   </ol>
<br>
<li>Apakah anda senang membaca buku keagamaan?</li>
<br>
 <ol start="1" type="a">
     <i>
<li><input type="radio" name="NO2" value="a">Selalu</li>
<li><input type="radio" name="NO2" value="b">Jarang</li>
<li><input type="radio" name="NO2" value="c">Kondisional</li>
<li><input type="radio" name="NO2" value="d">Tidak Pernah</li>
  </i>
   </ol>
<br>
<li>Pengalaman mesantren/takhashush?</li>
<br>
 <ol start="1" type="a">
     <i>
<li><input type="radio" name="NO7" value="a">>5 Tahun</li>
<li><input type="radio" name="NO7" value="b">3-5 Tahun</li>
<li><input type="radio" name="NO7" value="c">1-3 Tahun</li>
<li><input type="radio" name="NO7" value="d">Kurang dari 1 tahun</li>
</i>
   </ol>
<h3>Demikian, pernyataan ini saya buat dengan sesungguhnya dan penuh kejujuran. Agar yang berkepentingan menjadi maklum</h3>      

</body>
</body>
</html>