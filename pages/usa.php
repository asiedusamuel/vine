<?php
	$controller->set('page-title', 'USA Projects');
	$controller->setBreadcrumbs("Home/Projects/USA");
	include_once 'inc/header-and-breadcrumbs.php';
	?>
	<div class="main-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 main-content">

					<style>
    .listings {
        z-index: 10;
    }
    .listings h2.listening-title {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .listings h2.listening-title::before,
    .listings h2.listening-title::after {
        background-color: #ddd;
        content: "";
        display: inline-block;
        height: 1px;
        position: relative;
        vertical-align: middle;
        width: 30%;
    }

    .listings h2.listening-title::before {
        margin-right: 10px;
    }

    .listings h2.listening-title::after {
        margin-left: 10px;
    }

    .listings .article-image {
        background-position: center center;
        background-size: cover;
        padding: 30%;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    .listings .article-item:hover {
        background-color: rgb(247, 247, 247);
    }
</style>
					<div class="row" data-id="0345177278">
						<div class="entry-template">
							<div class="row">
								<div class="col-md-4 p-5 mb-4 article-item wow fadeInRight animated"
									data-wow-delay=".0s" style="visibility: visible; animation-delay: 0s;
									animation-name: fadeInRight;">
									<div class="article-image" style="background-image:
										url(./assets/images/shelter.jpg);"></div>
									<div class="text center text-center">
										<h3><a href="./shelter-evangelism/">Shelter Evangelism</a></h3>

										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
										eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
										minim veniam, quis nostrud exercitation ullamco laboris...
										<br>
										<br>
										<br>
										<img
											src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAeCAYAAABuUU38AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyNpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjY0M0RGMTg3NzczNTExRTNBQjFGRUExRTMwOTNEQzBCIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjY0M0RGMTg4NzczNTExRTNBQjFGRUExRTMwOTNEQzBCIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NjQzREYxODU3NzM1MTFFM0FCMUZFQTFFMzA5M0RDMEIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NjQzREYxODY3NzM1MTFFM0FCMUZFQTFFMzA5M0RDMEIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6mpXuMAAAGNklEQVR42txYeVBV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">
									</div>
								</div>
								<div class="col-md-4 p-5 mb-4 article-item wow fadeInRight animated"
									data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s;
									animation-name: fadeInRight;">
									<div class="article-image" style="background-image:
										url(./assets/images/alternative-family-evangelism.jpg);"></div>
									<div class="text center text-center">
										<h3 class="text-truncate"><a href="./alternative-family-evangelism/">Alternative Family Evangelism</a></h3>

										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
										eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
										minim veniam, quis nostrud exercitation ullamco laboris...
										<br>
										<br>
										<br>
										<img
											src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAeCAYAAABuUU38AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyNpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjY0M0RGMTg3NzczNTExRTNBQjFGRUExRTMwOTNEQzBCIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjY0M0RGMTg4NzczNTExRTNBQjFGRUExRTMwOTNEQzBCIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NjQzREYxODU3NzM1MTFFM0FCMUZFQTFFMzA5M0RDMEIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NjQzREYxODY3NzM1MTFFM0FCMUZFQTFFMzA5M0RDMEIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6mpXuMAAAGNklEQVR42txYeVBV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">
									</div>
								</div>
								<div class="col-md-4 p-5 mb-4 article-item wow fadeInRight animated"
									data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s;
									animation-name: fadeInRight;">
									<div class="article-image" style="background-image:
										url(./assets/images/prison-ministry.jpg);"></div>
									<div class="text center text-center">
										<h3><a href="./prisons-ministry/">Prisons Ministry</a></h3>

										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
										eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
										minim veniam, quis nostrud exercitation ullamco laboris...
										<br>
										<br>
										<br>
										<img
											src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAeCAYAAABuUU38AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyNpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjY0M0RGMTg3NzczNTExRTNBQjFGRUExRTMwOTNEQzBCIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjY0M0RGMTg4NzczNTExRTNBQjFGRUExRTMwOTNEQzBCIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NjQzREYxODU3NzM1MTFFM0FCMUZFQTFFMzA5M0RDMEIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NjQzREYxODY3NzM1MTFFM0FCMUZFQTFFMzA5M0RDMEIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6mpXuMAAAGNklEQVR42txYeVBV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">
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
