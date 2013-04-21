<?php
/**
 * @package    ortopedia
 * @subpackage  TPL_Ortopedia
 * @copyright  Copyright (C) Pedro Stéfano, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

$path = $this->baseurl . '/templates/' . $this->template;
$app = JFactory::getApplication();


?>
<!DOCTYPE html>
<html language="<?php echo $this->language ?>" dir="<?php echo $this->direction ?>">
  <head>
    <jdoc:include type="head" />

  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!-- Le styles -->
    <link href="<?php echo $path ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $path ?>/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo $path ?>/css/template.css" rel="stylesheet">
   

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo $path ?>/js/html5shiv.js"></script>
    <![endif]-->

  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="muted"><?php echo $app->getCfg('sitename'); ?></h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">

                <li class="active"><jdoc:include type="modules" name="Reabilitar-mainmenu" style="none"/></li>

                <!--
                <li><a href="#">Projects</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Downloads</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                -->



              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Marketing stuff!</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <a class="btn btn-large btn-success" href="#">Get started today</a>
      </div>

      <hr>

      <!-- Example row of columns -->
      <div class="row-fluid">
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <div class="footer">
        <p>&copy; <?php echo $app->getCfg('sitename'); ?> <?php echo date ('Y') ?></p>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="<?php echo $path ?>/js/bootstrap.min.js"</script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

  </body>
</html>
