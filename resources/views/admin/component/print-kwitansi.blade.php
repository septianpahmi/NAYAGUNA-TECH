<!DOCTYPE html>
{{-- @include('admin.partial.header') --}}

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kwitansi</title>
    <style>
        table {
            max-width: 100%;
            max-height: 100%;
        }
        body {
            font-family: "Montserrat", sans-serif;
            src: url('admin/css/Montserrat-Regular.ttf') format('truetype');
            font-size: 16px;
            padding: 5px;
            position: relative;
            width: 100%;
            height: 100%;
        } 
        table th,
        table td {
            padding: 0.225em;
            text-align: center;
        }
        table .kop:before {
            content: ": ";
        }
        .left {
            text-align: left;
        }
        table #caption {
            font-size: 3.4em;
            margin: 0.5em 0 0.75em;
            opacity: 0;
        }

        table #nomor{
          color: white;
        }
        table.border {
            width: 100%;
            border-collapse: collapse;
        }

        table.border tbody th,
        table.border tbody td {
            /* border: thin solid #000; */
            padding: 2px;
            color: black;
        }
        .ttd td,
        .ttd th {
            padding-bottom: 3.5em;
        }
        #background-image-container {
    /* Menambahkan background image */
    background-image: url('kwitansi/kwitansi.png');
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;

    /* Menambahkan efek untuk membuat teks terlihat di atas gambar */
    position: relative;
    z-index: 1;
}
    </style>
</head>
<body>

    <div id="background-image-container" class="background-image-container">
        <table border="0" cellpadding="0" cellspacing="0" width="485" class="border" style="overflow-x:auto;">
        <tr>
            <td colspan="6" width="485" id="caption">KWITANSI</td>
          </tr>
          <td colspan="6" id="nomor">No : {{$nomor}}</td>
        <thead>
        <br>
          <tr>
            <td colspan="5"> &nbsp;{{$instansi}}</td>
          </tr>
          <tr>
            <td colspan="6"> &nbsp;&nbsp;{{$hal}}</td>
          </tr>
          <tr>
            <td colspan="4"></td>
            <td> &nbsp;&nbsp;&nbsp;{{$id_pelatihan}}</td>
          </tr>
          <tr>
            <td colspan="4"></td>
            <td>{{$peserta}} Peserta</td>
          </tr>
          <tr>
            <td></td>
          </tr>
          </thead>
          <tbody>
            <tr>
                <th> </th>
                <td colspan="2">{{ 'Rp ' . number_format($terbilang, 0, ',', '.') }}</td>
                {{-- <td colspan="2"></td> --}}
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr class="ttd">
              <th colspan="2"></th>
              <th colspan="2"></th>
              <th colspan="2">Penerima</th>
            </tr>
            <tr>
              <td colspan="2"></td>
              <td colspan="2"></td>
              <td colspan="2">{{$penerima}}</td>
            </tr>
          </tfoot>
        </table>
        </div>
        <br>
</body>

</html>