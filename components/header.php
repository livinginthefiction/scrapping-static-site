<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="../mascot6.gif" type="image/x-icon">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="theme-color" content="#000000">
      <!-- <link rel="apple-touch-icon" href="/logo192.png"> -->
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
          if (end($url)=='faqs' || $url[count($url)-2]=='faqs') {include '../components/headerInc/faqHeader.php';}
          if (end($url)=='useful-link' || $url[count($url)-2]=='useful-link') {include '../components/headerInc/usefulHeader.php';}
          if (end($url)=='case-study' || $url[count($url)-2]=='case-study') {include '../components/headerInc/csHeader.php';}
          if (end($url)=='privacy-policy-cookies' || $url[count($url)-2]=='privacy-policy-cookies') {include '../components/headerInc/privacyHeader.php';}
          if (end($url)=='complaints' || $url[count($url)-2]=='complaints') {include '../components/headerInc/complaintsHeader.php';}
          if (end($url)=='terms-and-conditions' || $url[count($url)-2]=='terms-and-conditions') {include '../components/headerInc/tncHeader.php';}
          if (end($url)=='arrangements-for-site-access' || $url[count($url)-2]=='arrangements-for-site-access') {include '../components/headerInc/afscHeader.php';}
          if (end($url)=='tariff-info' || $url[count($url)-2]=='tariff-info') {include '../components/headerInc/tarrifHeader.php';}
          if (end($url)=='emergencies' || $url[count($url)-2]=='emergencies') {include '../components/headerInc/emergenciesHeader.php';}
          if (end($url)=='energy-debt-management' || $url[count($url)-2]=='energy-debt-management') {include '../components/headerInc/edmHeader.php';}
          if (end($url)=='our-fuel-mix' || $url[count($url)-2]=='our-fuel-mix') {include '../components/headerInc/ofmHeader.php';}
          if (end($url)=='guides' || $url[count($url)-2]=='guides') {include '../components/headerInc/guidesHeader.php';}
          if (end($url)=='priority-service-register' || $url[count($url)-2]=='priority-service-register') {include '../components/headerInc/psrHeader.php';}
          if (end($url)=='how-to-calculate-your-electricity-usage' || $url[count($url)-2]=='how-to-calculate-your-electricity-usage') {include '../components/headerInc/hceuHeader.php';}
          if (end($url)=='reasons-forhighenergy-bills' || $url[count($url)-2]=='reasons-forhighenergy-bills') {include '../components/headerInc/hebHeader.php';}
          if (end($url)=='how-do-i-find-my-mpan-number-on-my-electricity-meter' || $url[count($url)-2]=='how-do-i-find-my-mpan-number-on-my-electricity-meter') {include '../components/headerInc/mpansHeader.php';}
          if (end($url)=='how-to-read-your-energy-bill' || $url[count($url)-2]=='how-to-read-your-energy-bill') {include '../components/headerInc/rebHeader.php';}
          if (end($url)=='disclaimer' || $url[count($url)-2]=='disclaimer') {include '../components/headerInc/disclaimerHeader.php';}

          // echo $_SERVER['REQUEST_URI']
       ?>
      <!-- <style type="text/css">
      iframe#_hjRemoteVarsFrame {display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;}</style> -->
   </head>