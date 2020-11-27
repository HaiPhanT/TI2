<?php 

$title = "";
$form = "";
$control = "home";
$searchResult = "";

if(isset($_GET["control"]) == true){
	$control = $_GET["control"];
}

switch ($control) {	
	case "search":
		include("sessiondata/formsearch.php");
		$title = "<h1>Tìm kiếm</h1>";
		$form = $tmp;
		$searchResult = $searchResult;
		break;
	case "home":
	default:
		$title = "<h1>Trang chủ</h1>";
		break;
}

include("template/layout1.php");

 ?>