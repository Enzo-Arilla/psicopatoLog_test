<?php

//$comando = escapeshellcmd('python psicopatoLog_IA/app.py');
//$cmdResult = shell_exec($comando);

?>

<html>
  <head>
  </head>

  <body>
    <div style="display: none">
        <?php
          //echo $cmdResult;
          exec("python psicopatoLog_IA/app.py", $status, $return);
          //foreach ($status as $emotion) {
              //print($emotion);
          //}
          //print_r($status);
          echo $return;
        ?>
    </div>

    <div>
      <?php
        //print_r($status);
        $n7 = array_pop($status);
        $n6 = array_pop($status);
        $n5 = array_pop($status);
        $n4 = array_pop($status);
        $n3 = array_pop($status);
        $n2 = array_pop($status);
        $n1 = array_pop($status);
        $n0 = array_pop($status);
        $n = array($n0, $n1, $n2, $n3, $n4, $n5, $n6, $n7);
        foreach ($n as $x) {
          echo $x;
          echo "<br>";
        }
      ?>
    </div>
  </body>
</html>
