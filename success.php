<?php     
if(!empty($_GET))
{ 
    $fullname =$_GET['address_city'];  
    $address =$_GET['address_street'];  
    $email =$_GET['address_state'];   
    $mobile =$_GET['address_zip'];
    $price =$_GET['amt']; 
 
  $to = "haidarcse2017@gmail.com";
  $subject = "Member";

  $message = "Full Name: $fullname\n ,";
  $message .= "Address: $address\n ,";
  $message .= "Email: $email\n ,";
  $message .= "Mobile: $mobile\n ,";
  $message .= "Price: $price\n ,";

  $header = "From:$email \r\n";
  $header .= "MIME-Version: 1.0\r\n";
  $header .= "Content-type: text/html\r\n";

  $retval = mail ($to,$subject,$message,$header);

  if( $retval == true ) {
    //   echo "Message sent successfully...";
  }else {
      echo "Message could not be sent...";
  }
//   Sleep for 3 seconds
sleep(3);

// Redirect to another page
header('Location: index.php');
exit; // Ensure no further output is sent to the browser
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Success</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-3">
        <div class="alert alert-success">
            <strong>Success!</strong> Payment has been successful
            <a href="javascript:history.go(-4)" class="btn btn-primary">Back</a>
        </div>
    </div>
</body>

</html>