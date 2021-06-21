<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Giriş</title>
        <link rel="stylesheet" href= "../css/login.css">
        
       
    </head>
    <body >
        

      
        <div class="loginDev">

       <div class="opacity">  </div>


        <div class="form">
            <form action="Anasayfa.php" method="POST" class="form-container" >
    <div class="adi">
       
            <input type="text" placeholder="Adiniz..." name="adi">
    </div>
            
            <br>
            <br>
             <div class="soyadi">
                
                <input type="text" placeholder="Soyadiniz..." name="soyadi">

             </div>
                
            <br>
            <br>
            <div class="email">
                
            <input type="email" placeholder="Email adresiniz..." name="email" >
            </div>
            
             <br>
             <br>
             <div class="sifre">
                
               <input type="password" placeholder="Şifrenizi..." name="şifre">
             </div>
           
             <br>
             <br>
       <div class="giris"><button name="giriş">Giriş</button></div>
           
        </form>

       </div>

        
                
        </div>

            
    </body>
</html>
<?php
require_once "connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $user_name = $_POST['adi'];
    $userlastname = $_POST['soyadi'];
    $email= $_POST['email'];
    $userpassword = $_POST['şifre'];

  $userpassword = password_hash($userpassword, PASSWORD_DEFAULT);

    if(isset($_POST["giriş"])){
        $sql = "INSERT INTO kullanci(user_name,userlastname,email,userpassword) Values('$username','$userlastname','$email','$userpassword')";
        
        if($conn -> query($sql) === TRUE){
          echo "Bilgiler başarıyla eklendi";
        }
        else{
            echo"maalesef sikildin".$sql."".$conn ->error;
        }
    }
      }
    
?>