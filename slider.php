<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#slideShim').cycle({ 
			fx:     'fade',
			speed:  1500,
			timeout: 4000,
			prev:   '#back',
			next:   '#forward',
			pause:  1,
			pager:  '#pager'
		});
});
</script>

	<!-- Beginning of the slider markup -->
	<div id="metaContainer">	

		<div class="backLink"><a href="#" title="Back" id="back">Back</a></div>
		
		<div id="slideContainer">
			<div id="slideShim">
				<a href="#"><img src="slides/1.jpg" height=360 width=800 alt="Slide One" /></a>
				<a href="#"><img src="slides/2.jpg" height=360 width=800 alt="Slide Two" /></a>
				<a href="#"><img src="slides/3.jpg" height=360 width=800 alt="img" /></a>
				<a href="#"><img src="slides/4.jpg" height=360 width=800 alt="Slide Two" /></a>
				<a href="#"><img src="slides/5.jpg" height=360 width=800 alt="img" /></a>
			</div>
		</div>
		
		<div class="forwardLink"><a href="#" title="Forward" id="forward">Forward</a></div>
		
		<div id="pager" class="clear"></div>
	</div>
	<!-- End of the slider markup -->