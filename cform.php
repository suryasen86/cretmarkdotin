<form id="contact-form" method="POST"
                                        action="">
                                        <div class="form-group">
                                            <input style="color: white;" name="con_name" type="text" required>
                                            <label>Name</label>
                                            <span class="focus-border"></span>
                                        </div>
                                        <div class="form-group">
                                            <input style="color: white;" name="con_email" type="email" required>
                                            <label>Email</label>
                                            <span class="focus-border"></span>
                                        </div>
                                        <div class="form-group">
                                            <input    name="con-phone"  style="color: white;"    type="text" required>
                                            <label>Phone</label>
                                            <span class="focus-border"></span>
                                        </div>
                                        <div class="form-group">
                                            <textarea   style="color: white;"  name="con_message" required></textarea>
                                            <label>Your message</label>
                                            <span class="focus-border"></span>
                                        </div>
                                   
                                        <div class="form-group">
                                        <input type="submit" id="con-input" name="con-input" value="Send message">
                                            <!-- <p class="form-messege"></p> -->
                                        <!-- <input type="submit" name="con-input" > -->
                                        </div>
                                    </form>


<?php                                                       





$servername = "localhost";
$username = "root";
$password = "";
$database = "cretmark";





if(isset($_POST['con-input']))
{
   
$name=$_POST['con_name'];
$email1=$_POST["con_email"] ;
$phone=$_POST["con-phone"] ;
$message=$_POST["con_message"] ;





//Creating a connection
$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
die("Sorry, we failed to update");
}
else{
// echo "Successful creation of db";
}

$sql = "INSERT INTO contact(name,email,phone,message)
VALUES ('$name','$email1','$phone','$message')";

if ($conn->query($sql) === TRUE) {
// echo "you form submited";
function function_alert($message) {

// Display the alert box
echo "<script>
    alert('$message');
</script>";
}


// Function call
function_alert($name." Thanks for contatcing us ,our team will get  back to  you shortly");

} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}



 


?>