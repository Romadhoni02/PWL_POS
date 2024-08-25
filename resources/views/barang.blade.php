<!DOCTYPE html>
<html>
    <head>
        <title>Data Barang</title>
    </head>
    <body>
        <h1>Data Barang</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Kategori_Id</th>
                <th>Barang_Kode</th>
                <th>Barang_Nama</th>
                <th>Harga_Beli</th>
                <th>Harga_Jual</th>

            </tr>
            @foreach ($data as $d)
            <tr>
                <td>{{ $d->kategori_id }}</td>
                <td>{{ $d->barang_id }}</td>
                <td>{{ $d->barang_kode }}</td>
                <td>{{ $d->barang_nama }}</td>
                <td>{{ $d->harga_beli }}</td>
                <td>{{ $d->harga_jual }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>