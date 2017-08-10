<?php 

if(isset($_POST['name'],$_POST['subject'],$_POST['email'],$_POST['message'])){

  //Email information
  $admin_email = "marcorlsrodrigues@gmail.com";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $comment = $_POST['message'];
  $subject = $_POST['subject'];

  if($name =! "" && $email != "" && $comment != "" and $subject != ""){
  	//send email
  	mail($admin_email, "$subject", $comment, "From:" . $email);	
  	//Email response
  	echo "Thank you for contacting me! Will give feedback as soon as i can!";
  }else{
  	//Email response
  	echo "Please fill all fields!";
  }
}

?>