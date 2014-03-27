<?php
	$DATAFILE = "elements.json";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Periodic</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

	<div class="container">
		<h1>Periodic Table</h1>

		<?php // The table is 18 columns wide by 10 deep ?>
		<ul id="table">
		<?php 
			for ( $group = 0; $group < 18; $group++ ) { ?>
			<ul class="group"> <?php
				for ( $cell = 0; $cell < 10; $cell++ ) { ?>
					<li></li>
				<?php } ?>
			</ul>
			<? } ?>
		</ul>

		<?php

			$data = file_get_contents( "./" . $DATAFILE );
			$json = json_decode( $data, true );

			print_r( $json );
			

	?>


	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
