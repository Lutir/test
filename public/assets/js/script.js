$(document).ready(function(){ 
	$('.check').click(function(){
		var x = $('#input1').val();
		var y = $('#input2').val();
		if(x==''|| y==''){
			var div = '<h4>Fill all the details!</h4>';
					$('.status .modal-body').html('');
					$('.status .modal-body').append(div);
					$('#success').modal('show');
					return false;
		}
		window.location = '/admin';
	});
});
var menuItems = ['dashboard','chat','addChat'];


function changeView(p){
		var a = p;
		$('#'+a).removeClass('no-view');
		for(var i=0;i<menuItems.length;i++)
		{
			if(menuItems[i] != p)
				$('#'+menuItems[i]).addClass('no-view');
		}
	}