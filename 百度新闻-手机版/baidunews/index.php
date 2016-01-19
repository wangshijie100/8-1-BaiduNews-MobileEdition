<?php
	require_once('connect.php');
	$sql = "select * from news order by addtime desc";
	$query = mysql_query($sql);
	if($query&&mysql_num_rows($query)){
		while($row = mysql_fetch_assoc($query)){
			$data[] = $row;
		}
	}
	echo $data;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>百度新闻</title>
</head>
<body>
	<div class="index-list-main">
		<div class="index-list-image">
			<img src="" alt="">
		</div>
		<div class="index-list-main-text">
			新闻标题放置处
		</div>
		<div class="index-list-bottom">
			<b class="tip-time">addtime放置处</b>
		</div>
	</div>
</body>
</html>