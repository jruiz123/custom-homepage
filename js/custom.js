$(document).ready(function() {
	$('.card').click(function(){
		$('#sidebar').addClass('sbar-o');
		var id = $(this).attr('id');
		document.getElementById('sidebar-title').innerHTML = document.getElementById(id+'-caption').innerHTML;
		removeHeaderClass();
		switch(id){
			case('todo'): $('#sidebar-header').addClass('bg-1');
				break;
			case('notes'): $('#sidebar-header').addClass('bg-2');
				break;
			case('favorite'): $('#sidebar-header').addClass('bg-3');
				break;
			case('settings'): $('#sidebar-header').addClass('bg-4');
				break;
			case('gmail'): $('#sidebar-header').addClass('bg-5');
				break;
			case('sbi'): $('#sidebar-header').addClass('bg-6');
				break;
			case('learn'): $('#sidebar-header').addClass('bg-7');
				break;
			case('social'): $('#sidebar-header').addClass('bg-8');
				break;
			default: break;
		}

	});

	$('#close').click(function(){
		$('#sidebar').removeClass('sbar-o');
	});
	
	// $('#myTab a').on('click', function (e) {
	//   e.preventDefault()
	//   $(this).tab('show')
	// })
});

function removeHeaderClass() {
	$('#sidebar-header').removeClass('bg-1').removeClass('bg-2').removeClass('bg-3').removeClass('bg-4').removeClass('bg-5').removeClass('bg-6').removeClass('bg-7').removeClass('bg-8');
}
