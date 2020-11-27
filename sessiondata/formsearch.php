<?php 

$keyword = "";
if(isset($_GET["searchKeyword"]) == true){
	$keyword = $_GET["searchKeyword"];
}

$searchResult = "";

if($keyword !== ""){
	include("data/datasv.php");
	foreach ($data as $sv) {
		$hoten = $sv["name"];
		$diachi = $sv["hometown"];
		$diem = $sv["grades"];
		if(strpos($hoten, $keyword) || strpos($diachi, $keyword)){
			$searchResult .= "
					<div>Họ tên: $hoten</div>
					<div>Địa chỉ: $diachi</div>
					<div>Điểm: $diem</div>
					<hr>
			";
		}
	}
}

if($searchResult !== ""){
	$searchResult = "<article class='col-12 col-md-6 tm-post'>**Kết quả tìm kiếm: <hr>".$searchResult."</article>";
}
else {
	$searchResult = "<article class='col-12 col-md-6 tm-post'>Không tìm thấy dữ liệu</article>";
}

$tmp = "
<form method='GET' action='index.php' class='form-inline tm-mb-80'>
	<input type='hidden' name='control' value='search'>
    <input class='form-control tm-search-input' name='searchKeyword' type='text' value='$keyword' placeholder='Search...' aria-label='Search'>
    <button class='tm-search-button' type='submit'>
    <i class='fas fa-search tm-search-icon' aria-hidden='true'></i>
    </button>
</form>
";

 ?>