<?php
$page = trim($_SERVER['REQUEST_URI'],"/");
$target = "/content/";
switch ($page) {
	case '':
		$target .= "main";
		break;
	case 'second':
		$target .= "products";
		break;
	default:
		header('Location: /');
		break;
}
$target .= ".php";
require_once "/content/tupa_vso.php";
?>
<!DOCTYPE html>
<html lang="RU">
<head>
	<meta charset="utf-8">
	<title>Delivery Food</title>
	<link rel="stylesheet" type="text/css" href="/style.css">
	<link rel="icon" href="/img/icon.ico">
	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/scripts.js"></script>
</head>
<body>
<?php
require "/content/header.php"
?>
<main>
<?php
require $target;
?>
</main>
<?php
require "/content/footer.php" 
?>
</body>
</html>