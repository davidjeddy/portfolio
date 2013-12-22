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
<!-- twtbs modal alert window -->
<div id="modal-container" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- dialog body -->
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        Hello world!
      </div>
      <!-- dialog buttons -->
      <div class="modal-footer"><button type="button" class="btn btn-primary">OK</button></div>
    </div>
  </div>
</div>



<!-- Main content elements -->
<div id="welcome"       class="main_panel btn-primary"  data-title="Welcome">
    <h1 class="first_panel_heading">David Eddy, Web Developer</h1>
    <h1 class="glyphicon glyphicon-sound-stereo">&nbsp;</h1>
    <h2 style="position:relative;left:-5%">I don't make pretty web sites...</h2>
    <h2 style="position:relative;left:5%">...I make pretty websites work.</h2>

    <?php include( SITEROOT.'/helpers/scrollDown.php'); ?>
</div>

<div id="web_proj"       class="main_panel btn-info"  data-title="Web Projects">
    <?php include( SITEROOT.'/helpers/scrollUp.php'); ?>
	<h2>Web Projects</h2>

    <div class="row">
        <ul class="list-inline">
            <li class="col-md-3">
                <img src="//placehold.it/125x125" alt="pencil" class="img-circle">
                <h3>HealthPlan Serv.</h3>
                <h6>Internal web tool development</h6>
            </li>
            <li class="col-md-3">
                <img src="//placehold.it/125x125" alt="folder" class="img-circle">
                <h3>K & J Managed Sol.</h3>
                <h6>Web Department Lead</h6>
             </li>
            <li class="col-md-3">
                <img src="//placehold.it/125x125" alt="person" class="img-circle">
                <h3>Traderlanet.com</h3>
                <h6>Jr. Developer</h6>
            </li>
            <li class="col-md-3">
                <img src="//placehold.it/125x125" alt="person" class="img-circle">
                <h3>Social Media</h3>
                <h6>lore ipsum</h6>
            </li>
        </ul>
    </div>

    <div class="row">
        <ul class="list-inline">
            <li class="col-md-3">
                <img src="//placehold.it/125x125" alt="pencil" class="img-circle">
                <h3>Content Writing</h3>
                <h6>lore ipsum</h6>
            </li>
            <li class="col-md-3">
                <img src="//placehold.it/125x125" alt="folder" class="img-circle">
                <h3>Design</h3>
                <h6>lore ipsum</h6>
             </li>
            <li class="col-md-3">
                <img src="//placehold.it/125x125" alt="person" class="img-circle">
                <h3>Social Media</h3>
                <h6>lore ipsum</h6>
            </li>
            <li class="col-md-3">
                <img src="//placehold.it/125x125" alt="person" class="img-circle">
                <h3>Social Media</h3>
                <h6>lore ipsum</h6>
            </li>
        </ul>
    </div>

    <?php include( SITEROOT.'/helpers/scrollDown.php'); ?>
</div>

<div id="hire"          class="main_panel btn-success"  data-title="skills">
    <?php include( SITEROOT.'/helpers/scrollUp.php'); ?>
    <h3>sKills</h3>
</div>

<script language="javascript" src="<?= SITEROOT; ?>/../../vendor/components/jquery/jquery.min.js"></script>
<script language="javascript" src="<?= SITEROOT; ?>/../../vendor/twitter/bootstrap/dist/js/bootstrap.min.js"></script>
<script language="javascript" src="<?= SITEROOT; ?>/../../vendor/balupton/jquery-scrollto/src/documents/lib/jquery-scrollto.js"></script>
<script language="javascript" src="<?= SITEROOT; ?>/../../vendor/makeusabrew/bootbox/bootbox.js"></script>
<script language="javascript" src="<?= SITEROOT; ?>/../../scripts/portfolio.js"></script>

</body>
</html>