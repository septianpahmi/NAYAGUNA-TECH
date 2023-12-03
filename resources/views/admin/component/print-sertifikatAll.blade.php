<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikat</title>
    <style>
        body {
            background: url('kwitansi/sertifikat.png') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        .sertifikat-container {
            position: relative;
            width: 100%;    
            height: 700px;
            color: #050404; /* Warna teks sesuaikan dengan kebutuhan */
        }

        .sertifikat-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        /* Styling tambahan sesuai kebutuhan */
        .judul-sertifikat {
            font-size: 24pt;
            font-weight: bold;
            text-align: center;
            margin-bottom: 210px;
        }

        
        .nama-penerima {
            font-size: 20px;
            font-weight: bold;
            text-indent: 120px;
            margin-bottom: 45px;
        }

        .tgl-lahir {
            font-size: 20px;
            font-weight: bold;
            text-indent: 120px;
            margin-bottom: 50px;
        }

        .status-sertifikat {
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 45px;
        }
        .materi-pelatihan {
            font-size: 18px;
            text-indent: 75px;
            margin-bottom: 0px;
        }
        .foto {
            text-align: right;
        }
    </style>
</head>
<body>
    @foreach ($data as $item)
        
    <div class="sertifikat-container">
        <div class="sertifikat-content">
            <br>
            <div class="judul-sertifikat" >{{ $item->judul }}</div>
            <div class="nama-penerima">{{ $item->userId->name }}</div>
            <div class="tgl-lahir">{{ $item->tgl_lahir }}</div>
            <div class="status-sertifikat">{{ $item->status }}</div>
            <div class="materi-pelatihan">{{ $item->pelatihanId->kategori }}</div>
            <div class="foto"><img src="Sertifikat/{{ $item->foto }}" style="max-width: 100%; max-height: 130px;" alt=""></div>
        </div>
    </div>
    @endforeach

</body>
</html>
