<?php
require_once("./view/Visitante.php");
require_once("./controller/LoginController.php");

if (isset($_GET['action'])) {
  switch ($_GET['action']) {
    case 'showLogin':
      $view = new Visitante();
      $view->showLogin("");
      break;
    case 'iniciarSesion':
      if (isset($_POST['user']) && ($_POST['user']!="") && (isset($_POST['pass'])) && ($_POST['pass']!="")) {
        LoginController::getInstance()->verify($_POST['user'],$_POST['pass']);
      }else {
        header("Location=index.php");
      }
      break;
  }
}else {
  $view = new Visitante();
  $view->showIndex("");
}
?>
