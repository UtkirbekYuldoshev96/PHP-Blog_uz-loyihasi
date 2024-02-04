<?php
$title = 'Post';
require('./includes/header.php');
require('./database.php');

$id = $_GET['id'];

$statement = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
$statement->execute([$id]);

$post = $statement->fetch();

?>

<div class="col-lg-8 mx-auto p-4 py-md-5">
      <h1 class="text-body-emphasis">
            <?= $post['title']; ?>
      </h1>
      <p class="fs-5 col-md-8">
            <?= $post['body']; ?>
      </p>
</div>

<?php require('./includes/footer.php'); ?>