<?php






if($_POST['username'] == 'crepin' && $_POST['pwd'] == 'password'){

    header('location:index.html');

}else{

    header('location:login.php?errorMessage=Veuillez verifier votre login ou mot de passe');
}


























?>