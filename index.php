<?php
$insert=false;
if(isset($_POST['name'])){
    $server="localhost";
    $username="root";
    $password="";
    $con=mysqli_connect($server,$username,$password);
    if(!$con){
    die("could not connect to the data base due to" . mysqli_connect_error());
    }
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $department=$_POST['department'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $description=$_POST['description'];

    
     $sql="INSERT INTO `manali_trip`.`manalitrip` ( `name`, `age`, `gender`, `department`, `email`, `phone`, `description`, `date`) VALUES
      ( ' $name ', '$age', '$gender', '$department', '$email', '$phone', '$description', current_timestamp());"
     if($con->query($sql)== true){
         $insert=true;
     }
     else{
         echo"ERROR:$sql <br> $con->error";
     }
     $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trip form submission</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="kc.jpg" alt="kc College" class="kc">
    <div class="container">
        
    <h3>MANALI TRIP FORM SUBMISSION</h3>
    <p>Fill and submit this form to confirm your trip to manali arranged by K.C. College of engineering and management studies 
        and research,Thane.</p>
        <?php
        echo"thanks for submitting this form.glad to see you join us on this beautifull journey."
        ?>
    <form action="index.php" method="post" class="formwhole">
   
    <input type="text" placeholder="Enter your name" id="name" name="name">
    
    <input type="number" placeholder="Enter your age" id="age" name="age">
    
    <input type="text" placeholder="Enter your gender" id="gender" name="gender">
   
    <input type="text" placeholder="Enter your department" id="department" name="department">
    
    <input type="email" placeholder="Enter your email" id="email" name="email">
  
    <input type="number" name="phone" id="phone" placeholder="Enter your phone number">
    
    <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter any other required information for this trip according to you"></textarea>
    
    <button type="submit" class="btn">Submit</button>
    <button type="reset" class="btn">Reset</button>
    </form>
</div>
<script> src="index.js"</script>

</body>
</html>