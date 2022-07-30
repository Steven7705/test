<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="login.css" type="text/css" rel="stylesheet">
    <link href="container.css" type="text/css" rel="stylesheet">
</head>
<body>
        <?php
                session_start();
                if(isset($_POST['submit'])){
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                        if($email == 'Steven@07.admin' && $password == 'Steven'){
                            $_SESSION['email'] = $email;
                            header('location:admin.php');
                        }else{
                            header('location: index.php');
                            
                        }
                }
            ?>  
            <form action="login.php" method="post">
 <div class="container">
     <div class="img" style="background-image: url(background.jpg)" height="825px">
        <div class="containerleft">
            </div>


    <!-- Bảng đăng nhập -->
        <div class="containeright">
        
                 <div class="table"></div>
                     <div class="login">
                         <p>Login</p>
                     </div>
                     <div class="username">
                         <input type="text" name="email" id="email" placeholder="User Name">
                            
                     </div>
                     <div class="password">
                         <input type="password" name="password" id="password" placeholder="Pass Word">
                            
                     </div>
                     
                     <div class="submit">
                        <input type="submit" name="submit" id="submit" value="Login">
                         <div class="go-create"> Don't have an account?  <a href="create.php"> Đăng Ký </a></div> 
                         </div>
                 
             </div>
        </div>

</div></form>

 

</body>
</html>