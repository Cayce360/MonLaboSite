<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/darkly/bootstrap.css"
    <title>Authentification</title>
</head>
<body>
    <div class="container">

<?php
   $pageTitle = 'Login';
            include_once('fragments/header.php');
?>
<form class="form-inline" action="processLogin.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label class="sr-only" for="name">Nom d'utilisateur</label>
    <input name="username" type="text" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label class="sr-only" for="pwd">Mot de Passe:</label>
    <input name="pwd" type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Se rappeler de moi</label>
  </div>
  <button type="submit" class="btn btn-primary">Envoyez</button>
</form>
<?php
            if(isset($_GET['errorMessage'])) {
        ?>
<div class="alert alert-danger">
    <?=$_GET['errorMessage'] ?>
</div>
<?php
            }
        ?>
<?php
            include_once('fragments/footer.php');
        ?>
    </div>
</body>
</html>


