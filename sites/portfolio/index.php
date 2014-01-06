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
        <h1>&nbsp;</h1>
        <?php include(SITEROOT.'/helpers/scrollDown.php'); ?>
    </div>

    <div id="web_proj"      class="main_panel btn-success"  data-title="Web Projects">
        <?php include(SITEROOT.'/helpers/scrollUp.php'); ?>
        <h2>Web Projects</h2>

        <div class="row">
            <ul class="list-inline">
                <li class="col-md-3">
                    <img src="//placehold.it/100x100" alt="pencil" class="img-circle">
                    <h5>Healthplan Services</h5>
                    <h6>Internal web<br /> application development</h6>
                </li>
                <li class="col-md-3">
                    <img src="//placehold.it/100x100" alt="folder" class="img-circle">
                    <h5>K & J Managed<br />Solutions</h5>
                    <h6>Web Department Lead</h6>
                 </li>
                <li class="col-md-3">
                    <img src="//placehold.it/100x100" alt="person" class="img-circle">
                    <h5>Traderlanet.com<br />&nbsp;</h5>
                    <h6>Jr. Developer</h6>
                </li>
                <li class="col-md-3">
                    <img src="//placehold.it/100x100" alt="person" class="img-circle">
                    <h5>Freelance<br />&nbsp;</h5>
                    <h6>Freelance projects</h6>
                </li>
            </ul>
        </div>

        <div class="row">
            <ul class="list-inline">
                <li class="col-md-3">
                    <img src="//placehold.it/100x100" alt="pencil" class="img-circle">
                    <h5>Yard Art Manuf.</h5>
                    <h6>Small business in Winter Haven</h6>
                </li>
                <li class="col-md-3">
                    <img src="//placehold.it/100x100" alt="person" class="img-circle">
                    <h5>Orlando's Dark<br />Embrace</h5>
                    <h6>Redesign and Layout</h6>
                </li>
                <li class="col-md-3">
                    <img src="//placehold.it/100x100" alt="folder" class="img-circle">
                    <h5>Starshatter Dev<br/>(v1 and v2)</h5>
                    <h6>video game file repository</h6>
                </li>
                <li class="col-md-3">
                    <img src="//placehold.it/100x100" alt="person" class="img-circle">
                    <h5>Trophy Case<br />Secrets</h5>
                    <h6>Winter Haven local band</h6>
                </li>
            </ul>
        </div>

        <?php include(SITEROOT.'/helpers/scrollDown.php'); ?>
    </div>

    <div id="skills"        class="main_panel btn-info"     data-title="Skills">
        <?php include(SITEROOT.'/helpers/scrollUp.php'); ?>
        <h2>Skills and Aptitudes</h2>

        <div class="row">
            <ul class="list-inline">
                <li class="col-md-3">
                    <img src="//placehold.it/100x100" alt="pencil" class="img-circle">
                    <h5>HTML</h5>
                </li>
                <li class="col-md-3">
                    <img src="//placehold.it/100x100" alt="folder" class="img-circle">
                    <h5>CSS</h5>
                 </li>
                <li class="col-md-3">
                    <img src="//placehold.it/100x100" alt="person" class="img-circle">
                    <h5>Javascript</h5>
                </li>
                <li class="col-md-3">
                    <img src="//placehold.it/100x100" alt="person" class="img-circle">
                    <h5>Responsive UI</h5>
                </li>
            </ul>
        </div>

        <div class="row">
            <ul class="list-inline">
                <li class="col-md-3">
                    <img src="//placehold.it/100x100" alt="pencil" class="img-circle">
                    <h5>PHP</h5>
                </li>
                <li class="col-md-3">
                    <img src="//placehold.it/100x100" alt="folder" class="img-circle">
                    <h5>SQL</h5>
                 </li>
                <li class="col-md-3">
                    <img src="//placehold.it/100x100" alt="person" class="img-circle">
                    <h5>Linux</h5>
                </li>
                <li class="col-md-3">
                    <img src="//placehold.it/100x100" alt="person" class="img-circle">
                    <h5>CDN / Cloud / APIs</h5>
                </li>
            </ul>
        </div>

        <?php include(SITEROOT.'/helpers/scrollDown.php'); ?>
    </div>

    <div id="tools"         class="main_panel btn-warning"  data-title="Tools">
        <?php include(SITEROOT.'/helpers/scrollUp.php'); ?>
        <h2>Tools, etc.</h2>

        <div class="row">
            <ul class="list-inline">
                <li class="col-md-3">
                    <img src="//placehold.it/100x100" alt="pencil" class="img-circle">
                    <h5>SublimeText</h5>
                </li>
                <li class="col-md-3">
                    <img src="//placehold.it/100x100" alt="folder" class="img-circle">
                    <h5>Composer</h5>
                 </li>
                <li class="col-md-3">
                    <img src="//placehold.it/100x100" alt="person" class="img-circle">
                    <h5>Git</h5>
                </li>
                <li class="col-md-3">
                    <img src="//placehold.it/100x100" alt="person" class="img-circle">
                    <h5>Linux</h5>
                </li>
            </ul>
        </div>

        <div class="row">
            <ul class="list-inline">
                <li class="col-md-3">
                    <img src="//placehold.it/100x100" alt="pencil" class="img-circle">
                    <h5>jQuery</h5>
                </li>
                <li class="col-md-3">
                    <img src="//placehold.it/100x100" alt="person" class="img-circle">
                    <h5>Bootstrap</h5>
                </li>
                <li class="col-md-3">
                    <img src="//placehold.it/100x100" alt="person" class="img-circle">
                    <h5>WebEx</h5>
                </li>
                <li class="col-md-3">
                    <img src="//placehold.it/100x100" alt="person" class="img-circle">
                    <h5>Source Control</h5>
                </li>
            </ul>
        </div>

        <?php include(SITEROOT.'/helpers/scrollDown.php'); ?>
    </div>

    <div id="social"        class="main_panel btn-danger"   data-title="Social">
        <?php include(SITEROOT.'/helpers/scrollUp.php'); ?>
        <h2>Social Connections</h2>

        <?php include(SITEROOT.'/helpers/scrollDown.php'); ?>
    </div>

    <div id="hire_me"       class="main_panel btn-primary"  data-title="Hire Me">
        <?php include(SITEROOT.'/helpers/scrollUp.php'); ?>
        <h2>Hire Me</h2>


    </div>

    <script language="javascript" src="<?= SITEROOT; ?>/../../vendor/components/jquery/jquery.min.js"></script>
    <script language="javascript" src="<?= SITEROOT; ?>/../../vendor/twitter/bootstrap/dist/js/bootstrap.min.js"></script>
    <script language="javascript" src="<?= SITEROOT; ?>/../../vendor/balupton/jquery-scrollto/src/documents/lib/jquery-scrollto.js"></script>
    <script language="javascript" src="<?= SITEROOT; ?>/../../vendor/makeusabrew/bootbox/bootbox.js"></script>
    <script language="javascript" src="<?= SITEROOT; ?>/../../scripts/portfolio.js"></script>

</body>
</html>