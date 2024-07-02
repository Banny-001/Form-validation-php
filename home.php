
<DOCTYPE html>
<html>
    <head></head>
    <body>
        
       <?php
        $username_error=" ";
        $email_error=" ";
        $password_error=" ";
      
        if($_SERVER["REQUEST_METHOD"]=="POST"){
         

        $username=$_POST["username"];
        $email=$_POST["email"];
        $password=$_POST["password"];


        function format_text($text){
            $text=htmlspecialchars($text);
            $text=stripslashes($text);
            $text=trim($text);

            return $text;
        }

        if (empty($username)){
        $username_error="user name is required";
        }
        else{
        echo"username is ".format_text($username)."<br>";
        }
        if(empty($email)){
        $email_error="email is required";
        }
        else{
            echo"email is".format_text($email)."<br>";
        }
        if(empty($password)){
        $password_error="password is reguired";
        }
        else{
            echo"password is". format_text($password)."<br>";
        }
    
       }
       ?>

        <form  method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>" >
            <input type="text" name="username" placeholder=" username">
            <span class="error"><?php echo $username_error?></span>
            <input type="text" name="email" placeholder="email">
            <span class="error"><?php echo $email_error?></span>

            <input type="password" name="password" placeholder=" password">
            <span class="error"><?php echo $password_error?></span>

            <input type="submit" >

        </form>
    </body>
</html>
<style>
  form{
    width:30%;
    display:flex;
    flex-direction:column;
  }
  input{
    margin-top:5%;
  }
  .error{
    color:red;
  }

</style>

