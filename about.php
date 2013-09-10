<?php
    require_once 'system/templater.php';
    $content = new Templater('about.content.php');
    $page = new Templater('templates/content.tpl.php');
    $page->set('content', $content->parse());
    $page->publish();
?>
