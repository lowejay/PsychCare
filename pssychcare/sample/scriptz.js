$('document').ready(function(){
 var id_state = false;
 var email_state = false;
 $('#idnumber').on('blur', function(){
  var idnumber = $('#idnumber').val();
  if (idnumber == '') {
  	id_state = false;
  	return;
  }
  $.ajax({
    url: 'register.php',
    type: 'post',
    data: {
    	'id_check' : 1,
    	'idnumber' : idnumber,
    },
    success: function(response){
      if (response == 'taken' ) {
      	id_state = false;
      	$('#idnumber').parent().removeClass();
      	$('#idnumber').parent().addClass("form_error");
      	$('#idnumber').siblings("span").text('Sorry... idnumber already taken');
      }else if (response == 'not_taken') {
      	id_state = true;
      	$('#idnumber').parent().removeClass();
      	$('#idnumber').parent().addClass("form_success");
      }
    }
  });
 });
  $('#email').on('blur', function(){
 	var email = $('#email').val();
 	if (email == '') {
 		email_state = false;
 		return;
 	}
 	$.ajax({
      url: 'register.php',
      type: 'post',
      data: {
      	'email_check' : 1,
      	'email' : email,
      },
      success: function(response){
      	if (response == 'taken' ) {
          email_state = false;
          $('#email').parent().removeClass();
          $('#email').parent().addClass("form_error ");
          $('#email').siblings("span").text('Sorry... Email already taken');
      	}else if (response == 'not_taken') {
      	  email_state = true;
      	  $('#email').parent().removeClass();
      	  $('#email').parent().addClass("form_success ");
          $('#email').siblings("span").text('');
      	}
      }
 	});
 });

 $('#reg_btn').on('click', function(){
 	var idnumber = $('#idnumber').val();
 	var email = $('#email').val();
 	var password = $('#password').val();
 	if (id_state == false || email_state == false) {
	  $('#error_msg').text('Fix the errors in the form first');
	}else{
      // proceed with form submission
      $.ajax({
      	url: 'register.php',
      	type: 'post',
      	data: {
      		'save' : 1,
      		'email' : email,
      		'idnumber' : idnumber,
      		'password' : password,
      	},
      	success: function(response){
      		alert('user saved');
      		$('#idnumber').val('');
      		$('#email').val('');
      		$('#password').val('');
      	}
      });
 	}
 });
});