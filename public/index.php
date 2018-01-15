<?php
require_once '../app/src/database.php';
?>

<head>

	<meta charset="utf-8">
	<title>Compleet IT</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!-- Favicon -->
	<link href="../app/media/favicon.ico" rel="icon" type="image/x-icon" />

	<!-- CSS files -->
    <link rel="stylesheet" href="../app/normalize.css">
	<link rel="stylesheet" href="../app/main.css">
    <link rel="stylesheet" href="../app/content-styles.css">

	<!-- Javascripts -->

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>

<body>
<?php
include '../app/views/header.php';
include '../app/views/content.php';
include '../app/views/footer.php';
?>
</body>

</html>