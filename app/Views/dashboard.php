<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Dashboard DiscoverZ</title>
</head>
<body>
  <div style="font-family: poppins;" class=" container-fluid bg-primary vh-100 border">
    <h1>Wellcome to Dashboard!</h1>
    <h3>Users</h3>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">No. HP</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $index = 0;
          foreach($users as $user) :
          $index++
        ?>
        <tr>
          <th scope="row"><?= $index ?></th>
          <td><?= $user['name'] ?></td>
          <td><?= $user['email'] ?></td>
          <td><?= $user['gender'] ?></td>
          <td><?= $user['phone'] ?></td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
      <?php foreach($users as $user) ?>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>