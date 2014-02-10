$(document).ready(function() {
	//hold the code for the new list item the user creates
	var newListItem;
	//To check if we have a list already I made the newList var to check
	var newList = true;
	//The var theList uses the ID of the list to get the list items
	var theList = document.getElementById('theList');

	$('#addToDo').on('click', function(e)){
		//prevent the form from sending
		e.preventDefault();
		//If our newList var is true meaning there is a new list item then we 
		if (newList == True) {
			var	theValue = $("#toDoItem").val();
			newListItem = '<li><span class="handle"> :: </span> <input class="listItem" value="' + theValue + '"><a class="removeListItem style="display:none;" href=#> X </a></li>';
			newList = false;
		} else {
			var theValue = $("#toDoItem").val();
			newListItem = $('#theList li:last').clone();
			newListItem.find('input').attr('value', theValue);
		}

		var theCount = $("#theList li").length + 1;
		if (theCount > 1){
			$('#doClearAll').css('display','block');
		}

		$('#theList').append(newListItem);

		$('#toDoItem').val('');
		$('#toDoItem').focus();
		$('.sortable').sortable('destroy');
		$('sortable').sortable({
			handle: '.handle'
		});
	});
});
