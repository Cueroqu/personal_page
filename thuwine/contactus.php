<?php
    require_once 'system/templater.php';
    $content = new Templater('contact.content.php');
    $page = new Templater('templates/main.tpl.php');
    $page->set('active_page', 'contact');
    $page->set('content', $content->parse());
    $page->publish();
?>
