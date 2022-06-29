<?php

$comando = escapeshellcmd('python psicopatoLog_IA/app.py');
$cmdResult = shell_exec($comando);

?>

<html>
  <head>
  </head>

  <body>
    <div style="display: none">
      <?php
        echo $cmdResult;
      ?>
    </div>
  </body>
</html>
