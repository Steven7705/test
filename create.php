<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <!-- <link href="login.css" type="text/css" rel="stylesheet"> -->
    <link href="container.css" type="text/css" rel="stylesheet">
    <link href="create.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
include'connection.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cfpassword = $_POST['cfpassword'];

    if($password = $cfpassword){
        $sql= "INSERT INTO createuser (email,password)
               VALUES ('$email','$password')";
            $result = mysqli_query($conn, $sql);

            if(!$result){
                echo "sai rồi:>";
            }else{
                echo "Tạo thành công rồi đó thằng ngu";
            }

    } else{
        echo "Đăng nhập ngu vcl:>";
    }

}
?>


 <form action="create.php" method="post">
 <div class="container">
     <div class="img" style="background-image: url(background.jpg)" height="825px">
        <div class="containerleft">
            </div>


    <!-- Bảng đăng nhập -->
        <div class="containeright">
        
                 <div class="table"></div>
                     <div class="login">
                         <p>Create</p>
                     </div>
                     <div class="username">
                         <input type="text" name="email" id="email" placeholder="Email...">
                            
                     </div>
                     <div class="password">
                         <input type="password" name="password" id="password" placeholder="Pass Word">
                     </div>
                     <div class="cfpassword">
                         <input type="password" name="cfpassword" id="cfpassword" placeholder="Confirm Pass Word">
                            
                     </div>
                     
                     <div class="submit">
                        <input type="submit" name="submit" id="submit" value="Login">
                         <p class="go-create"> Have an account!<a href="login.php"> Đăng Nhập </a></p> 
                         </div>
                 
             </div>
        </div>

</div>

 </form>

</body>
</html>