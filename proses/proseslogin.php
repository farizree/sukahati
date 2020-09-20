<?php
   include 'connect.php';
   session_start();
   
   $email_web = $_POST['email_web'];
   $password_web = $_POST['password_web'];

   if(empty($email_web))
   {
      die("'<script>alert('Masukkan Email'); window.location = 'login.php'</script>'");
   }
   else if(empty($password_web))
   {
      die("'<script>alert('Masukkan Password'); window.location = 'login.php'</script>'");
   }
   else
   {
      $sql = "select * from tbl_login where email_web = '".$email_web."'";
      $result = mysqli_query($con,$sql);
      $hasil = mysqli_num_rows($result);
      $row = mysqli_fetch_assoc($result);

      if ($hasil != 0) 
      {
        
         $usr = $row['email_web'];
         $pass = $row['password_web'];
         $nama = $row['nama_web'];
         $jabatan = $row['jabatan'];

         $query = mysqli_query($con,"select * from tbl_login where email_web = '".$usr."'");
         $row1 = mysqli_fetch_assoc($query);

        
         $_SESSION['email_web'] = $usr;
         $_SESSION['jabatan'] = $jabatan;
         $_SESSION['email_web'] = $row1['email_web'];
         
         if(($usr == $email_web) && ($pass == $password_web))
         {
            $_SESSION['logged'] = true;
            $action = "Login ke Sistem Berhasil";

            
            
            if ($row['jabatan']=="admin")
            {
               die("'<script>alert('Status Login Berhasil'); window.location = '../admin/adminwelcome.php'</script>'");
            }
            if ($row['jabatan']=="user")
            {
               die("'<script>alert('Status Login Berhasil. selamat datang :3'); window.location = '../indexuser.php'</script>'");
            }
            
         }
         else
         {
            $action = "Login ke Sistem Gagal";
            
            die("'<script>alert('Username dan Password Salah'); window.location = '../login.php'</script>'");
         }
      }
      else
      {
         die("'<script>alert('Username dan Password Salah'); window.location = '../login.php'</script>'");
      }
   }
?>
