
<?php








 

require 'config.php';


$name = $_POST['name'];
$email1 = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];





//Creating a connection
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
  die("Sorry, we failed to update");
} else {
  // echo "Successful creation of db";
}

$sql = "INSERT INTO contact(name,email,phone,message)
VALUES ('$name','$email1','$phone','$message')";

if ($conn->query($sql) === TRUE) {
  // echo "you form submited";
  $to = "info@cretmark.com";
  $subject = "Mail From contact from";
  $txt = "Name = " . $name . "\r\n  Email = " . $email1 . "\r\n Message =" . $message . "\r\n phone =" . $phone;
  $headers = "From: info@cretmark.com" . "\r\n" .
    "CC: lasth324@gmail.com";
  if ($email1 != NULL) {
    if (mail($to, $subject, $txt, $headers)) {
      // echo "mail send";
    } else {
      echo "error";
      // print_f(error_get_last());

    }
  }
  //redirect
  header("Location:contact.php");

  function function_alert($message)
  {

    // Display the alert box
    echo "<script> 
  
     </script>";
  }


  // Function call
  // function_alert($name . " Thanks for contatcing us ,our team will get  back to  you shortly");
}  







?>