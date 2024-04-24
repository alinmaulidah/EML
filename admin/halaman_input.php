<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</head>

<body class="container">
  <header>
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-dark p-4">
        <h5 class="text-white h4">Collapsed content</h5>
        <span class="text-muted">Toggleable via the navbar brand.</span>
      </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
  </header>
  <main>
    <?php
    $katakunci = (isset($_GET['katakunci'])) ? $_GET['katakunci'] : "";
    ?>
    <h1>Halaman Admin</h1>
    <p>
      <a href="halaman_input.php">
        <input type="button" class="btn btn-primary" value="Buat Halaman Baru" />
      </a>
    </p>
    <form class="row g-3" method="get">
      <div class="col-auto">
        <input type="text" class="form-control" placeholder="masukan kata kunci" name="katakunci"
          value="<?php echo $katakunci; ?>" />
      </div>
      <div class="col-auto">
        <input type="submit" name="cari" value="cari tulisan" class="btn btn-secondary" />
      </div>
    </form>
    <table class="table table-striped">
      <thead>
        <tr>
          <th class="col-1">#</th>
          <th>Judul</th>
          <th>Kutipan</th>
          <th class="col-1">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia numquam quibusdam ullam dignissimos
            reiciendis laudantium sequi sit quisquam, ratione sed et ducimus libero voluptatum modi quaerat saepe,
            repellendus eligendi earum!</td>
          <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi eius aspernatur labore vero, suscipit
            soluta? Delectus quis ab ut unde necessitatibus beatae laborum corporis, sapiente ipsa nemo, nostrum, quia
            soluta reiciendis eligendi totam doloribus a aliquam similique repellat suscipit adipisci. Qui, laudantium?
            Pariatur, quas voluptas necessitatibus magni neque aperiam excepturi dolorem ducimus. Laborum, quasi
            assumenda nemo explicabo magnam cupiditate accusantium eos voluptatum aliquam tempora dolore incidunt,
            necessitatibus excepturi, molestiae dicta temporibus corporis. Vel ea pariatur veritatis sunt voluptas
            cupiditate aperiam ut quisquam fugiat, nihil nostrum, placeat libero. Molestias.</td>
          <td>
          <span class="badge bg-warning text-dark">Edit</span>
          <span class="badge bg-danger">Delete</span>


    </table>
  </main>
  <footer class="bg-ligh">
    <div class="text-center P-3" style="background:#CCCCCC;">
      EML &copy; 2024
  </footer>


  </head>
</body>