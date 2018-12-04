<?php
	$controller->set('page-title', 'Blogs');
	$controller->setBreadcrumbs("Home/Media/Blogs");
	include_once 'inc/header-and-breadcrumbs.php';
	include_once 'inc/blogs.php';
	$blogs = new blogs;
?>
<style>

.masonry.grid {
  display: block;
}

@media only screen and (min-width: 768px) {
  .masonry.grid {
    -webkit-column-count: 2;
       -moz-column-count: 2;
            column-count: 2;
    -webkit-column-gap: 0;
       -moz-column-gap: 0;
            column-gap: 0;
  }
  
  .ui.doubling.masonry.grid[class*="three column"] > .column {
    width: 100% !important;
  }
}

@media only screen and (min-width: 992px) {
  .masonry.grid {
    -webkit-column-count: 3;
       -moz-column-count: 3;
            column-count: 3;
  }
}
</style>
	<div class="main-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 main-content">
					<div class="ui three column doubling stackable masonry grid">
						<?=$blogs->list()?>
					</div>
				</div>
			</div>
		</div>
	</div>
