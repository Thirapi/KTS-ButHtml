<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Tanda Santri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card-container {
            perspective: 1000px; /* Memberikan efek perspektif */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            width: 8.5cm;
            height: 5.5cm;
            position: relative;
            transform-style: preserve-3d; /* Mengatur elemen untuk tetap mempertahankan 3D transform */
            transition: transform 0.5s; /* Animasi perubahan transformasi */
        }

        .card:hover {
            transform: rotateY(180deg); /* Ketika kartu dihover, putar sebesar 180 derajat pada sumbu Y */
        }

        .face {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden; /* Menyembunyikan elemen belakang ketika tidak terlihat */
        }

        .face--back {
            transform: rotateY(180deg); /* Mulai dengan mengatur elemen belakang terlihat */
        }

        /* Add your existing CSS styles here */
        /* ... */

    </style>
</head>
<body>
<!-- Kartu Tanda Santri Container -->
<div class="card-container">
    <!-- Kartu -->
    <div class="card">
        <!-- Depan Kartu -->
        <div class="face face--front">
            <!-- Isi kartu depan disini -->
            <div class="kts-header">
                <img src="logo.jpg" alt="Logo" width="40px">
                <h2 style="letter-spacing: 2px; font-weight:300; padding-top: 2px;">Yayasan Sirrul Albab</h2>
                <h2>Pondok Pesantren Matlabus Salik</h2>
                <h2 style="letter-spacing: 4px;">(Al-matlab)</h2>
                <div class="address-info">
                    <span>Jl Kamboja Jogomerto, Tanjunganom, Nganjuk, Jawa Timur 64483</span>
                </div>
                <div class="contact-info">
                    <span>Telepon : 0358 - 7701158 &nbsp;Email : matlabussalik@gmail.com</span>
                </div>
                <div class="tagline">Mempersiapkan Kader Islam 'Arif Billah Berakhlak Karimah</div>
            </div>
            <div class="kts-info">
                <div class="kts-photo-container">
                    <div class="kts-photo">   
                        <img style="color:white; "src="./img_avatar.png" width="100%" height="100%"alt="">
                    </div> 
                    <div class="kts-photo-text">Kartu Pelajar</div>
                    <div class="kts-validity">
                        <span style="font-weight: bold;">Berlaku Selama Menjadi Santri</span>
                    </div>
                </div>
                <div class="info-text">
                    <table style="width:100%;">
                        <p>Rudi Herlambang</p>
                        <tr>
                            <td style="width:30%;">NO. INDUK</td><td>:</td><td>12.34.5678</td>
                        </tr>
                        <tr>
                            <td>TEMPAT</td><td>:</td><td>Palembang</td>
                        </tr>
                        <tr>
                            <td>&amp; TGL LAHIR</td><td>:</td><td>01 Januari 2006</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: baseline;">ALAMAT</td><td style="vertical-align: baseline;">:</td><td>Jl. Segaran No. 97 RT.02 RW.01, Kel. 9 Ilir Kec. Ilir Timur II, Sumatera Selatan</td>
                        </tr>
                        <tr>
                        <td>JENJANG</td><td>:</td><td>REGULER PA</td>
                        </tr>
                        <tr>
                            <td>TAHUN MASUK</td><td>:</td><td>2019-2020</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="kts-footer"></div>
        </div>
        <!-- Belakang Kartu -->
        <div class="face face--back">
            <!-- Isi kartu belakang disini -->
            <div class="kts-header">
                <img src="matlab.png" alt="matlabussalik" width="40px">
                <div class="tagline"></div>
            </div>
            <div class="motto">
                <p style="padding-left: 0; font-size: 11px; font-weight: bolder; letter-spacing: 2px;">MOTTO SANTRI</p>
                <p>1. Bermental Rabbani.</p>
                <p>2. Merdeka Sejati.</p>
                <p>3. Berkepedulian Tinggi dan Akhlak Karimah.</p>
                <p>4. Berpengetahuan Luas.</p>
                <p>5. Ikhlas, Lillah, Billah, dan Fillah.</p>
                <p>6. Sederhana Ukril dan cakap.</p>
                <p>7. Sabar dan Tawakkal.</p>
            </div>
            <div class="kts-footer"></div>
        </div>
    </div>
</div>
<!-- End of Kartu Tanda Santri Container -->
</body>
</html>
