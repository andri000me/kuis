<!DOCTYPE html>
<html>
<head>
<body>
    <div class="col-xs-12 col-md-offset-3  col-md-6 col-xl-6" width="100%">
      <section class="mbr-section article mbr-section__container" id="content1-j" style="background-color: rgb(46, 139, 87); padding-top: 20px; padding-bottom: 20px;">
          <div class="container">
              <div class="row"></div>
                <center>
                    <h2>TRACER KEMAMPUAN EKONOMI</h2>
                    <h2>MAHASISWA BARU STAI YAPATA AL-JAWAMI BANDUNG</h2>
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
<h3>A. Kondisi Keluarga</h3>
<br>
<form id="form1" name="form1" method="post" action="">
 <ol start="1" type="1">
<li>Tempat Belajar Agama Islam...</li>
<br>
   <ol start="1" type="a">
    <i>
        <li><input type="radio" name="NO1" value="a">Orangtua</li>
        <li><input type="radio" name="NO1" value="b">Rumah sendiri</li>
        <li><input type="radio" name="NO1" value="c">Kost/kontrak</li>
        <li><input type="radio" name="NO1" value="d">Pesantren</li>
        </i>  
    </ol>
<br>
<li>Jumlah Anggota Keluarga (Adik dan kakak)</li>
<br>
<div class="row">
      <div class="col-25">
        <label for="jurusan">Adik Kandung</label>
      </div>
      <div class="col-75">
        <select id="jurusan" name="jurusan">
          <option value="1">-</option>
          <option value="1">1 Orang</option>
          <option value="2">2 Orang</option>
          <option value="3">3 Orang</option>
          <option value="4">4 Orang</option>
          <option value="5">5 Orang</option>
          <option value=">5">>5 Orang</option> 
      </select>
      </div>
</div>
<div class="row">
      <div class="col-25">
        <label for="jurusan">Kakak Kandung</label>
      </div>
      <div class="col-75">
        <select id="jurusan" name="jurusan">
          <option value="1">-</option>
          <option value="1">1 Orang</option>
          <option value="2">2 Orang</option>
          <option value="3">3 Orang</option>
          <option value="4">4 Orang</option>
          <option value="5">5 Orang</option>
          <option value=">5">>5 Orang</option> 
      </select>
      </div>
</div>
<div class="row">
      <div class="col-25">
        <label for="jurusan">Adik Tiri</label>
      </div>
      <div class="col-75">
        <select id="jurusan" name="jurusan">
          <option value="1">-</option>
          <option value="1">1 Orang</option>
          <option value="2">2 Orang</option>
          <option value="3">3 Orang</option>
          <option value="4">4 Orang</option>
          <option value="5">5 Orang</option>
          <option value=">5">>5 Orang</option> 
      </select>
      </div>
</div>
<div class="row">
      <div class="col-25">
        <label for="jurusan">Kakak Tiri</label>
      </div>
      <div class="col-75">
        <select id="jurusan" name="jurusan">
          <option value="1">-</option>
          <option value="1">1 Orang</option>
          <option value="2">2 Orang</option>
          <option value="3">3 Orang</option>
          <option value="4">4 Orang</option>
          <option value="5">5 Orang</option>
          <option value=">5">>5 Orang</option> 
      </select>
      </div>
</div>
<div class="row">
      <div class="col-25">
        <label for="jurusan">Adik/Kakak Angka</label>
      </div>
      <div class="col-75">
        <select id="jurusan" name="jurusan">
          <option value="1">-</option>
          <option value="1">1 Orang</option>
          <option value="2">2 Orang</option>
          <option value="3">3 Orang</option>
          <option value="4">4 Orang</option>
          <option value="5">5 Orang</option>
          <option value=">5">>5 Orang</option> 
      </select>
      </div>
</div>
<br>
<li>Kelengkapan Orangtua</li>
<br>
<form id="form1" name="form1" method="post" action="">
 <ol start="1" type="1">
<li>Ayah</li>
<br>
   <ol start="1" type="a">
    <i>
        <li><input type="radio" name="NO1" value="a">Ada</li>
        <li><input type="radio" name="NO1" value="b">Cerai</li>
        <li><input type="radio" name="NO1" value="c">Meninggal</li>
        </i>  
    </ol>
<li>Ibu</li>
<br>
   <ol start="1" type="a">
    <i>
        <li><input type="radio" name="NO1" value="a">Ada</li>
        <li><input type="radio" name="NO1" value="b">Cerai</li>
        <li><input type="radio" name="NO1" value="c">Meninggal</li>
        </i>  
    </ol>
</div>
</ol>
</form>
</ol>
<h3>B. Pekerjaan Orangtua/Wali/Mahasiswa</h3>
 <div class="row">
    <div class="col-25">
        <label for="bkeilmuan">Pekerjaan Orangtua/Wali</label>
      </div>
      <div class="col-75">
        <input type="text" id="bkeilmuan" name="bidangkeilmuan" placeholder="(khusus biaya yang ditanggung orangtua)">
      </div>
</div>
<div class="row">
    <div class="col-25">
        <label for="bkeilmuan">Pekerjaan Pribadi</label>
      </div>
      <div class="col-75">
        <input type="text" id="bkeilmuan" name="bidangkeilmuan" placeholder="(khusus biaya yang ditanggung sendiri)">
      </div>
    </div>
  </form>
  <h3>C. Kondisi Keuangan Keluarga Mahasiswa</h3>
  <br>
<form id="form1" name="form1" method="post" action="">
 <ol start="1" type="1">
<li>Sumber Keuangan Mahasiswa Bersumber Dari?</li>
   <ol start="1" type="a">
    <i>
        <li><input type="radio" name="NO1" value="a">Orangtua</li>
        <li><input type="radio" name="NO1" value="b">Sendiri</li>
        <li><input type="radio" name="NO1" value="c">Lembaga/Beasiswa</li>
        <li><input type="radio" name="NO1" value="d">Pinjaman</li>
        </i>  
    </ol>
    <br>
    <li>Penghasilan orangtua per bulan... (khusus bagi biaya yang ditanggung orangtua)</li>
   <ol start="1" type="a">
    <i>
        <li><input type="radio" name="NO1" value="a"> >5 Juta</li>
        <li><input type="radio" name="NO1" value="b"> 3-5 Juta</li>
        <li><input type="radio" name="NO1" value="c"> 1-3 Juta</li>
        <li><input type="radio" name="NO1" value="d"> Tidak menentu</li>
        </i>  
    </ol>
    <br>
    <li>Penghasilan pribadi per bulan... (khusus bagi biaya yang ditanggung sendiri)</li>
   <ol start="1" type="a">
    <i>
        <li><input type="radio" name="NO1" value="a"> >5 Juta</li>
        <li><input type="radio" name="NO1" value="b"> 3-5 Juta</li>
        <li><input type="radio" name="NO1" value="c"> 1-3 Juta</li>
        <li><input type="radio" name="NO1" value="d"> Tidak menentu</li>
        </i>  
    </ol>
    <br>
    <li>Biaya hidup orangtua per bulan... (khusus bagi biaya yang ditanggung orangtua)</li>
   <ol start="1" type="a">
    <i>
        <li><input type="radio" name="NO1" value="a"> >5 Juta</li>
        <li><input type="radio" name="NO1" value="b"> 3-5 Juta</li>
        <li><input type="radio" name="NO1" value="c"> 1-3 Juta</li>
        <li><input type="radio" name="NO1" value="d"> Tidak menentu</li>
        </i>  
    </ol>
    <br>
    <li>Biaya hidup pribdai per bulan... (khusus bagi biaya yang ditanggung orangtua)</li>
   <ol start="1" type="a">
    <i>
        <li><input type="radio" name="NO1" value="a"> >5 Juta</li>
        <li><input type="radio" name="NO1" value="b"> 3-5 Juta</li>
        <li><input type="radio" name="NO1" value="c"> 1-3 Juta</li>
        <li><input type="radio" name="NO1" value="d"> Tidak menentu</li>
        </i>  
    </ol>
  </ol>
<h3>D. Kepemilikan Kendaraan</h3>
<form id="form1" name="form1" method="post" action="">
<div class="row">
      <div class="col-25">
        <label for="jurusan">Mobil Pribadi</label>
      </div>
      <div class="col-75">
        <select id="jurusan" name="jurusan">
          <option value="1">-</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value=">5">>5</option>   
        </select>
      </div>
      <br>
      &nbsp; Milik: <input type="checkbox" name="reguler" /> Pribadi
      &nbsp;<input type="checkbox" name="karyawan" checked /> Pinjam
      &nbsp;<input type="checkbox" name="karyawan" checked /> Perusahaan
      </div>
    </div>
    <form id="form1" name="form1" method="post" action="">
<div class="row">
      <div class="col-25">
        <label for="jurusan">Sepeda Motor</label>
      </div>
      <div class="col-75">
        <select id="jurusan" name="jurusan">
          <option value="1">-</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value=">5">>5</option>   
        </select>
      </div>
      <br>
      &nbsp; Milik: <input type="checkbox" name="reguler" /> Pribadi
      &nbsp;<input type="checkbox" name="karyawan" checked /> Pinjam
      &nbsp;<input type="checkbox" name="karyawan" checked /> Perusahaan
      </div>
    </div>
    <form id="form1" name="form1" method="post" action="">
<div class="row">
      <div class="col-25">
        <label for="jurusan">Sepeda</label>
      </div>
      <div class="col-75">
        <select id="jurusan" name="jurusan">
          <option value="1">-</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value=">5">>5</option>   
        </select>
      </div>
      <br>
      &nbsp; Milik: <input type="checkbox" name="reguler" /> Pribadi
      &nbsp;<input type="checkbox" name="karyawan" checked /> Pinjam
      &nbsp;<input type="checkbox" name="karyawan" checked /> Perusahaan
      </div>
    </div>
    <br>
        <h3>Demikian, pernyataan ini saya buat dengan sesungguhnya dan penuh kejujuran. Agar yang berkepentingan menjadi maklum</h3>      
    </body>
  </body>
</html>






