<?php
	$DATAFILE = "elements.json";

	$table_order = array(
		 1,    3,   11,  19,  37,  55,  87,   '',  '',  '', // Group 1
		'',    4,   12,  20,  38,  56,  88,   '',  '',  '', // Group 2
		'',   '',   '',  21,  39,  '',  '',   '',  57,  89, // Group 3
		'',   '',   '',  22,  40,  72, 104,   '',  58,  90, // Group 4
		'',   '',   '',  23,  41,  73, 105,   '',  59,  91, // Group 5
		'',   '',   '',  24,  42,  74, 106,   '',  60,  92, // Group 6
		'',   '',   '',  25,  43,  75, 107,   '',  61,  93, // Group 7
		'',   '',   '',  26,  44,  76, 108,   '',  62,  94, // Group 8
		'',   '',   '',  27,  45,  77, 109,   '',  63,  95, // Group 9
		'',   '',   '',  28,  46,  78, 110,   '',  64,  96, // Group 10
		'',   '',   '',  29,  47,  79, 111,   '',  65,  97, // Group 11
		'',   '',   '',  30,  48,  80, 112,   '',  66,  98, // Group 12
		'',    5,   13,  31,  49,  81, 113,   '',  67,  99, // Group 13
		'',    6,   14,  32,  50,  82, 114,   '',  68,  100, // Group 14
		'',    7,   15,  33,  51,  83, 115,   '',  69,  101, // Group 15
		'',    8,   16,  34,  52,  84, 116,   '',  70,  102, // Group 16
		'',    9,   17,  35,  53,  85, 117,   '',  71,  103, // Group 17
		 2,   10,   18,  36,  54,  86, 118,   '',  '',  ''  // Group 18
	);
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
		<h1>Periodic Table<br />of Elements</h1>

		<?php // The table is 18 columns wide by 10 deep ?>
		<ul id="table">
		<?php 
			$json = file_get_contents( "./" . $DATAFILE );
			$data = json_decode( $json, true );
			$element;

			for ( $group = 0; $group < 18; $group++ ) { ?>
			<ul class="group"> <?php
				for ( $cell = 0; $cell < 10; $cell++ ) {
					$atomic_number = $table_order[ $group * 10 + $cell ];
					if ( $atomic_number != '' ) {
						foreach ( $data as $name => $info)
							if ( $info['atomic_number'] == $atomic_number )
								$element = $name;

						echo '<li>' . $atomic_number;
							echo '<h3>' . $data[$element]['symbol'] . '</h3>';
						echo '</li>';
					} else
						echo '<li></li>';
				} ?>
			</ul>
			<? } ?>
		</ul>

		<?php



	?>


	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
