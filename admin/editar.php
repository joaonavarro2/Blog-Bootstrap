<?php 
 include("../config/connection.php");
 include("session.php");

    $id = $_GET['id'];

    $stmt = $connect->prepare('SELECT id, title, description FROM blog WHERE id = :id');
    
    $stmt-> execute(array('id' =>$id));
    
    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
    
 include("header.php");

?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
      <main class="col-md-9 col-lg-10">
            <div class="container">
                <h1 id="main-title">Editar Post</h1>
	        </div>
        </main>
      <?php
    include "footer.php";
    ?>

  <form action="editar-fim.php" method="post" enctype="multipart/form-data">
      <?php foreach($results as $post): ?>
	<p><input type="hidden" value="<?= $post["id"] ?>" name="id"></p>
	<p><input type="text" value="<?= $post["title"] ?>" name="title"></p>
	<p><input type="text" value="<?= $post["description"] ?>" name="description"></p>
<?php endforeach; ?>
	<input type="submit" value="EDITAR">
</form>


  </body>
  </html>
    