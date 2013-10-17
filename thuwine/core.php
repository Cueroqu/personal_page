<?php
    require_once 'system/templater.php';
    $content = new Templater('core.content.php');
    $page = new Templater('templates/main.tpl.php');
    $page->set('active_page', 'core');
    $page->set('content', $content->parse());
    $page->publish();
?>
