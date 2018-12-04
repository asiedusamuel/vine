<?php 
$controller->set('page-title', 'Media');
$controller->setBreadcrumbs("Home/Media");
include_once 'inc/header-and-breadcrumbs.php';
?>
<div class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 main-content">
				<div class="ui cards link justify-content-center pb-5">
					<div class="card">
						<a href="./videos/" class="image">
							<img src="./assets/images/video.jpg">
						</a>
						<div class="content">
							<a href="./videos/"  class="header">Videos</a>
							<div class="meta">
								<a>Our Videos</a>
							</div>
							<div class="description">
								View all our videos from this section.
							</div>
						</div>
						<div class="extra content">
							<span>
								<i class="video icon"></i>
								Latest Video:
							</span>
						</div>
					</div>
					<div class="card">
						<a href="./blogs/"  class="image">
							<img src="./assets/images/blogs.jpg">
						</a>
						<div class="content">
							<a href="./blogs/" class="header">Blogs</a>
							<div class="meta">
								<a>Our Blog Posts</a>
							</div>
							<div class="description">
								Know whats more about our church
							</div>
						</div>
						<div class="extra content">
							<span>
								<i class="file icon"></i>
								Latest Post:
							</span>
						</div>
					</div>
					<div class="card">
						<a href="./publications/"  class="image">
							<img src="./assets/images/publications.jpg">
						</a>
						<div class="content">
							<a href="./publications/" class="header">Publications</a>
							<div class="meta">
								<a>Our Publications</a>
							</div>
							<div class="description">
								Get to know our latest publications
							</div>
						</div>
						<div class="extra content">
							<span>
								<i class="book icon"></i>
								Latest Publication: 
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
