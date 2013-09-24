<?php
    require_once 'system/templater.php';
    require_once 'system/cstring.php';
    $content = new Templater('about.php');
    $page = new Templater('templates/main.tpl.php');
    $page->title = "Home Page";
    $page->set("content", $content->parse());
    $page->set("active_page", "about");
    $about = 'about';
    $pattern = '/(\w+)?.php/';
    $format = '<li name=\"%s\"><a onclick=\"sublink(&quot;%s&quot;, &quot;%s&quot;)\">%s</a></li>';
    $page->sublinks = '';
    if (is_dir($about)) {
        $handle = opendir($about);
        while (false !== ($file = readdir($handle))) {
            if (endsWith($file, '.php')) {
                preg_match($pattern, $file, $matches);
                $page->sublinks .= sprintf($format, $file, $about."/".$file, $file, $matches[1]);
            }
        }
    }
    $page->publish();
?>

