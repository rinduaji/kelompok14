<!DOCTYPE html>
<html lang="en">
<head>
  <title>Elektronik Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#">Elektronik Store</a>
    
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href ="<?php echo base_url('index.php/anggota/index');?>" class='btn btn-danger'>Anggota</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href ="<?php echo base_url('index.php/barang/index');?>" class='btn btn-danger'>Barang</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href ="<?php echo base_url('index.php/login/logout');?>" class='btn btn-danger'>Log out</a>
      </li>
    </ul>
  </nav>
  
  <br>
  <div class="container">
    <h1>Elektronik Store</h1>
    <h2>Data Anggota</h2>
    <!-- <p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active, .success, .info, .warning, and .danger.</p> -->
    <table class="table">
      <thead>
        <tr>
          <th>Nomer</th>
          <th>Nama barang</th>
          <th>Deskripsi</th>
          <th>Warna</th>
          <th>Berat</th>
          <th>Jumlah</th>
          <th>Nama penjual</th>
        </tr>
      </thead>
      <tbody>
        <tr class="success">
          <td>1</td>
          <td>Laptop</td>
          <td>Acer</td>
          <td>Hitam</td>
          <td>1.5kg</td>
          <td>10</td>
          <td>Agung</td>
        </tr>      
        <tr class="success">
          <td>2</td>
          <td>Kamera</td>
          <td>Canon</td>
          <td>Hitam</td>
          <td>1.5kg</td>
          <td>5</td>
          <td>Hanif</td>
        </tr>      
        <tr class="success">
          <td>3</td>
          <td>Tv</td>
          <td>Sharp</td>
          <td>Merah</td>
          <td>5kg</td>
          <td>10</td>
          <td>Riki</td>
        </tr>    
        
      </tbody>
    </table>
  </div>

</body>
</html>

