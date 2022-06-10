<?php
    include_once('../config/connection.php');

    $id = $_GET['id'];

    $stmt = $connect->prepare('SELECT id,title,description FROM blog WHERE id=:id');

    $stmt->execute(array('id'=>$id));

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <title>Document</title>
    </head>
    <body>
        <!-- Mudar para login -->
    <form action="config/connection.php" method="POST">
        <div>
          <label>Titulo</label>
          <input type="text" name="title" placeholder="Digite o titulo">
        </div>
        <div>
          <label>Descrição</label>
          <textarea name="descripition" id="" cols="30" rows="10"></textarea>
        </div>
          <div>
            <input type="submit" value="ENVIAR">
          </div>
          <?php foreach($results as $post): ?>
		        <h1><?= $post['title'] ?></h1>
	          	<p><?= $post['description']?></p>
          <?php endforeach; ?>
      </form>
    </body>
    </html>