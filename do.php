<?php
require_once 'config.php';

switch($_SERVER['QUERY_STRING']){
    case "status":
        echo(file_get_contents($PIHOLEURL . "?status"));
        break;
    case "enable":
        echo(file_get_contents($PIHOLEURL . "?enable&auth=" . $WEBPASSWORD));
        break;
    case "disable10":
        echo(file_get_contents($PIHOLEURL . "?disable=" . (10 * 60) . "&auth=" . $WEBPASSWORD));
        break;
    case "disable30":
        echo(file_get_contents($PIHOLEURL . "?disable=" . (30 * 60) . "&auth=" . $WEBPASSWORD));
        break;
    case "disable60":
        echo(file_get_contents($PIHOLEURL . "?disable=" . (60 * 60) . "&auth=" . $WEBPASSWORD));
        break;
}
?>