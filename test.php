<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!--
Created & currently developed by The Creator & Flicker-rate
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PlexGuide WebUI</title>
    </head>
    <body>
        <?php
        echo
        "<form action='' method='post'>
        <input type='submit' name='command' value='Network Properties' />
        </form>";

        if(isset($_POST['command']))
        {
            $cmd= shell_exec('ifconfig -a');
            echo '<pre>$cmd</pre>';
        }

        echo
        "<form action='' method='post'>
        <input type='submit' name='bench' value='benchmark' />
        </form>";

        if(isset($_POST['bench']))
        {
#          $cmd1='sudo apt-get update -y';
          echo '<pre>';
          passthru ('sudo wget -qO- bench.sh | bash');
          echo '</pre>';
        }
        ?>

    </body>
</html>
