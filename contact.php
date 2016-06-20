<!DOCTYPE HTML>
<html>
    <head>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <?php 
        include_once './inc/head.html';
        ?>
        
        <script src="js/contact.js" type="text/javascript"></script>
    </head>
    <body>
        <!--start-home-->
        <div id="home" class="header">
            <div class="container">
                <?php
                require_once './mod/cabecera.php';
                ?>
                <!--banner-->
                <div class="banner two">
                    <h2 class="second">Contacto</h2>
                </div>
            </div>
        </div>
        <!--//banner-->
        <!--/contact-->
        <div class="section-contact">
            <div class="container">
                <div class="contact-main">
                    <div class="col-md-6 contact-in">
                        <h5>Lorem ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor.</h5>
                        <p class="para1">Lorem ipsum dolor sit amet. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.  </p>
                        <div class="more-address"> 
                            <address>
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P :</abbr> (123) 456-7890
                            </address>
                            <address>
                                <strong>Full Name</strong><br>
                                <a href="mailto:info@example.com">mail@example.com</a>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-6 contact-grid">
                        <form id="formContacto" method="get" action="mailto:alberto.rodriguez5493@gmail.com" enctype="text/plain">
                            <p class="your-para">Nombre :</p>
                            <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = '';
                                    }" id="txtNombre" name="txtNombre">
                            <p class="your-para">Correo Electrónico :</p>
                            <input type="email" value="" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = '';
                                    }" id="txtEmail" name="txtEmail">
                            <p class="your-para">Mensaje:</p>
                            <textarea cols="77" rows="6" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = '';
                                    }" id="txtMensaje" name="txtMensaje"></textarea>
                            <div class="send">
                                <input type="submit" value="Enviar" >
                            </div>
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!--//contact-->
        <!--map-->
        <div class="container">
            <h3 class="tittle">Encuéntranos</h3>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3200.518650001447!2d-4.565212684714003!3d36.66202897997727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd72e52d507f7f47%3A0x7585ffc289fbcc0f!2sAUTOESCUELA+TORREVIAL!5e0!3m2!1ses!2sde!4v1459323681513" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <!--//map-->


        <!--//contact-->
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