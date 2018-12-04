<?php 
	include_once 'inc/videos.php';
	$videos = getVideos();
	$catID = $_REQUEST["catID"];
	$catID = $controller->decode($catID);
	$vidID = $_REQUEST["vidID"];
	$video = $videos[$catID][$vidID];
	$title = $video["title"];
	$controller->set('page-title', $title);
	$controller->setBreadcrumbs("Home/Media/Videos/".$title);
	include_once 'inc/header-and-breadcrumbs.php';
?>
<div class="main-content">
	<div class="container">
		<div class="row">
				<div class="col-lg-9 main-content">
					<h2><?=$video["title"]?></h2>
					<hr />
					<i class="icon gray share alternate"></i> <span class="gray">SHARE</span> 
					<a class="pl-6" href="#" style="color:#3B5998;">
						<i class="icon facebook large"></i>
					</a>
					<a href="#" style="color:#00ACED;">
						<i class="icon twitter large"></i>
					</a>
					<a href="#">
						<i class="icon google red plus large"></i>
					</a>
					<hr/>
				<iframe src="http://www.youtube.com/embed/<?=$video["youtubeID"]?>" width="100%" height="400" frameborder="0" allowfullscreen></iframe>
				<p><?=$video["description"]?></p>
			</div>
			<?php require( 'inc/sidebar.php')?>
		</div>
	</div>
</div>
