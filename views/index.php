<?php
/**
 * the 'index' of the site. As this is a single page site this is basically the entire site.
 */
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        <?= SITEOWNER; ?>'s <?= SITETITLE; ?>
    </title>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" type="text/css" href="<?= SITEROOT; ?>/../../global_assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?= SITEROOT; ?>/../../vendor/twitter/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= SITEROOT; ?>/../../global_assets/css/portfolio.css">


</head>



<body>
    <!-- twtbs modal alert window -->
    <div id="modal-container" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- dialog body -->
            <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <!-- dialog buttons -->
          <div class="modal-footer"><button type="button" class="btn btn-primary">OK</button></div>
        </div>
      </div>
    </div>



    <!-- Top static quick menu -->
    <div class="quick_menu">
        <button class="btn btn-primary quick_menu"  id="home"       data-panel="0">Home</button>
        <button class="btn btn-success quick_menu"  id="projects"   data-panel="1">Projects</button>
        <button class="btn btn-info quick_menu"     id="skills"     data-panel="2">Skills</button>
        <button class="btn btn-warning quick_menu"  id="tools"      data-panel="3">Tools</button>
        <button class="btn btn-danger quick_menu"   id="social"     data-panel="4">Social</button>
        <button class="btn btn-default quick_menu"  id="hire"       data-panel="5">Hire</button>
    </div>



    <!-- Main content elements -->
    <div id="home"      class="main_panel btn-primary"  data-title="Welcome">
        <h1 class="first_panel_heading">David Eddy, Web Developer</h1>
        <h1 class="glyphicon glyphicon-sound-stereo center"></h1>
        <h2 style="position:relative;left:-5%">I don't make pretty web sites...</h2>
        <h2 style="position:relative;left:5%">...I make pretty websites work.</h2>
        <h1>&nbsp;</h1>
        <?php include(SITEROOT.'/helpers/scrollDown.php'); ?>
    </div>

    <div id="projects"  class="main_panel btn-success"  data-title="Web Projects">
        <?php include(SITEROOT.'/helpers/scrollUp.php'); ?>
        <h2>Web Projects</h2>

        <div class="row">
            <ul class="list-inline">
                <li class="col-md-3">
                    <img src="//placehold.it/100x100" alt="folder" class="img-circle">
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

    <div id="skills"    class="main_panel btn-info"     data-title="Skills">
        <?php include(SITEROOT.'/helpers/scrollUp.php'); ?>
        <h2>Skills and Aptitudes</h2>

        <div class="row">
            <ul class="list-inline">
                <li class="col-md-3">
                    <div class="gauge_container"><div class="gauge" data-value="10" id="skills_html"></div></div>
                    <h5>HTML</h5>
                </li>
                <li class="col-md-3">
                    <div class="gauge_container"><div class="gauge" data-value="8" id="skills_css"></div></div>
                    <h5>CSS</h5>
                 </li>
                <li class="col-md-3">
                    <div class="gauge_container"><div class="gauge" data-value="8"  id="skills_js"></div></div>
                    <h5>Javascript</h5>
                </li>
                <li class="col-md-3">
                    <div class="gauge_container"><div class="gauge" data-value="3"  id="skills_ui"></div></div>
                    <h5>UI / UX</h5>
                </li>
            </ul>
        </div>

        <div class="row">
            <ul class="list-inline">
                <li class="col-md-3">
                    <div class="gauge_container"><div class="gauge" data-value="5" id="skills_php"></div></div>
                    <h5>PHP</h5>
                </li>
                <li class="col-md-3">
                    <div class="gauge_container"><div class="gauge" data-value="4" id="skills_sql"></div></div>
                    <h5>SQL</h5>
                 </li>
                <li class="col-md-3">
                    <div class="gauge_container"><div class="gauge" data-value="2" id="skills_linux"></div></div>
                    <h5>Linux</h5>
                </li>
                <li class="col-md-3">
                    <div class="gauge_container"><div class="gauge" data-value="4" id="skills_api"></div></div>
                    <h5>CDN / Cloud / APIs</h5>
                </li>
            </ul>
        </div>

        <div class="row">
            <h4>Some text about my experience</h4>
        </div>

        <?php include(SITEROOT.'/helpers/scrollDown.php'); ?>
    </div>

    <div id="tools"     class="main_panel btn-warning"  data-title="Tools">
        <?php include(SITEROOT.'/helpers/scrollUp.php'); ?>
        <h2>Tools, etc.</h2>

        <div class="row">
            <ul class="list-inline">
                <li class="col-md-3">
                    <div class="gauge_container"><div class="gauge" data-value="2" id="tools_sublimetext"></div></div>
                    <h5>SublimeText</h5>
                </li>
                <li class="col-md-3">
                    <div class="gauge_container"><div class="gauge" data-value="2" id="tools_composer"></div></div>
                    <h5>Composer</h5>
                 </li>
                <li class="col-md-3">
                    <div class="gauge_container"><div class="gauge" data-value="3" id="tools_git"></div></div>
                    <h5>Git &amp; Utilities</h5>
                </li>
                <li class="col-md-3">
                    <div class="gauge_container"><div class="gauge" data-value="4" id="tools_linux"></div></div>
                    <h5>Linux</h5>
                </li>
            </ul>
        </div>

        <div class="row">
            <ul class="list-inline">
                <li class="col-md-3">
                    <div class="gauge_container"><div class="gauge" data-value="4" id="tools_jquery"></div></div>
                    <h5>jQuery</h5>
                </li>
                <li class="col-md-3">
                    <div class="gauge_container"><div class="gauge" data-value="2" id="tools_bootstrap"></div></div>
                    <h5>Bootstrap</h5>
                </li>
                <li class="col-md-3">
                    <div class="gauge_container"><div class="gauge" data-value="2" id="tools_webex"></div></div>
                    <h5>WebEx</h5>
                </li>
                <li class="col-md-3">
                    <div class="gauge_container"><div class="gauge" data-value="4" id="tools_apache"></div></div>
                    <h5>LAMP Stack</h5>
                </li>
            </ul>
        </div>

        <?php include(SITEROOT.'/helpers/scrollDown.php'); ?>
    </div>

    <div id="social"    class="main_panel btn-danger"   data-title="Social">
        <?php include(SITEROOT.'/helpers/scrollUp.php'); ?>
        <h2>Social Connections</h2>

        <div class="row">
            <ul class="list-inline">
                <li class="col-md-3">
                    <h5>LinkedIn</h5>
                </li>
                <li class="col-md-3">
                    <h5>Stack Overflow</h5>
                </li>
                <li class="col-md-3">
                    <h5>GitHub</h5>
                </li>
                <li class="col-md-3">
                    <h5>Facebook</h5>
                </li>
            </ul>
        </div>

        <div class="row">
            <ul class="list-inline">
                <li class="col-md-3">
                    <h5>HealthPlan Service</h5>
                </li>
                <li class="col-md-3">
                    <h5>MDR Computer</h5>
                </li>
                <li class="col-md-3">
                    <h5>Stream Global Service</h5>
                </li>
                <li class="col-md-3">
                    <h5>Traderplanet</h5>
                </li>
            </ul>
        </div>

        <?php include(SITEROOT.'/helpers/scrollDown.php'); ?>
    </div>

    <div id="hire"      class="main_panel btn-default"  data-title="Hire Me">
        <?php include(SITEROOT.'/helpers/scrollUp.php'); ?>
        <h2>Hire Me</h2>
    </div>



    <script language="javascript" src="<?= SITEROOT; ?>/../../vendor/components/jquery/jquery.min.js"></script>
    <script language="javascript" src="<?= SITEROOT; ?>/../../vendor/twitter/bootstrap/dist/js/bootstrap.min.js"></script>
    <script language="javascript" src="<?= SITEROOT; ?>/../../vendor/balupton/jquery-scrollto/src/documents/lib/jquery-scrollto.js"></script>
    <script language="javascript" src="<?= SITEROOT; ?>/../../vendor/makeusabrew/bootbox/bootbox.js"></script>
    <script language="javascript" src="<?= SITEROOT; ?>/../../vendor/toorshia/justgage/R&D/lib/raphael.2.1.0.min.js"></script>
    <script language="javascript" src="<?= SITEROOT; ?>/../../vendor/toorshia/justgage/justgage.js"></script>
    <script language="javascript" src="<?= SITEROOT; ?>/../../global_assets/js/portfolio.js"></script>

</body>
</html>