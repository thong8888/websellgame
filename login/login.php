<?php ob_start(); ?>
<?php   
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="login.css" />
    <link rel="stylesheet" href="reset.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-md bg-white navbar-light">
    <div class="box">
      <form id="form-signin" class="form-signin mt-2" method="POST">
        <div class="form">
          <h1>Sign in</h1>
          <div class="inputbox">
            <input type="text" id="username" name="username" required="required" />
            <span>Username</span>
            <i></i>
          </div>
          

          <div class="inputbox">
            <input type="password" id="password" name="password" required="required" />
            <span>Password</span>
            <i></i>
          </div>
          <div class="links">
            <a href="#"
              >Forgot Password</a>
            <a href="register.php">Register</a>
          </div>
          <input type="submit" id="btn" name="btn" value="Login" />
        </div>


        <?php
      
        if($_POST)
        {
          switch($_POST['btn'])
          {
            case 'Login':
              {
                $username=$_POST['username'];
                $password=$_POST['password'];
               
                $sql = "SELECT * FROM user WHERE user = '$username'" ;
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_assoc($result);
                if($row)
                {
                  if(password_verify($password, $row['password']))
                  {
                    echo "<script> alert('dang nhap thanh cong') </script>";
                    header('Location:../trangchu.php');
                  }
                  else
                  {
                    echo "<script> alert('sai mat khau') </script>";
                  }
                }
                else
                {
                  echo "<script> alert('sai tai khoan') </script>";
                }

                break;
              }
          }
        }







        //   if (isset($_GET['DangNhap'])) {
        //     $user = $_GET['user'];                         
        //     $password = $_GET['password'];
            
        
        //     $sql = "SELECT * FROM `user` WHERE user = '$user'" ;
        //     $query = mysqli_query($conn,$sql);
        //     $data = mysqli_fetch_assoc($query);
        //     $checkName = mysqli_num_rows($query);
        //     $Passwordmd5 = md5($password);
        
        //     if ($checkName > 0 ) {                                     
        //         if ($Passwordmd5 !=  $data['password']) {
        //             echo "<p style= 'color:red; text-align:center;'>  mật khẩu không tồn tại </p>";
        //         } else {
                    
        //             header('location: logout.php');
        //         }
        //     } 
        //     else if ($user == "ad" && $password == "123456") {
        //         header('location: cuoiky.html');
        //     }
        //     else {
        //         echo "<p style= 'color:red; text-align:center;'>  tên không tồn tại </p>";
        //     }
        // }

    ?>
      </form>
      <script src="./main.js"></script>
    </div>
  </body>
</html>

