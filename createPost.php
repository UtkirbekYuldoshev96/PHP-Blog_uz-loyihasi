<?php
$title = 'Post yaratish';
require('./includes/header.php');
?>

<div class="container my-5">
      <div class="p-5 bg-body-tertiary rounded-3">
            <div class="">
                  <img src="./assets/img/post.png" class="card-img-top" alt="...">

                  <h2 class="text-uppercase text-center mt-5">Post yaratish</h2>
            </div>
            <form class="mb-3 w-100 mt-2">
                  <label for="#">Sarlavha</label>
                  <input type="text" class="form-control mt-2">
                  <label class="form-label">Matn</label>
                  <textarea class="form-control" rows="5"></textarea>
            </form>
            <div class="text-left">
                  <button type="button" class="btn btn-outline-primary btn-lg px-4 rounded-pill w-25">Jo'natish</button>
            </div>
      </div>
</div>


<?php require('./includes/footer.php'); ?>