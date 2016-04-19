<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="assets/stylesheets/style.css"/>
        <title>Megyék, városok</title>
        <script type="text/javascript" src="assets/javascripts/loader.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <?php
            include 'views/layout/main.php';
            include 'config/routes.php';
            if(empty($_GET['p'])){
                $_GET['p'] = null;    
            }
            $site = $_GET['p'];
            $route = new Routes;
            $route->controller($site);         
        ?>
        <div id="data"></div>
    </body>
</html>