<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="assets/stylesheets/style.css"/>
        <title>Megyék, városok</title>
    </head>
    <body>
        <?php
            include 'views/layout/main.php';
            include 'config/routes.php';
            if(isset($_GET['p'])){
                $site = $_GET['p'];
                $route = new Routes;
                $route->controller($site);
            }            
        ?>
    </body>
</html>