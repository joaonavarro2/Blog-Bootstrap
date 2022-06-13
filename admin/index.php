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
    <!-- css -->
    <link rel="stylesheet" href="style-index.css">
    <title>Document</title>
</head>
<body class="text-center">
     <main class="form-login">
        <div class="table mb-3">
       <form action="logar.php" method="POST"> 
        <img class="mb-4" src="../imagens/logo.png" alt="" width="70" height="70">
            <h3>Painal Admisnastrivo</h3>
        <div class="mb-3">
            <div>
                <p>Nome</p>
                <input type="text" name="name" placeholder="Digite seu nome" class="form-control" id="formGroupExamplelnput">
            </div>
            <p>Login</p>
            <input type="email" name="login" placeholder="Digite seu Email de login" class="form-control" id="formGroupExamplelnput">
        </div>
            <div class="mb-3">
            <p>Senha</p>
        <input type="text" name="senha" placeholder="Digite sua senha" class="form-control" id="formGroupExamplelnput"">
            </div>
        <div class="mb-3">
            <input type="submit" value="ENVIAR">
         </div>
         </div>
           </form>
    </main>
</body>
</html>