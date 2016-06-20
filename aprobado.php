<!DOCTYPE HTML>
<html>
    <head>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link href="css/index.css" rel='stylesheet' type='text/css' />
       
        <?php
        include_once './inc/head.html';
        ?>
        <style type="text/css">
            iframe{
                width: 100%;
                height: 700px;
            }
        </style>

    </head>
    <body>
        <!--start-home-->
        <div id="home" class="header">
            <div class="container">
<?php
require_once './mod/cabecera.php';
?>
            </div>
        </div>

        <iframe src="https://sedeapl.dgt.gob.es/WEB_NOTP_CONSULTA/consultaNota.faces" frameBorder="0"></iframe>
        <!--start-banner-bottom-->
        <!-- welcome-bottom -->
        <!-- //welcome-bottom -->

        <!--start-video-->
        <!--//news-->

        <!--footer-->
        <?php
        include_once './mod/footer.html';
        ?>
        <!--start-smooth-scrolling-->
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!--start-smoth-scrolling-->
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */
                $().UItoTop({easingType: 'easeOutQuart'});
            });
        </script>
    </body>
</html>       
