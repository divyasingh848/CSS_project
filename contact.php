<?php 

if(isset[$_POST('email')]){

    $admin_email="brad@xmail.com";
    $name =$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];

    //send mail
    mail($admin_email,"New Form Submission",$message. '-'.$phone, "From:". $email);

    header('Location:http://EdgeLeddger.com');
    
}




?>