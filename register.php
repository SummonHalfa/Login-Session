<!DOCTYPE html>
<html>
<?php
session_start();
?>
<head>

  <meta charset="UTF-8">

  <title>Register</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<body style="background-color:#C8C8C8">

  <div class="login-card">
    <h1>Log-in</h1><br>
  <form method="POST">
    <input type="text" name="user" placeholder="Username">
    <input type="password" name="pass" placeholder="Password">
    <input type="password" name="cpass" placeholder="Confirm password">
    <input type="submit" name="login" class="login login-submit" value="Register">
    <?php
      $salv=false;
      if(isset($_POST['login'])){
          if(isset($_POST['user'])){
            $_SESSION['user']=$_POST['user'];
          }
          else{
            $salv=true;
            echo '<b><p style="text-align:center; color:red;">Inserisci un username</p></b>';  
          }

        if(!(empty($_POST['pass'])) and !(empty($_POST['cpass']))){
            if(strcmp($_POST['pass'],$_POST['cpass'])==0){
              $_SESSION['pass']=$_POST['pass'];  
            }
            else{
              $salv=true;
              echo '<b><p style="text-align:center; color:red;">Errore nelle password</p></b>';
            }
        }
        else{
          echo '<b><p style="text-align:center; color:red;">Errore nelle password</p></b>';
        }

        if(empty($_POST['user']) and empty($_POST['pass'])){
          echo '<b><p style="text-align:center; color:red;">Errore nel username</p></b>';
          $salv=true;
        }
        if(!($salv)){
            
            $_SESSION['registrato']=true;
            header("location:main.php");
        }
      }


      
    ?>
  </form>
</div>

</body>

</html>