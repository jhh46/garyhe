<?php 
if(isset($_POST['submit'])){
    $to = "hejhong.94@gmail.com"; // 
    $from = $_POST['email']; // 
    $name = $_POST['name'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); 
    echo "Mail Sent. Thank you " . name . ", we will contact you shortly.";
    }
?>