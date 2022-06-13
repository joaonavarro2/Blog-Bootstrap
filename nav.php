<!-- Parte de superior -->
<link rel="stylesheet" href="css/style.css">
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="imagens/logo (2).png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Daenerys Targaryene</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="linksubida">Mãe dos Dragões</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Cidades Conquistadas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Astapor</a></li>
            <li><a class="dropdown-item" href="#">Yunkai</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Meereen</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Khalisin</a>
        </li>
          <li class="nav.item">
             <a class="nav-link" href="category.php?cat=cat-1">Cat 1</a>
          </li>
          <li class="nav-item">
              <a class="nav-link"  href="category.php?cat=cat-2">Cat 2</a>
          </li>
      </ul>
      <form  action="buscar.php" class="d-flex" role="search">
        <input class="form-control me-2" name="buscar" type="search" placeholder="buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" name="buscar">Ajolhe</button>
      </form>
    </div>
  </div>
</nav>