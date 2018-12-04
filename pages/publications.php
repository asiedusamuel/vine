<?php
	$controller->set('page-title', 'Publications');
	$controller->setBreadcrumbs("Home/Medai/Publications");
	include_once 'inc/header-and-breadcrumbs.php';
	include_once 'inc/publications.php';
	$pubs = new publications;
	?>
<script>
	var $element=$('.each-event, .title');
	var $window = $(window);
	$window.on('scroll resize', check_for_fade);
	$window.trigger('scroll');
	function check_for_fade() { 
		var window_height = $window.height();
		
		$.each($element, function (event) {
			var $element = $(this);
			var element_height = $element.outerHeight();
			var element_offset = $element.offset().top;
			space = window_height - (element_height + element_offset -$(window).scrollTop());
			if (space < 60) {
				$element.addClass("non-focus");
			} else {
				$element.removeClass("non-focus");
			}
	
		});
	};
</script>
<style>

.block {
  z-index: 1;
  position: relative;
  width:100%;
}
.block:before {
  content: "";
  position: absolute;
  height: calc(100% - 40px);
  width: 1px;
  background-color: rgb(167, 27, 160);
  left: 50%;
  margin-top: 90px;
}
.year-title {
  font: bold 42px/52px Open Sans Condensed, sans-serif;
  text-align: center;
  padding: 20px;
  transition: all 0.8s ease-in-out;
}

.each-event {
  background-color: #f4f4f4;
  color: #777;
  padding: 15px;
  margin: 60px 20px;
  width: 420px;
  min-height: 190px;
  position: relative;
  border-radius: 4px;
  box-sizing: border-box;
  transition: all 0.3s ease-in-out;
}
.each-event:before {
  content: "";
  position: absolute;
  top: calc(50% - 8px);
  left: -27px;
  width: 16px;
  height: 16px;
  border-radius: 50%;
  background-color: rgb(167, 27, 160);
  box-shadow: 0 4px 20px -4px rgba(24, 24, 24, 0.8);
}
.each-event:nth-child(odd) {
  margin-left: calc(50% + 20px);
}
.each-event:nth-child(even) {
  margin-left: calc(50% - 441px);
}
.each-event:nth-child(even):before {
  left: calc(100% + 14px);
}

.year-title.non-focus {
  font-size: 24px;
  line-height: 34px;
  transition: all 0.8s ease-in-out;
}

.each-event.non-focus {
  color: #d2d2d2;
  background: #e6e6e6;
  margin-top: 90px;
  transform: rotateZ(45deg);
  transition: all 0.8s ease-in-out;
}
.each-event.non-focus:before {
  opacity: 0;
  background-color: #aaa;
}
</style>
	<div class="main-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<?=$pubs->list()?>
				</div>
			</div>
		</div>
	</div>
