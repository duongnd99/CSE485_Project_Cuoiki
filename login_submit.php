<?php
  if(isset($_POST["btn_login"]) && $_POST["txtemail"] !='' && $_POST["txtpassword"] !='')
  {
      //Kết nối tới database
      // $conn = mysqli_connect('localhost','id11184867_root','12345','id11184867_nguyentatthanh'); 000webhost
    //   $conn = mysqli_connect('localhost','root','','nguyentatthanh');
    include 'config.php';
      //Khai báo utf-8 để hiển thị được tiếng việt
      mysqli_set_charset($conn,'UTF8');
      
      //Lấy dữ liệu nhập vào

      $username  = $_POST['txtemail'];
      $password  = $_POST['txtpassword'];
     
   
      // mã hóa pasword
      $password = md5($password);

      //Kiểm tra email có tồn tại không
      $sqluser = "SELECT * FROM users WHERE username ='$username' AND password = '$password' ";
      $result = mysqli_query($conn,$sqluser);
      // $nr_user = mysqli_num_rows($query);
      
      if ($result) {
        header("Location:guest.php");  
        echo "<script type='text/javascript'>alert('Đăng nhập thành công');</script>";
          // echo  " Bạn đã đăng nhập thành công. <a href='index.php'>Vào trang chủ</a>";
          // header("Location: register.php ");
      }else{
          // $row = mysqli_fetch_assoc($query);
          echo "Đăng nhập không thành công. Vui lòng kiểm tra lại tài khoản và mật khẩu. <a href='login.php'>Trở lại</a>";
      }

     

          //   //Kiểm tra email có tồn tại không
          //   $sqluser = "SELECT * FROM users WHERE username ='$email' AND password = '$password' ";
          //   $result = mysqli_query($conn,$sqluser);
          //   // $user = mysqli_num_rows($query);

          //   // $result = mysqli_query($conn, $sqluser);
          //   // $user =  mysqli_fetch_assoc($result);
          
          //   if($result) {
        
          //         // header("Location:admin.php");  
          //         // echo "<script type='text/javascript'>alert('Đăng nhập thành công');</script>";
            

          //     header("Location:guest.php");  
          //     echo "<script type='text/javascript'>alert('Đăng nhập thành công');</script>";
          //       // echo  " Bạn đã đăng nhập thành công. <a href='index.php'>Vào trang chủ</a>";
          //       // header("Location: register.php ");
            
          //   }else{
          //       // $row = mysqli_fetch_assoc($query);
          //       echo "Đăng nhập không thành công. Vui lòng kiểm tra lại tài khoản và mật khẩu. <a href='login.php'>Trở lại</a>";
          //   }

          //   // $sql = "SELECT * FROM users WHERE username = 'admin' ";
          //   // $result1 = mysqli_query($conn,$sql);
          //   // if($result1>0){
          //   //      header("Location:admin.php");  
          //   //       echo "<script type='text/javascript'>alert('Đăng nhập thành công');</script>";
          //   // }
    
           }
        
  
  // }else{
    
  //     header("Location: login.php");
    
  // }
?>