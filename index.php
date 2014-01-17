<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" charset="utf-8" />
	<meta name="author" content="Cycle Mart " />
  <meta name="developer" content="Moshiur Rahman , Tabinda Wardun Arthi" />
	<meta name="Description" content="A business organigation, Rickshaw parts, bicycle, bicyle parts and accesories retailer,whole saler and importer. Keep the environment Green. Our Shops are Imran Cycle Mart, Five Star Cycle Mart, Bangshal Cycle Mart, M.H Cycle Mart and Ripon Cycle Mart ">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="icon" href="./images/icon1.png">
  <link href="./style/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="./style/responsiveslides.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="./style/style.css" media="screen" rel="stylesheet" type="text/css" />
  <!--[if lt IE 9]>
    <script type="text/javascript" src="./js/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
	<title> Cycle Mart </title>
</head>

<body>
  <?php  require_once './home/home.php'; ?>
  <!-- Include the js files -->

  <script type="text/javascript">
     // var viewport = document.querySelector("meta[name=viewport]"),
     //      isPortrait = !window.matchMedia("(orientation: portrait)").matches,
     //      getOrientationValue = function () {
     //        // alert(0);
     //        isPortrait = !isPortrait;
     //        if (isPortrait)
     //        {
     //          viewport.setAttribute('content', 'width=320, minimum-scale=1');
     //        } else {
     //          viewport.setAttribute('content', 'width=480, minimum-scale=1');
     //        }
     //      };
     //  getOrientationValue();
     //  window.addEventListener("resize", getOrientationValue, false);
     //  window.addEventListener("orientationchange", getOrientationValue, false);

    var checkOrientation;
    checkOrientation = function() {
      var viewport;
      viewport = document.querySelector("meta[name=viewport]");
      if (window.orientation === 90 || window.orientation === -90) {
        return viewport.setAttribute("content", "width:device-width, initial-scale=1.0, user-scalable=1");
      } else {
        return viewport.setAttribute("content", "width:device-width, initial-scale=1.0, user-scalable=1");
      }
    };
    window.onorientationchange = function() {
      return checkOrientation();
    };
    checkOrientation();

  </script>
  <script type="text/javascript" src="./js/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="./js/responsiveslides.js"></script>
  <script type="text/javascript" src="./js/jquery-ui-1.10.3.custom.js"></script>
  <script type="text/javascript" src="./js/effect.js"></script>
  <script type="text/javascript" src="./js/bootstrap.js"></script>




</body>
</html>
