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
         session_start();
        session_destroy();
        unset($_SESSION['login_admin']);
        printf("<script>location.href='../BeforeLogin/adminLogin.php'</script>");
        ?>
    </body>
</html>