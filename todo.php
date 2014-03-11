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
		// gets the list by the ID of list from above and stores the list in the var theList 
		var theList = document.getElementById('list');
		$('#save').click(function(e){
			//This will prevent the browser from expecting a link to actually work
			e.preventDefault();
			//I used localStorage to set the todoList item with the contents from our list so I can call on it later
			localStorage.setItem('todoList', theList.innerHTML)
		});
		$('#clear').click(function(e){
			//Same for the save function we need to prevent the default action of going to a link
			e.preventDefault();
			localStorage.clear();
			//We need to reload the page to clear the list
			location.reload();
		});
		//Load the list from local storage
		loadToDo();

		function loadToDo(){
			//If there is an item in local storage, retreave it to load the list
			if(localStorage.getItem('todoList')) {
				theList.innerHTML = localStorage.getItem('todoList');
			}
		}
	});
</script>
