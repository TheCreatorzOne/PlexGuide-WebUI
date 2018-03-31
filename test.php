<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
            echo "<pre>$cmd</pre>";
        }
        ?>
    </body>
</html>
