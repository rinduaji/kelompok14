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
          <th>Nomer ID </th>
          <th>Nama </th>
          <th>Alamat</th>
          <th>No Tlp</th>
          <th>Kode Pos</th>
          <th>Provinsi</th>
          <th>Kota</th>
          <th>Email</th>
          <th>Password</th>
          <th>Level</th>
        </tr>
      </thead>
      <tbody>
        <tr class="success">
          <td>1</td>
          <td>Arrizky</td>
          <td>Selorejo</td>
          <td>081</td>
          <td>65141</td>
          <td>Jawa Timur</td>
          <td>Malang</td>
          <td>@gmail.com</td>
          <td>123</td>
          <td>user</td>
        </tr>      
        <tr class="success">
          <td>2</td>
          <td>Aji</td>
          <td>Sulfat</td>
          <td>085</td>
          <td>65141</td>
          <td>Jawa Timur</td>
          <td>Malang</td>
          <td>@gmail.com</td>
          <td>12345</td>
          <td>user</td>
        </tr>      
        <tr class="success">

          <td>3</td>
          <td>Admin</td>
          <td>Suhat</td>
          <td>0821</td>
          <td>65141</td>
          <td>Jawa Timur</td>
          <td>Malang</td>
          <td>@gmail.com</td>
          <td>admin</td>
          <td>admin</td>
        </tr>    
        
      </tbody>
    </table>
  </div>

</body>
</html>

