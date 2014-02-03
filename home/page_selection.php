<?php
if(isset($_GET['page'])&& $_GET['page']=='about'){
    require_once './home/about_us.php';
  }
  elseif(isset($_GET['page'])&& $_GET['page']=='product'){
    require_once './home/product.php';
  }
  elseif(isset($_GET['page'])&& $_GET['page']=='find_a_shop'){
    require_once './home/find_shop.php';
  }
  elseif(isset($_GET['page'])&& $_GET['page']=='contact'){
    require_once './home/contact.php';
  }
  else
  {
    require_once './home/main_content.php';
  }
?>
