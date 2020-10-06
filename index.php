<?php 

include "connection.php";

$hobi=$db->query("select * from data");
$data_hobi=$hobi->fetchAll();
// echo $data_siswa;

foreach ($data_hobi as $key) {
    // echo $key['nama']."  ".$key['pekerjaan']."<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>My SQL</title>
    <style>

.center {
  text-align: center;

}

    </style>
</head>
<body class="bg-secondary">
  
<table class="table table-secondary">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Hobi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($data_hobi as $key) : ?>
    <tr>
      <td><?php echo $key["nama"]; ?></td>
      <td><?php echo $key["hobi"]; ?></td>
      <td><a  href="delete.php?id=<?php echo $key["id"]; ?>">hapus</a>|<a href="edit.php?id=<?php echo $key["id"]; ?>">edit</a></td>
    </tr>
      <?php endforeach; ?>
  </tbody>
</table>

<!-- form input siswa -->

<div class="container ">
    <div class="row">
        <div class="col ">

<form action="input.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Hobi</label>
    <input type="text" name="hobi" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary ">Submit</button>
</form>

        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<hr>
<div class="center">&copy; 2020 khaniful huda</div>
<hr>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>