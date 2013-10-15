<?php
    require_once 'system/templater.php';
    $content = new Templater('core.content.php');
    $page = new Templater('templates/main.tpl.php');
    $page->set('content', $content->parse());
    $page->publish();
?>
