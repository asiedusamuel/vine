<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<base href="<?=$config["url"];?>" />
        <title><?=$config["title"];?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="try"/>
        <meta name="keywords" content="this"/>
        <meta property="og:title" content="Vine Bezaleel Ministries Inc."/>
        <meta property="og:description" content=""/>
        <meta property="og:keywords" content=""/>
        <meta property="qic-handler" content=""/>

	<link href="./assets/styles/semantic.min.css" rel="stylesheet" type="text/css">
	<link href="./assets/styles/colors/colors.css" rel="stylesheet" type="text/css">
	<link href="./assets/styles/style.css" rel="stylesheet" type="text/css">
	<link href="./assets/styles/jquery.toast.min.css" rel="stylesheet" type="text/css">
	<link href="./assets/styles/menu.css" rel="stylesheet" type="text/css">
	<link href="./assets/styles/icon.min.css" rel="stylesheet" type="text/css">
	<link href="./assets/styles/animated.css" rel="stylesheet" type="text/css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="./assets/styles/bootstrap.min.css" />
	<?php $controller->loadStylesheets(); ?>
	<!-- Latest compiled JavaScript -->
	<script src="./assets/scripts/jquery.min.js"></script>
	<script src="./assets/scripts/semantic.min.js"></script>
	<script src="./assets/scripts/semanticfy.js"></script>
	<script src="./assets/scripts/jquery.form.serialize.js"></script>
	<script src="./assets/scripts/jquery.toast.min.js"></script>
    <script src="./assets/scripts/wow.min.js"></script>
    <script src="./assets/scripts/menumaker.min.js"></script>
	<script src="./assets/scripts/menu.js"></script>
	<script src="./assets/scripts/bootstrap.bundle.min.js"></script>
	<script src="./assets/scripts/app.js"></script>
	<?php $controller->loadScripts(); ?>
	<script>
		if (typeof WOW != "undefined") new WOW().init();
		$(document).ready(function () {
			$('.ui.sticky').sticky({

            });
            $("#cssmenu").menumaker({
				title: "Menu",
				breakpoint: 768
			});
			$("#menu-button:first-child").remove();
		});
	</script>
</head>

<body>
	<div class="main-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<?=$controller->getDate('l, jS M, Y');?>
				</div>
				<div class="col-lg-6">
					<div class="float-right auth-link">
						<a class="auth-link-login" href="./account-login/"><i class="icon unlock small"></i> Sign In</a> | <a class="tiny primary button auth-link-register" data-title="Become A Member Now!!" href="./account#/register"><i class="icon user small"></i> Register</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="logo-pane row m-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<img src="./assets/images/logo.jpg" style="width:300px;" />
				</div>
			</div>
		</div>
	</div>
	<div class="navigation-bg ui sticky m-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-12" id="cssmenu">
					<ul><?=$controller->getMenu()?></ul>
                </div>
			</div>
		</div>
	</div>

<?php
if (isset($_REQUEST["pageID"])) {
    $page = $_REQUEST["pageID"];
} else {
    $page = "home";
}
$pagePath = 'pages/' . $page . '.php';
if (file_exists($pagePath)) {
    include_once($pagePath);
}else{
	include_once('./pages/not-found.php');
}

?>

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-md-6">
							<p>Copyright &copy;
								2018
								<?=$config["title"]?> All Rights Reserved.</p>
						</div>
						<div class="col-md-6">
							<p class="text-right">Build With <i class="red icon heartbeat"></i> By <a target="_blank" href="http://www.fillycoder.com">
									Filly Coder</a>.</p>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>

</body>

</html>
