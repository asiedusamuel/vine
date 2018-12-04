<?php
$controller->set('page-title', 'Contact Us');
$controller->setBreadcrumbs("Home/Contact Us");
?>
<script>
// Initialize and add the map
	function initMap() {
		// The location of Uluru
		var uluru = {lat: -25.344, lng: 131.036};
		// The map, centered at Uluru
		var map = new google.maps.Map(document.getElementById('map'), {zoom: 7, center: uluru});
		// Info
		var infowindow = new google.maps.InfoWindow({
          content: 'Contact <?=$config["title"]?>'
        });
		// The marker, positioned at Uluru
		var marker = new google.maps.Marker({
			position: uluru, 
			map: map,
			disableDefaultUI: true
		});
		infowindow.open(map, marker);
	}
	$(document).ready(function(){
		var last_li_text = $("ol.breadcrumb.justify-content-center li:last-child").text();
		$("ol.breadcrumb li:last-child").addClass("active");
		$("ol.breadcrumb.justify-content-center li:last-child").text(last_li_text);
		$('.contact-form').semanticfy();
		$('.contact-form').submit(function(e){
			var $this = $(this);
			var $formData = $this.serializeJSON();
			$formData.action = 'sendMail';
			$this.addClass("loading");
			$.ajax({
				type: "POST",
				timeout: 10000,
				data: $formData,
				success: function (data) {
					$this.removeClass("loading");
					jQuery.toast({
						heading: "Contact Us",
						text: data,
						icon: "success",
						position: "top-right",
						hideAfter: 8000
					});
				},
				error: function (error, text) {
					
				}
			});
			e.preventDefault();
			return false;
		})
	});
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLapEySUbaci8xuN4E9aotK4g3f5WcwWc&callback=initMap"></script>
<style>
.page-title .breadcrumb{
	background-color:transparent !important;
	background:transparent !important;
}
.gmnoprint,
.gm-control-active{
	display: none !important;
}
</style>
<div class="row m-0 page-title" style="height:400px !important;">
	<div id="map" style="height: 400px; width: 100%; position:absolute; z-index:0; background-color:rgba(167, 27, 160, 0.523);"></div>		
</div>
<div class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 main-content">
				<div class="row">
					<div class="col-md-4">
						<h2>Why not say hello?</h2>
						<hr class="sm"/>
						<p class="pb-3">Write us an e-mail via the form, or just send us an e-mail directly at: <a href="mailto:<?=$config["email"]?>"><?=$config["email"]?></a></p>

						<h2>Our Address</h2>
						<hr class="sm"/>
						<p><?=$config["title"]?><br/>P. O. Box 177, <br/>Windsor, CT 06095-0177</p>

						<h2>Connect With Us</h2>
						<hr class="sm"/>
						<div class="mb-4">
							<a href="#" class="social-icon facebook">
								<i class="icon facebook"></i>
							</a>
							<a href="#" class="social-icon twitter">
								<i class="icon twitter"></i>
							</a>
							<a href="#" class="social-icon googleplus">
								<i class="icon google plus"></i>
							</a>
							<a href="#" class="social-icon youtube">
								<i class="icon youtube"></i>
							</a>
						</div>
					</div>
					<div class="col-md-8">
						<form class="ui form contact-form">
							<div class="row">
								<div class="col-md-6 mb-3">
									<div class="field">
										<div class="ui input">
											<input name="name" data-ui-validate data-ui-empty="Enter your full name" placeholder="Full Name *" type="text" />
										</div>
									</div>									
								</div>
								<div class="col-md-6 mb-3">
									<div class="field">
										<div class="ui input">
											<input name="email" data-ui-validate data-ui-empty="Enter your Email Address" data-ui-email="Enter a valid email address" placeholder="Email *" type="text" />
										</div>
									</div>
								</div>
								<div class="col-md-12 mb-3">
									<div class="field">
										<div class="ui input">
											<input name="subject" data-ui-validate data-ui-empty="Enter your subject" placeholder="Subject *" type="text" />
										</div>
									</div>
								</div>
								<div class="col-md-12 mb-3">
									<div class="field">
										<div class="ui input">
											<textarea name="message" data-ui-validate data-ui-empty="Pease enter your message" placeholder="Enter Message Here *"></textarea>
										</div>
									</div>
								</div>
								<div class="col-md-12 mb-3">
									<div class="field">
										<button class="ui large button primary">SEND</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
