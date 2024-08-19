<?php
include 'header.php';
error_reporting(0);
switch ($_GET['page']) {

  default:
    include "home.php";
    break;

  case "home";
    include 'home.php';
    break;

    case "profile";
    include 'profile.php';
    break;
     
  case "sejarah";
    include 'sejarah.php';
    break;

  case "informasi";
  include 'informasi.php';
  break;

  case "sejarah";
  include 'sejarah.php';
  break;

  case "login";
    include "login/login_view.php";
    break;
}
include 'footer.php';
?>
