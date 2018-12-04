<?php
$controller->set('page-title', 'Events & Mission');
$controller->setBreadcrumbs("Home/Event & Mission/Itinerary & Calendar");
include_once 'inc/header-and-breadcrumbs.php';
require 'inc/events.php';
$events = new events;
?>
<style>
	.event-item{
		margin-top: 10px;
		margin-bottom: 10px;
	}
	.event-item:first-child{
		margin-top: 0px;
	}
	.date-box{
		background:  rgba(128, 0, 128, 0.897);
		color: #ffffff;
		border-radius: 4px;
		text-align: center;
		text-transform: uppercase;
		padding-bottom:20px;
	}
	.date-box h1{
		padding-top:20px;
		font-weight:300;
		font-size:3em;
	}
	.date-box .date-year{
		background:  rgb(128, 0, 128);
		width:100px;
		margin: 1px auto;
		padding: 2px;
		border-radius: 3px;
	}
	.event-date {
		border: 2px solid #f8f8f8;
		background-image: url(./assets/images/dashed.png);
		text-align: center;
		margin-top: 3px;
		-webkit-transition: all 0.3s ease 0.2s;
		-moz-transition: all 0.3s ease 0.2s;
		-ms-transition: all 0.3s ease 0.2s;
		-o-transition: all 0.3s ease 0.2s;
		transition: all 0.3s ease 0.1s;
		padding: 10px 2px;
	}
	.event-date:hover{
		border: 2px solid rgb(128, 0, 128);
	}
	.event-date .day{
		font-size: 3em;
		font-weight: bold;
	}
	.event-description .description,
	.event-description h4{
		border-bottom: 1px solid #f8f8f8;
		padding:5px 0;
	}
	.event-description h4 a{
		text-decoration: none;
	}
	.event-description h4 a:hover{
		color:#000;
	}
	.event-description .description{
		font-style: italic;
		color: #999;
	}

</style>
<div class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 main-content">
				<div class="row">
					<div class="col-md-3">
						<div class="date-box">
							<h1><?=$controller->getDate('M');?></h1>
							<div class="date-year"><?=$controller->getDate('Y');?></div>
						</div>
					</div>
					<div class="col-md-9">
						<?=$events->list()?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
