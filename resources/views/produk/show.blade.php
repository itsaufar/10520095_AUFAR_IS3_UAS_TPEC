<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inputan</title>
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
 
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Nama</td>
                                <td>{{ $data->nama }}</td>
                            </tr>
                            <tr>
                                <td>E-mail</td>
                                <td>{{ $data->nama_email }}</td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td>{{ $data->kategori_produk }}</td>
                            </tr>
                            <tr>
                                <td>nama_produk</td>
                                <td>{{ $data->nama_produk }}</td>
                            </tr>
                            <tr>
                                <td>stok</td>
                                <td>{{ $data->stok}}</td>
                            </tr>
                            <tr>
                                <td>harga_produk</td>
                                <td>{{ $data->harga_produk }}</td>
                            </tr>

                        </table>
 
                        <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</body>
</html>