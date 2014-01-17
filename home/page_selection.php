<?php
if(isset($_GET['page'])&& $_GET['page']=='about'){
    require_once './home/about_us.php';
  }
  elseif(isset($_GET['page'])&& $_GET['page']=='product'){
    require_once './home/product.php';
  }
  else
  {
    require_once './home/main_content.php';
  }
?>
