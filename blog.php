<!DOCTYPE HTML>
<html ng-app="blog">
    <head>
        <?php
        include_once './inc/head.html';
        ?>
        <script src="js/app.js" type="text/javascript"></script>
        <link href="css/blog.css" rel="stylesheet" type="text/css"/>
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
        <main ng-controller="listadoController">
            <div class="containerBlog">
                <div class="articulo" ng-repeat="articulo in blog.articulos">
                    <div class="blogTitulo">
                        {{articulo.titulo}}
                    </div>
                    <div class="blogInfo">Categoria // <span class="articuloCategoria" ng-repeat="categoria in articulo.categoria">{{categoria}} </span> </div>
                    <div class="blogTexto">{{articulo.texto_intro}}</div>
                    <a class="hvr-bounce-to-top">Leer más</a>
                </div>
            </div>

        </main>
        <div class="clearBoth"></div>
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