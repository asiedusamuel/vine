<?php
    include 'configuration.php';
    require "Controller.php";
    require "actions.php";
    $controller = new Controller;
    if (isset($_REQUEST["action"])) {
        $action = $_REQUEST["action"];
        echo $action();
    } else {
        require "template.php";
    }
    
?>

