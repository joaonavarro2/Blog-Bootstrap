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
    <form action="cad_userOK.php" method="post">
        <div class="mb-3">
            <label class="form-label">Digite o nome de usuario</label>
            <input type="text" class="form-control" name="nome">
        </div>
        <div class="mb-3">
            <label class="form-label">Digite seu login</label>
            <input type="email" class="form-control" name="login">
        </div>
        <div class="mb-3">
            <label class="form-label">Digite sua senha</label>
             <input type="text" class="form-control" name="senha">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-dark">Cadastrar Usuário</button>
        </div>
    </form>
</body>
</html>