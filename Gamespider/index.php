<html>
<head>
  <title> MangaSpider </title>
   <link rel="stylesheet" href="css/style.css">   
   <meta charset="utf-8">
   <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>

<body>			
<div class="wrapper">
	<!-- PRICING-TABLE CONTAINER -->
	<div class="pricing-table group">
		<h1 class="heading">
			Game Spider
		</h1>
		<?php  $file = fopen("ahmed.csv", "r");
		  $counter=0;
		  fgetcsv($file, 1000, ",");
		  while (($line = fgetcsv($file, 1000, ",")) !== FALSE):
				?>
					<!-- PROFESSIONAL -->
					<div style="width:300px;" class="block professional fl">
						<h2 class="title"><sub><?php echo $counter; ?>.</sub><a href="http://mazika2day.com/<?php echo $line[0]?>"><?php echo $line[1]?></a></h2>
						
						<!-- CONTENT -->
						<div style="height:200px;background-image: url(http://mazika2day.com/<?php echo $line[2]?>);" class="content">
						</div>
						<!-- /CONTENT -->
						
						<!-- FEATURES -->
						<ul style="height:200px;" class="features">
							<li></span><?php echo $line[3]?></li>
						</ul>
						<!-- /FEATURES -->
						
						<!-- PT-FOOTER -->
						<div class="pt-footer">
							<p> </p>
						</div>
						<!-- /PT-FOOTER -->
					</div>
					<div class="clearfix"></div>
		<?php if($counter == 100) break; $counter++; endwhile; ?>
		<!-- /PROFESSIONAL -->
	</div>	
	<!-- /PRICING-TABLE -->
</div>
			
			

</body>

</html>