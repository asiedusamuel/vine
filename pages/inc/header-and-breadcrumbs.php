<div class="row m-0 page-title">
		<h1>
			<?=$controller->get("page-title");?>
		</h1>
		<script>
			$(document).ready(function(){
				var last_li_text = $("ol.breadcrumb.justify-content-center li:last-child").text();
				$("ol.breadcrumb li:last-child").addClass("active");
				$("ol.breadcrumb.justify-content-center li:last-child").text(last_li_text);
			});
		</script>
		<?=$controller->breadcrumbs();?>
		
	</div>
