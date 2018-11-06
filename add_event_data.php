<?php
 include('admin/dbcon.php');
 include('session.php');
$id = $session_id;
if (isset($_POST['add'])){
	$query = mysql_query("insert into event (event_id,note) values($id,'$note')")or die(mysql_error());
	?>
	<script>
	window.location = "add-event.php";
	</script>
<?php
}
?>
