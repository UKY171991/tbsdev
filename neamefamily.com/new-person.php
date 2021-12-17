<!DOCTYPE html>
<html>
<!-------head-section--------->
<head>
<title>New Person Information</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/jquery-ui.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" type="text/css" />
</head>
<!-------head-section-ends-------->
<body>

<div class="logo text-center "><a href="/"><img src="images/title.jpg" alt="logo"></a></div>	
<div class="new-personform mt-4 mb-4">
	<div class="container">
		<form action="" method="post" id="form">
		    <p class="w-100  mb-4 text-center">Please add as much information as you can to help us to identify your close family and to make the details that the site contains more comprehensive.<p>
			<div class="form-group">
				<label>First/given name(s) * :</label>
				<input type="text" name="first_name" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Last/Surname * :</label>
				<input type="text" name="last_name" class="form-control"  required>
			</div>				
			<div class="form-group">
				<label>Nickname:</label>
				<input type="text" name="nick_name" class="form-control">
			</div>	
			<div class="form-group">
				<label>Father's Name * :</label>
				<input type="text" name="FatherName" class="form-control" required>
			</div>	
			<div class="form-group">
				<label>Father's DOB  * :</label>
				<input type="text" name="FatherDOB" placeholder="dd/mm/yyyy" id="datepicker5" autocomplete="off" class="form-control"  required>
				<!-- <div class="ui calendar w-100" id="example1">
					<div class="ui input pull-right">
					  <input type="text" name="FatherDOB" autocomplete="off" class="form-control" required>
					</div>
				</div>	 -->			
			</div>				
			<div class="form-group">
				<label>Suffix:</label>
				<input type="text" name="siffix" class="form-control" >
			</div>				
			<div class="form-group">
				<label>Title:</label>
				<input type="text" name="title" class="form-control" >
			</div>		
			<div class="form-group">
				<label>Birth Date * :</label>
				<input type="text" name="dob" id="datepicker" placeholder="dd/mm/yyyy" autocomplete="off" class="form-control" required>
				<!-- <div class="ui calendar w-100" id="example2">
					<div class="ui input pull-right">
					  <input type="text" name="dob" autocomplete="off" class="form-control" required>
					</div>
				</div> -->					
			</div>		
			<div class="form-group">
				<label>Birth Place:</label>
				<input type="text" name="dob_place" class="form-control">
			</div>							
			<div class="form-group">
				<label>Sex * :</label>
				<select type="text" name="gender" class="form-control" required>
					<option>Male</option>
					<option>Female</option>
				</select>
			</div>	
			<div class="form-group">
				<label>E-mail * :</label>
				<input type="email" name="email"  class="form-control" required>
				<!-- <div class="ui calendar w-100" id="example3">
					<div class="ui input pull-right">
					  <input type="text" name="ChirsteningDate" autocomplete="off" class="form-control" required>
					</div>
				</div> -->					
			</div>				
			<div class="form-group">
				<label>Christening Date  :</label>
				<input type="text" name="ChirsteningDate" placeholder="dd/mm/yyyy" id="datepicker1" autocomplete="off" class="form-control" >
				<!-- <div class="ui calendar w-100" id="example3">
					<div class="ui input pull-right">
					  <input type="text" name="ChirsteningDate" autocomplete="off" class="form-control" required>
					</div>
				</div> -->					
			</div>				
			<div class="form-group">
				<label>Christening Place:</label>
				<input type="text" name="ChirsteningPlace" class="form-control">
			</div>				
			<div class="form-group">
				<label>Death Date:</label>
				<input type="text" name="DeathDate" placeholder="dd/mm/yyyy" id="datepicker2" autocomplete="off" class="form-control">
				<!-- <div class="ui calendar w-100" id="example4">
					<div class="ui input pull-right">
					  <input type="text" name="DeathDate" autocomplete="off" class="form-control" required>
					</div>
				</div> -->					
			</div>	
			<div class="form-group">
				<label>Death Place:</label>
				<input type="text" name="DeathPlace"  class="form-control">
			</div>				
			<div class="form-group">
				<label>Burial Date:</label>
				<input type="text" name="BurialDate" placeholder="dd/mm/yyyy" id="datepicker3" autocomplete="off" class="form-control">
				<!-- <div class="ui calendar w-100" id="example5">
					<div class="ui input pull-right">
					  <input type="text" name="BurialDate" autocomplete="off" class="form-control" required>
					</div>
				</div> -->					
			</div>				
			<div class="form-group">
				<label>Burial Place:</label>
				<input type="text" name="BurialPlace" class="form-control">
			</div>	
			<div class="form-group">
				<label>Baptism Date(LDS):</label>
				<input type="text" name="BaptismDate" placeholder="dd/mm/yyyy" id="datepicker4" autocomplete="off" class="form-control">
				<!-- <div class="ui calendar w-100" id="example6">
					<div class="ui input pull-right">
					  <input type="text" name="BaptismDate" autocomplete="off" class="form-control" required>
					</div>
				</div>	 -->				
			</div>				
			<div class="form-group">
				<label>Baptism Place(LDS):</label>
				<input type="text" name="BaptismPlace" class="form-control">
			</div>	
			<div class="form-group">
				<label>Notes:</label>
				<textarea type="text" name="Notes" class="form-control" ></textarea>
			</div>	
			<div class="form-group">
				<p class="w-100 pl-5 pb-3 text-center">Click here to send your details to the editor for uploading to neame family website.<p>
			</div>
			<div class="form-group text-center messss">
				
			</div>		
			<div class="form-group text-center submit pb-5">
				<input type="submit" class="btn btn-default" value="Submit">
			</div>
			
		</form>
	</div>
</div>

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/main.js"></script>


<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>

<script>
$('#form').on('submit',function(event){
	event.preventDefault();
	//disabled

	$(".submit input").attr("disabled");
	
	$.ajax({
		url:'email.php',
		type:'post',
		data : $('#form').serialize(),
		success:function(data){
			//console.log(data);
			if(data == 'send'){
				$('.messss').html("<h4 class='text-success text-center m-auto pb-2'>Your message has been send successfully and thank you.</h4>");
			}else{
			 	$('.messss').html("<h4 class='text-danger text-center m-auto pb-2'>Message sending field</h4>");
			 }
			$(".submit input").removeAttr("disabled");
			$('#form')[0].reset();
		}
	});
})
</script>

</body>
</html>