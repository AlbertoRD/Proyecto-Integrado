<!DOCTYPE HTML>
<html>
    <head>
        <?php
        include_once 'inc/head.html';
        ?>
    </head>
    <body>
        <div id="home" class="header">
            <div class="container">
                <?php
                require_once './mod/cabecera.php';
                ?>
            </div>
        </div>
        <div id="frameContainer">
            <iframe id="aulaonline" src="http://alumno.examentrafico.com/opciones/1740" frameBorder="0"></iframe>
        </div>

        <!--footer-->
        <?php
        include_once './mod/footer.html';
        ?>
        <script type="text/javascript">
            $(document).ready(function () {
                $().UItoTop({easingType: 'easeOutQuart'});
            });
        </script>
    </body>
</html>       
