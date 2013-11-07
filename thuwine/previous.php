<?php
    require_once 'system/templater.php';
    $content = new Templater('previous.content.php');
    $page = new Templater('templates/main.tpl.php');
    $page->set('content', $content->parse());
    $page->set('active_page', 'previous');
    $page->publish();
?>
