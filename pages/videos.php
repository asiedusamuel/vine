<?php
	$controller->set('page-title', 'Videos');
	include_once 'inc/videos.php';
	$videos = new videos;
	$controller->setBreadcrumbs("Home/Media/Videos");
	include_once 'inc/header-and-breadcrumbs.php';
	?>
	<script>
		$(document).ready(function(){
			$('.special.cards .image').dimmer({
				on: 'hover'
			});
			$('.list-group.ui.sticky').sticky({
				onStick: function(){$(this).css({"margin-top":"60px"})}
			})
		});
	</script>
	<style>
		.img-text{
			position: absolute;
			z-index: 100;
			background: rgba(0,0,0,0.8);
			color: #ffffff;
			padding: 3px 5px;
			border-radius: 3px;
			font-family: "Open Sans", Helvetica, Roboto, Arial, sans-serif;
			font-size: 11px;
			bottom: 5px;
			right: 5px;
		}
	</style>
	<div class="main-content">
		<div class="row pl-4">
			<div class="col-md-3">
					<ul class="list-group ui sticky">
						<h3 class="list-group-item white pl-2" style="background:rgba(128, 0, 128, 0.897);">Categories</h3>
						<?=$videos->categories();?>
					</ul>
			</div>
			<div class="col-md-9">
				<div class="ui special cards link">
					<?=$videos->list(isset($_REQUEST["catID"])?$_REQUEST["catID"]:null)?>
				</div>
			</div>
		</div>
	</div>
