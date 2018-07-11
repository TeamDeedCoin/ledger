<?php

session_start();

if(isset($_GET['logout'])) {
	unset($_SESSION['hash']);
}

if(empty($_SESSION['hash'])) {
	header('location: /login.php');
	exit('Please Login');
}


$localhost = array('127.0.0.1','::1');

if(in_array($_SERVER['REMOTE_ADDR'], $localhost)){
	define('TCS_ARTICLE_TABLE', 'articles');
	define('TCS_DB_HOST', '127.0.0.1');
	define('TCS_DB_USER', 'root');
	define('TCS_DB_PASS', '');
	define('TCS_DB_NAME', 'loginform');
} else {
	define('TCS_ARTICLE_TABLE', 'articles');
	define('TCS_DB_HOST', 'localhost');
	define('TCS_DB_USER', 'LL');
	define('TCS_DB_PASS', 'ledgerleap');
	define('TCS_DB_NAME', 'ledgerleap');
}


class TCSDB{
	public $connect = null;
	function __construct() {
		$this->connect = new mysqli(TCS_DB_HOST, TCS_DB_USER, TCS_DB_PASS, TCS_DB_NAME);
		if ($this->connect->connect_error) {
			$this->connect = null;
		}
	}

	function __destruct(){
		$this->connect->close();
	}

	public function do_select($query) {
		$return = null;
		if($this->connect){
			$result = $this->connect->query($query);
			if($result != null && $result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$return[] = $row;
				}
			}
		}
		return $return;
	}

	public function do_query($query) {
		$flag = false;
		if($this->connect) {
			$flag = $this->connect->query($query);
		}
		return $flag;
	}
}

$TCSdb = new TCSDB();

function filter($string){
	$string = addslashes($string);
	return htmlentities($string, ENT_COMPAT | ENT_HTML401, 'UTF-8');
}

// CREATE
$content = $title = '';
if(isset($_POST['title']) && isset($_POST['content'])) {
	$title = filter($_POST['title']);
	$content = filter($_POST['content']);
	$timestamp = time();

	$query = "insert into ".TCS_ARTICLE_TABLE." (title,content,date) values ('$title','$content','$timestamp');";

	$TCSdb->do_query($query);

	header('location: /dashboard.php');
}

// REMOVE
$remove = '';
if(isset($_GET['remove'])) {
	$remove = $_GET['remove'];

	$query = "delete from ".TCS_ARTICLE_TABLE." where id = '$remove'";
	$TCSdb->do_query($query);

	header('location: /dashboard.php');
}

// EDIT
$edit_title = $edit_content = $edit_id = '';
if(isset($_POST['edit_title']) && isset($_POST['edit_content']) && isset($_POST['edit_id'])) {
	$edit_title = $_POST['edit_title'];
	$edit_content = $_POST['edit_content'];
	$edit_id = $_POST['edit_id'];

	$query = "update ".TCS_ARTICLE_TABLE." set title = '$edit_title' where id = '$edit_id'";
	$TCSdb->do_query($query);

	$query = "update ".TCS_ARTICLE_TABLE." set content = '$edit_content' where id = '$edit_id'";
	$TCSdb->do_query($query);

	header('location: /dashboard.php');
}


?>

<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Questrial">
<meta name="viewport" content="initial-scale=1, maximum-scale=1"/>

<style>
html, body {
	background-color: #fff1f1; color: #555; overflow: hidden;
	margin: 0 auto; height: 100%; width: 100%;
	font-family: 'Questrial', sans-serif; overflow: auto;
}

a { text-decoration: none; color: black; transition: .3s ease; }
a:hover { transition: .3s ease; color: #e7803c; }

.TCS-div {
	background-color: white; border: 2px solid #e7803c;
	padding: 25px; top: 0; bottom: 0; left: 0; right: 0; position: absolute;
	width: 80%; height: auto; border-radius: 15px; margin: 0 auto;
	margin-top: 50px; overflow: auto;
}

.pb50 { padding-bottom: 50px; }
.centered { text-align: center; }

.textarea { padding: 5px; width: 100%; height: 400px; max-height: 60%; }
.input { padding: 5px; }

.edit_textarea { width: 100%; height: 210px; }

.ml { margin-left: 20px; }

.overlay {
	position: fixed; top: 0; left: 0; bottom: 0; right: 0;
	width: 100%; height: 100%; background-color: rgba(100,100,100,0.5);
	margin: 0 auto; z-index: 10; display: none;
}

.edit {
	position: fixed; top: 0; left: 0; bottom: 0; right: 0;
	width: 700px; height: 500px; background-color: white;
	border: 2px solid #e7803c; z-index: 11;
	border-radius: 15px; margin: 0 auto; margin-top: 150px;
	display: none;
}


</style>
</head>
<body>
<div style="padding: 7px;"><a href="/">Home</a>&ensp;|&ensp;<a href="/dashboard.php?logout=1">Logout</a></div>

<div class="overlay"></div>
<div class="edit">
	<h1 class="centered pb50">Edit Article</h1>
	<div style="padding: 25px;">
		<p>Id: <label class="edit_id_label"></label></p>
		<form action="/dashboard.php" method="post">
			<input class="edit_id" type="hidden" name="edit_id" value="">
			<input class="edit_title" type="text" name="edit_title" placeholder="Title..." value="" required><br>
			<textarea class="edit_textarea" name="edit_content" placeholder="Article text..." required></textarea><br>
			<input type="submit" value="Submit">
		</form>
	</div>
</div>

<div class="TCS-div">
	<h1 class="centered pb50">DASHBOARD</h1>
	<h3>Add Article</h3>
	<form action="/dashboard.php" method="POST">
		<input class="input" type="text" name="title" placeholder="Title..." required><br>
		<textarea class="textarea" name="content" placeholder="Article text..." required></textarea><br>
		<input type="submit" value="Submit">
	</form>

	<div class="pb50"></div><br>
	<h3 class="pb50">Edit / Remove Articles</h3>
	<?php
	$query = "select * from ".TCS_ARTICLE_TABLE;
	$AA = $TCSdb->do_select($query);
	foreach ($AA as $entry) {
		echo("<h4>Id:&ensp;".$entry['id'].'</h4><h4>Title:&ensp;'.$entry['title']."</h4><p class='ml'>".$entry['content']."</p><p><form action='/dashboard.php' method='get'><input type='hidden' name='remove' value='".$entry['id']."'><input type='submit' value='Remove This'></form><br><button class='editBtn' id='edit".$entry['id']."' title='".$entry['title']."' content='".$entry['content']."' '>Edit</button></p>");
		echo('<br>');
		echo('<hr>');
	}
	?>

</div>

</body>
<script>

$(".editBtn").click(function(t) {
	$(".overlay").fadeIn(500);
	$(".edit").show();
	//alert(this.id);
	let _id = this.id;
	_id = _id.substring(4);
	$(".edit_id_label").html(_id);
	$(".edit_id").val(_id);

	let _content = $(this).attr('content');
	$(".edit_textarea").val(_content);

	let _title = $(this).attr('title');
	$(".edit_title").val(_title);


});

$(".overlay").click(function() {
	$(".edit_textarea").val('');
	$(".edit_title").val('');
	$(".edit_id_label").html('');
	$(".edit_id").val('');
	$(".overlay").fadeOut(300);
	$(".edit").hide();
});


</script>
</html>


