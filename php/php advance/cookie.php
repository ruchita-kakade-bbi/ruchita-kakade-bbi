<?php
$cookie_name = "user";
$cookie_value ="w3 school";

setcookie($cookie_name,$cookie_value,time() + 3600 ,"https://www.youtube.com/");
// "/" means we can access cookie from any page or retrive 
?>
<html>
    <body>
        <?php
        if(!isset($_COOKIE[$cookie_name]))
        {
            echo "cookie is not set...";
        }
        else {
            echo  $_COOKIE[$cookie_name];
        }
        ?>
    </body>
</html>