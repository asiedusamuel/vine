<?php 
include_once 'inc/blogs.php';
$blogs = getBlogs();
$blog = $blogs[$_REQUEST["blogID"]];
$controller->set('page-title', 'Blog Post');
$controller->setBreadcrumbs("Home/Media/Blogs/".$blog["title"]);
include_once 'inc/header-and-breadcrumbs.php';
?>
<div class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-md-9 main-content">
				<h1><?=$blog["title"]?></h1>
				<hr/>
				<em class="gray d-block mb-3"><i class="icon calendar"></i> <?=$controller->formatDate($blog["date"],'l, jS M, Y')?></em>
				<img class="ui bordered p-1 mb-3 image fluid" src="<?=$blog["image"]?>" />
				<p><?=$blog["content"]?></p>
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
				<hr />
			</div>
			<?php require( 'inc/sidebar.php')?>
		</div>
	</div>
</div>
