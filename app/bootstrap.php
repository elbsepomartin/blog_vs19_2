<?php
// laadime vajalikud konstandid
require_once 'config/constants.php';
// session
session_start();
// laadime vajalikud raamatukogud
spl_autoload_register(function ($className) {
    require_once 'libraries/'.$className.'.php';
});