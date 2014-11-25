<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
<title>TUWA</title>
<?php print @$this->head; ?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/default.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.js"></script>
<script type="text/javascript" src="js/imagelink.js"></script>
<script type="text/javascript" src="js/sublink.js"></script>
<script>
$(document).ready(function() {
    if ("<?php print @$this->active_page; ?>".length > 0)
        $("ul [name='<?php print @$this->active_page; ?>']").addClass('active');
    if ("<?php print @$this->sublinks; ?>".length > 0)
        $("#mainMenu ul").append('<?php print @$this->sublinks; ?>');
    if ("<?php print @$this->sub_active; ?>".length > 0)
        $("ul [name='<?php print @$this->sub_active; ?>']").addClass('active');
});
</script>
</head>
<body>
<!--[if lte IE 6]>
<style type="text/css">
img, div, td {
behavior: url('js/iepngfix.htc');
}
</style>
<![endif]-->
<div id="view">
    <?php include('includes/head.php') ?>  
    <?php /*include('includes/content.php')*/ ?>
    <?php print @$this->content; ?>
    <hr class="hidden" />
    <?php include('includes/foot.php') ?>
    <hr class="hidden" />
</div>
</body>
</html>
