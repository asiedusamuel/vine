<?php 
$controller->set('page-title', 'Event');
$controller->setBreadcrumbs("Home/Event & Mission");
include_once 'inc/header-and-breadcrumbs.php';
include_once 'inc/events.php';
$events = getEvents();
$event = $events[$_REQUEST["eventID"]]
?>
<style>
	.event-title{
		font-weight: 400;
	}
</style>
<div class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 main-content">
				<div class="row">
					<div class="col-md-4">
						<h1 class="event-title"><?=$event["title"]?></h1>
						<div class="gray mt-4 mb-4">
							<em><i class="icon map marker"></i> <?=$event["location"]?></em><br/>
							<em><i class="icon clock"></i><?=$controller->formatDate($event["date"],"l, h:s A")?></em>
						</div>
						<hr class="sm" />
					</div>
					<div class="col-md-8">
						<img class="ui fluid bordered rounded p-1 floated image" src="<?=$event["image"]?>">
						<p><?=$event["content"]?></p>
					</div>
				</div>
				
			</div>
			<?php require( 'inc/sidebar.php')?>
		</div>
	</div>
</div>
