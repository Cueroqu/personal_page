<?php
    require_once 'system/templater.php';
    $content = new Templater('about.php');
    $page = new Templater('templates/main.tpl.php');
    $page->title = "Home Page";
    $page->set("content", $content->parse());
    $page->set("active_page", "about");
    $page->publish();
?>

