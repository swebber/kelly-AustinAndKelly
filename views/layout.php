<?php
require_once('util.php');

$isActive = function ($page) use ($controller) {
    echo ($controller == $page) ? 'class="active"' : '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Austin &amp; Kelly</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css" integrity="sha256-YvAujCECPPslDy9IUX/t20rU7WANfRpYMtIusXyn/ho=" crossorigin="anonymous" />
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/assets/css/theme.css?003" rel="stylesheet">

</head>
<body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">AUSTIN &amp; KELLY</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li <?php $isActive('rsvp'); ?>><a href="/rsvp">RSVP</a></li>
                    <li <?php $isActive('about'); ?>><a href="/about">About</a></li>
                    <li <?php $isActive('lodging-transportation'); ?>><a href="/lodging-transportation">Lodging/Transportation</a></li>
                    <li <?php $isActive('registery'); ?>><a href="/registery">Registery</a></li>
                    <?php /* <li <?php $isActive('examples'); ?>><a href="/examples">Examples</a></li> */ ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <?php require_once('routes.php'); ?>

    <footer class="footer">
        <div class="container">
            <p class="text-muted text-center">
                If you have any questions please call<br />
                <b>Kelly&nbsp;Webber</b>&nbsp;610.213.3442 &nbsp; <b>Austin&nbsp;Carter</b>&nbsp;570.292.3278 &nbsp; <b>Diane&nbsp;Webber</b>&nbsp;215.540.4439
            </p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>');</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js" integrity="sha256-PbFF1Mdg86urwOYXWNJPP4z5Ge9KLp6KXX1NURQY8Ho=" crossorigin="anonymous"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/assets/js/ie10-viewport-bug-workaround.js"></script>

    <?php
    $scripts = Util::getLateLoadScripts();
    foreach ($scripts as $item) {
        echo '<script src="' . $item . '"></script>';
    }
    ?>
    
</body>
</html>
