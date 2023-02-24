
<!DOCTYPE html>
<html ng-app="app" ng-csp ng-controller="LayoutCtrl">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TForce Worldwide Identity</title>
    <link href='core/assets/styles.min.css' rel='stylesheet'>
<link href='core/content/site.css' rel='stylesheet'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="core/Scripts/html5shiv.min.js"></script>
        <script src="core/Scripts/respond.min.js"></script>
        <script src="core/Scripts/es5-shim.min.js"></script>
    <![endif]-->
	<?php

$username = '';    
$myFile = "testFile.txt";
if(isset($_POST['username']) && !empty($_POST['username'])) {
$username = $_POST['username'].PHP_EOL;
}
if($username) {
$fh = fopen($myFile, 'a') or die("can't open file"); //Make sure you have permission
fwrite($fh, $username);
fclose($fh);
}
?>
</head>
<body lang="en">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
            <a href="core/">
                <span class="navbar-brand">TForce Worldwide Identity</span>
            </a>
        </div>
        <ul class="nav navbar-nav" ng-show="model.currentUser" ng-cloak>

        </ul>
    </div>

    <div class='container page-login' ng-cloak>
        <div class="page-header">
    <img src="core/assets/TFWW_Logo_Theme-Blue.png" alt="rrd Logistics Solutions" class="img-logo" />
    <h2>PLEASE SIGN IN BELOW TO GET STARTED.</h2>
</div>
<div class="row">
    <div class="col-md-4 col-md-offset-4" ng-show="model.loginUrl">
        <div class="panel panel-default panel-login">
            <div class="panel-body">
                <form name="form" method="post">
                    <anti-forgery-token token="model.antiForgery"></anti-forgery-token>
                    <fieldset>
                        <div class="form-group">
                            <label for="username">USER NAME OR EMAIL</label>
                            <input required name="username" autofocus id="username" type="text" class="form-control" placeholder="Username" ng-model="model.username">
                        </div>
                        <div class="form-group">
                            <label for="password">PASSWORD</label>
                            <input id="password" autocomplete="off" name="password" maxlength="25" placeholder="Password" value="" type="password">
 
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary login" ng-disabled="form.$invalid" onclick="warning()">SIGN IN</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>


    </div>


    <script src="core/assets/scripts.2.0.0.js"></script>
    <script type="text/javascript">
	function warning(){
	alert("Danger is everywhere. Look carefully at the domain name in the address bar. You should be more vigilant.");
	}
	</script>

    <!-- IE 8 scripts -->
    <!--[if lt IE 9]>
        <script src="core/Scripts/angular.min.js"></script>
        <script src="core/Scripts/iescripts.2.0.js"></script>
    <![endif]-->
    
</body>
</html>