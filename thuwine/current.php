<?php
    require_once 'system/templater.php';
    $content = new Templater('current.content.php');
    $page = new Templater('templates/main.tpl.php');
    $page->set('content', $content->parse());
    $page->set('active_page', 'current');
    $page->publish();
?>
