<?php 
    include_once("config/connection.php");

    $cat = $_GET['cat'];

    $stmt = $connect->prepare("SELECT id,title,image,description,data FROM blog WHERE category = :cat");
    
    $stmt->execute(array('cat'=>$cat));

    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php include("nav.php") ?>
        <?php foreach($results as $post): ?>
		<h1><?= $post["title"] ?></h1>
		<p><img src="<?= $post["image"]?>" class="card-img-top" alt="..."></p>
		<p><?= $post["description"] ?></p>
		<p><?= date('d/m/Y', strtotime($post["data"])); ?></p>
<?php endforeach; ?>
<?php foreach($results as $post): ?>
		        <h1><?= $post['title'] ?></h1>
	          	<p><?= $post['description']?></p>
          <?php endforeach; ?>
        
    </body>
    </html>