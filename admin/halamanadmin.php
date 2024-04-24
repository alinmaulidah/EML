<?php include("<admin>inc_header.php"); ?>
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
          </td>
        </tr>
      </tbody>
    </table>
    <?php include("admin/inc_flooter.php"); ?>

  