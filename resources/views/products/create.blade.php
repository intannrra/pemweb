<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tambah Data Produk</title>
  </head>
  <body>
    <h1>Tambah Data Produk</h1>
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        <div class="input-group m-3">
            <span class="input-group-text" id="basic-addon1">Upload Gambar</span>
            <input type="file" class="form-control" placeholder="Upload Gambar">
        </div>
        <div class="form-floating m-3">
            <input type="text" class="form-control"
            placeholder="Nama Barang" id="floatingNamaBarang">
            <label for="floatingInput">Nama Barang</label>
        </div>
        <div class="form-floating m-3">
            <input type="text" class="form-control"
            placeholder="Harga" id="floatingNamaBarang">
            <label for="floatingInput">Harga</label>
        </div>
        <div class="form-floating m-3">
            <input type="text" class="form-control"
            placeholder="Stok" id="floatingNamaBarang">
            <label for="floatingInput">Stok</label>
        </div>
        <div class="form-floating m-3">
            <textarea class="form-control"
            placeholder="Deskripsi" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Deskripsi</label>
        </div>
        <button type="submit" class="btn btn-primary m-3">Simpan</button>
        <button type="reset" class="btn btn-warning m-3">Reset</button>

    </form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
