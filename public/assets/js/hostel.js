$(document).ready(function(){
	

	 $('#calendar').calendar();

	
	$('.userFunction').hide();
	$('.viewChat').click(function()
	{
		var x = $('#scheduleList option:selected').text();
		console.log(x);
		if(x==''){
			var div = '<h4>Fill all the details!</h4>';
			$('.status .modal-body').html('');
			$('.status .modal-body').append(div);
			$('#success').modal('show');
			return false;
		}
		var z = 'viewTherapist';
		$.ajaxSetup(
		    {
		        headers:
		        {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
		    });
	 		var data = {};
	 		data.position = x;
	 		console.log(data);
			$.ajax(
		    {
		        type: "POST",
		        url: '/'+z,
		        data: data,
		        dataType: "json",
		        success: function(data){
		        	// console.log("helo");	
		        	console.log(data);
		        	var div = '';
		        	if(data!=0){
		        		var content = [];
		        		var content2 = [];
		        		for(var j=0;j<data.length;j++){
		        			content[j] = data[j].name;
		        			content2[j] = data[j].position;
		        		}

		        		div = '<h3><b>Lists of Therapists</h3>\
								<div class="table-responsive">\
								  <table class="table table-hover">\
								    <thead>\
								      <tr>\
								        <th>Name of Therapist</th>\
								        <th>Position</th>\
								        <th></th>\
								        <th></th>\
								      </tr>\
								    </thead>\
								    <tbody>';								      
								    
		        		for(var i=1;i<=content.length;i++){
		        			div = div + '<tr>\
								        <td>' + content[i-1] + '</td>\
								        <td>' + content2[i-1] + '</td>\
								        <td><button type="button" class="btn btn-default" data-dismiss="modal" onclick="profile()">Profile</button></td>\
								        <td><button type="button" class="btn btn-default viewSchedule"  data-dismiss="modal" onclick="chat()">Chat</button></td>\
								        <td><button type="button" class="btn btn-default viewSchedule"  data-dismiss="modal" onclick="book()">Schedule</button></td>\
								      </tr>';
		        		}		     
		        		div = div + '</tbody>\
								  </table>\
								</div>';   		
		        	}
		        	$('.status .modal-body').html('');
		        	$('.status .modal-body').append(div);
		        	$('#success').modal('show');
		        	// var content = [];
		        	// var content2 = [];
			        // 	for(var i=0;i<data.length;i++){
			        // 		content[i] = data[i].name;
			        // 		content2[i] = data[i].position;
			        // 	}
			       		        
		        	// var div = '<h3><b>Lists of Therapists are:-</b></h3><div class="container-fluid" >';
		        	// for(var i=1;i<=content.length;i++){
		        	// 	div = div + '<p>'+ i + ') Name:- <b>' + content[i-1]+' </b> <span class="right">Position:-'+ content2[i-1] +' </span> </p>';
		        	// }
		        	// div = div + '</div>';
		        	$('.status .modal-body').html('');
		        	$('.status .modal-body').append(div);
		        	$('#success').modal('show');
       			        	
		        	

		        },
		        error: function(jqXHR,testStatus,errorThrown){
		        	console.log(errorThrown);
		        }
			});
	
});

	$('.func').click(function(){
		$('.userFunction').toggle('slow');
	});

});

function profile(){

		$('#profile').modal('show');

}

function chat(){
		$('#chatBox').modal('show');	
}

function book(){
	$('#calen').modal('show');
}

function showFunc(){
}

function removeName(){
	var x = $('#name').val();
	var y = $('#menuName option:selected').text();
	console.log(x+y);
	if(x=='' || y==''){
		var div = '<h4>Fill all the details!</h4>';
		$('.status .modal-body').html('');
		$('.status .modal-body').append(div);
		$('#success').modal('show');
		return false;
	}
	var z = 'removeName';
	$.ajaxSetup(
		    {
		        headers:
		        {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
		    });
	 		var data = {};
	 		data.name = x;
	 		data.position = y;
	 		console.log(data);
			$.ajax(
		    {
		        type: "POST",
		        url: '/'+z,
		        data: data,
		        dataType: "json",
		        success: function(data){
		        	// console.log("helo");	
		        	console.log(data);		        			        	
		        	if(data==1){
		        		var div = '<h4>'+ type +' name has been successfully deleted!</h4>';
		        	}
		        	else{
		        		var div = '<h4>'+ type +'name not found!</h4>';
		        	}
		        	$('.status .modal-body').html('');
		        	$('.status .modal-body').append(div);
		        	$('#success').modal('show');

		        },
		        error: function(jqXHR,testStatus,errorThrown){
		        	console.log(errorThrown);
		        }
			});
	
}

function addName(){
	var x = $('#name').val();
	var y = $('#menuName option:selected').text();
	console.log(x+y);
	if(x=='' || y==''){
		var div = '<h4>Fill all the details!</h4>';
		$('.status .modal-body').html('');
		$('.status .modal-body').append(div);
		$('#success').modal('show');
		return false;
	}
	var z = '/addName';
	ajaxCall(x, y, z);
}

function viewAll(){
	var y = '/viewAll';
	$.ajaxSetup(
		    {
		        headers:
		        {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
		    });
	 		var data = {};
	 		
	 		console.log(data);
			$.ajax(
		    {
		        type: "POST",
		        url: y,
		        data: data,
		        dataType: "json",
		        success: function(data){
		        	// console.log("helo");	
		        	console.log(data);
		        	var content = [];
		        	var content2 = [];
			        	for(var i=0;i<data.length;i++){
			        		content[i] = data[i].name;
			        		content2[i] = data[i].position;
			        	}
			       		        
		        	var div = '<h3><b>Lists of Therapists are:-</b></h3><div class="container-fluid" >';
		        	for(var i=1;i<=content.length;i++){
		        		div = div + '<p>'+ i + ') Name:- <b>' + content[i-1]+' </b> <span class="right">Position:-'+ content2[i-1] +' </span> </p>';
		        	}
		        	div = div + '</div>';
		        	$('.status .modal-body').html('');
		        	$('.status .modal-body').append(div);
		        	$('#success').modal('show');

		        	
		        },
		        error: function(jqXHR,testStatus,errorThrown){
		        	console.log(errorThrown);
		        }
			});
}





function ajaxCall(x,y,z){
	$.ajaxSetup(
		    {
		        headers:
		        {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
		    });
	 		var data = {};
	 		data.name = x;
	 		data.position = y;
			$.ajax(
		    {
		        type: "POST",
		        url: z,
		        data: data,
		        dataType: "json",
		        success: function(data){
		        	// console.log("helo");	
		        	var type = "Therapist's";
		        	console.log(data);
		        	if(data=='1'){
		        		var div = '<h4>' + type + ' Name successfully added!</h4>';
		        	}
		        	else{
		        		var div = '<h4>' + type +' Name already exists!</h4>';	
		        	}
		        	$('.status .modal-body').html('');
		        	$('.status .modal-body').append(div);
		        	$('#success').modal('show');
		        },
		        error: function(jqXHR,testStatus,errorThrown){
		        	console.log(errorThrown);
		        }
			});
}