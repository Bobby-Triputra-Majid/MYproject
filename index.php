<?php
$page=isset($_GET['page']) ?$_GET['page'] :'home';

function loadPage($page): void{
  switch($page){
    case 'home':
      include 'file_/home.php';
      case 'login':
        include 'file_/login.php';
        default :
        echo"404 -halaman tidak tersedia";
        break;


  }
}