<?php 
$controller->set('page-title', 'Projects');
$controller->setBreadcrumbs("Home/Projects");
include_once 'inc/header-and-breadcrumbs.php';
?>
<div class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 main-content">
				<div class="ui cards link justify-content-center pb-5">
					<div class="card">
						<a href="./usa/" class="image">
							<img src="./assets/images/usa.jpg">
						</a>
						<div class="content">
							<a href="./videos/"  class="header text-center">USA</a>
							<div class="description text-center">
								Get to know our projects in the United State of America
							</div>
						</div>
					</div>
					<div class="card">
						<a href="./projects-ghana/"  class="image">
							<img src="./assets/images/ghana.jpg">
						</a>
						<div class="content">
							<a href="./projects-ghana/" class="header text-center">Ghana</a>
							<div class="description text-center">
								Get to know our projects in the United State of America
							</div>
						</div>
					</div>
					<div class="card">
						<a href="./sponsorship/"  class="image">
							<img src="./assets/images/sponsorship.jpg">
						</a>
						<div class="content">
							<a href="./sponsorship/" class="header text-center">Sponsorship</a>
							<div class="description text-center">
								Get to know or be part of our sponsorship team
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
