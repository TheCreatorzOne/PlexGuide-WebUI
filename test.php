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
        <input type='submit' name='update' value='sudo apt-get update' />
        </form>";

        if(isset($_POST['update']))
        {
            $cmd1= 'sudo apt-get update';
            echo '<pre>';
            passthru ($cmd1);
            echo '</pre>';
        }
        ?>

    </body>
</html>
