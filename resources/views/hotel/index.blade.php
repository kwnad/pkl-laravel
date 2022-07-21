<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
            Data Hotel
        </legend>
    
        <br>
        <table border="1">
            Data Transaksi
            <tr>
                <td>No</td>
                <td>No Transaksi</td>
                <td>Id Pengunjung</td>
                <td>Id Karyawan</td>
                <td>Jumlah Kamar</td>
                <td>Tanggal Masuk</td>
                <td>Tanggal Keluar</td>
                <td>Lama Nginap</td>
                <td>Total Harga</td>
            </tr>
            <?php $no = 1 ?>
            @foreach ($transaksi as $data)
                <tr>
                    <td> {{$no++}} </td>
                    <td> {{$data['no_transaksi']}} </td>
                    <td> {{$data['id_pengunjung']}} </td>
                    <td> {{$data['id_karyawan']}} </td>
                    <td> {{$data['jumlah_kamar']}} </td>
                    <td> {{$data['tgl_masuk']}} </td>
                    <td> {{$data['tgl_keluar']}} </td>
                    <td> {{$data['lama_nginap']}} </td>
                    <td> {{$data['total_harga']}} </td>
                </tr>
            @endforeach
        </table>
        <hr>
        <table border="1">
            Data Pengunjung
            <tr>
                <td>No</td>
                <td>Id Pengunjung</td>
                <td>Nama Pengunjung</td>
                <td>Alamat</td>
                <td>Jenis Kelamin</td>
                <td>No Telepon</td>
                <td>No KTP</td>
            </tr>
            <?php $no = 1 ?>
            @foreach ($pengunjung as $data)
                <tr>
                    <td> {{$no++}} </td>
                    <td> {{$data['id_pengunjung']}} </td>
                    <td> {{$data['nama_pengunjung']}} </td>
                    <td> {{$data['alamat']}} </td>
                    <td> {{$data['jk']}} </td>
                    <td> {{$data['no_tlp']}} </td>
                    <td> {{$data['no_ktp']}} </td>
                </tr>
            @endforeach
        </table>
        <hr>
        <table border="1">
            Data Karyawan
            <tr>
                <td>No</td>
                <td>Id Karyawan</td>
                <td>Nama Karyawan</td>
                <td>Jenis Kelamin</td>
            </tr>
            <?php $no = 1 ?>
            @foreach ($karyawan as $data)
                <tr>
                    <td> {{$no++}} </td>
                    <td> {{$data['id_karyawan']}} </td>
                    <td> {{$data['nama_karyawan']}} </td>
                    <td> {{$data['jk']}} </td>
                </tr>
            @endforeach
        </table>
        <hr>
        <table border="1">
            Data Detail Transaksi
            <tr>
                <td>No</td>
                <td>Id Detail Transaksi</td>
                <td>No Transaksi</td>
                <td>No Kamar</td>
            </tr>
            <?php $no = 1 ?>
            @foreach ($dt as $data)
                <tr>
                    <td> {{$no++}} </td>
                    <td> {{$data['id_dtl_transaksi']}} </td>
                    <td> {{$data['no_transaksi']}} </td>
                    <td> {{$data['no_kamar']}} </td>
                </tr>
            @endforeach
        </table>
        <hr>
        <table border="1">
            Data Kamar
            <tr>
                <td>No</td>
                <td>No Kamar</td>
                <td>Jenis Kamar</td>
                <td>Harga</td>
            </tr>
            <?php $no = 1 ?>
            @foreach ($kamar as $data)
                <tr>
                    <td> {{$no++}} </td>
                    <td> {{$data['no_kamar']}} </td>
                    <td> {{$data['jenis_kamar']}} </td>
                    <td> {{$data['harga']}} </td>
                </tr>
            @endforeach
        </table>
    </fieldset>
</body>
</html>