<?php
    include 'connect.php';
    
      
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Register</title>
    <link rel="stylesheet" href="register.css" />
    <link rel="stylesheet" href="reset.css" />
  </head>
  <body>
    <div class="signup">
    
      <form id="form-signin" class="form-signin mt-2" method="post" >
        <h1 class="signup-heading">Register</h1>
        <button class="signup-social">
          <i class="fa fa-brands fa-facebook"></i>
          <span class="signup-social-text">Register with Facebook</span></button
        ><br />
        <button class="signup-social">
          <i class="fa fa-brands fa-google"></i>
          <span class="signup-social-text">Register with Google</span>
        </button>
        <div class="signup-or"><span>Or</span></div>

        <form action="register.php" class="signup-form" autocomplete="off" method="post">
          <label for="fullname" class="signup-label">Full name</label>
          <input
            type="text"
            id="fullname"
            name="user"
            class="signup-input"
            placeholder="Họ và tên"
            required
          />
          <label for="email" class="signup-label">Email</label>
          <input
            type="email"
            id="email"
            name="email"
            class="signup-input"
            placeholder="Email"
            required
          />
          <label for="password" class="signup-label">Password</label>
          <input
            type="password"
            id="passwordl"
            name="password"
            class="signup-input"
            placeholder="Mật khẩu"
            required
          />
          <label for="phone" class="signup-label">Phone</label>
          <input
            type="phone"
            id="phone"
            name="phone"
            class="signup-input"
            placeholder="Số điện thoại"
            required
          />
          <label for="address" class="signup-label">Address</label>
          <input
            type="text"
            id="Address"
            name="address"
            class="signup-input"
            placeholder="Địa chỉ"
            required
          />
          <input type="submit" id="btn" name="btn" value="Register" class="signup-submit">
          <!-- <button type="submit" value="Them" name="submit" class="signup-submit">Register</button> -->







          <?php 
          if ($_POST){
            switch($_POST['btn'])
            {
              case 'Register' :
                {
                  $user=$_POST['user'];
                  $password=$_POST['password'];
                  $email=$_POST['email'];
                  $phone=$_POST['phone'];
                  $address=$_POST['address'];

                    if(isset($user) && isset($password) && isset($email) && isset($phone) && isset($address)){
                      $hash = password_hash($password,PASSWORD_DEFAULT);
                      $sql = " INSERT INTO  user(user_id, user, password, email,phone,address) 
                      VALUES (NULL,'$user','$hash','$email','$phone','$address')";
                      $result = mysqli_query($conn,$sql);
                    }

                    if($result)
                    {
                      echo "<script> alert('Bạn đã đk thành công') </script>";
                      header('Location:../trangchu.php');
                    }else{
                              echo' tài khoảng đã có '.$sql;
                          }

                  break;
                }
            }
          //   $user=$_POST['user'];
          //   $password=$_POST['password'];
          //   $email=$_POST['email'];
          //   $phone=$_POST['phone'];
          //   $address=$_POST['address'];
          //   if(isset($user) && isset($password) && isset($email) && isset($phone) && isset($address)){
          //     $sql = " INSERT INTO  `user`(`user`, `password`, `email`,`phone`,`address`) 
          //     VALUES (NULL,'$user','$password','$email','$phone','$address')";
          //     $result = mysqli_query($conn,$sql);
          //     if($result == true){
          //       echo"<script> alter(Bạn đã đk thành công) </script>";
          //         header('Location:cuoiky.html');
          //     }else{
          //         echo' tài khoảng đã có '.$sql;
          //     }
          // }
        }
        ?>




        </form>
        <p class="signup-already">
          <span>Already have an account ?</span>
          <a href="http://localhost:81/doanwebgame/project/login/login.php"
            >Login</a
          >
        </p>



      </form>
    </div>
    
    <script src="./main.js"></script>
  </body>
</html>
