<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="../mascot6.gif" type="image/x-icon">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="theme-color" content="#000000">
      <link rel="apple-touch-icon" href="/logo192.png">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/menu.css">
      <link rel="stylesheet" href="../css/footer.css">
      <link rel="stylesheet" href="../css/timeline.css">
      
      <style>.text-dark{color:#000!important}.buttonCanvas{background:0 0;padding:20px;border-radius:50px;position:relative;color:#fff;text-decoration:none;z-index:2;font-weight:100;letter-spacing:1px;max-width:133px;display:flex;align-items:center;font-size:18px}.buttonCanvas:hover{color:#fff;text-decoration:none}.buttonCanvas canvas{position:absolute;top:45%;left:50%;transform:translate(-50%,-50%);z-index:-1} .buttonRect svg linearGradient > stop:nth-child(2), .hoverElect svg linearGradient > stop:nth-child(2), 
         .buttonRect svg linearGradient > stop:nth-child(3), .hoverElect svg linearGradient > stop:nth-child(3){
         animation: stopOpacity 1s infinite;
         -webkit-animation: stopOpacity 1s infinite;
         -moz-animation: stopOpacity 1s infinite;
         }
         @keyframes stopOpacity{
         10%{
         stop-opacity: 0;
         }
         20%{
         stop-opacity: 0.3;
         }
         30%{
         stop-opacity: 0.7;
         }
         50%{
         stop-opacity: 1;
         }
         70%{
         stop-opacity: 0.7;
         }
         80%{
         stop-opacity: 0.3;
         }
         100%{
         stop-opacity: 0;
         }
         }
      </style>
      
      <style type="text/css">.scene-nav-info {
         bottom: 5px;
         width: 100%;
         text-align: center;
         color: slategrey;
         opacity: 0.7;
         font-size: 10px;
         }
         .scene-tooltip {
         color: lavender;
         font-size: 15px;
         }
         .scene-nav-info, .scene-tooltip {
         position: absolute;
         font-family: sans-serif;
         pointer-events: none;
         }
         .scene-container canvas:focus {
         outline: none;
         }
      </style>
     
      <?php
          $url=explode('/',$_SERVER['REQUEST_URI']);
          if (end($url)=='about-symbio' || $url[count($url)-2]=='about-symbio') {include '../components/headerInc/aboutHeader.php';}
          if (end($url)=='contact' || $url[count($url)-2]=='contact') {include '../components/headerInc/contactHeader.php';}
          if (end($url)=='blog' || $url[count($url)-2]=='blog') {include '../components/headerInc/blogHeader.php';}
          if (end($url)=='page-not-found' || $url[count($url)-2]=='page-not-found') {include '../components/headerInc/pnfHeader.php';}
          if (end($url)=='th4nkj3ss333usx-you-renewal' || $url[count($url)-2]=='th4nkj3ss333usx-you-renewal' || end($url)=='th4nkj3ss333usx' || $url[count($url)-2]=='th4nkj3ss333usx') {include '../components/headerInc/thankyouHeader.php';}
          // echo $_SERVER['REQUEST_URI']
       ?>
      <!-- <style type="text/css">
      iframe#_hjRemoteVarsFrame {display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;}</style> -->
   </head>