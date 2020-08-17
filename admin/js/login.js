$(document).ready(function(){
	$('#loginButton').click(function(){
		var email=$("#email").val();
		var password=$("#password").val();
	
		$.post("../php/login.php",{email,password},function(data){
			if(data==="incorrect credentials"){
				alert("Incorrect credentials try again");
			}else{
				window.location.href="../html/home.html";
			}
			console.log(data);
		});
	})
});