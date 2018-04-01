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
            echo "<pre>$cmd</pre>";
        }
        ?>

    </body>
    body{
	margin:0;
	padding:0;
	font-family:"arial",heletica,sans-serif;
	font-size:12px;
    background: #2980b9 url('http://static.tumblr.com/03fbbc566b081016810402488936fbae/pqpk3dn/MRSmlzpj3/tumblr_static_bg3.png') repeat 0 0;
	-webkit-animation: 10s linear 0s normal none infinite animate;
	-moz-animation: 10s linear 0s normal none infinite animate;
	-ms-animation: 10s linear 0s normal none infinite animate;
	-o-animation: 10s linear 0s normal none infinite animate;
	animation: 10s linear 0s normal none infinite animate;

}

@-webkit-keyframes animate {
	from {background-position:0 0;}
	to {background-position: 500px 0;}
}

@-moz-keyframes animate {
	from {background-position:0 0;}
	to {background-position: 500px 0;}
}

@-ms-keyframes animate {
	from {background-position:0 0;}
	to {background-position: 500px 0;}
}

@-o-keyframes animate {
	from {background-position:0 0;}
	to {background-position: 500px 0;}
}

@keyframes animate {
	from {background-position:0 0;}
	to {background-position: 500px 0;}
}
</html>
