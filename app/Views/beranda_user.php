<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah User</title>
</head>

<body>
  <form action="/user" method="POST">
    <?= csrf_field() ?>
    <!-- <label for="namaOrang">Nama: </label>
    <input type="text" name="nama" id="namaOrang">
    <br><br> -->
    <button type="submit">Kirim</button>
  </form>
</body>

</html>