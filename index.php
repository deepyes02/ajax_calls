<?php include(__DIR__ . '../components/header.php') ?>
	<title>Raw Ajax</title>
</head>

<body class="main_body">
	<h2>Ajax with PHP</h2>
	<p>AJAX AND JAVASCRIPT PLAYGROUND</p>
	<!-- Connect to the database -->
	<?php include(__DIR__ . '/database/connect.php'); ?>

	<!-- Create the Tables -->
	<?php include(__DIR__ . '/database/create_table.php') ?>
	
	<section class="container px-5 py-3 w-50">
		<?php include(__DIR__ . '/components/add_book_form.php')?>
	</section>








	<?php include(__DIR__ . '../components/footer.php'); ?>

	<?php include(__DIR__ . '../database/drop_table.php')?>