<!DOCTYPE html>
<?php
   session_start();
?>
<html>
<head>

  <meta charset="UTF-8">

  <title>Log-in</title>
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<body style="background-color:#C8C8C8">

  <div class="login-card">
    <h1>Log-in</h1><br>
  <form method="POST">
    <input type="text" name="user" placeholder="Username">
    <input type="password" name="pass" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
    <?php
    
        if(isset($_POST['login'])){
          if(isset($_SESSION['registrato'])){
            if(!(empty($_POST['user']) and empty($_POST['pass']))){
                if(strcmp($_SESSION['user'], $_POST['user'])==0 and strcmp($_SESSION['pass'], $_POST['pass'])==0){
                  echo '<b><p style="text-align:center; color:green;">Accesso Effettuato</p></b>';
                  sleep(2);
                  header("location: area.php");
                }
                else
                {
                  echo '<b><p style="text-align:center; color:red;">Credenziali non corrette</p></b>';
                }
            }
            else{
              echo '<b><p style="text-align:center; color:red;">Inserisci password ed username</p></b>';
            }
          }
          else{
            echo '<b><p style="text-align:center; color:red;">Ti devi prima registrare</p></b>';
          }
        }
        

        

    ?>
  </form>


  <div class="login-help">
    <a href="register.php">Register</a>
  </div>
</div>


</body>

</html>