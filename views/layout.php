<?php
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
    <link href="/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="/dist/css/bootstrap-theme.min.css" rel="stylesheet">
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
                <b>Kelly Webber</b> 610.213.3442 &nbsp; <b>Austin Carter</b> 570.292.3278 &nbsp; <b>Diane Webber</b> 215.540-4439
            </p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/assets/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
