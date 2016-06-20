<?php
error_reporting(E_ALL);
session_start();
require_once './inc/class.user.php';

$user = new USER();

if (isset($_POST['btnCerrar'])) {
    $user->doLogout();
    $user->redirect($_SERVER['SCRIPT_NAME']);
}
?><div class="header-top">
    <div class="logo">
        <a href="index.php">   
            <img src="images/logo-s.png" alt=""/>
        </a>
    </div>
    <div class="h-right">
        <div class="working-hours">
            <div class="working-hours-label">
                HORARIO </div>
            <div class="working-hours-time">
                <span>10:00 - 13:30 </span><br/>
                <span>17:00 - 21:00 </span>
            </div>
            <div class="working-hours-date">
                Lunes - Viernes </div>
        </div>
        <div class="working-hours phone-number">
            <div class="icon-phone-1 phone-ico"><i class ="glyphicon glyphicon-earphone"></i></div>
            <div class="phone-text">
                <div class="phone-number-label">
                    LLÁMANOS </div>
                <div class="phone-number-number">
                    951 35 57 47 </div>
            </div>

            <?php
            if (!$user->is_loggedin()) {
                ?>
                <div class="btn btn-default" data-dialog="somedialog">Inicia sesión</div>
                <?php
            } else {
                ?>
                <div id="controlLogin" style="float: left;">
                    <form action="" method="post">
                        <label>Hola, <?= $_SESSION['user_session'] ?></label>
                        <button type="submit" name="btnCerrar" class="btn btn-default" id="btnCerrar">Cerrar sesión</button>

                    </form>
                </div>
                <?php
            }
            ?>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
    <span class="menu"></span>
    <div class="top-menu">

        <ul class="cl-effect-16">
            <li><a href="index.php" data-hover="INICIO">Inicio</a></li> 
            <li><a href="portfolio.php" data-hover="GALERIA">Galeria</a></li>
            <li><a href="contact.php" data-hover="CONTACTO">Contacto</a></li>
            <li><a href="aulaonline.php" data-hover="AULA ONLINE">Aula Online</a></li>
            <li><a href="aprobado.php" data-hover="¿HAS APROBADO?">¿HAS APROBADO?</a></li>
            <li><a href="blog.php" data-hover="BLOG">BLOG</a></li>
        </ul>
    </div>

    <div id="somedialog" class="dialog">
        <div class="dialog__overlay"></div>
        <div class="dialog__content">

            <form class="form-signin" method="post" id="login-form">
                <h2 id="formError" class="form-signin-heading"></label>
                    <h2 class="form-signin-heading">Inicia sesión</h2><hr />

                    <div class="form-group">
                        <input type="text" class="form-control" id="txt_uname_email" name="txt_uname_email" placeholder="Email o Usuario" required/>
                        <span id="check-e"></span>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" id="txt_password" name="txt_password" placeholder="Contraseña" />
                    </div>

                    <hr />

                    <div class="form-group">
                        <button type="submit" id="btn-login" name="btn-login" class="btn btn-success">
                            <i class="glyphicon glyphicon-log-in"></i> &nbsp; Iniciar sesion
                        </button>
                        <button type="button" data-dialog-close class="btn btn-danger action"><i class="glyphicon glyphicon-remove"></i>&nbsp; Cancelar</button>
                    </div>  
            </form>
        </div>
    </div>
    <div class="clearfix"> </div>
    <script src="js/classie.js"></script>
    <script src="js/dialogFx.js"></script>
    <script src="js/cabecera.js" type="text/javascript"></script>

</div>