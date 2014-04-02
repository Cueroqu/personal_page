<?php
    require_once 'system/templater.php';
    $content = new Templater('current_2.content.php');
    $page = new Templater('templates/main.tpl.php');
    $page->set('content', $content->parse());
    $page->set('active_page', 'current_2');
    $page->publish();
?>
