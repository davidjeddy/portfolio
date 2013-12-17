<?php
/**
 * the 'index' of the site. As this is a single page site this is basically the entire site.
 */
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?= SITEROOT; ?>/../../css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?= SITEROOT; ?>/../../vendor/twitter/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= SITEROOT; ?>/../../css/portfolio.css">

</head>

<body>

<div id="welcome"       class="main_panel"  data-title="Welcome" style="background-color:#666666">
    <h1>David Eddy, Web Developer</h1>
    <div class="symbol">&nbsp;</div>
    <h2>I don't make pretty web sites,</h2>
    <h2 class="indent_one">I make pretty websites work</h2>

    <a class="scroll down">down</a>
</div>

<div id="web_dev"       class="main_panel"  data-title="Web Development"  style="background-color:#FFFFFF">
    <a class="scroll up">up</a>
	<h3>Web Development</h3>
    <a class="scroll down">down</a>
</div>

<div id="multi_media"   class="main_panel"  data-title="Multi-media" style="background-color:#00FF00">
</div>

<div id="about_me"      class="main_panel"  data-title="About Me" style="background-color:#FF0000">
</div>

<div id="hire"          class="main_panel"  data-title="Hire" style="background-color:#0000FF">
</div>

<script language="javascript" src="<?= SITEROOT; ?>/../../vendor/components/jquery/jquery.min.js"></script>
<script language="javascript" src="<?= SITEROOT; ?>/../../vendor/twitter/bootstrap/dist/js/bootstrap.min.js"></script>

<script language="javascript" src="<?= SITEROOT; ?>/../../vendor/balupton/jquery-scrollto/src/documents/lib/jquery-scrollto.js"></script>

<script language="javascript" src="<?= SITEROOT; ?>/../../scripts/portfolio.js"></script>

</body>

</html>