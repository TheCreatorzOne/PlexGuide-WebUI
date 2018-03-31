<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo
        "<form action='' method='post'>
        <input type='submit' name='command' value='ipconfig' />
        </form>";

        if(isset($_POST['command']))
        {
            $cmd= shell_exec('ipconfig /all');
            echo "<pre>$cmd</pre>";
        }
        ?>
    </body>
</html>
