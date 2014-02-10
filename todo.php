<?php
$pageTitle = "To-do App";
require_once('inc/config.php');
include(ROOT_PATH . 'inc/header.php'); ?>
<HTML>
	<body>
		<div id="container">
			<ul id="list" contenteditable> <!-- A new li tag will be created when the user hits return -->
				<li>Something</li>
			</ul>
			<p><a href="javascript.void();" id="save">Save Changes to local storage</a>
			<br>
			<a href="javascript.void();" id="clear">Clear Changes</a>
			</p>
		</div>
	</body>
</HTML>
<?php include(ROOT_PATH . 'inc/footer.php');?>
<script type="text/javascript">
	$(document).ready(function(){
		// gets the list by the ID of list from above
		var theList = document.getElementById('list');
		$('#save').click(function(e){
			e.preventDefault();
			localStorage.setItem('todoList', theList.innerHTML)
		});
		$('#clear').click(function(e){
			e.preventDefault();
			localStorage.clear();
			location.reload();
		});

		loadToDo();

		function loadToDo(){
			if(localStorage.getItem('todoList')) {
				theList.innerHTML = localStorage.getItem('todoList');
			}
		}
	});
</script>
