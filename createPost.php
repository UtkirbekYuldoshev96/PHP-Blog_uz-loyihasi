<?php
$title = 'Post yaratish';
require('./includes/header.php');
require('./database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Database-dan ma'lumot kelish shartni tekshiradi

      $title = $_POST['title'];
      $body = $_POST['body'];


      $statement = $pdo->prepare("INSERT INTO posts (title, body) VALUES (:title, :body)");
      $statement->execute([
            'title' => $title,
            'body' => $body
      ]);

      $_SESSION['post-yaratildi'] = 'Post mufaqiyatli yaratildi';

      // echo "<script> alert('Malumot saqlandi!'); </script>";
      header('Location: blog.php');
}
?>

<div class="container my-5">
      <div class="p-5 bg-body-tertiary rounded-3">
            <div class="">
                  <img src="./assets/img/post.png" class="card-img-top" alt="...">

                  <h2 class="text-uppercase text-center mt-5">Post yaratish</h2>
            </div>

            <form method="POST" action="#" class="mb-3 w-100 mt-2">
                  <label for="#">Sarlavha</label>
                  <input name="title" type="text" class="form-control mt-2">
                  <label class="form-label">Matn</label>
                  <textarea name="body" class="form-control" rows="5"></textarea>
                  <div class="text-left mt-5">
                        <button type="submit"
                              class="btn btn-outline-primary btn-lg px-4 rounded-pill w-25">Jo'natish</button>
                  </div>
            </form>

      </div>
</div>


<?php require('./includes/footer.php'); ?>