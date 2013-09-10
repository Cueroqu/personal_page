<?php
    require_once 'system/templater.php';
    $page = new Templater('templates/main.tpl.php');
    $page->title = "blog page";
    $page->active_page = "blog";
    $page->publish();
?>
