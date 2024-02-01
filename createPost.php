<?php
$title = 'Post yaratish';
require('./includes/header.php');
?>

<div class="container my-5">
  <div class="p-5 text-center bg-body-tertiary rounded-3">
  <div class="text-center ">
            <h2 class="text-uppercase text-center">Post yaratish</h2>
      </div>
      <form class="mb-3 w-75 align-center mt-2">
            <label for="#">Sarlavha</label>
            <input type="text" class="form-control mt-2">
            <label class="form-label">Matn</label>
            <textarea class="form-control" rows="5"></textarea>
      </form>
      <div class="text-center">
            <button type="button" class="btn btn-outline-primary btn-lg px-4 rounded-pill w-25">Jo'natish</button>
      </div>
  </div>
</div>


<?php require('./includes/footer.php'); ?>