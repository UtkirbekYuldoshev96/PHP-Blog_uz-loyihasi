<?php
$title = 'Post yaratish';
require('./includes/header.php');
require('./database.php');


$id = $_GET['id'];

$statement = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
$statement->execute([$id]);

$post = $statement->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['PUT'])) {
      // Database-dan ma'lumot kelish shartni tekshiradi
      
      $id = $_POST['post_id'];
      $title = $_POST['title'];
      $body = $_POST['body'];


      $statement = $pdo->prepare("UPDATE posts SET title = :title, body = :body WHERE id = :id");
      $statement->execute([
            'title' => $title,
            'body' => $body,
            'id' => $id,

      ]);

      $_SESSION['post-ozgartirildi'] = 'Post mufaqiyatli o\'zgartirildi.';

      // echo "<script> alert('Malumot saqlandi!'); </script>";
      header('Location: blog.php');
      exit;
}
?>

<div class="container my-5">
      <div class="p-5 bg-body-tertiary rounded-3">
            <div class="">
                  <h2 class="text-uppercase text-center mt-5">Postni o'zgartirish</h2>
            </div>

            <form method="POST" action="#" class="mb-3 w-100 mt-2">
                  <input type="hidden" name="PUT">
                  <input type="hidden" name="post_id" value=" <?= $post['id']; ?>">
                  <label for="#"> <?= $post['id']; ?></label>
                  <input name="title" type="text" value=" <?= $post['title']; ?>" class="form-control mt-2">
                  <label class="form-label">Matn</label>
                  <textarea name="body" class="form-control" rows="5"> <?= $post['body']; ?></textarea>
                  <div class="text-left mt-5">
                        <button type="submit"
                              class="btn btn-outline-primary btn-lg px-4 rounded-pill w-25">Saqlash</button>
                  </div>
            </form>

      </div>
</div>


<?php require('./includes/footer.php'); ?>