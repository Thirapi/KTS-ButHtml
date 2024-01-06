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

        .kts-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 8.5cm;
            height: 5.5cm;
            text-align: center;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .kts-header {
            background-color: #000;
            color: #fff;
            box-sizing: border-box;
            font-size: 7px;
            height: 1.5cm;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
        }
        .kts-header img{
            background-color: #000;
            color: #fff;
            box-sizing: border-box;
            height: 1cm;
            width: 1cm;
            position: absolute;
            left: 30px;
            top: 5px;
        }
        .kts-header h2 {
            margin: 0;
            font-size: 8px;
            text-transform: uppercase;
            line-height: 1.2;
            letter-spacing: 2px;
            padding-left: 60px;
        }
        .kts-header span{
            padding-left: 60px;
            font-size: 7px;
            color: #bbb;
            margin: 0;
        }

        .tagline {
            font-size: 8px;
            font-weight: bold;
            margin: 0;
            padding: 0;
        }

        .kts-header .tagline {
            font-family: georgia;
            background-color: #ffd700;
            letter-spacing: 1px;
            font-style: italic;
            color: #000;
            padding: 0.05cm;
            font-size: 7px;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .kts-info {
            text-align: left;
            flex-grow: 1;
            display: flex;
            align-items: center;
            font-size: 8px;
            margin-top: 55px;
            margin-left: 15px;
        }

        .kts-info .kts-photo-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-right: 5px;
        }

        .kts-info .kts-photo {
            width: 2cm;
            height: 2.5cm; /* Ukuran kts-photo diperbarui */
            background-color: #3498db;
            border: 2px solid #000;
            border-radius: 5px;
            margin-bottom: 4px;
        }

        .kts-info .kts-photo-text {
            font-family: Impact;
            font-weight: bold;
            font-size: 13px;
            text-transform: uppercase;
            padding: 0;
        }

        .kts-info .info-text {
            font-size: 8px;
            font-weight: bold;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-left: 5px; /* Jarak dari kts-photo */
            margin-top: -24px;
        }

        .kts-info .info-text p {
            font-size: 12px;
            font-family: Arial Black;
            padding-bottom: 4px;
            margin: 0;
            text-transform: uppercase; /* Mengubah ke huruf kapital */
            position: relative;
        }

        .kts-info .info-text .separator {
            display: inline-block;
            width: 5px; /* Atur lebar spasi sesuai kebutuhan */
            text-align: center;
        }

        .kts-info .kts-validity {
            font-family: Tahoma;
            margin-top: 2px;
            border-top: 1px solid #000;
            border-bottom: 1px solid #000;
            font-size: 4.2px;
            width: 100%;
            padding: 2px 0;
            text-transform: uppercase;
        }

        .address-info,
        .contact-info {
            margin: 0;
        }

        .kts-footer {
            background-color: #ffd700;
            color: #000;
            font-size: 7px;
            padding: 2px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            
        }

        table td {
            padding: 1px 0;
            text-transform: uppercase;
        }
    </style>
</head>
<body>

<div class="kts-card">
    <div class="kts-header">
    	<img src="https://matlabussalik.com/wp-content/uploads/2020/04/cropped-oklek-e1586763262965-192x192.jpg" alt="Logo" width="40px">
        <h2 style="letter-spacing: 2px; font-weight:300;">Yayasan Sirrul Albab</h2>
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
            <img style="color:white; "src="/user-tie-solid.svg" width="100%" height="100%"alt="">
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

</body>
</html>
