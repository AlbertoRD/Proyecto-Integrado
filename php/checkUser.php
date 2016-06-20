<?php

require_once '../inc/class.user.php';
session_start();

if (isset($_POST['username']) and isset($_POST['email']) and isset($_POST['password'])) {
    $user = new USER();

    $uname = strip_tags($_POST['username']);
    $umail = strip_tags($_POST['email']);
    $upass = strip_tags($_POST['password']);

    if ($user->doLogin($uname, $umail, $upass)) {
        echo "OK";
    } else {
        echo "KO";
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

