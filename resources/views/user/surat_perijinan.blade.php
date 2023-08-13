<!doctype html>
<html lang="en">
<head>
    <title>template</title>
</head>
<style type="text/css">
    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 12pt "Tahoma";
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 210mm;
        min-height: 297mm;
        padding: 10mm;
        margin: 5mm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        border: 2px white solid;
        height: 257mm;
        outline: 5mm white solid;
    }
    @page {
        size: A4;
        margin: 0;
    }
    @media print {
        html, body {
            width: 210mm;
            height: 297mm;        
        }
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }
</style>
<body>
    <script>
        window.onload = function() {
            window.print();
        };
</script>
<div class="book">
<div class="page">
<div class="subpage">
    @foreach ($pinjam as $item)
        
    
    <img src="/img/logo.jpg" style="width: 90px; float: left;">
    <img src="/img/logo.jpg" style="width: 105px; float: right;">
    <b style="margin-top: 20px ">
        <div style="text-align: center; font-size: 30px;line-height: 30px; margin-top: 10px">
            PERPUSTAKAAN
            <br> SD MUHAMMADIYAH PIYAMAN
        </div>
    </b>
    <hr size="10px" width="100%" color="black"style="line-height: 5px"> 
    <hr size="2px" width="100%" color="black"><p>
    <div style="text-align: center;">
        <b>
            <u style=" font-size: 20px">
                SURAT PERJANJIAN PEMINJAMAN BUKU
            </u>
            <br style="font-size: 15px">
            Nomor:
        </b>
    </div>
    <br>
    <br>
    <br>
    Yth.
    <br>
    Ibu Kepala Perpustakaan
    <br><br>
    <p style="text-align: justify;"> Dengan Hormat,
    Sehubungan dengan berjalannya kegiatan belajar mengajar dan pelaksanaan belajar. Saya siswa SD MUHAMMADIYAH PIYAMAN, Dengan ini memohon kepada pihak perpustakaan agar memberikan izin kepada saya untuk meminjam buku untuk proses belajar. Dengan informasi saya.</p>
    Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$item->nama_anggota}}
    <br>
    Kelas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:  {{$item->kelas}}
    <br>
    <br>
    <br>
    Dengan ini meminjam Buku:
    <br>
    Kode Buku&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$item->bukuId}}
    <br>
    Judul Buku&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{$item->judul_buku}}
    <br>
    Rak&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$item->rak}}
    <br>
    <br>
    <br>
    Demikian surat pengajuan peminjaman buku ini dibuat untuk dipergunakan sebagaimanamestinya.
    <br>
    <br>
    <br>
    Gunung Kidul,  {{Carbon\Carbon::now()->toDateString()}}
    <br>
    <b>
    <br style="font-size: 15px">
        KEPALA PERPUSTAKAAN
        <br>
        SD MUHAMMADIYAH PIYAMAN
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        .....<br>
        ....
    </b>
    @endforeach
</div>
</div>
</div>
</body>
</html>