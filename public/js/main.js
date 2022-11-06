$.ajaxSetup({
	headers:{
		'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
	}
});

$('#createtaskForm').submit(function(e){
	e.preventDefault();

	let formData={
		task_name:$('#createtaskForm input[name="task_name"]').val(),
		email:$('#createtaskForm input[name="email"]').val(),
		address:$('#createtaskForm input[name="address"]').val(),
		phone:$('#createtaskForm input[name="phone"]').val()
	}
	console.log(formData);

	$.ajax({
		type:'POST',
		url:'task/store',
		data:formData,
		success:function(data){
		let msg=$('#createTaskMessage');

		$(msg).append('<div class="alert alert-success">Task Created Successfully</div>');

		$(input).val('');
		$('tasktablebody').prepend(`
			<tr>
			<td>`+data.id+`</td>
			<td>`+data.task_name+`</td>
			<td>`+data.email+`</td>
			<td>`+data.address+`</td>
			<td>`+data.phone+`</td>
</tr>
			`);
	
			
		},
		error:function(error){
			console.log(error);
		}
	})
});


$('#deletedata').submit(function(e){
	e.preventDefault();
	let id=$('#deletedata').data('id');
$.ajax({
    url: 'task/delete/'+id,
    type: 'DELETE',
    success: function(response) {
    $(msg).append('<div class="alert alert-success">Task Delete Successfully</div>');	
       
    }
});	
})

function myConfirm() {
  var result = confirm("Want to delete?");
  if (result) {
   return true;
  } else {
   return false;
  }
}