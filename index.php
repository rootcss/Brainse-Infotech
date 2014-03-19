<?php 
	require('upper.php');
?>

	<title>Brainse Infotech | Home</title>
    <link rel="stylesheet" type="text/css" href="./css/index-hover.css">

	<!--PUT ALL CONTENT HERE-->
	<div id="content">
		<!--MAIN STARTS-->
		<div id="main">			
			<!--LEFT STARTS-->
			<div id="left">

				<?php require('slider.php'); ?>
			
			</div>
			<!--LEFT ENDS-->
			
			<!--RIGHT STARTS-->
			<div id="right">
				<div id="right-content">
					<div class="tile-group">
						
						<a href="./index.php">
						<div class="tile" id="tile1">							
							<div class="view view-first">
			                    <img src="./images/tiles/1.png" height=100% width=100%>
			                    <div class="mask">
			                        <h2>HOME</h2>
			                        <!--<p>Services that we cater</p>-->
			                    </div>
                			</div>
						</div>
						</a>
						
						<a href="./services.php">
						<div class="tile" id="tile2">
							<div class="view view-first">
			                    <img src="./images/tiles/2.png" height=100% width=100%>
			                    <div class="mask">
			                        <h2>SERVICES OFFERED</h2>
			                        <!--<p>Services that we cater</p>-->
			                    </div>
                			</div>
						</div>
						</a>

					</div>
					<div class="tile-group">
						
						<a href="./about.php">
						<div class="tile" id="tile3">
							<div class="view view-first">
			                    <img src="./images/tiles/3.png" height=100% width=100%>
			                    <div class="mask">
			                        <h2>ABOUT</h2>
			                        <!--<p>Services that we cater</p>-->
			                    </div>
                			</div>	
						</div>
						</a>
						
						<a href="./clients.php">
						<div class="tile" id="tile4">
							<div class="view view-first">
			                    <img src="./images/tiles/4.png" height=100% width=100%>
			                    <div class="mask">
			                        <h2>CLIENTELLE</h2>
			                        <!--<p>Services that we cater</p>-->
			                    </div>
                			</div>	
						</div>
						</a>

					</div>
				</div>	
			</div>
			<!--RIGHT ENDS-->	
		</div>
		<!--MAIN ENDS-->

		<!--CUSTOMERS STARTS-->
		<div id="customers">
			<div id="customers-content">
			<!--	<div class="box">
					<div class="box-content">
						<img src="./images/clients/amazon.jpeg" width=100% height=100%>
					</div>	
				</div>	
				<div class="box">
					<div class="box-content">
						<img src="./images/clients/facebook.jpg" width=100% height=100%>
					</div>	
				</div>
				<div class="box">
					<div class="box-content">
						<img src="./images/clients/google.jpg" width=100% height=100%>
					</div>	
				</div>	
				<div class="box">
					<div class="box-content">
						<img src="./images/clients/microsoft.jpeg" width=100% height=100%>
					</div>	
				</div>	
				<div class="box">
					<div class="box-content">
						<img src="./images/clients/twitter.jpeg" width=100% height=100%>
					</div>	
				</div>-->	
				<div style="padding-left:30px;padding-right:40px;">
					<span style="font-weight:normal;font-size:26px;text-align: justify;">
						Searching is an existing phenomenon, providing new way to search is our vision. 
						We don't get completed with existing technology, hence we innovate. 
						We don't focus in delivering a product, we focus in complete client satisfaction.					
					</span>
				</div>
			</div>
		</div>
		<!--CUSTOMERS ENDS-->

	</div>
	<!--CONTENT HOLDER ENDS HERE-->

<?php 
	require('lower.php');
?>