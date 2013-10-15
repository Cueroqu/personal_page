<?php
    require_once 'system/templater.php';
    require_once 'system/cstring.php';
    $content = new Templater('about.php');
    $page = new Templater('templates/main.tpl.php');
    $page->title = "Home Page";
    $page->publish();
?>

