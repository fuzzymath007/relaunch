<?php
$pageTitle = "To-do App";
require_once('inc/config.php');
include(ROOT_PATH . 'inc/header.php'); ?>
<html>
	<div id="container">
		<form name="form" method="post" action="">
			<input type="text" name="toDoItem" id="toDoItem" autofocus>
			<input type="button" name="addToDo" id="addToDo" value="Add Item">
		</form>
		<ul id="theList" class="sortable list">

		</ul>
		<p id="doClearAll"><a id="clearAll" href="javascript:void();">Clear All</a>
			
		</p>
	</div>
</html>
<?php include(ROOT_PATH . 'inc/footer.php');?>
<script type="text/javascript" src="inc/js/html5sortable/jquery.sortable.js"></script>
<script type="text/javascript" src="inc/js/sortable.js"></script>

